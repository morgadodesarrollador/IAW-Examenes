<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jppproductos extends Model
{
    use HasFactory;
    protected $table = 'jppproductos';
    protected $primarykey = 'CodigoProdcuto';
    protected $fillable = ['CodigoProducto','Nombre','Gama','Proveedor','Descripcion','CantidadEnStock','PrecioVenta','PrecioProveedor','imagen'];
    public $timestamps = false;

}
