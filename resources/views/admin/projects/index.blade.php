@extends('layouts.admin')

@section('content')
<section>
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl md:text-3xl font-bold">
            Daftar Project
        </h2>

        <a 
            href="{{ route('admin.projects.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm"
        >
            + Tambah Project
        </a>
    </div>

    <ul class="space-y-6">
        @forelse ($projects as $project)
            <li class="bg-white rounded shadow overflow-hidden">

                <div class="flex">

                    {{-- Thumbnail --}}
                    @if ($project->thumbnail_path)
                        <div class="w-40 h-32 flex-shrink-0">
                            <img 
                                src="{{ asset('storage/' . $project->thumbnail_path) }}"
                                alt="{{ $project->title }}"
                                class="w-full h-full object-cover"
                            >
                        </div>
                    @endif

                    {{-- Content --}}
                    <div class="flex-1 p-4 flex flex-col justify-between">

                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <h3 class="font-semibold text-lg">
                                    {{ $project->title }}
                                </h3>

                                @if ($project->is_featured)
                                    <span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-1 rounded">
                                        Featured
                                    </span>
                                @endif

                                @if (! $project->is_published)
                                    <span class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded">
                                        Draft
                                    </span>
                                @endif
                            </div>

                            <p class="text-gray-600 text-sm mb-2">
                                {{ $project->excerpt }}
                            </p>

                            @if ($project->tech_stack)
                                <p class="text-xs text-gray-500">
                                    {{ $project->tech_stack }}
                                </p>
                            @endif
                        </div>

                        {{-- Action Area --}}
                        <div class="mt-4 flex justify-end gap-4 text-sm">
                            <a 
                                href="{{ route('admin.projects.edit', $project) }}"
                                class="text-blue-600 hover:underline"
                            >
                                Edit
                            </a>

                            <form 
                                method="POST"
                                action="{{ route('admin.projects.destroy', $project) }}"
                                onsubmit="return confirm('Yakin mau hapus project ini?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button class="text-red-600 hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </li>
        @empty
            <p class="text-gray-500">
                Belum ada project.
            </p>
        @endforelse
    </ul>

    {{-- Pagination --}}
    <div class="mt-8">
        {{ $projects->links() }}
    </div>
</section>
@endsection