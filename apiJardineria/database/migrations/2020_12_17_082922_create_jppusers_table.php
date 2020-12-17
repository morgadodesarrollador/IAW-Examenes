<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJppusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jppusers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('role', 20)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('surname', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('passwd', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jppusers');
    }
}
