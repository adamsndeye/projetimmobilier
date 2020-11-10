<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Imageproduit;
use App\Categorie;
use DB;

class List_produitController extends Controller
{
     public function index(){
	 $produits = Produit::orderBy('id','DESC')->paginate(6);
	
	 $categori= Categorie::where('libelle','=','construction')->first();

	 $constructions = Produit::orderBy('id','DESC')->where('categorie_id','=',$categori->id)->paginate(4);



	
	

return view('listeproduits',compact('produits','constructions'));

    }
}
