<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class KategoriPengunjung extends Model
{
    use Eloquence;
    protected $table = 'kategori_pengunjung';
    protected $fillable = [
        'nama',
        'tarif_individu',
        'enable_rombongan',
        'tarif_rombongan',
        'prefix_code',
        'order'
    ];

    protected $searchableColumns = [
        'nama',
        'tarif_individu',
        'enable_rombongan',
        'tarif_rombongan',
        'prefix_code',
        'order'
    ];

    public function kunjungan()
    {
        
    }
}
