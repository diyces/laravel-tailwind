<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Hadi – Web Developer</title>
<meta name="description" content="Web Developer specializing in Laravel & Tailwind CSS">

    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800 overflow-y-scroll">

<nav class="fixed top-0 w-full bg-white border-b z-50">
    <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
        <span class="font-bold text-lg">Hadi.</span>

        <div class="hidden md:flex gap-6 text-sm font-medium">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/projects">Projects</a>
            <a href="/contact">Contact</a>
        </div>

        <button id="menuBtn" class="md:hidden text-2xl">☰</button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
        <a href="/" class="block px-6 py-3">Home</a>
        <a href="/about" class="block px-6 py-3">About</a>
        <a href="/projects" class="block px-6 py-3">Projects</a>
        <a href="/contact" class="block px-6 py-3">Contact</a>
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

    <script>
document.getElementById('menuBtn')?.addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
});
</script>

</body>
</html>
