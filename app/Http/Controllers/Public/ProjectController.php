<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
   public function index()
{
    $projects = Project::where('is_published', true)
        ->latest()
        ->paginate(9);

    return view('public.projects.index', compact('projects'));
}

    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('public.projects.show', compact('project'));
    }
}
