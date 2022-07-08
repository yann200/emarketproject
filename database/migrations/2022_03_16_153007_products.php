<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('disponibilite');
            $table->string('nom_produit');
            $table->string('categorie_produit');
             $table->float('prix_produit');
            $table->text('desc_produit');         
            $table->string('image', 2048)->nullable();
            $table->unsignedBigInteger('user_id');
       
            
        });
    
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
