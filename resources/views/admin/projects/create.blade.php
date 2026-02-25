@extends('layouts.app')

@section('content')
<section class="py-20">
    <h1 class="text-2xl font-bold mb-4">Tambah Project</h1>

    @if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form method="POST" action="{{ route('admin.projects.store') }}">
    @csrf

<div class="mb-4">
        <label class="block mb-1">Judul</label>
        <input type="text" name="title" class="border p-2 w-full" placeholder="Judul">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Deskripsi</label>
        <textarea name="description" class="border p-2 w-full" placeholder="description"></textarea>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Tech</label>
        <input type="text" name="tech" class="border p-2 w-full" placeholder="Tech">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Github</label>
        <input class="text" name="github" class="border w-full" placeholder="Github">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Demo</label>
        <input class="text" name="demo" class="border w-full" placeholder="Demo">
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>
</section>
@endsection
