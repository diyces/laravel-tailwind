@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6 text-center"></h1>

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
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach (range(1,6) as $project)
    <div class="bg-white rounded-xl p-5 shadow-sm">
        <div class="h-36 bg-slate-200 rounded-lg mb-4"></div>

        <h3 class="font-semibold text-base mb-2">
            Project Title
        </h3>

        <p class="text-sm text-gray-600 mb-4">
            Built using Laravel & Tailwind.
        </p>

        <a href="#" class="text-blue-600 text-sm">
            View →
        </a>
    </div>
    @endforeach
</div>

@endempty
</div>
@endsection
