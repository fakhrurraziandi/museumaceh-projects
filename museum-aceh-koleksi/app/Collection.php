<?php

namespace App;

use App\ImageArchive;
use App\DigitalCollection;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use Eloquence;
    protected $table = 'collections';
    public $appends = ['kategori'];

    public function getKategoriAttribute()
    {
        return \ucwords(\str_replace('collection_', '', \camelcase_to_underscore(\str_replace("App\\", "", $this->collectionable_type))));
    }

    protected $fillable = [
        'nama',
        'nomor_inventaris',
        'tanggal_inventaris',
        'tanggal_pengadaan',
        'kondisi',
        'ukuran_berat',
        'ukuran_panjang',
        'ukuran_lebar',
        'ukuran_tinggi',
        'cara_perolehan',
        'tempat_perolehan',
        'lokasi_penempatan',
        'keterangan_penempatan',
        'nama_pencatat',
        'asal_usul',
        'kode_aset',
        'deskripsi_singkat',
        'collectionable_type',
        'collectionable_id',
        'saved',
        'published',
    ];
    

    protected $searchableColumns = [
        'nama',
        'tanggal_inventaris',
        'tanggal_pengadaan',
        'kondisi',
        'ukuran_berat',
        'ukuran_panjang',
        'ukuran_lebar',
        'ukuran_tinggi',
        'cara_perolehan',
        'tempat_perolehan',
        'lokasi_penempatan',
        'keterangan_penempatan',
        'nama_pencatat',
        'asal_usul',
        'kode_aset',
        'deskripsi_singkat',
        'collectionable_type',
        'collectionable_id',
        'saved',
        'published',
    ];

    public function collectionable()
    {
        return $this->morphTo();
    }

    public function digital_collections()
    {
        return $this->hasMany(DigitalCollection::class, 'collection_id', 'id');
    }

    public function image_archives()
    {
        return $this->hasMany(ImageArchive::class, 'collection_id', 'id');
    }
}
