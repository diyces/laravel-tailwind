@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold mb-8">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Total Projects -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
        <p class="text-sm text-gray-500">Total Projects</p>
        <h2 class="text-3xl font-bold mt-2">{{ $totalProjects }}</h2>

        <a href="{{ route('admin.projects.index') }}"
           class="text-blue-600 text-sm mt-4 inline-block hover:underline">
            Manage Projects →
        </a>
    </div>

    <!-- Total Messages -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
        <p class="text-sm text-gray-500">Total Messages</p>
        <h2 class="text-3xl font-bold mt-2">{{ $totalContacts }}</h2>

        <a href="{{ route('admin.contacts.index') }}"
           class="text-blue-600 text-sm mt-4 inline-block hover:underline">
            View Messages →
        </a>
    </div>

    <!-- Unread Messages -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
        <p class="text-sm text-gray-500">Unread Messages</p>
        <h2 class="text-3xl font-bold mt-2 text-red-600">
            {{ $unreadContacts }}
        </h2>

        <a href="{{ route('admin.contacts.index') }}"
           class="text-blue-600 text-sm mt-4 inline-block hover:underline">
            Check Inbox →
        </a>
    </div>

</div>

@endsection