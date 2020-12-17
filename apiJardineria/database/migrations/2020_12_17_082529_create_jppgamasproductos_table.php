<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJppgamasproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jppgamasproductos', function (Blueprint $table) {
            $table->string('Gama', 50)->primary();
            $table->text('Descripcion')->nullable();
            $table->string('Imagen', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jppgamasproductos');
    }
}
