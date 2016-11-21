<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
             $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('nacimiento');
             $table->string('direccion');
             $table->string('estadoCivil');
             $table->string('genero');
             $table->string('fechaIngreso');
             $table->string('tipo');
             $table->integer('descuento');
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
         Schema::drop('clientes');
    }
}
