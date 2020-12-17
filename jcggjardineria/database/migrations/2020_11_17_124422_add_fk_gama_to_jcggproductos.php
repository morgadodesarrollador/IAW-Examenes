<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkGamaToJcggproductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jcggproductos', function (Blueprint $table) {
            $table->foreign('Gama')
                ->references('Gama')->on('jcgggamas')
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
        Schema::table('jcggproductos', function (Blueprint $table) {
            $table->dropForeign('Gama');
        });
    }
}

