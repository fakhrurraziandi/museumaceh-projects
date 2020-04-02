<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionKeramonologika extends Model
{
    protected $table = 'collection_keramonologika';
    protected $fillable = [
        'bahan_material',
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
