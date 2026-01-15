@php
    $active = 'text-blue-600 font-semibold';
@endphp

<a href="/" class="{{ request()->is('/') ? $active : '' }}">Home</a>
<a href="/about" class="{{ request()->is('about') ? $active : '' }}">About</a>
<a href="/projects" class="{{ request()->is('projects*') ? $active : '' }}">Projects</a>
<a href="/contact" class="{{ request()->is('contact') ? $active : '' }}">Contact</a>

<nav class="fixed top-0 w-full bg-white border-b z-50">
    <div class="max-w-7xl mx-auto px-4 md:px-6 h-14 md:h-16 flex justify-between items-center">

        <span class="font-bold text-lg">Hadi.</span>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex gap-6 text-sm font-medium">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/about" class="hover:text-blue-600">About</a>
            <a href="/projects" class="hover:text-blue-600">Projects</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>
        </div>

        {{-- Mobile Menu Button --}}
        <button class="md:hidden text-2xl">
            ☰
        </button>

        <button id="menuBtn" class="md:hidden text-2xl">☰</button>

<div id="mobileMenu" class="hidden md:hidden bg-white border-t">
    <a href="/" class="block px-6 py-3">Home</a>
    <a href="/about" class="block px-6 py-3">About</a>
    <a href="/projects" class="block px-6 py-3">Projects</a>
    <a href="/contact" class="block px-6 py-3">Contact</a>
</div>

    </div>
</nav>
