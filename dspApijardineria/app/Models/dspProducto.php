<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dspProducto extends Model
{
    use HasFactory;
    protected $table = 'dspproductos';
    protected $primarykey = 'codigoproducto';
    protected $fillable = ['codigoproducto','nombre','gama','proveedor','descripcion','cantidadenstock',
    'precioventa','precioproveedor','imagen','created_at','updated_at'];
    public $timestamps = true;
}
