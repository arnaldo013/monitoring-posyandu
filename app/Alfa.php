<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alfa extends Model
{
    protected $table = 'alfa';
    protected $fillable = ['muda','paruhbaya','tua','lansia','imtkurus','imtnormal','imtgemuk','imtobesitas','darahrendah','darahnormal','darahtinggi','jarang','sering'];
    public $timestamps = false;
}
