<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemgUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->varchar('id')->primary();
            $table->string('role',100)->default('');
            $table->string('name',100)->default('');
            $table->string('surname',100)->default('');
            $table->string('email',100)->default('');
            $table->string('passwd',100)->default('');
            $table->string('image',100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
