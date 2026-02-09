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
        <x-ui.primary-button href="{{ route('projects.index') }}">
            Kelola Project
        </x-ui.primary-button>
        {{--
        <x-ui.secondary-button href="{{ route('profile.edit') }}">
            Edit Profile
        </x-ui.secondary-button>
        --}}

    </div>
</div>

<h1 class="text-xl font-bold mb-4">Admin Dashboard</h1>

<a href="/admin/contacts" class="relative inline-block">
    Inbox

    @if(isset($unreadCount) && $unreadCount > 0)
        <span class="absolute -top-2 -right-3 bg-red-500 text-white
                     text-xs px-2 py-0.5 rounded-full">
            {{ $unreadCount }}
        </span>
    @endif
</a>

@endsection
