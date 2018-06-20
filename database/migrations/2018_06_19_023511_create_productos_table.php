<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->string('categoria');
            $table->string('subcategoria');
            $table->string('descripcion');
            $table->double('precio_distribuidor');
            $table->double('precio_publico');
            $table->double('largo');
            $table->double('ancho');
            $table->double('alto');
            $table->double('peso');
            $table->string('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
