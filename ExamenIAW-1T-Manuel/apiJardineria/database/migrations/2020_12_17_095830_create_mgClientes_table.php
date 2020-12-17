<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemgClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->varchar('codigo')->primary();
            $table->string('nombre',100)->default('');
            $table->string('telefono',100)->default('');
            $table->string('direccion',100)->default('');
            $table->string('ciudad',100)->default('');
            $table->string('pais',100)->default('');
            $table->string('codigopostal',100)->default('');
            $table->string('limitecredito',100)->default('');
            $table->string('userid',100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
