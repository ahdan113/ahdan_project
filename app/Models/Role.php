<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $fillable = ['role'];
    public $timestamps = true;

    
public function tas()
{
    //has many berlaku untuk banyak jadi 
    //satu tas bisa banyak merek
    return $this->hasMany(Users::class, 'id_user');
}
}
