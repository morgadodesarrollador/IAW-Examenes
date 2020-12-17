<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkJrcgamasToJrcproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::table('jrcproductos', function (Blueprint $table) {
            $table->foreign('Gama')->references('Gama')->on('jrcgama_productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jrcproductos', function (Blueprint $table) {
            $table->dropForeign('jrcproductos_Gama_foreign');
        });
    }
}
