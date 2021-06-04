<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    protected $fillable = ['nama','alamat','no_telp'];
    public $timestamps = false;
}
