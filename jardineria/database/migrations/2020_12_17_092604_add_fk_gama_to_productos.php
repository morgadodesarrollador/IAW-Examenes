<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkGamaToProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cofproductos', function (Blueprint $table) {
            $table->foreign('Gama')
            ->references('Gama')->on('cofgamaproductos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('Gama')
            ->references('Gama')->on('cofproductos')
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
        Schema::table('cofproductos', function (Blueprint $table) {
            $table->dropColumn('Gama');

        });
    }
}
