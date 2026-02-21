@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h1 class="text-2xl font-bold">
        Halo, Di 👋
    </h1>

    <h1 class="text-3xl font-bold">{{ $name }}</h1>

    <p class="text-gray-600 mb-6">
        Kamu sudah login.
    </p>

    <div class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
        <a href="{{ route('admin.projects.index') }}">
            Kelola Project
        </a>
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
