<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableArticulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_carrito')->unsigned();
            $table->foreign('id_carrito')->references('id')->on('carrito')->onDelete('cascade'):
            $table->integer('id_detalle_articulo')->unsigned();
            $table->foreign('id_detalle_articulo')->references('id')->on('detalleArticulo')->onDelete('cascade');
            $table->integer('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id')->on('departamento')->onDelete('cascade');
            $table->string('titulo_articulo');
            $table->double('precio', 15, 2);
            $table->double('descuento',15,2);
            $table->bigInteger('existencias');
            $table->string('imagen');
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
        Schema::dropIfExists('articulo');
    }
}
