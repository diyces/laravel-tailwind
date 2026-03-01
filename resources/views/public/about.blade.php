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
                           target="_blank">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.833.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    @if($profile->linkedin_url)
                        <a href="{{ $profile->linkedin_url }}" 
                           target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" class="w-6 h-6">
                           <path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                           </svg>
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