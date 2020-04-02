<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionEtnografika extends Model
{
    protected $table = 'collection_etnografika';
    protected $fillable = [
        'bahan_material',
        'motif_corak',
        'warna',
        'bahan_pewarna',
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
