<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJmausersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jmausers', function (Blueprint $table) {
        $table->integer('id',11);
		$table->string('role',20)->nullable()->default('NULL');
		$table->string('name')->nullable()->default('NULL');
		$table->string('surname')->nullable()->default('NULL');
		$table->string('email')->nullable()->default('NULL');
		$table->string('passwd')->nullable()->default('NULL');
		$table->string('image')->nullable()->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jmausers');
    }
}
