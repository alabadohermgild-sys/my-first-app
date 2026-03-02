<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermgild | Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="p-6 flex justify-between items-center max-w-6xl mx-auto">
        <div class="text-2xl font-bold tracking-tighter text-blue-400">HERMGILD.</div>
        <div class="space-x-6">
            <a href="#" class="hover:text-blue-400 transition">Projects</a>
            <a href="mailto:your-email@example.com" class="bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-500 transition">Contact Me</a>
        </div>
    </nav>

    <main class="flex flex-col items-center justify-center min-h-[80vh] text-center px-4">
        <h1 class="text-6xl md:text-8xl font-black mb-4">
            Hello, I'm <span class="text-blue-500">Hermgild</span>
        </h1>
        <p class="text-xl text-gray-400 max-w-2xl mb-8">
            A Full-Stack Developer building modern web applications with Laravel and Railway. 
            Currently transforming ideas into live code.
        </p>
        
        <div class="flex space-x-4">
            <button onclick="alert('Coming Soon!')" class="border border-gray-600 px-8 py-3 rounded-full hover:bg-white hover:text-black transition">
                View My Work
            </button>
        </div>
    </main>

    <footer class="border-t border-gray-800 p-8 text-center text-gray-500 text-sm">
        © 2026 Hermgild. Built with Laravel & Deployed on Railway.
    </footer>

</body>
</html>