<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJrcclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jrcclientes', function (Blueprint $table) {
            $table->smallInteger('Codigo')->unsigned();
		    $table->string('Nombre',50);
		    $table->string('Telefono',15);
		    $table->string('Direccion',50);
		    $table->string('Ciudad',50);
		    $table->string('Pais',50)->nullable()->default('NULL');
		    $table->string('CodigoPostal',10)->nullable()->default('NULL');
		    $table->decimal('LimiteCredito',15,2)->nullable();
		    $table->smallInteger('userid',11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jrcclientes');
    }
}
