<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermz | Nightmaric Spawn</title>

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* This ensures the windows pop up when the URL hits the #ID */
        #about-window:target, #contact-window:target { 
            display: flex !important; 
        }
    </style>
</head>
<body class="bg-slate-950 text-white font-sans overflow-x-hidden">

    <div class="fixed inset-0 -z-10 overflow-hidden">
        <video autoplay muted loop playsinline class="absolute min-w-full min-h-full object-cover">
            <source src="/NFSS.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-slate-950/70 backdrop-blur-[2px]"></div>
    </div>

    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-white/5 border-b border-white/10 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-black tracking-tighter text-blue-500">HERMZ</div>
            
            <div class="flex items-center space-x-6">
                <a href="#about-window" class="text-sm font-medium hover:text-blue-400 transition">About</a>
                <a href="#projects" class="text-sm font-medium hover:text-blue-400 transition">Work</a>
                <a href="#contact-window" class="bg-blue-600 px-5 py-2 rounded-full hover:bg-blue-500 transition text-sm font-bold shadow-lg shadow-blue-500/30">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <main class="flex flex-col items-center justify-center min-h-screen text-center px-4 relative z-10">
        <h1 class="text-6xl md:text-8xl font-black mb-4 tracking-tight">
            Hello, I'm <span class="text-blue-500">Gild</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mb-8">
            A learner in tech, a servant in faith.
        </p>
        <div class="flex space-x-4">
            <a href="/weather" class="border border-blue-500 bg-blue-500/10 px-8 py-3 rounded-full hover:bg-blue-500 hover:text-white transition uppercase font-bold tracking-widest text-xs">
                View My Live Work
            </a>
            <a href="#projects" class="border border-gray-500 px-8 py-3 rounded-full hover:bg-white hover:text-black transition uppercase font-bold tracking-widest text-xs">
                Browse Projects
            </a>
        </div>
    </main>

    <section id="projects" class="max-w-6xl mx-auto px-4 py-20 relative z-10">
        <h2 class="text-3xl font-bold mb-12 text-center text-white">Featured <span class="text-blue-500">Projects</span></h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-slate-900/50 backdrop-blur-md border border-slate-800 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">01. Full-Stack</div>
                <h3 class="text-xl font-bold mb-3 group-hover:text-blue-400">My First Laravel App</h3>
                <p class="text-gray-400 text-sm mb-4">A live web application built with PHP Laravel, connected to GitHub, and deployed automatically via Railway.</p>
                <div class="flex space-x-3 text-[10px] font-bold text-gray-500">
                    <span>LARAVEL</span> <span>RAILWAY</span> <span>GITHUB</span>
                </div>
            </div>

            <div class="bg-slate-900/50 backdrop-blur-md border border-slate-800 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">02. Database</div>
                <h3 class="text-xl font-bold mb-3">Task Manager (Soon)</h3>
                <p class="text-gray-400 text-sm mb-4">A CRUD application that allows users to manage tasks using a MySQL database.</p>
                <div class="flex space-x-3 text-[10px] font-bold text-gray-500">
                    <span>MYSQL</span> <span>PHP</span>
                </div>
            </div>

            <a href="/weather" class="block group">
                <div class="bg-slate-900/50 backdrop-blur-md border border-slate-800 p-6 rounded-2xl border-blue-500/50 hover:border-blue-500 transition h-full">
                    <div class="text-blue-400 text-sm font-mono mb-2">03. API</div>
                    <h3 class="text-xl font-bold mb-3 text-blue-400">Weather Dashboard</h3>
                    <p class="text-gray-400 text-sm mb-4">Integrating a 3rd-party API to fetch real-time weather data for any city. (Click to open)</p>
                    <div class="flex space-x-3 text-[10px] font-bold text-blue-500/50">
                        <span>API</span> <span>JSON</span> <span>LIVE</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <div id="about-window" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <a href="#" class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm"></a>
        <div class="relative bg-white text-slate-900 p-8 rounded-3xl max-w-md w-full shadow-2xl">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold tracking-tighter">About Me</h3>
                <a href="#" class="text-slate-400 hover:text-black text-3xl">&times;</a>
            </div>
            <p class="text-slate-600 leading-relaxed mb-6">
                Hi! I'm <span class="text-blue-600 font-bold">Hermgild</span>. I'm a passionate learner in tech, currently exploring the Laravel ecosystem. This portfolio is my first major step in deploying live apps!
            </p>
            <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 mb-6">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Tech Stack</p>
                <p class="text-sm font-medium">PHP, Laravel, Tailwind CSS, MySQL</p>
            </div>
            <a href="#" class="block text-center w-full py-3 bg-slate-900 text-white rounded-xl font-bold hover:bg-blue-600 transition">Close</a>
        </div>
    </div>

    <div id="contact-window" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <a href="#" class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm"></a>
        <div class="relative bg-white text-slate-900 p-8 rounded-3xl max-w-md w-full shadow-2xl">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold tracking-tighter text-blue-600">Let's Connect</h3>
                <a href="#" class="text-slate-400 hover:text-black text-3xl">&times;</a>
            </div>
            <div class="space-y-4">
                <a href="https://www.facebook.com/Slimshady477" target="_blank" class="flex items-center p-4 bg-blue-50 rounded-2xl hover:bg-blue-100 transition border border-blue-100">
                    <div class="bg-blue-600 p-3 rounded-xl text-white mr-4 shadow-lg shadow-blue-500/30">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-lg">Facebook</p>
                        <p class="text-xs text-slate-500">Add me on Facebook</p>
                    </div>
                </a>
                <a href="mailto:your-email@example.com" class="flex items-center p-4 bg-slate-50 rounded-2xl hover:bg-slate-100 transition border border-slate-200">
                    <div class="bg-slate-800 p-3 rounded-xl text-white mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-lg">Email</p>
                        <p class="text-xs text-slate-500">Send me a direct message</p>
                    </div>
                </a>
            </div>
            <a href="#" class="mt-8 block text-center w-full py-3 bg-slate-100 text-slate-500 rounded-xl font-bold hover:bg-slate-200 transition">Close</a>
        </div>
    </div>

    <section class="max-w-6xl mx-auto px-4 py-20 relative z-10">
        <h2 class="text-3xl font-bold mb-12 text-center text-white">My <span class="text-blue-500">Tech Stack</span></h2>
        <div class="flex flex-wrap justify-center gap-8 text-white">
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
        </div>
    </section>

    <footer class="border-t border-white/5 p-8 text-center text-gray-500 text-xs relative z-10 bg-slate-950/50">
        © 2026 Hermz — Built for practice, deployed for experience.
    </footer>

</body>
</html>