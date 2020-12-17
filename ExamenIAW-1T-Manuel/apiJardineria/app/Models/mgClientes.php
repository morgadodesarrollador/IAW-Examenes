<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mgClientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primarykey = 'codigo';
    protected $fillable = ['codigo','nombre','telefono','direccion','ciudad','pais','codigopostal','limitecredito','userid','created_at','updated_at'];

    public function clientes() {
        return $this->belongsTo(users::class,'codigo', 'id');
    }
}
