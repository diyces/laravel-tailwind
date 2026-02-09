@extends('layouts.app')

@section('content')
<section class="py-10">
<h2 class="text-2xl md:text-3xl font-bold mb-8">Daftar Project</h2>

<div class="grid md:grid-cols-2 gap-8">
    <a class="text-sm md:text-base text-gray-600 landing-relaxed" href="{{ route('admin.projects.create') }}">
        + Tambah Project
    </a>
    </div>


<ul class="mt-6 space-y-4">
    @foreach ($projects as $project)
        <li class="p-4 bg-white rounded shadow">
            <strong>{{ $project->title }}</strong><br>
            {{ $project->description }}<br>
            <em>{{ $project->tech }}</em>

           <form method="POST"
      action="{{ route('admin.projects.destroy', $project->id) }}"
      onsubmit="return confirm('Yakin mau hapus project ini? Data tidak bisa dikembalikan.')">
    @csrf
    @method('DELETE')

    <a href="{{ route('admin.projects.edit', $project->id) }}"
   class="text-blue-600 text-sm mr-3">
    Edit
</a>


    <button class="text-red-600 text-sm">
        Hapus
    </button>
</form>


        </li>
    @endforeach
</ul>
</section>

@endsection
