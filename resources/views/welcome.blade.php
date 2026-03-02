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
        <div class="text-2xl font-bold tracking-tighter text-blue-400">Welcome utod!</div>
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
            Learning today, building tomorrow — by God's grace.
        </p>
        
        <div class="flex space-x-4">
            <button onclick="alert('Coming Soon!')" class="border border-gray-600 px-8 py-3 rounded-full hover:bg-white hover:text-black transition">
                View My Work
            </button>
        </div>
    </main>
<section class="max-w-6xl mx-auto px-4 py-20">
        <h2 class="text-3xl font-bold mb-12 text-center">Featured <span class="text-blue-500">Projects</span></h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-800 border border-gray-700 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">01. Full-Stack</div>
                <h3 class="text-xl font-bold mb-3 group-hover:text-blue-400">My First Laravel App</h3>
                <p class="text-gray-400 text-sm mb-4">A live web application built with PHP Laravel, connected to GitHub, and deployed automatically via Railway.</p>
                <div class="flex space-x-3 text-xs font-bold text-gray-500">
                    <span>LARAVEL</span>
                    <span>RAILWAY</span>
                    <span>GITHUB</span>
                </div>
            </div>

            <div class="bg-gray-800 border border-gray-700 p-6 rounded-2xl opacity-60 hover:opacity-100 transition">
                <div class="text-blue-400 text-sm font-mono mb-2">02. Database</div>
                <h3 class="text-xl font-bold mb-3">Task Manager (Coming Soon)</h3>
                <p class="text-gray-400 text-sm mb-4">A CRUD application that allows users to create, read, update, and delete tasks using a MySQL database.</p>
                <div class="flex space-x-3 text-xs font-bold text-gray-500">
                    <span>MYSQL</span>
                    <span>PHP</span>
                </div>
            </div>

            <div class="bg-gray-800 border border-gray-700 p-6 rounded-2xl opacity-60 hover:opacity-100 transition">
                <div class="text-blue-400 text-sm font-mono mb-2">03. API</div>
                <h3 class="text-xl font-bold mb-3">Weather Dashboard</h3>
                <p class="text-gray-400 text-sm mb-4">Integrating a 3rd-party API to fetch and display real-time weather data for any city in the world.</p>
                <div class="flex space-x-3 text-xs font-bold text-gray-500">
                    <span>API</span>
                    <span>JSON</span>
                </div>
            </div>
        </div>
    </section>
    <footer class="border-t border-gray-800 p-8 text-center text-gray-500 text-sm">
        © 2026 Hermgild. Built with Laravel & Deployed on Railway.
    </footer>

</body>
</html>