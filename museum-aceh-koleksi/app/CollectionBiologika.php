<?php

namespace App;

use App\Collection;
use Illuminate\Database\Eloquent\Model;

class CollectionBiologika extends Model
{
    protected $table = 'collection_biologika';
    protected $fillable = [
        'nama_latin',
        'kingdom',
        'phylum',
        'class',
        'order',
        'sub_order',
        'famili',
        'sub_famili',
        'genus',
        'spesies',
        'sub_species',
        'habitat',
        'endemik',
        'status',
        'warna',
        'teknik_pengawetan',
        'petugas_preparasi',
    ];

    public function collection()
    {
        return $this->morphOne(Collection::class, 'collectionable');
    }
}
