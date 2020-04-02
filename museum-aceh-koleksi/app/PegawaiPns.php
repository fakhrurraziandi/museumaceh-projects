<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class PegawaiPns extends Model
{
    use Eloquence;
    protected $table = 'pegawai_pns';
    protected $fillable = [
        'nama',
        'nip',
        'golongan',
        'tmt_terakhir',
        'pendidikan',
        'nomor_handphone',
    ];

    protected $searchableColumns = [
        'nama',
        'nip',
        'golongan',
        'tmt_terakhir',
        'pendidikan',
        'nomor_handphone',
    ];
}
