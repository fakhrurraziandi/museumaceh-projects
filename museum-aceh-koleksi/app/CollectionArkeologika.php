<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionArkeologika extends Model
{
    protected $table = 'collection_arkeologika';
    protected $fillable = [
        'bahan_material',
        'inskripsi',
        'motif_corak_ukiran',
        'warna',
        'teknik_pembuatan',
        'tahun_pembuatan',
        'tempat_pembuatan',
    ];

    public function collection()
    {
        return $this->morphOne(Collection::class, 'collectionable');
    }
}
