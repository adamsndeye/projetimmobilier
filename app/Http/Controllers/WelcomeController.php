<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Categorie;
use App\Partenaire;
use App\Quisommenous;
use App\Temoignage;
use App\Contact;

class WelcomeController extends Controller
{
  

public function index(){
	 $produits = Produit::orderBy('id','DESC')->paginate(6);
	  $partenaires = Partenaire::orderBy('id','DESC')->paginate(6);
	 $categori= Categorie::where('libelle','=','construction')->first();

	 $constructions = Produit::orderBy('id','DESC')->where('categorie_id',$categori->id)->paginate(3);

	 $categories = Categorie::orderBy('id','DESC')->paginate(6);
	 $quisommenous= Quisommenous::get();
	 $produitmois= Produit::where('produitmois',1)->first();

	 $temoignages=Temoignage::get();
return view('welcome',compact('produits','categories','constructions','partenaires','quisommenous','produitmois','temoignages'));
}


public function store(Request $request)
{

     $input= $request->all();
   
     $contact=Contact::create($input);

		return view('welcome')->with('message','Votre message a été bien envoyer');

}

}