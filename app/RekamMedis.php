<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rm';
    protected $fillable = [
        'idpasien','periksa','ku','anamesis','pxfisik','lab','hasil','diagnosis','resep','jumlah','aturan','dokter','deleted'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'idpasien','id');
    }
}
