<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJppproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jppproductos', function (Blueprint $table) {
            $table->string('CodigoProducto', 15)->primary();
            $table->string('Nombre', 70);
            $table->string('Gama', 50);
            $table->string('Proveedor', 50)->nullable();
            $table->text('Descripcion')->nullable();
            $table->smallInteger('CantidadEnStock');
            $table->string('imagen', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jppproductos');
    }
}
