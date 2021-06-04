<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variabel extends Model
{
    protected $table = 'variabel';
    protected $fillable = ['id_variabel','nama_variabel','sifat'];
    public $timestamps = false;
}
