<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadre extends Model
{
    protected $fillable = ['nama','ttl','jenis_kelamin','umur','alamat','no_telp'];
    public $timestamps = false;
}
