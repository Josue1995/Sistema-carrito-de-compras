<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCuenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_carrito')->unsigned();
            $table->integer('id_rol')->unsigned();
            $table->integer('id_empresa')->unsigned();
            $table->string('usuario');
            $table->string('password');
            $table->string('email');
            $table->boolean('activo');
            $table->foreign('id_carrito')->references('id')->on('carrito')->onDelete('cascade');
            $table->foreign('id_rol')->references('id')->on('rol')->onDelete('cascade');
            $table->foreign('id_empresa')->references('id')->on('empresa')->onDelete('cascade');
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
        Schema::dropIfExists('cuenta');
    }
}
