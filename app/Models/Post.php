<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'content',
        'image',
        'date',
        'author',
        'category',
        'json_data'
    ];

    protected $casts = [
        'json_data' => 'array',
        'date' => 'date'
    ];
}
