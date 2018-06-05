<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskuls';
    protected $fillable = ['nama_eskul','ket_eskul'];
    public $timestamps = true;
}
