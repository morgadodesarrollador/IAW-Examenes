<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->string('codigoproducto',15);
            $table->string('nombre',70);
            $table->string('gama',50);
            $table->string('proveedor',50);
            $table->text('descripcion');
            $table->smallinteger('cantidadenstock',6);
            $table->double('precioventa',15,2);
            $table->double('precioprovendedor',15,2);
            $table->string('imagen',70);
            $table->timestamps();
        });

    //    Schema::table('productos', function (Blueprint $table) {
    //        $table->foreign('gama')
    //          ->references('gama')->on('gamasproductos')
    //            ->onDelete('cascade')
    //           ->onUpdate('cascade');
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
