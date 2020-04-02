<?php

namespace App;

use App\Ticket;
use App\KategoriPengunjung;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use Eloquence;
    protected $table = 'kunjungan';
    protected $fillable = [
        'kategori_pengunjung_id',
        'rombongan',
        'jumlah',
        'asal_pengunjung',
        'total_pembayaran',
        
        'booking_status',

        'kode_booking',
        'tanggal_kedatangan',
        'nama_kontak',
        'nomor_kontak',
        'email',
        
    ];
    
    protected $searchableColumns = [
        'kategori_pengunjung_id',
        'rombongan',
        'jumlah',
        'asal_pengunjung',
        'total_pembayaran',

        'booking_status',

        'kode_booking',
        'tanggal_kedatangan',
        'nama_kontak',
        'nomor_kontak',
        'email',
        
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'kunjungan_id', 'id');
    }

    public function kategori_pengunjung()
    {
        return $this->belongsTo(KategoriPengunjung::class, 'kategori_pengunjung_id', 'id');
    }
}
