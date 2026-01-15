<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Hadi – Web Developer</title>
<meta name="description" content="Web Developer specializing in Laravel & Tailwind CSS">

    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800">

    {{-- Navbar --}}
    <nav class="fixed top-0 w-full bg-white border-b z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <span class="font-bold text-lg">Hadi.</span>

            <div class="flex gap-6 text-sm font-medium">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/about" class="hover:text-blue-600">About</a>
                <a href="/projects" class="hover:text-blue-600">Projects</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="pt-16">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="py-8 border-t text-center text-sm text-gray-500">
        © {{ date('Y') }} Hadi. All rights reserved.
    </footer>

    <script>
document.getElementById('menuBtn')?.addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
});
</script>

</body>
</html>
