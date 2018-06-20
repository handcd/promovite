<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->string('categoria');
            $table->string('subcategoria');
            $table->string('descripcion')->nullable();
            $table->double('precio_distribuidor');
            $table->double('precio_publico');
            $table->double('largo')->nullable();
            $table->double('ancho')->nullable();
            $table->double('alto')->nullable();
            $table->double('peso')->nullable();
            $table->string('estatus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
