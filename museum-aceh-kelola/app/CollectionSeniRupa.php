<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionSeniRupa extends Model
{
    protected $table = 'collection_seni_rupa';
    protected $fillable = [
        'pelukis',
        'tahun_lukisan',
        'lokasi_pembuatan',
        'gaya_lukisan',
        'bahan_alas',
        'bingkai',
        'jenis_tinta',
        'warna_lukisan',
    ];

    public function collection()
    {
        return $this->morphOne(Collection::class, 'collectionable');
    }
}
