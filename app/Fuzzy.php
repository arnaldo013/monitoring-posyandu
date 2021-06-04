<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuzzy extends Model
{
    protected $table = 'fuzzies';
    protected $fillable = ['umur','imt','olahraga','tekanan_darah'];
    public $timestamps = false;
}
