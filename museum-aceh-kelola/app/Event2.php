<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Event2 extends Model
{
    use Eloquence;
    protected $table = 'event2';
    protected $fillable = [
        'nama_kegiatan',
        'jenis',
        'tanggal_mulai',
        'tanggal_selesai',
        'penyelenggara',
        'description',
    ];

    protected $searchableColumns = [
        'nama_kegiatan',
        'jenis',
        'tanggal_mulai',
        'tanggal_selesai',
        'penyelenggara',
        'description',
    ];

    
}
