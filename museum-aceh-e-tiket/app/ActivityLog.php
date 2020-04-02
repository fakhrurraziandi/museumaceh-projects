<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use Eloquence;
    protected $table = 'activity_logs';
    protected $fillable = [
        'user_id',
        'activity',
        'data'
    ];
    protected $searchableColumns = [
        'user_id',
        'activity',
        'data'
    ];

    public $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
