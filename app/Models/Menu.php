<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'label',
        'url',
        'icon',
        'roles',
        'group',
        'plural_label',
        'order',
        'is_active',
    ];

    protected $casts = [
        'roles' => 'array',
        'is_active' => 'boolean',
    ];
}
