<?php

namespace App\Models;
use App\Models\jmagamasproductos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jmagamasproductos extends Model
{
    use HasFactory;
    protected $table = 'jmagamasproductos';
    protected $primarykey = 'Gama';
    protected $fillable = [
        'Gama','Descripcion','Imagen'
    ];
    public $timestamps = false;

    public function jmagamasproductos() {
        return $this->hasMany(jmagamasproductos::class,'gama', 'gama');
    }
}
