{{-- resources/views/public/projects/show.blade.php --}}
@extends('layouts.public')

@section('title', $project->title)

@section('content')
<section class="max-w-4xl mx-auto px-4 py-12">
    <a href="{{ route('projects.index') }}"
       class="text-sm text-gray-500 hover:underline">
        ← Kembali ke Projects
    </a>

    <h1 class="text-3xl font-bold mt-4 mb-4">
        {{ $project->title }}
    </h1>

    <p class="text-gray-700 mb-6">
        {{ $project->description }}
    </p>

    @if ($project->tech_stack)
        <div class="mb-6">
            <h3 class="font-semibold mb-2">Tech Stack</h3>
            <p class="text-gray-600">
                {{ $project->tech_stack }}
            </p>
        </div>
    @endif

    <div class="flex gap-4">
        @if ($project->github_url)
            <a href="{{ $project->github_url }}"
               target="_blank"
               class="text-indigo-600 hover:underline">
                GitHub
            </a>
        @endif

        @if ($project->demo_url)
            <a href="{{ $project->demo_url }}"
               target="_blank"
               class="text-indigo-600 hover:underline">
                Live Demo
            </a>
        @endif
    </div>
</section>
@endsection
