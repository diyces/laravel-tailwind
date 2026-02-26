@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="max-w-5xl mx-auto px-4 py-20">

    @if($profile)
        <div class="grid md:grid-cols-2 gap-12 items-center">

            {{-- Avatar --}}
            <div class="flex justify-center">
                @if($profile->avatar_path)
                    <img 
                        src="{{ asset('storage/' . $profile->avatar_path) }}"
                        alt="{{ $profile->full_name }}"
                        class="w-64 h-64 object-cover rounded-2xl shadow-lg"
                    >
                @else
                    <div class="w-64 h-64 bg-gray-200 rounded-2xl flex items-center justify-center text-gray-500">
                        No Image
                    </div>
                @endif
            </div>

            {{-- Info --}}
            <div>
                <h1 class="text-4xl font-bold mb-4">
                    {{ $profile->full_name }}
                </h1>

                @if($profile->headline)
                    <p class="text-lg text-gray-600 mb-6">
                        {{ $profile->headline }}
                    </p>
                @endif

                @if($profile->bio)
                    <p class="text-gray-700 leading-relaxed mb-8">
                        {{ $profile->bio }}
                    </p>
                @endif

                {{-- Social Links --}}
                <div class="flex gap-6 text-sm">

                    @if($profile->github_url)
                        <a href="{{ $profile->github_url }}" 
                           target="_blank"
                           class="px-4 py-2 border rounded hover:bg-gray-100 transition">
                            GitHub
                        </a>
                    @endif

                    @if($profile->linkedin_url)
                        <a href="{{ $profile->linkedin_url }}" 
                           target="_blank"
                           class="px-4 py-2 border rounded hover:bg-gray-100 transition">
                            LinkedIn
                        </a>
                    @endif

                    @if($profile->cv_path)
                        <a href="{{ asset('storage/' . $profile->cv_path) }}" 
                           target="_blank"
                           class="px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition">
                            Download CV
                        </a>
                    @endif

                </div>
            </div>

        </div>
    @endif

</section>
@endsection