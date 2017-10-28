<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableSubClasificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subClasificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_inventario')->unsigned();
            $table->integer('id_departamento')->unsigned();
            $table->string('nombre_sub');
            $table->timestamps();
            $table->foreign('id_inventario')->references('id')->on('inventario')->onDelete('cascade');
            $table->foreign('id_departamento')->references('id')->on('departamento')->onDelete('cascade');
        });
        Schema::create('articulo_subClasificacion', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_articulo')->unsigned();
            $table->integer('id_subClasificacion')->unsigned();
            $table->foreign('id_articulo')->references('id')->on('articulo');
            $table->foreign('id_subClasificacion')->references('id')->on('subClasificacion');
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
        Schema::dropIfExists('subClasificacion');
    }
}
