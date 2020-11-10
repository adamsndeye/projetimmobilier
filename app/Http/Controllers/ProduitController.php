<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Produit;
use App\Categorie;
use Auth;
use DB;

class ProduitController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        $produits = Produit::orderBy('id','DESC')->get();

        return view('produits.index')
            ->with('produits', $produits);
    }
    /**
     * Show the form for creating a new Produit.
     *
     * @return Response
     */
    public function create()
    {
        $categories= Categorie::get();
        
        return view('produits.create',compact('categories'));
    }

    public function store(Request $request){


   
    	$id=Auth::user()->id;
        $input = $request->all();

         $input['ajouter_par']=$id;
          $photo=$request->file('image');
        $produit = Produit::create($input);
        if ($request->file('image')) {
                   $path = Storage::disk('public')->put('images',$request->file('image'));
                   $produit->fill(['image' => asset($path)])->save();
               }
    
        return redirect()->route('produits.index');
}
 public function edit($id) {
        $produit = Produit::findOrFail($id); 
        $categories = Categorie::get(); 

        return view('produits.edit', compact('produit', 'categories')); 

    }
  public function update($id, Request $request){

        $produit = Produit::find($id);
        $id=Auth::user()->id;
        $produit->nom = $request->nom;
 		$produit->description = $request->description;
 		$produit->ajouter_par = $id;
 		$produit->categorie_id = $request->categorie_id;
 		$produit->adresse = $request->adresse;
 		$produit->piece= $request->piece;
 		$produit->prix = $request->prix;
 		$produit->superficie = $request->superficie;

         $photo=$request->file('image');
        

        $produit->save();
		if ($request->file('image')) {
                   $path = Storage::disk('public')->put('images',$request->file('image'));
                   $produit->fill(['image' => asset($path)])->save();
               }
       

        return redirect(route('produits.index'));
             }


     public function updateproduit(Request $request){
        
     $input= $request->all();
     
         $idproduit = $request->affichID;
            dd($idproduit);   
             DB::table('produits')
              ->where('id', $idproduit)
              ->update($input,['produitmois' => 1]);    
         return view('produits.show', compact('produit')); 
        }


	public function show($id) {
        $produit = Produit::findOrFail($id); 
        
$imageproduits= DB::table('imageproduits')->where('produit_id','=',$id)->get();


        return view('produits.show', compact('produit','imageproduits')); 

    }
    public function destroy($id,Request $request)
    {
     $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('produits.index');
    }
}
