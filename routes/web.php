<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\TentangController;
use App\Models\Video;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $videos = Video::where('is_active', true)->latest()->get();
//     return view('index', compact('videos'));
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.detail');
Route::get('/kategori/{kategori}', [NewsController::class, 'byCategory'])->name('news.byCategory');
Route::get('/tag/{tag}', [NewsController::class, 'byTag'])->name('news.byTag');


Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store');
Route::get('/ppdb/download/{id}', [PpdbController::class, 'download'])->name('ppdb.download');
Route::get('/admin/ppdb/{id}/print', [PPDBController::class, 'printFromAdmin'])->name('ppdb.admin.print');

Route::post('/kontak', [MessageController::class, 'store'])->name('contact.store');

// Route::get('/news', function () {
//     return view('news');
// });
Route::get('/kontak', function () {
    return view('kontak');
});
// Route::get('/tentang', function () {
//     return view('tentang');
// });
Route::get('/news-detail', function () {
    return view('news-detail');
});
Route::get('/maintenance', function () {
    return view('maintenance');
});


Route::get('/artisan-clear', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');

    return '✅ Artisan cache cleared!';
});
Route::get('/optimize-app', function () {
    Artisan::call('optimize');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    Artisan::call('filament:cache-components');

    return '<h2 style="color:green">✅ Aplikasi berhasil dioptimasi!</h2>';
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return '✅ Storage linked!';
});
