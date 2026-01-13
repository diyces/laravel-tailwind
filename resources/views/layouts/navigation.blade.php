<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">

        <!-- KIRI -->
        <div class="flex items-center gap-6">
            <a href="/" class="font-bold text-lg">
                Hadi.dev
            </a>

            <a href="/" class="text-gray-600 hover:text-black">Home</a>
            <a href="/projects" class="text-gray-600 hover:text-black">Projects</a>
        </div>

        <!-- KANAN -->
        <div class="flex items-center gap-4">

            @auth
                <span class="text-gray-700">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-500 hover:underline">
                        Logout
                    </button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-gray-600 hover:underline">
                    Login
                </a>
                <a href="{{ route('register') }}" class="text-gray-600 hover:underline">
                    Register
                </a>
            @endguest

        </div>
    </div>
</nav>
