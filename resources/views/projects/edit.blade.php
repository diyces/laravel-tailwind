@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Edit Project</h2>

<form action="{{ route('projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')

    <input
        name="title"
        value="{{ $project->title }}"
        class="border p-2 w-full mb-3"
    >

    <textarea
        name="description"
        class="border p-2 w-full mb-3"
    >{{ $project->description }}</textarea>

    <input
        name="tech"
        value="{{ $project->tech }}"
        class="border p-2 w-full mb-3"
    >

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
@endsection
