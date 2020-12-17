<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jmaproductos extends Model
{
    use HasFactory;
    protected $table = 'jmaproductos';
    protected $primarykey = 'CodigoProducto';
    protected $fillable = [
        'CodigoProducto','Nombre','Gama','Proveedor','Descripcion','CantidadEnStock','PrecioVenta','PrecioProveedor','imagen'
    ];
    public $timestamps = false;
}
