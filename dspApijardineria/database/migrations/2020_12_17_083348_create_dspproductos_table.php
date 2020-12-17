<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDspproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dspproductos', function (Blueprint $table) {
            $table->string('codigoproducto',15)->primary();
            $table->string('nombre',70);
            $table->string('gama',50);
            $table->string('proveedor',60)->nullable();
            $table->text('descripcion');
            $table->smallInteger('cantidadenstock');
            $table->decimal('precioventa', 15, 2);
	        $table->decimal('precioproveedor', 15,2)->nullable();
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
        Schema::dropIfExists('dspproductos');
    }
}
