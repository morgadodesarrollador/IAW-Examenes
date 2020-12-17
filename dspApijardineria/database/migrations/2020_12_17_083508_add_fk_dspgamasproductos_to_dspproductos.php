<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkDspgamasproductosToDspproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dspproductos', function (Blueprint $table) {
            $table->foreign('gama')->references('gama')->on('dspgamasproductos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dspproductos', function (Blueprint $table) {
            $table->dropForeign('dspproductos_gama_foreign');
        });
    }
}
