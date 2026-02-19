<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectCRUDController extends Controller
{
    /**
     * Display list of projects
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store new project
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|min:3|max:255',
            'description' => 'required|string',
            'tech'        => 'required|string',
        ]);

        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        Project::create($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project berhasil dibuat.');
    }

    /**
     * Show edit form
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update project
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title'       => 'required|string|min:3|max:255',
            'description' => 'required|string',
            'tech'        => 'required|string'
        ]);

        // Update slug hanya jika title berubah
        if ($project->title !== $validated['title']) {
            $validated['slug'] = $this->generateUniqueSlug(
                $validated['title'],
                $project->id
            );
        }

        $project->update($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project berhasil diperbarui.');
    }

    /**
     * Delete project
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project berhasil dihapus.');
    }

    /**
     * Generate unique slug
     */
    protected function generateUniqueSlug(string $title, $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $counter = 1;

        while (
            Project::where('slug', $slug)
                ->when($ignoreId, function ($query) use ($ignoreId) {
                    return $query->where('id', '!=', $ignoreId);
                })
                ->exists()
        ) {
            $slug = "{$original}-{$counter}";
            $counter++;
        }

        return $slug;
    }
}
