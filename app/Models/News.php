<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = [
    'title', 'slug', 'thumbnail', 'category', 'tags', 'excerpt', 'body', 'author', 'is_active', 'published_at',
];

    // Otomatis generate slug jika belum ada
    public static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });
    }
}
