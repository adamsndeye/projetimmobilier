<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partenaire;
use App\Quisommenous;

use Illuminate\Support\Facades\Storage;
use Auth;

class QuisommenousController extends Controller
{




 
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        $quisommenouss = Quisommenous::orderBy('id','DESC')->paginate(5);

        return view('propos.index')
            ->with('quisommenouss', $quisommenouss);
    }
    /**
     * Show the form for creating a new Produit.
     *
     * @return Response
     */
    public function create()
    {
       
        
        return view('propos.create');
    }

    public function store(Request $request){


   
    	$id=Auth::user()->id;
        $input = $request->all();

         $input['ajouter_par']=$id;
          $photo=$request->file('image');
        $quisommenous =Quisommenous::create($input);
        if ($request->file('image')) {
                   $path = Storage::disk('public')->put('images',$request->file('image'));
                   $quisommenous->fill(['image' => asset($path)])->save();
               }
    
        return redirect()->route('propos.index');
}
 public function edit($id) {
        $quisommenous = Quisommenous::findOrFail($id); 
       

        return view('propos.edit', compact('quisommenous')); 

    }
  public function update($id, Request $request){
$quisommenous = Quisommenous::find($id);
        
        $quisommenous->nom = $request->nom;
 		
         $photo=$request->file('image');
        

         $quisommenous->save();
		if ($request->file('image')) {
                   $path = Storage::disk('public')->put('images',$request->file('image'));
                    $quisommenous->fill(['image' => asset($path)])->save();
               }
       

        return redirect(route('propos.index'));
    }

	public function show($id) {
       $quisommenous= Quisommenous::findOrFail($id); 
        

        return view('propos.show', compact('quisommenous')); 

    }
    public function destroy($id,Request $request)
    {
     $quisommenous = Quisommenous::findOrFail($id);
        $quisommenous->delete();

        return redirect()->route('propos.index');
    }




}
