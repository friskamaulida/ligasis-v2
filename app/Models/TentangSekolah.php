<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TentangSekolah extends Model
{
 protected $fillable = [
         'nama_kepala_sekolah',
        'gelar',
        'jabatan',
        'foto',
        'twitter',
        'facebook',
        'instagram',
        'sambutan',
    ];
}
