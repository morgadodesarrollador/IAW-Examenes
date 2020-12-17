<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkProductosFkGamasproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jppproductos', function (Blueprint $table) {
            $table->foreign('Gama')
                ->references('Gama')->on('jppgamasproductos')
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
        Schema::table('jppproductos', function (Blueprint $table) {
            $table->dropForeign('jppprodcutos_Gama_foreign');
        });
    }
}
