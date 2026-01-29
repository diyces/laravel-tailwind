@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h1 class="text-2xl font-bold">
        Halo, Hadi 👋
    </h1>

    <p class="text-gray-600 mb-6">
        Kamu sudah login.
    </p>

    <div class="flex gap-3">
        <x-ui.button-primary href="{{ route('projects.index') }}">
            Kelola Project
        </x-ui.button-primary>

        <x-ui.button-secondary href="{{ route('profile.edit') }}">
            Edit Profile
        </x-ui.button-secondary>
    </div>
</div>
@endsection
