@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="py-20 grid md:grid-cols-2 gap-12 items-center">

    {{-- Text --}}
    <div>
        <p class="text-xs md:text-sm text-blue-600 font-semibold mb-2">
            Web Developer & Tech Enthusiast
        </p>

        <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4">
            Building Modern <br class="hidden md:block">
            Web Solutions
        </h1>

        <p class="text-sm md:text-base text-gray-600 mb-6">
            I build fast, secure, and scalable web applications.
        </p>

        <div class="flex flex-col sm:flex-row gap-3">
            <a href="/projects"
               class="px-6 py-3 text-center bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                View Projects
            </a>
            <a href="/contact"
               class="px-6 py-3 text-center border rounded-lg hover:bg-blue-100 transition">
                Contact Me
            </a>
        </div>
    </div>

    {{-- Image (hidden on mobile) --}}
    <div class="hidden md:block">
        <div class="w-full h-80 bg-gradient-to-br from-blue-100 to-blue-300 rounded-2xl"></div>
    </div>

</section>

@endsection
