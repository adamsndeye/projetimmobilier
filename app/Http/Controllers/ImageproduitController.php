<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

use App\Imageproduit;
use Illuminate\Support\Facades\Storage;
use Auth;

class ImageproduitController extends Controller
{
  

	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        $imageproduits = Imageproduit::orderBy('id','DESC')->paginate(5);
        

        return view('imageproduits.index')
            ->with('imageproduits', $imageproduits);
    }
    /**
     * Show the form for creating a new Produit.
     *
     * @return Response
     */
    public function create()
    {
         $produits= Produit::get();
        return view('imageproduits.create',compact('produits'));
    }

    public function store(Request $request){


   
    	$id=Auth::user()->id;
        $input = $request->all();

         $input['ajouter_par']=$id;
          $photo=$request->file('image');
       
    $imageproduit= Imageproduit::create($input);
        if ($request->file('image')) {
                   $path = Storage::disk('public')->put('images',$request->file('image'));
                    $imageproduit->fill(['image' => asset($path)])->save();
               }
    
        return redirect()->route('imageproduits.index');
}

 public function edit($id) {
         $imageproduit = Imageproduit::findOrFail($id); 
        
        return view('imageproduits.edit', compact(' imageproduit')); 

    }

  public function update($id, Request $request){

         $imageproduit = Imageproduit::find($id);
        $id=Auth::user()->id;
      
 		 $imageproduit->ajouter_par = $id;
 		 $imageproduit->produit_id = $request->produit_id;
 		

         $photo=$request->file('image');
        

       $imageproduit->save();
		if ($request->file('image')) {
                   $path = Storage::disk('public')->put('images',$request->file('image'));
                   $produit->fill(['image' => asset($path)])->save();
               }
       

        return redirect(route('imageproduits.index'));
    }

	public function show($id) {
       $imageproduit = Imageproduit::findOrFail($id); 
        
        return view('produits.show', compact('produit')); 

    }

    public function destroy($id,Request $request)
    {
    $imageproduit = Imageproduit::findOrFail($id);
       $imageproduit->delete();

        return redirect()->route('imageproduits.index');
    }


}
