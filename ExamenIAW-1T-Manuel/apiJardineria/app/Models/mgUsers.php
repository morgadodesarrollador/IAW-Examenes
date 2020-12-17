<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mgUsers extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = ['id','role','name','surname','email','passwd','image','created_at','updated_at'];

    public function users() {
        return $this->BelongsTo(clientes::class,'id', 'codigo');
    }
}
