@extends('layouts.admin')

@section('content')
<section class="py-20 max-w-2xl">
    <h1 class="text-2xl font-bold mb-6">Edit Project</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form 
        method="POST" 
        action="{{ route('admin.projects.update', $project) }}"
        enctype="multipart/form-data"
        class="space-y-5"
    >
        @csrf
        @method('PUT')

        {{-- Title --}}
        <div>
            <label class="block mb-1 font-medium">Judul</label>
            <input 
                type="text"
                name="title"
                value="{{ old('title', $project->title) }}"
                class="border p-2 w-full rounded"
                required
            >
        </div>

        {{-- Description --}}
        <div>
            <label class="block mb-1 font-medium">Deskripsi</label>
            <textarea 
                name="description"
                class="border p-2 w-full rounded"
                rows="5"
                required
            >{{ old('description', $project->description) }}</textarea>
        </div>

        {{-- Tech Stack --}}
        <div>
            <label class="block mb-1 font-medium">Tech Stack</label>
            <input 
                type="text"
                name="tech_stack"
                value="{{ old('tech_stack', $project->tech_stack) }}"
                class="border p-2 w-full rounded"
            >
        </div>

        {{-- Github URL --}}
        <div>
            <label class="block mb-1 font-medium">Github URL</label>
            <input 
                type="url"
                name="github_url"
                value="{{ old('github_url', $project->github_url) }}"
                class="border p-2 w-full rounded"
            >
        </div>

        {{-- Demo URL --}}
        <div>
            <label class="block mb-1 font-medium">Demo URL</label>
            <input 
                type="url"
                name="demo_url"
                value="{{ old('demo_url', $project->demo_url) }}"
                class="border p-2 w-full rounded"
            >
        </div>

        {{-- Thumbnail Preview --}}
        @if ($project->thumbnail_path)
            <div>
                <label class="block mb-1 font-medium">Thumbnail Saat Ini</label>
                <img 
                    src="{{ asset('storage/' . $project->thumbnail_path) }}"
                    class="w-48 rounded mb-2"
                >
            </div>
        @endif

        {{-- Thumbnail Upload --}}
        <div>
            <label class="block mb-1 font-medium">Ganti Thumbnail</label>
            <input 
                type="file"
                name="thumbnail"
                class="border p-2 w-full rounded"
            >
        </div>

        {{-- Flags --}}
        <div class="flex items-center gap-6">
            <label class="flex items-center gap-2">
                <input 
                    type="checkbox" 
                    name="is_featured" 
                    value="1"
                    {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                >
                Featured
            </label>

            <label class="flex items-center gap-2">
                <input 
                    type="checkbox" 
                    name="is_published" 
                    value="1"
                    {{ old('is_published', $project->is_published) ? 'checked' : '' }}
                >
                Published
            </label>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Update
        </button>
    </form>
</section>
@endsection