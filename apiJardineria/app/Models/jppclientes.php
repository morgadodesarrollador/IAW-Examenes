<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jppclientes extends Model
{
    use HasFactory;
    protected $table = 'jppclientes';
    protected $primarykey = 'Codigo';
    protected $fillable = ['Codigo','Nombre','Telefono','Direccion','Ciudad','Pais','CodigoPostal','LimiteCredito','userid'];
    public $timestamps = false;

    public function jppusers(){
        return $this->hasOne(jppusers::class,'userid', 'id');
    }
}
