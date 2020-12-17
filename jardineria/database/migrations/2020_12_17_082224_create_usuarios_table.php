<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id',11)->primary();;
            $table->string('role',20);
            $table->string('name',255);
            $table->string('surname',255);
            $table->string('email',255);
            $table->string('passwd',255);
            $table->string('image',255);
            $table->timestamps();
        });

      //  Schema::table('usuarios', function (Blueprint $table) {
        //    $table->foreign('id')
          //      ->references('userid')->on('clientes')
            //    ->onDelete('cascade')
              //   ->onUpdate('cascade');
       //  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
