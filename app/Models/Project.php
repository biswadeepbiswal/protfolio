<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'url',
        'tech_stack',
        'sort_order',
    ];

    protected $casts = [
        'tech_stack' => 'array',
    ];}
