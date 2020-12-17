<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DIRProducto extends Model
{
    use HasFactory;
    protected $table = 'dirproducto';
    protected $primarykey = 'codigoproducto';
    protected $fillable = ['codigoproducto','nombre','gama','proveedor','descripcion','cantidadenstock','precioventa','precioventa','imagen'];
}
