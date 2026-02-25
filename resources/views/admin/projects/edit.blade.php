@extends('layouts.app')

@section('content')
<section class="py-20">
<h1 class="text-2xl font-bold mb-4">Edit Project</h1>

@if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block mb-1">Judul</label>
        <input type="text" name="title"
               value="{{ old('title', $project->title) }}"
               class="border p-2 w-full">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Deskripsi</label>
        <textarea name="description"
                  value="{{ old('description', $project->description) }}"
                  class="border p-2 w-full">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Tech</label>
        <input type="text" name="tech"
               value="{{ old('tech', $project->tech) }}"
               class="border p-2 w-full">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Github_url</label>
        <input type="text" name="github_url"
                value="{{ old ('github_url', $project->github_url) }}"
                class="border p-2 w-full">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Demo_url</label>
        <input type="text" name="demo_url"
               value="{{ old ('demo_url', $project->demo_url) }}"
               class="border p-2 w-full">
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
</section>
@endsection
