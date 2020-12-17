<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dspCliente extends Model
{
    use HasFactory;
    protected $table = 'dspclientes';
    protected $primarykey = 'codigo';
    protected $fillable = ['codigo','nombre','telefono','direccion','ciudad','pais','codigopostal',
    'limitecredito','userid','created_at','updated_at'];
    public $timestamps = true;
}
