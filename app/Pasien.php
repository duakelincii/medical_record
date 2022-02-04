<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = [
        'nama','tgl_lhr','jk','alamat','hp','pekerjaan','identitas','alergi','deleted'
    ];
}
