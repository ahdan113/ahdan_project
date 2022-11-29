<?php

namespace App\Models;
use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    public $fillable = ['nama'];
    public $timestamps = true;

    
public function tas()
{
    //has many berlaku untuk banyak jadi 
    //satu tas bisa banyak merek
    return $this->hasMany(Tas::class, 'id_merek');
}

}