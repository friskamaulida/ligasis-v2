<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PPDBController;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $videos = Video::where('is_active', true)->latest()->get();
//     return view('index', compact('videos'));
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.detail');

Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store');
Route::get('/ppdb/download/{id}', [PpdbController::class, 'download'])->name('ppdb.download');
Route::get('/admin/ppdb/{id}/print', [PPDBController::class, 'printFromAdmin'])->name('ppdb.admin.print');

// Route::get('/news', function () {
//     return view('news');
// });
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/news-detail', function () {
    return view('news-detail');
});
Route::get('/maintenance', function () {
    return view('maintenance');
});


