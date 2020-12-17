<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCofusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cofusers', function (Blueprint $table) {
            $table->integer('id');
            $table->string('role', 50);
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->string('email', 100);
            $table->string('passwd', 100);
            $table->string('image', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cofusers');
    }
}
