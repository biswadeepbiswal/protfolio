<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'bio',
        'github_url',
        'linkedin_url',
        'profile_path',
    ];}
