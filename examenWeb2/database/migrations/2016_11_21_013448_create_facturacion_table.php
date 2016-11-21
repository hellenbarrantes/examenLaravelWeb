<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('facturacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned();
            $table->string('fecha');
            $table->double('montoTotal');
            $table->double('subtotal');;
            $table->double('impuesto');
            $table->integer('idProducto')->unsigned();
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
       Schema::drop('facturacion');
    }
}
