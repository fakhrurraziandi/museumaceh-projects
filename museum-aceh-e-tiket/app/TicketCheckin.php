<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class TicketCheckin extends Model
{
    use Eloquence;
    protected $table = 'ticket_checkin';
    protected $fillable = [
        'ticket_id',
        'booth_id'
    ];
    protected $searchableColumns = [
        'ticket_id',
        'booth_id'
    ];
}
