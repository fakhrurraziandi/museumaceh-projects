<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    
    protected $table = 'pages';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'featured_image',
    ];
}
