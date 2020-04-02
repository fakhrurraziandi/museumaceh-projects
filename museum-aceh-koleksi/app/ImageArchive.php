<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class ImageArchive extends Model
{
    use Eloquence;
    protected $table = 'image_archives';
    protected $fillable = [
        'collection_id',
        'file'
    ];

    protected $searchableColumns = [
        'collection_id',
        'file'
    ];
}
