@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- HERO --}}
<section class="min-h-screen pt-32 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- TEXT -->
        <div>
            <h1 class="text-5xl font-bold mb-4">
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

        <!-- IMAGE -->
        <div class="flex justify-center">
            <div class="w-72 h-72 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-semibold">
                Your Photo
            </div>
        </div>

    </div>
</section>


{{-- PROJECTS --}}
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

@endsection