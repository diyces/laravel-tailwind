@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold mb-10">
        Projects
    </h1>

    @forelse ($projects as $project)
        @if ($loop->first)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @endif

        <article class="border rounded-xl overflow-hidden hover:shadow-lg transition flex flex-col">

            {{-- Thumbnail --}}
            @if ($project->thumbnail_path)
                <div class="h-48 overflow-hidden">
                    <img 
                        src="{{ asset('storage/' . $project->thumbnail_path) }}"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover hover:scale-105 transition duration-300"
                    >
                </div>
            @endif

            <div class="p-6 flex flex-col flex-1 justify-between">

                <div>
                    <h2 class="text-lg font-semibold mb-2">
                        {{ $project->title }}
                    </h2>

                    <p class="text-gray-600 text-sm mb-4">
                        {{ $project->excerpt }}
                    </p>

                    {{-- Tech --}}
                    @if ($project->tech_array)
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach ($project->tech_array as $tech)
                                <span class="text-xs bg-gray-100 px-2 py-1 rounded">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Action --}}
                <div class="flex justify-between items-center text-sm mt-4">

                    <div class="flex gap-4">
                        @if ($project->github_url)
                            <a 
                                href="{{ $project->github_url }}"
                                target="_blank"
                                class="text-gray-700 hover:underline"
                            >
                                GitHub
                            </a>
                        @endif

                        @if ($project->demo_url)
                            <a 
                                href="{{ $project->demo_url }}"
                                target="_blank"
                                class="text-green-600 hover:underline"
                            >
                                Live Demo
                            </a>
                        @endif
                    </div>

                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="text-indigo-600 font-medium hover:underline"
                    >
                        Detail →
                    </a>

                </div>

            </div>
        </article>

        @if ($loop->last)
            </div>
        @endif
    @empty
        <div class="text-center py-20 text-gray-500">
            Belum ada project yang dipublikasikan.
        </div>
    @endforelse

    {{-- Pagination --}}
    <div class="mt-12">
        {{ $projects->links() }}
    </div>
</section>
@endsection