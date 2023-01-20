<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tas extends Model
{
    use HasFactory;
    public $fillable = ['foto','id_merek','warna','deskripsi','harga','link'];
    public $timestamps = true;

    
public function merek()
{
    // data model Merrek dimiliki oleh Model tas
    // melalui fk id_merek
    return $this->belongsTo(Merek::class, 'id_merek');
}


public function image()
{
    if ($this->foto && file_exists(public_path('images/tas/'
        . $this->foto))) {
        return asset('images/tas/' . $this->foto);
    } else {
        return asset('images/no_image.jpg');
    }
}
// mengahupus image(foto) di storage(penyimpanan) public
public function deleteImage()
{
    if ($this->foto && file_exists(public_path('images/tas/'
        . $this->foto))) {
        return unlink(public_path('images/tas/' . $this->foto));
    }
}
}