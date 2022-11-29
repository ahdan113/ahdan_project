<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesan extends Model
{
    use HasFactory;
    public $fillable = ['nama','id_user','alamat','no_hp'];
    public $timestamps = true;

    
public function user()
{
    //has many berlaku untuk banyak jadi 
    //satu tas bisa banyak merek
    return $this->hasMany(Users::class, 'id_user');
}
public function pesanan()
{
    //has many berlaku untuk banyak jadi 
    //satu tas bisa banyak merek
    return $this->belongsTo(Pesanan::class, 'id_pemesan');
}
}
