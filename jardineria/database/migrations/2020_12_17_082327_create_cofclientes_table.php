<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCofclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cofclientes', function (Blueprint $table) {
            $table->integer('Codigo');
            $table->string('Nombre', 100);
            $table->string('Telefono', 20);
            $table->string('Direccion', 100);
            $table->string('Ciudad', 50);
            $table->string('Pais', 20);
            $table->integer('CodigoPostal');
            $table->double('LimiteCredito', 8, 2);
            $table->string('userid', 100)->nullable();
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
        Schema::dropIfExists('cofclientes');
    }
}
