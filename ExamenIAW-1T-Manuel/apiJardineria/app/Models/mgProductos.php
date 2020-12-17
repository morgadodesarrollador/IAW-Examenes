<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mgProductos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primarykey = 'gama';
    protected $fillable = ['codigoproducto','nombre','gama','proveedor','precioventa','precioproveedor','gama','imagen','created_at','updated_at'];

    public function productos() {
        return $this->hasMany(gama::class,'gama', 'gama');
    }
}
