<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $fillable = ['id_lansia','id_pendamping','id_kader','tinggi_badan','berat_badan','umur','tekanan_darah','tekanan_darah1','olahraga','keluhan'];
    public $timestamps = false;
}
