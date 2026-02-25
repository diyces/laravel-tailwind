@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold mb-8">
        Projects
    </h1>

    @if ($projects->isEmpty())
        <p class="text-gray-500">
            Belum ada project yang ditampilkan.
        </p>
    @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <article class="border rounded-lg p-6 hover:shadow transition">
                    <h2 class="text-xl font-semibold mb-2">
                        {{ $project->title }}
                    </h2>

                    <p class="text-gray-600 mb-4">
                        {{ \Illuminate\Support\Str::limit($project->description, 100) }}
                    </p>

                    <p class="text-gray-600 mb-4">
                        {{ \Illuminate\Support\Str::limit($project->tech, 50) }}
                    </p>

                    @if ($project->slug)
                        <a
                            href="{{ route('projects.show', ['slug' => $project->slug]) }}"
                            class="text-indigo-600 font-medium hover:underline"
                        >
                            Lihat Detail →
                        </a>
                    @endif
                </article>
            @endforeach
        </div>
    @endif
</section>
@endsection