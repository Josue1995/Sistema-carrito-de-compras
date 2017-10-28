<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_inventario')->unsigned();
            $table->integer('id_rol')->unsigned();
            $table->integer('id_cuenta')->unsigned();
            $table->string('nombre_empresa');
            $table->timestamps();
            $table->foreign('id_inventario')->references('id')->on('inventario')->onDelete('cascade');
            $table->foreign('id_rol')->references->('id')->on('rol')->onDelete('cascade');
            $table->foreign('id_cuenta')->references('id')->on('cuenta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
