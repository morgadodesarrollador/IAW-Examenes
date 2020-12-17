<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jppusers extends Model
{
    use HasFactory;
    protected $table = 'jppusers';
    protected $primarykey = 'id';
    protected $fillable = ['id','role','name','surname','email','passwd','image'];

    public function jppclientes(){
        return $this->hasOne(jppclientes::class,'id', 'userid');
    }
}
