<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkJrcgamasproductosToJrcproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jrcproductos', function (Blueprint $table) {
            $table->foreign('Gama')->references('Gama')->on('jrcgamasproductos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
