<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Hadi – Web Developer</title>
<meta name="description" content="Web Developer specializing in Laravel & Tailwind CSS">

    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800 ">

<nav class="fixed top-0 w-full bg-white border-b z-10">
    <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
        <span class="font-bold text-lg">Portfolio</span>

        <div class="hidden md:flex gap-6 text-sm font-medium">
            <a class="hover:text-blue-700 transition" href="{{ route('home') }}">Home</a>
            <a class="hover:text-blue-700 transition" href="{{ route('about') }}">About</a>
            <a class="hover:text-blue-700 transition" href="{{ route('projects.index') }}">Projects</a>
            <a class="hover:text-blue-700 transition" href="{{ route('contact.index') }}">Contact</a>
            
        </div>
        
    </div>
</nav>

    {{-- Content --}}
    <main class="pt-16">
        <div class="max-w-7xl mx-auto px-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="py-8 border-t text-center text-sm text-gray-500">
        © {{ date('Y') }} Hadi. All rights reserved.
    </footer>

</body>
</html>
