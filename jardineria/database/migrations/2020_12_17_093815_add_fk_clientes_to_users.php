<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkClientesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cofusers', function (Blueprint $table) {
            $table->foreign('id')
            ->references('userid')->on('cofclientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id')
            ->references('id')->on('cofusers')
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
        Schema::table('cofusers', function (Blueprint $table) {
            $table->dropColumn('id');     
        });
    }
}