<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJmaproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jmaproductos', function (Blueprint $table) {
        $table->string('CodigoProducto',15);
		$table->string('Nombre',70);
		$table->string('Gama',50);
		$table->string('Proveedor',50);
		$table->text('Descripcion');
		$table->smallInteger('CantidadEnStock',6);
		$table->decimal('PrecioVenta',15,2);
		$table->decimal('PrecioProveedor',15,2);
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
        Schema::dropIfExists('jmaproductos');
    }
}
