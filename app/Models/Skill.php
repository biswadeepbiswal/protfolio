<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'category',
        'skills',
        'sort_order',
    ];

    protected $casts = [
        'skills' => 'array',
    ];}
