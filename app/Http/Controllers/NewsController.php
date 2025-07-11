<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest('published_at')->paginate(5);
        $recentNews = News::latest()->take(3)->get();

        $categories = News::pluck('category')
            ->filter()
            ->flatMap(fn($item) => explode(',', $item))
            ->map(fn($cat) => trim($cat))
            ->unique()
            ->values();

        $tags = News::pluck('tags')
            ->filter()
            ->flatMap(fn($tagString) => explode(',', $tagString))
            ->map(fn($tag) => trim($tag))
            ->unique()
            ->values();

        return view('news', compact('news', 'recentNews', 'categories', 'tags'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news-detail', compact('news'));
    }
}

