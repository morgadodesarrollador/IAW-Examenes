<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jppgamasproductos extends Model
{
    use HasFactory;
    protected $table = 'jppgamasproductos';
    protected $primarykey = 'Gama';
    protected $fillable = ['Gama','Descripcion','Imagen'];
    public $timestamps = false;

    public function jppproductos(){
        return $this->hasMany(jppproductos::class,'Gama', 'Gama');
    }
}
