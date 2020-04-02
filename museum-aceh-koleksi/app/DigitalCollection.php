<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class DigitalCollection extends Model
{
    use Eloquence;
    protected $table = 'digital_collections';
    protected $fillable = [
        'collection_id',
        'file'
    ];

    protected $searchableColumns = [
        'collection_id',
        'file'
    ];
}
