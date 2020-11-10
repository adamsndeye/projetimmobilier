<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imageproduit extends Model
{
     protected $fillable = [
      'image','ajouter_par','produit_id'
    ];


    public function produit(){

    	return $this->belongsTo('App\Produit');
    }
}
