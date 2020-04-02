<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Booth extends Model
{
    use Eloquence;
    protected $table = 'booth';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
    protected $searchableColumns = [
        'nama',
        'deskripsi',
    ];
}
