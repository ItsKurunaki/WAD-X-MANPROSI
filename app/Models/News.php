<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'status',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'status' => 'boolean'
    ];
}
