<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class PegawaiNonPns extends Model
{
    use Eloquence;
    protected $table = 'pegawai_non_pns';
    protected $fillable = [
        'nama',
        'tahun_masuk',
        'penugasan',
        'pendidikan',
        'nomor_handphone',
    ];

    protected $searchableColumns = [
        'nama',
        'tahun_masuk',
        'penugasan',
        'pendidikan',
        'nomor_handphone',
    ];
}
