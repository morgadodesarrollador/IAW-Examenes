<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cofgamaproductos extends Model
{
    use HasFactory;
    protected $table = 'cofgamaproductos';
    protected $primarykey = 'Gama';
    protected $fillable = [
        'Gama',
        'Descripcion',
        'Imagen',
        'created_at',
        'updated_at'];

}
