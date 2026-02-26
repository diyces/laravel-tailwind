@extends('layouts.admin')

@section('content')
<section class="py-20 max-w-2xl">
    <h1 class="text-2xl font-bold mb-6">Tambah Project</h1>

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
        action="{{ route('admin.projects.store') }}"
        enctype="multipart/form-data"
        class="space-y-5"
    >
        @csrf

        {{-- Title --}}
        <div>
            <label class="block mb-1 font-medium">Judul</label>
            <input 
                type="text" 
                name="title"
                value="{{ old('title') }}"
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
            >{{ old('description') }}</textarea>
        </div>

        {{-- Tech Stack --}}
        <div>
            <label class="block mb-1 font-medium">Tech Stack</label>
            <input 
                type="text" 
                name="tech_stack"
                value="{{ old('tech_stack') }}"
                class="border p-2 w-full rounded"
                placeholder="Laravel, Tailwind, MySQL"
            >
        </div>

        {{-- Github URL --}}
        <div>
            <label class="block mb-1 font-medium">Github URL</label>
            <input 
                type="url"
                name="github_url"
                value="{{ old('github_url') }}"
                class="border p-2 w-full rounded"
            >
        </div>

        {{-- Demo URL --}}
        <div>
            <label class="block mb-1 font-medium">Demo URL</label>
            <input 
                type="url"
                name="demo_url"
                value="{{ old('demo_url') }}"
                class="border p-2 w-full rounded"
            >
        </div>

        {{-- Thumbnail --}}
        <div>
            <label class="block mb-1 font-medium">Thumbnail</label>
            <input 
                type="file"
                name="thumbnail"
                class="border p-2 w-full rounded"
            >
        </div>

        {{-- Flags --}}
        <div class="flex items-center gap-6">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_featured" value="1">
                Featured
            </label>

            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_published" value="1" checked>
                Published
            </label>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan
        </button>
    </form>
</section>
@endsection