<?php

namespace App;

use App\User;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'user_id',
        'status',
        'category_id',
        'featured_image',
    ];

    
    public $with = ['category', 'user'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
