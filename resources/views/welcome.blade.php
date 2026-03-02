<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermgild | Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body <div class="fixed inset-0 -z-10 overflow-hidden bg-slate-950">
    <video 
        autoplay 
        muted 
        loop 
        playsinline 
        class="absolute min-w-full min-h-full object-cover opacity-40">
        <source src="https://cdn.pixabay.com/video/2020/09/16/50123-461320349_tiny.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-slate-950/50 to-slate-950"></div>
</div>

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
    </section><section class="max-w-6xl mx-auto px-4 py-20 bg-gray-900">
    <h2 class="text-3xl font-bold mb-12 text-center text-white">My <span class="text-blue-500">Tech Stack</span></h2>
    
    <div class="flex flex-wrap justify-center gap-8">
        <div class="flex flex-col items-center group">
            <div class="w-16 h-16 bg-gray-800 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-blue-500 transition">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" class="w-10 h-10" alt="PHP">
            </div>
            <span class="mt-2 text-sm text-gray-400">PHP</span>
        </div>

        <div class="flex flex-col items-center group">
            <div class="w-16 h-16 bg-gray-800 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-red-500 transition">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="w-10 h-10" alt="Laravel">
            </div>
            <span class="mt-2 text-sm text-gray-400">Laravel</span>
        </div>

        <div class="flex flex-col items-center group">
            <div class="w-16 h-16 bg-gray-800 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-teal-400 transition">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="w-10 h-10" alt="Tailwind">
            </div>
            <span class="mt-2 text-sm text-gray-400">Tailwind</span>
        </div>

        <div class="flex flex-col items-center group">
            <div class="w-16 h-16 bg-gray-800 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-blue-400 transition">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="w-10 h-10" alt="MySQL">
            </div>
            <span class="mt-2 text-sm text-gray-400">MySQL</span>
        </div>
    </div>
</section>
    <footer class="border-t border-gray-800 p-8 text-center text-gray-500 text-sm">
        © 2026 — Built for practice, deployed for experience.
    </footer>

</body>
</html>

