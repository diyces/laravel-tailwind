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
    $validated = $request->validate([
        'title' => 'required|min:3',
        'description' => 'required|min:10',
        'tech' => 'required|min:2',
]);

    Project::create($validated);

    return redirect()->route('projects.index');
}
public function destroy(Project $project)
{
    $project->delete();

    return redirect()->route('projects.index');
}

public function edit(Project $project)
{
    return view('projects.edit', compact('project'));
}

public function update(Request $request, Project $project)
{
    $validated = $request->validate([
        'title' => '$required|min:3',
        'description' => '$required|min:10',
        'tech' => '$required|min:2',
    ]);

    $project->update($validated);

    return redirect()->route('projects.index');
}


}
