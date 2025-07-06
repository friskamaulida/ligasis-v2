<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;

    protected $table = 'ppdb'; // atau 'ppdbs' jika kamu menggunakan default Laravel pluralisasi

    protected $fillable = [
        'nama',
        'nisn',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'asal_sekolah',
        'no_hp',
        'foto',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
