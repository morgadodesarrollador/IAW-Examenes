<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJrcproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jrcproductos', function (Blueprint $table) {
            $table->smallInteger('CodigoProducto',15)->unsigned();
		    $table->string('Nombre',70);
		    $table->string('Gama');
		    $table->string('Proveedor',50)->nullable();
		    $table->longText('Descripcion');
		    $table->smallInteger('CantidadEnStock');
		    $table->decimal('PrecioVenta',15,2);
		    $table->decimal('PrecioProveedor',15,2)->nullable();
		    $table->string('imagen',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jrcproductos');
    }
}
