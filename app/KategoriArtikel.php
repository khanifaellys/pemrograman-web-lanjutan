<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    //
    protected $table='kategori_artikel';

    protected $fillable=[
        'nama','users_id'
    ];

    public function artikels(){
        return $this->hasMany('Artikel::class','kategori_artikel_','id');
    }

    public function user (){
        return $this->belongTo('User::class','users_id','id');
    }
}
