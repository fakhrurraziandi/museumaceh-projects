<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionTeknologika extends Model
{
    protected $table = 'collection_teknologika';
    protected $fillable = [
        'bahan_material',
        'motif_corak_ukiran',
        'warna',
        'teknik_pembuatan',
        'tahun_pembuatan',
        'tempat_pembuatan',
        'merk',
    ];

    public function collection()
    {
        return $this->morphOne(Collection::class, 'collectionable');
    }
}
