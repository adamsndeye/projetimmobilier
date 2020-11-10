<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
     protected $fillable = [
        'nom', 'description', 'image','ajouter_par','categorie_id','adresse','prix','superficie','piece'
    ];
    
   
    
    public function categorie(){

    	return $this->belongsTo('App\Categorie');
    }

    public function imageproduits(){

    	return $this->hasMany('App\Imageproduit');
    }
}
