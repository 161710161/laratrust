<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table = 'kategori_galeris';
    protected $fillable = ['nama_galeri'];
    public $timestamps = true;

    public function Galeri()
    {
    	return $this->hasMany('App\Galeri','ketegorigaleri_id');
    }
}
