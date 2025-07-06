<?php

namespace App\Http\Controllers;

use App\Models\TentangSekolah;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $data = TentangSekolah::latest()->first();
        return view('tentang', compact('data'));
    }
}
