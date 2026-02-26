<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class AboutController extends Controller
{
    public function index()
    {
        $profile = Profile::first();

        return view('public.about', compact('profile'));
    }
}