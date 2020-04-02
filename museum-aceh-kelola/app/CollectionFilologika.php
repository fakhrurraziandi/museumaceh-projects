<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionFilologika extends Model
{
    protected $table = 'collection_filologika';
    protected $fillable = [

        'sub_judul',
        'pengarang',
        'penyalin',
        'tempat_penulisan',
        'tahun_penulisan',
        'tahun_penyalinan',
        'bahasa_dan_aksara',
        'bentuk_teks',
        'jenis_tulisan',
        'bahan_alas_naskah',
        'bahan_sampul',
        'jenis_penjilidan',
        'jumlah_halaman',
        'jumlah_baris_halaman',
        'illustrasi',
        'jenis_tinta',
        'warna_tinta',
        'watermark',
    ];

    public function collection()
    {
        return $this->morphOne(Collection::class, 'collectionable');
    }
}
