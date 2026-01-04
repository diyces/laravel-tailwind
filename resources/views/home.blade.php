<!DOCTYPE html>
<html>
<head>
    <title>Website Pertama</title>

    {{-- ini PENTING buat Tailwind --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">
    <nav class="bg-gray-400">
        <div></div>
        <a href=""></a>
        <button></button>
    </nav>

    <div class="bg-white p-8 rounded-xl shadow-lg justify-center text-center">
        <h1 class="text-3xl font-bold text-gray-800">
            Website Pertama Gue 🔥
        </h1>
        <p class="mt-4 text-gray-600">
            Laravel + Tailwind akhirnya jalan
        </p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
        <h1 class="text-3xl font-bold text-gray-800">
            Saya seorang fullstack web deveploper
        </h1>
        <p class="mt-4 text-gray-600">
            Laravel + Tailwind
        </p>
    </div>

</body>
</html>