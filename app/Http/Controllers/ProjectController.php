<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
{
    Project::create([
        'title' => $request->title,
        'description' => $request->description,
        'tech' => $request->tech,
    ]);

    return redirect()->route('projects.index');
}

}
