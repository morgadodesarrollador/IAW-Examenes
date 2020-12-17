<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dspGamasProducto extends Model
{
    use HasFactory;
    protected $table = 'dspgamasproductos';
    protected $primarykey = 'gama';
    protected $fillable = ['gama','descripcion','imagen','created_at','updated_at'];
    public $timestamps = true;

    public function producto() {
        return $this->hasMany(Producto::class,'gama', 'gama');
    }
}
