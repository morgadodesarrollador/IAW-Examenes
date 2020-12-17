<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDIRProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dirproductos', function (Blueprint $table) {
            $table->string('codigoproducto',15)->primary();
            $table->string('nombre',70);
            $table->string('gama',50);
            $table->string('proveedor',60)->nullable();
            $table->text('descripcion');
            $table->string('cantidadenstock');
            $table->decimal('precioventa');
            $table->decimal('precioproveedor')->nullable();
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
        Schema::dropIfExists('dirproductos');
    }
}
