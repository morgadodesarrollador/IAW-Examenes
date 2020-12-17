<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDspusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dspusers', function (Blueprint $table) {
            $table->integer('id',11);
		    $table->string('role',20)->nullable();
		    $table->string('name')->nullable();
		    $table->string('surname')->nullable();
		    $table->string('email')->nullable();
		    $table->string('passwd')->nullable();
		    $table->string('image')->nullable();
		    $table->datetime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dspusers');
    }
}
