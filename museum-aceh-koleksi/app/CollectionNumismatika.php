<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionNumismatika extends Model
{
    protected $table = 'collection_numismatika';
    protected $fillable = [
        'bahan_material',
        'inskripsi',
        'motif_corak_ukiran',
        'warna',
        'teknik_pembuatan',
        'tahun_pembuatan',
        'tempat_pembuatan',
        'watermark',
    ];

    public function collection()
    {
        return $this->morphOne(Collection::class, 'collectionable');
    }
}
