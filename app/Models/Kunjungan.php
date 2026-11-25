<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = "tb_kunjungan";

    protected $primaryKey = "id_kunjungan";

    public $timestamps = false;

    protected $fillable = [
        'nama_pasien',
        'no_telpon',
        'keluhan',
        'tanggal_kunjungan',
        'status'
    ];
}
