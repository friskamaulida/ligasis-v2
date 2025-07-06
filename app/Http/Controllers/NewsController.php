<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(5); // Pagination
        $recentNews = News::latest()->take(3)->get();

        $categories = News::pluck('category')->filter()->flatMap(function ($item) {
            return explode(',', $item);
        })->map(fn($cat) => trim($cat))->unique();

        $tags = ['Donation', 'Food', 'Education', 'Children']; // hardcoded sementara

        return view('news', compact('news', 'recentNews', 'categories', 'tags'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news-detail', compact('news'));
    }
}

