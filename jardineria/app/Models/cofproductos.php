<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cofproductos extends Model
{
    use HasFactory;
    protected $table = 'cofproductos';
    protected $primarykey = 'CodigoProducto';
    protected $fillable = [
        'CodigoProducto',
        'Nombre',
        'Gama',
        'Proveedor',
        'Descripcion',
        'CantidadEnStock',
        'PrecioVenta',
        'PrecioProveedor',
        'imagen',
        'created_at',
        'updated_at'];

}
