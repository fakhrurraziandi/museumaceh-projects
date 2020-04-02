<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'location',
        'event_date',
        'featured_image',
    ];
}
