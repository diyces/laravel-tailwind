<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-6 font-bold text-lg border-b">
                Admin Panel
            </div>

            <nav class="p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block hover:text-blue-600">
                    Dashboard
                </a>

                <a href="{{ route('admin.projects.index') }}" class="block hover:text-blue-600">
                    Manage Projects
                </a>

                <a href="{{ route('admin.contacts.index') }}" class="block hover:text-blue-600">
                    Contacts
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-500 mt-4 hover:text-red-700 transition">
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>

    </div>

</body>
</html>