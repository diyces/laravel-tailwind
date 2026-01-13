@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">My Projects</h1>

@auth
<a href="{{ route('projects.create') }}"
   class="bg-blue-500 text-white px-4 py-2 rounded mb-6 inline-block">
    + Add Project
</a>
@endauth

<div class="grid gap-4">
    @forelse ($projects as $project)
        <div class="border p-4 rounded">
            <h2 class="font-bold">{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>
            <small>{{ $project->tech }}</small>

            @auth
            <div class="mt-3 flex gap-3">
                <a href="{{ route('projects.edit', $project) }}"
                   class="text-blue-500">
                    Edit
                </a>

                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">
                        Delete
                    </button>
                </form>
            </div>
            @endauth
        </div>
    @empty
        <p class="text-gray-500">Belum ada project.</p>
    @endforelse
</div>
@endsection
