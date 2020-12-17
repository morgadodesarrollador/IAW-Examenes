<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jppproductos', function (Blueprint $table) {
            $table->decimal('PrecioVenta', 15, 2)->after('CantidadEnStock');
            $table->decimal('PrecioProveedor', 15, 2)->nullable()->after('PrecioVenta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('PrecioVenta');
            $table->dropColumn('PrecioProveedor');
        });
    }
}
