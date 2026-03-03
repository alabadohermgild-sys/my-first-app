<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermz | Nightmaric Spawn</title>

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white font-sans overflow-x-hidden">

    <div class="fixed inset-0 -z-10 overflow-hidden bg-slate-950">
    <video autoplay muted loop playsinline class="absolute min-w-full min-h-full object-cover">
   <source src="/NFSS.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-slate-950/60 backdrop-blur-[2px]"></div>
</div>
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-slate-950/80 to-slate-950"></div>
    </div>

    <nav class="p-6 flex justify-between items-center max-w-8xl mx-auto relative z-10">
        <div class="text-4xl font-bold tracking-tighter text-blue-600">Welcome utod!</div>
        <div class="flex items-center space-x-6">
            <a href="#projects" class="hover:text-blue-600 transition hidden md:block">Projects</a>
            
            <a href="https://www.facebook.com/Slimshady477" target="_blank" class="text-gray-400 hover:text-blue-500 transition">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>

            <a href="mailto:your-email@example.com" class="bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-500 transition font-bold">Contact Me</a>
        </div>
    </nav>

    <main class="flex flex-col items-center justify-center min-h-[80vh] text-center px-4 relative z-10">
        <h1 class="text-6xl md:text-8xl font-black mb-4">
            Hello, I'm <span class="text-blue-500">Hermgild</span>
        </h1>
        <p class="text-xl text-gray-400 max-w-2xl mb-8">
            A learner in tech, a servant in faith.
        </p>
        
        <div class="flex space-x-4">
            <a href="#projects" class="border border-gray-600 px-8 py-3 rounded-full hover:bg-white hover:text-black transition uppercase font-bold">
                View My Work
            </a>
        </div>
    </main>

    <section id="projects" class="max-w-6xl mx-auto px-4 py-20 relative z-10">
        <h2 class="text-3xl font-bold mb-12 text-center">Featured <span class="text-blue-500">Projects</span></h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">01. Full-Stack</div>
                <h3 class="text-xl font-bold mb-3 group-hover:text-blue-400">My First Laravel App</h3>
                <p class="text-gray-400 text-sm mb-4">A live web application built with PHP Laravel, connected to GitHub, and deployed automatically via Railway.</p>
                <div class="flex space-x-3 text-xs font-bold text-gray-500">
                    <span>LARAVEL</span>
                    <span>RAILWAY</span>
                    <span>GITHUB</span>
                </div>
            </div>

            <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">02. Database</div>
                <h3 class="text-xl font-bold mb-3">Task Manager (Soon)</h3>
                <p class="text-gray-400 text-sm mb-4">A CRUD application that allows users to manage tasks using a MySQL database.</p>
                <div class="flex space-x-3 text-xs font-bold text-gray-500">
                    <span>MYSQL</span>
                    <span>PHP</span>
                </div>
            </div>

            <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">03. API</div>
                <h3 class="text-xl font-bold mb-3">Weather Dashboard</h3>
                <p class="text-gray-400 text-sm mb-4">Integrating a 3rd-party API to fetch real-time weather data for any city.</p>
                <div class="flex space-x-3 text-xs font-bold text-gray-500">
                    <span>API</span>
                    <span>JSON</span>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-20 relative z-10">
        <h2 class="text-3xl font-bold mb-12 text-center">My <span class="text-blue-500">Tech Stack</span></h2>
        <div class="flex flex-wrap justify-center gap-8">
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-gray-800/50 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-blue-500 transition">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" class="w-10 h-10" alt="PHP">
                </div>
                <span class="mt-2 text-sm text-gray-400">PHP</span>
            </div>
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-gray-800/50 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-red-500 transition">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="w-10 h-10" alt="Laravel">
                </div>
                <span class="mt-2 text-sm text-gray-400">Laravel</span>
            </div>
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-gray-800/50 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-teal-400 transition">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="w-10 h-10" alt="Tailwind">
                </div>
                <span class="mt-2 text-sm text-gray-400">Tailwind</span>
            </div>
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-gray-800/50 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-blue-400 transition">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="w-10 h-10" alt="MySQL">
                </div>
                <span class="mt-2 text-sm text-gray-400">MySQL</span>
            </div>
        </div>
    </section>

    <section id="contact" class="max-w-4xl mx-auto px-4 py-20 text-center relative z-10">
        <h2 class="text-3xl font-bold mb-8">Let's <span class="text-blue-500">Connect</span></h2>
        
        <div class="flex flex-col md:flex-row items-center justify-center gap-6">
            <a href="https://www.facebook.com/Slimshady477" target="_blank" class="flex items-center space-x-3 bg-blue-600 px-8 py-3 rounded-xl hover:bg-blue-700 transition w-full md:w-auto justify-center">
                <svg class="w-6 h-6 fill-white" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span class="font-bold">Facebook</span>
            </a>

            <a href="mailto:your-email@example.com" class="flex items-center space-x-3 bg-white text-black px-8 py-3 rounded-xl hover:bg-gray-200 transition w-full md:w-auto justify-center border border-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span class="font-bold">Email Me</span>
            </a>
        </div>
    </section>

    <footer class="border-t border-gray-800 p-8 text-center text-gray-500 text-sm relative z-10 bg-slate-950/50">
        © 2026 — Built for practice, deployed for experience.
    </footer>

</body>
</html>