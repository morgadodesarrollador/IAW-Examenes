<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemgProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->varchar('codigoproducto')->primary();
            $table->varchar('nombre',100)->default('');
            $table->varchar('gama',100)->default('');
            $table->varchar('proveedor',100)->default('');
            $table->varchar('descripcion',100)->default('');
            $table->decimal('precioventa',15,2)->default('');
            $table->decimal('precioproveedor',15,2)->default('');
            $table->varchar('imagen',100)->default('');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
