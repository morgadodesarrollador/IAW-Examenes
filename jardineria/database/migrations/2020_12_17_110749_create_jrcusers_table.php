<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJrcusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jrcusers', function (Blueprint $table) {
            $table->smallInteger('id',11)->unsigned();
		    $table->string('role',20)->nullable()->default('NULL');
		    $table->string('name')->nullable()->default('NULL');
		    $table->string('surname')->nullable()->default('NULL');
		    $table->string('email')->nullable()->default('NULL');
		    $table->string('passwd')->nullable()->default('NULL');
		    $table->string('image')->nullable()->default('NULL');
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
        Schema::dropIfExists('jrcusers');
    }
}
