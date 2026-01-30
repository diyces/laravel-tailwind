@extends('layouts.app')

@section('content')
    <h1>Daftar Project</h1>

    <a href="{{ route('projects.create') }}">
        + Tambah Project
    </a>

    <ul>
        @foreach ($projects as $project)
        <li>
            <strong>{{ $project->title }}</strong>
            <br>{{ $project->description }}</li>
            <em>{{ $project->tech }}</em>

        </li>
        <endforeach>
    </ul>
@endsection
