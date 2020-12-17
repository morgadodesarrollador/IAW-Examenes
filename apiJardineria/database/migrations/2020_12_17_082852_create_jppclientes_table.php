<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJppclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jppclientes', function (Blueprint $table) {
            $table->integer('Codigo')->primary();
            $table->string('Nombre', 50);
            $table->string('Telefono', 15);
            $table->decimal('LimiteCredito', 15, 2)->nullable();
            $table->integer('userid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jppclientes');
    }
}
