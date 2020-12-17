<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkJrcclientesToJrcusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::table('jrcusers', function (Blueprint $table) {
            $table->foreign('id')->references('userid')->on('jrcclientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jrcusers', function (Blueprint $table) {
            $table->dropForeign('jrcusers_id_foreign');
        });
    }
}
