<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJcggclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jcggclientes', function (Blueprint $table) {
            $table->smallInteger('Codigo')->primary();
            $table->string('Nombre',25);
            $table->string('Telefono',25);
            $table->string('Direccion',40);
            $table->string('Ciudad',40);
            $table->string('Pais',40);
            $table->string('CodigoPostal',40);
            $table->double('LimiteCredito', 5, 2);
            $table->smallInteger('userid');
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
        Schema::dropIfExists('jcggclientes');
    }
}
