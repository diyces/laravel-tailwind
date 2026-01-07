<!DOCTYPE html>
<html>
<head>
    <title>Website Pertama</title>

    {{-- ini PENTING buat Tailwind --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 min-h-screen flex flex-col">

    <nav class="bg-gray-800 text-white px-6 py-4 flex justify-between items-center">
        <h1 class="font-bold text-lg">Hadi.Dev</h1>

        <div class="space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">About</a>
            <button class="bg-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                Login
            </button>
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center px-6">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl w-full">

    <!-- CARD 1 -->
    <div class="bg-white rounded-xl shadow-xl p-6
                hover:shadow-2xl hover:-translate-y-1
                transition-all duration-300">
      <h2 class="text-xl font-semibold text-gray-800">
        Website Portofolio
      </h2>
      <p class="text-gray-600 mt-2">
        Website Pribadi Pakai Laravel & Tailwind CSS.
      </p>
      <div class="mt-4 flex justify-between items-center">
        <span class="text-sm text-indigo-600 font-medium">
          Laravel • Tailwind
        </span>
        <a href="#" class="text-indigo-600 hover:underline">
          Lihat →
        </a>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="bg-white rounded-xl shadow-xl p-6
                hover:shadow-2xl hover:-translate-y-1
                transition-all duration-300">
      <h2 class="text-xl font-semibold text-gray-800">
        Landing Page
      </h2>
      <p class="text-gray-600 mt-2">
        Landing page responsive tanpa framework JS.
      </p>
      <div class="mt-4 flex justify-between items-center">
        <span class="text-sm text-green-600 font-medium">
          HTML • Tailwind
        </span>
        <a href="#" class="text-green-600 hover:underline">
          Lihat →
        </a>
      </div>
    </div>

  </div>
</main>
</body>
</html>