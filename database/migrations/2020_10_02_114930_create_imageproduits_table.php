<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageproduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageproduits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->biginteger('ajouter_par');
            $table->biginteger('produit_id')->unsigned();
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imageproduits');
    }
}
