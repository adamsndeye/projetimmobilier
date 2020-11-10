<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdresseToProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->string('adresse')->nullable();
            $table->integer('prix')->nullable();
            $table->integer('piece')->nullable();
            $table->double('superficie')->nullable();
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produits', function (Blueprint $table) {
              $table->dropColumn('adresse');
                $table->dropColumn('prix');
                  $table->dropColumn('piece');
                    $table->dropColumn('superficie');
        });
    }
}
