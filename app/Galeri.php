<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable = ['judul_galeri','ket_galeri','kategorigaleri_id'];
    public $timestamps = true;

    public function KategoriGaleri()
    {
    	return $this->belongsTo('App\KategoriGaleri','ketegorigaleri_id');
    }
}
