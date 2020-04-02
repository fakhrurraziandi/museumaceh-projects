<?php

namespace App;

use App\User;
use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use Eloquence;
    protected $table = 'archives';
    protected $fillable = [
        'user_id',
        'title',
        'file'
    ];

    protected $searchableColumns = [
        'user_id',
        'title',
        'file'
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
