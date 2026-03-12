<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', [
            'about' => \App\Models\AboutSetting::first(),
            'projects' => \App\Models\Project::orderBy('sort_order')->get(),
            'experiences' => \App\Models\Experience::orderBy('sort_order')->get(),
            'educations' => \App\Models\Education::orderBy('sort_order')->get(),
            'skills' => \App\Models\Skill::orderBy('sort_order')->get(),
        ]);
    }}
