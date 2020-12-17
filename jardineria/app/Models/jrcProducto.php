<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jrcProducto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primarykey = 'Codigoproducto';
    protected $fillable = ['Codigoproducto','Nombre','Gama','Proveedor','Descripcion','Cantidadenstock','Precioventa','Precioproveedor','imagen','create_at','update_at'];
    public $timestamps = false;
}
