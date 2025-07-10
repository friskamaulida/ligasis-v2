<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataFE extends Model
{
    protected $table = 'datafe';
    protected $fillable = [
        'running_text',
        'linkyoutobe',
        'linkig',
        'linkwebsite',
        'email',
        'alamat',
        'tlp',
    ];
}
