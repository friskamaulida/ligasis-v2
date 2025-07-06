<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Video;

abstract class Controller
{
    public function index()
{
    $news = News::where('is_active', true)->orderByDesc('published_at')->paginate(5);
    $recentNews = News::latest('published_at')->take(3)->get();
    $categories = News::pluck('category')->filter()->flatMap(fn($item) => array_map('trim', explode(',', $item)))->unique();
    $tags = ['Donation', 'Clothing', 'Food', 'Education', 'Poverty'];
    $videos = Video::latest()->take(3)->get();

    return view('index', compact('news', 'recentNews', 'categories', 'tags', 'videos'));
}
}
