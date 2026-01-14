@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- HERO --}}
<section class="min-h-screen pt-32 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Hi, I'm Hadi 👋
            </h1>

            <p class="text-gray-600 mb-6">
                Web Developer yang fokus belajar Laravel & Tailwind CSS.
                Lagi bangun skill buat karier digital.
            </p>

            <div class="flex gap-4">
                <a href="/projects"
                   class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    My Projects
                </a>

                <a href="/contact"
                   class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50">
                    Contact
                </a>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="w-66 h-66 md:w-66 md:h-66 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-semibold">
                <img src="{{ asset('assets/images/portfolio/women-removebg-preview.png') }}"
     class="w-60 h-60 rounded-full object-cover bg-blue-100 flex items-center justify-center">

            </div>
        </div>

    </div>
</section>

{{-- ABOUT ME --}}
<section class="py-20">
  <h2 class="text-3xl font-bold text-center mb-6">About Me</h2>

  <p class="max-w-2xl mx-auto text-center text-gray-600">
    Gue web developer yang lagi fokus bangun skill Laravel & Tailwind
    buat masuk dunia kerja digital.
  </p>
</section>


{{-- PROJECTS --}}
<section class="py-16">
  <h2 class="text-3xl font-bold text-center mb-10">Tech Stack</h2>

  <div class="flex justify-center gap-6 flex-wrap">
    <span class="px-4 py-2 bg-white shadow rounded hover:shadow-lg transition">Laravel</span>
    <span class="px-4 py-2 bg-white shadow rounded hover:shadow-lg transition">Tailwind</span>
    <span class="px-4 py-2 bg-white shadow rounded hover:shadow-lg transition">MySQL</span>
    <span class="px-4 py-2 bg-white shadow rounded hover:shadow-lg transition">Git</span>
  </div>
</section>

<section id="projects" class="py-20">
    <h2 class="text-3xl font-bold text-center mb-10">
        My Projects
    </h2>
    
    <div class="grid md:grid-cols-3 gap-8">
        
        {{-- CARD --}}
        <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Portfolio Website</h3>
            <p class="text-gray-600 mb-4">
                Website personal menggunakan Laravel & Tailwind.
            </p>
            <span class="text-sm text-blue-500">Laravel • Tailwind</span>
        </div>

        <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">To-Do App</h3>
            <p class="text-gray-600 mb-4">
                Aplikasi task sederhana dengan CRUD.
            </p>
            <span class="text-sm text-blue-500">Laravel • MySQL</span>
        </div>

        <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Dashboard UI</h3>
            <p class="text-gray-600 mb-4">
                Tampilan admin dashboard modern.
            </p>
            <span class="text-sm text-blue-500">Tailwind</span>
        </div>
        
    </div>
</section>

<footer class="py-6 text-center text-sm text-gray-500">
    © {{ date('Y') }} Hadi.dev — Built with Laravel & Tailwind
</footer>


@endsection