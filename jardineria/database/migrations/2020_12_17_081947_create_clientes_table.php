<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->smallInteger('codigo',11);
            $table->string('nombre',50);
            $table->string('telefono',15);
            $table->string('direccion',50);
            $table->string('ciudad',50);
            $table->string('pais',50);
            $table->string('codigopostal',10);
            $table->double('limitecredido', 15,2);
            $table->string('userid',11);
            $table->foreign('userid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
