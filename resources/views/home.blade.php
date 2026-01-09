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

    <h1 class="text-xl font-semibold text-gray-800">Selamat Datang Di Web Saya!</h1>

    <main class="flex-1 flex items-center justify-center px-6">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl w-full">

    <!-- CARD 1 -->
    <div class="group relative bg-white rounded-xl shadow-lg p-6
                hover:shadow-xl hover:-translate-y-1
                transition-all duration-300 cursor-pointer hover:ring-1 hover:ring-indigo-200">
                <div class="h-1 w-12 bg-indigo-600 rounded-full mb-4"></div>
      <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition">
        Website Portofolio
      </h2>
      <p class="text-gray-600 mt-2">
        Website Pribadi Pakai Laravel & Tailwind CSS.
      </p>
      <div class="mt-4 flex justify-between items-center relative z-10">
        <span class="text-sm text-indigo-600 font-medium">
          Laravel • Tailwind
        </span>
        <span class="text-indigo-600 font-medium">
          Lihat →
        </span>
      </div>
        <a href="#" aria-label="Lihat project website portofolio" class="absolute inset-0 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-white"></a>
    </div>

    <!-- CARD 2 -->
    <div class="group relative bg-white rounded-xl shadow-xl p-6
                hover:shadow-xl hover:-translate-y-1
                transition-all duration-300 cursor-pointer hover:ring-1 hover:ring-indigo-600 transition">
      <h2 class="text-xl font-semibold text-gray-800 group-hover:text-indigo-600 transition">
        Landing Page
      </h2>
      <p class="text-gray-600 mt-2">
        Landing page responsive tanpa framework JS.
      </p>
      <div class="mt-4 flex justify-between items-center relative z-10">
        <span class="text-sm text-green-600 font-medium">
          HTML • Tailwind
        </span>
        <span class="text-green-600 font-medium">
          Lihat →
        </span> 
      </div>
        <a href="#" aria-label="Lihat project website portofolio" class="absolute inset-0 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-2 focus:ring-offset-2 focus:ring-offset-white-2"></a>
    </div>

  </div>
</main>
</body>
</html>