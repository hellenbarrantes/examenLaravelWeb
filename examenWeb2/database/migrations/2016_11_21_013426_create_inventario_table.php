<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProducto');
            $table->double('cantidad');
             $table->double('cantidadMinima');
            $table->double('cantidadMaxima');
            $table->double('gravado');
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
        Schema::drop('inventarios');
    }
}
