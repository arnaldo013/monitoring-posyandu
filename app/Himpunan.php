<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Himpunan extends Model
{
    protected $table = 'himpunan';
    protected $fillable = ['id_variabel','nama_himpunan','a','b','c','d','fungsi_keanggotaan'];
    public $timestamps = false;
}
