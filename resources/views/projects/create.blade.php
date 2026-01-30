@extends('layouts.app')

@section('content')
    <h1>Tambah Project</h1>

    <form method="POST" action="{{ route('projects.store') }}">
    @csrf

    <div>
        <label>Judul</label><br>
        <input type="text" name="title">
    </div>

    <br>

    <div>
        <label>Deskripsi</label><br>
        <textarea name="description"></textarea>
    </div>

    <br>

    <div>
        <label>Tech</label><br>
        <input type="text" name="tech" placeholder="Laravel, Tailwind">
    </div>

    <br>

    <button type="submit">Simpan</button>
</form>

@endsection
