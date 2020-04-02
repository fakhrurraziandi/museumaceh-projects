<?php

namespace App;

use App\Booth;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    use Eloquence;
    protected $table = 'ticket';
    protected $fillable = [
        'kunjungan_id',
        'tarif',
        'qrcode',
        // 'check_in',
    ];

    public $appends = ['kode', 'booth_ids'];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'kunjungan_id', 'id');
    }

    public function getKodeAttribute()
    {
        return $this->kunjungan->kategori_pengunjung->prefix_code .$this->id;
    }

    public function getBoothIdsAttribute()
    {
        $booth_ids = [];
        
        foreach($this->booth as $booth){
            $booth_ids[] = $booth->id;
        }

        return $booth_ids;
    }

    public function booth()
    {
        return $this->belongsToMany(Booth::class, 'ticket_checkin', 'ticket_id', 'booth_id');
    }
}
