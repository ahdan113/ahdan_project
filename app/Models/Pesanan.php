<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    
    public $fillable = ['id_tas','id_pemesan','tanggal','status'];
    public $timestamps = true;

    
public function tas()
{
    //has many berlaku untuk banyak jadi 
    //satu tas bisa banyak merek
    return $this->hasMany(Tas::class, 'id_tas');
}

public function pemesan()
{
    //has many berlaku untuk banyak jadi 
    //satu tas bisa banyak merek
    return $this->hasMany(Pemesan::class, 'id_pemesan');
}
}
