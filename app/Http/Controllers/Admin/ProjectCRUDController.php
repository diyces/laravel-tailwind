<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectCRUDController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => ['required', 'string', 'min:3', 'max:255'],
            'description'   => ['required', 'string'],
            'tech_stack'    => ['nullable', 'string'],
            'github_url'    => ['nullable', 'url'],
            'demo_url'      => ['nullable', 'url'],
            'thumbnail'     => ['nullable', 'image', 'max:2048'],
            'is_featured'   => ['nullable', 'boolean'],
            'is_published'  => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail_path'] =
                $request->file('thumbnail')->store('projects', 'public');
        }

        $validated['is_featured']  = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');

        Project::create($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project berhasil dibuat.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title'         => ['required', 'string', 'min:3', 'max:255'],
            'description'   => ['required', 'string'],
            'tech_stack'    => ['nullable', 'string'],
            'github_url'    => ['nullable', 'url'],
            'demo_url'      => ['nullable', 'url'],
            'thumbnail'     => ['nullable', 'image', 'max:2048'],
            'is_featured'   => ['nullable', 'boolean'],
            'is_published'  => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail_path) {
                Storage::disk('public')->delete($project->thumbnail_path);
            }

            $validated['thumbnail_path'] =
                $request->file('thumbnail')->store('projects', 'public');
        }

        $validated['is_featured']  = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');

        $project->update($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project berhasil diperbarui.');
    }

    public function destroy(Project $project)
    {
        if ($project->thumbnail_path) {
            Storage::disk('public')->delete($project->thumbnail_path);
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project berhasil dihapus.');
    }
}