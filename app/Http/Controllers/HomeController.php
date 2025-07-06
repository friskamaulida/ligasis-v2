<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->get();
        $videos = Video::where('is_active', true)->latest()->get();
        $latestNews = News::where('is_active', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('index', compact('latestNews','videos','banners'));
    }
}
