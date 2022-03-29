<?php

namespace App\Models;

use Database\Factories\NewsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'content',
        'foto',
        'user_id',
        'publish',
        'slug',
    ];

    protected static function newFactory(): NewsFactory
    {
        return NewsFactory::new();
    }
}
