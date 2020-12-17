<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJmaclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jmaclientes', function (Blueprint $table) {
            $table->integer('codigo',11);
            $table->string('nombre',50);
            $table->string('telefono',15);
            $table->string('direccion',50);
            $table->string('ciudad',50);
            $table->string('pais',50)->nullable();
            $table->string('codigoPostal',10)->nullable();
            $table->decimal('LimiteCredito',15,2)->nullable();
            $table->integer('userid')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jmaclientes');
    }
}
