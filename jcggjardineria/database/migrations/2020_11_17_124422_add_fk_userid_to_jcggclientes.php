<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkUseridToJcggclientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jcggclientes', function (Blueprint $table) {
            $table->foreign('Codigo')
                ->references('userid')->on('jcggusuarios')
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
        Schema::table('jcggclientes', function (Blueprint $table) {
            $table->dropForeign('Codigo');
        });
    }
}

