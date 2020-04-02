<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionHistorika extends Model
{
    protected $table = 'collection_historika';
    protected $fillable = [
        'bahan_material',
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
