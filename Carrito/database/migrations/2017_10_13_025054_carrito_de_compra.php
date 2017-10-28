<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarritoDeCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function(Blueprint $table){
            $table -> increments('id');
            $table -> integer('id_cuenta')->unsigned();
            $table ->date('fecha_creacion');
            $table ->double('total',15,2);
            $table -> foreign('id_cuenta')->references('id')->on('cuenta')->onDelete('cascade');
            $table -> timestamps();

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito');
    }
}
