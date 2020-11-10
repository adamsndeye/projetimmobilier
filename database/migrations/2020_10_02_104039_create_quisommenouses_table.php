<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuisommenousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quisommenouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('email');
            $table->string('telephone');
            $table->string('adresse');
            $table->text('description');
            $table->string('image');
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
        Schema::dropIfExists('quisommenouses');
    }
}
