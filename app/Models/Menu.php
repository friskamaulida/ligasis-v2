<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'label',
        'url',
        'icon',
        'role',
        'order',
        'is_active',
    ];
}
