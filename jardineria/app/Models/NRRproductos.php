<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NRRproductos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primarykey = 'codigoporducto';
    protected $fillable = ['codigoproducto','nombre','gama','proveedor',
'descripcion','cantidadenstock','precioventa','precioprovendedor','imagen','created_at','updated_at'];

}
