<?php

namespace App;

use App\Collection;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class CollectionGeologika extends Model
{
    use Eloquence;

    
    protected $table = 'collection_geologika';
    protected $fillable = [
        'mineral_utama',
        'mineral_sekunder',
        'senyawa_kimia',
        'jenis',
        'tekstur',
        'struktur',
        'proses_pembentukan',
        'warna',
        'karat',
    ];
    protected $searchableColumns = [
        'mineral_utama',
        'mineral_sekunder',
        'senyawa_kimia',
        'jenis',
        'tekstur',
        'struktur',
        'proses_pembentukan',
        'warna',
        'karat',
    ];

    public function collection()
    {
        return $this->morphOne(Collection::class, 'collectionable');
    }
}
