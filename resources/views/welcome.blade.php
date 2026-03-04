<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermz | Nightmaric Spawn</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #about-window:target, #contact-window:target { display: flex !important; }
        
        @keyframes name-glow {
            0%, 100% { color: #3b82f6; text-shadow: 0 0 10px rgba(59, 130, 246, 0.2); }
            50% { color: #60a5fa; text-shadow: 0 0 20px rgba(96, 165, 250, 0.5); }
        }
        .animate-name { animation: name-glow 3s ease-in-out infinite; }

        .glass-panel {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .feed-scrollbar::-webkit-scrollbar { width: 4px; }
        .feed-scrollbar::-webkit-scrollbar-thumb { background: #3b82f6; border-radius: 10px; }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
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
            <div class="flex items-center space-x-4">
                <div class="text-2xl font-black tracking-tighter text-blue-500">HERMZ</div>
                <span class="hidden md:block text-[10px] font-bold text-gray-500 uppercase tracking-[0.2em] border-l border-white/10 pl-4">
                    Dashboard / <span class="text-blue-400">Welcome</span>
                </span>
            </div>
            <div class="flex items-center space-x-6">
                <div id="clock-container" class="hidden lg:flex flex-col items-end bg-blue-500/5 px-4 py-1 rounded border border-blue-500/10">
                    <span class="text-[8px] text-gray-500 uppercase tracking-widest font-black">Murcia, PH</span>
                    <div id="clock" class="font-mono text-[11px] text-blue-400 tracking-widest">00:00:00</div>
                </div>
                <a href="#about-window" class="text-sm font-medium hover:text-blue-400 transition">About</a>
                <a href="#projects" class="text-sm font-medium hover:text-blue-400 transition">Work</a>
                <a href="#contact-window" class="bg-blue-600 px-5 py-2 rounded-full hover:bg-blue-500 transition text-sm font-bold shadow-lg shadow-blue-500/30">Contact</a>
            </div>
        </div>
    </nav>

    <main class="flex flex-col items-center justify-center min-h-screen text-center px-4 relative z-10">
        <div class="mb-6 flex items-center space-x-2 bg-white/5 backdrop-blur-xl border border-white/10 px-4 py-1.5 rounded-full shadow-2xl">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
            </span>
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-blue-100">Welcome back, User</span>
        </div>
        <h1 class="text-6xl md:text-8xl font-black mb-4 tracking-tight">Hello, I'm <span class="animate-name">Gild</span></h1>
        <p class="text-xl text-gray-300 max-w-2xl mb-8">A learner in tech, a servant in faith.</p>
        
        <div class="flex flex-wrap justify-center gap-4 mb-10">
            <div class="bg-black/40 border border-white/10 px-4 py-2 rounded-xl backdrop-blur-md min-w-[100px]">
                <p class="text-[9px] text-gray-500 uppercase font-black tracking-tighter mb-1">Database</p>
                <div class="flex items-center justify-center space-x-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-[0_0_8px_#22c55e]"></span>
                    <span class="text-[10px] font-mono text-green-400">ONLINE</span>
                </div>
            </div>
            <div class="bg-black/40 border border-white/10 px-4 py-2 rounded-xl backdrop-blur-md min-w-[100px]">
                <p class="text-[9px] text-gray-500 uppercase font-black tracking-tighter mb-1">PHP Engine</p>
                <div class="flex items-center justify-center space-x-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 shadow-[0_0_8px_#3b82f6] animate-pulse"></span>
                    <span class="text-[10px] font-mono text-blue-400 uppercase">V8.2 Active</span>
                </div>
            </div>
            <div class="bg-black/40 border border-white/10 px-4 py-2 rounded-xl backdrop-blur-md min-w-[100px]">
                <p class="text-[9px] text-gray-500 uppercase font-black tracking-tighter mb-1">Latency</p>
                <div class="flex items-center justify-center space-x-2">
                    <span id="latency" class="text-[10px] font-mono text-yellow-500">24ms</span>
                </div>
            </div>
        </div>

        <div class="flex space-x-4">
            <a href="/weather" class="border border-blue-500 bg-blue-500/10 px-8 py-3 rounded-full hover:bg-blue-500 hover:text-white transition uppercase font-bold tracking-widest text-xs">View Global Weather</a>
            <a href="#projects" class="border border-gray-500 px-8 py-3 rounded-full hover:bg-white hover:text-black transition uppercase font-bold tracking-widest text-xs">Browse Projects</a>
        </div>
    </main>

    <div id="about-window" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <a href="#" class="absolute inset-0 bg-black/80 backdrop-blur-sm"></a>
        <div class="relative glass-panel rounded-3xl max-w-4xl w-full overflow-hidden flex flex-col md:flex-row shadow-2xl border-white/10">
            <div class="md:w-5/12 h-64 md:h-auto relative">
                <img src="https://ui-avatars.com/api/?name=Hermgild&background=3b82f6&color=fff&size=512" alt="Gild Photo" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
            </div>
            <div class="md:w-7/12 p-8 md:p-12">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-3xl font-black tracking-tighter text-blue-400 uppercase">About Me</h3>
                    <a href="#" class="text-white/40 hover:text-white text-3xl">&times;</a>
                </div>
                <p class="text-gray-300 leading-relaxed mb-6">
                    Hi! I'm <span class="text-blue-500 font-bold">Hermgild</span>. I'm a passionate learner in tech, currently exploring the Laravel ecosystem. This portfolio is my first major step in deploying live apps!
                </p>
                <div class="mb-8">
                    <p class="text-[10px] font-black text-gray-500 uppercase tracking-widest mb-3">Core Stack</p>
                    <div class="flex space-x-4">
                        <a href="https://www.php.net/" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" class="w-8 h-8 hover:scale-110 transition" title="PHP"></a>
                        <a href="https://laravel.com/" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="w-8 h-8 hover:scale-110 transition" title="Laravel"></a>
                        <a href="https://tailwindcss.com/" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="w-8 h-8 hover:scale-110 transition" title="Tailwind"></a>
                        <a href="https://www.mysql.com/" target="_blank"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="w-8 h-8 hover:scale-110 transition" title="MySQL"></a>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#projects" class="flex-1 bg-blue-600 text-center py-4 rounded-xl font-black uppercase text-xs tracking-widest hover:bg-blue-500 transition">View My Projects</a>
                    <a href="#" class="flex-1 bg-white/5 text-center py-4 rounded-xl font-black uppercase text-xs tracking-widest hover:bg-white/10 transition border border-white/10">Close</a>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-window" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <a href="#" class="absolute inset-0 bg-black/80 backdrop-blur-sm"></a>
        <div class="relative glass-panel rounded-3xl max-w-5xl w-full flex flex-col md:flex-row shadow-2xl overflow-hidden border-white/10">
            <div class="md:w-1/2 p-8 border-b md:border-b-0 md:border-r border-white/10">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="text-2xl font-black tracking-tighter text-blue-500">LET'S CONNECT</h3>
                    <a href="#" class="md:hidden text-3xl">&times;</a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <a href="https://www.facebook.com/Slimshady477" target="_blank" class="flex items-center p-4 bg-white/5 rounded-2xl hover:bg-blue-500/10 transition border border-white/5">
                        <div class="bg-blue-600 p-2.5 rounded-xl mr-3 text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </div>
                        <p class="font-bold text-xs uppercase tracking-tighter">Facebook</p>
                    </a>
                    <a href="mailto:hermgild@example.com" class="flex items-center p-4 bg-white/5 rounded-2xl hover:bg-slate-500/10 transition border border-white/5">
                        <div class="bg-slate-700 p-2.5 rounded-xl mr-3 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <p class="font-bold text-xs uppercase tracking-tighter">Email Me</p>
                    </a>
                </div>
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-gray-500 mb-2">Display Name</p>
                    <input id="nickname-input" type="text" class="w-full p-3 bg-white/5 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-blue-500 text-white mb-4" placeholder="Enter nickname...">
                    
                    <p class="text-[10px] font-black uppercase tracking-widest text-gray-500 mb-2">Leave a Message</p>
                    <textarea id="comment-input" class="w-full p-4 bg-white/5 border border-white/10 rounded-2xl text-sm focus:outline-none focus:border-blue-500 mb-3 h-28 text-white" placeholder="Type here..."></textarea>
                    <button onclick="postComment()" class="w-full py-4 bg-blue-600 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-blue-500 transition shadow-lg shadow-blue-500/20">Post Comment</button>
                </div>
            </div>
            <div class="md:w-1/2 p-8 bg-black/40">
                <div class="flex justify-between items-center mb-6">
                    <p class="text-[10px] font-black uppercase text-blue-500 tracking-[0.2em]">Live Activity Feed</p>
                    <a href="#" class="hidden md:block text-3xl text-gray-500 hover:text-white">&times;</a>
                </div>
                <div id="comment-feed" class="space-y-4 max-h-[420px] overflow-y-auto pr-2 feed-scrollbar">
                    </div>
            </div>
        </div>
    </div>

    <section id="projects" class="max-w-6xl mx-auto px-4 py-20 relative z-10">
        <h2 class="text-3xl font-bold mb-12 text-center text-white">Featured <span class="text-blue-500">Projects</span></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-slate-900/50 backdrop-blur-md border border-slate-800 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">01. Full-Stack</div>
                <h3 class="text-xl font-bold mb-3 group-hover:text-blue-400">My First Laravel App</h3>
                <p class="text-gray-400 text-sm mb-4">A live web application built with PHP Laravel, connected to GitHub, and deployed automatically via Railway.</p>
                <div class="flex space-x-3 text-[10px] font-bold text-gray-500"><span>LARAVEL</span> <span>RAILWAY</span> <span>GITHUB</span></div>
            </div>
            <div class="bg-slate-900/50 backdrop-blur-md border border-slate-800 p-6 rounded-2xl hover:border-blue-500 transition group">
                <div class="text-blue-400 text-sm font-mono mb-2">02. Logic</div>
                <h3 class="text-xl font-bold mb-3 group-hover:text-blue-400">Task Manager (CRUD)</h3>
                <p class="text-gray-400 text-sm mb-4">A data-driven application focused on Data Persistence and User State.</p>
                <div class="flex space-x-3 text-[10px] font-bold text-gray-500"><span>MYSQL</span> <span>PHP</span> <span>CRUD</span></div>
            </div>
            <a href="/weather" class="block group h-full">
                <div class="bg-slate-900/50 backdrop-blur-md border border-slate-800 p-6 rounded-2xl border-blue-500/50 hover:border-blue-500 transition h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 mt-4 mr-4"><span class="bg-blue-600 text-[8px] font-black px-2 py-1 rounded-md shadow-lg animate-pulse">LIVE</span></div>
                    <div class="text-blue-400 text-sm font-mono mb-2">03. API</div>
                    <h3 class="text-xl font-bold mb-3 text-blue-400">Weather Dashboard</h3>
                    <p class="text-gray-400 text-sm mb-4">Integrating a 3rd-party API to fetch real-time weather data for any city around the world.</p>
                </div>
            </a>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-20 relative z-10">
        <h2 class="text-3xl font-bold mb-12 text-center text-white">My <span class="text-blue-500">Tech Stack</span></h2>
        <div class="flex flex-wrap justify-center gap-8 text-white">
            <a href="https://www.php.net/" target="_blank" class="flex flex-col items-center group tech-card transition-all duration-300">
                <div class="w-16 h-16 bg-gray-800/50 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-blue-500 transition">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" class="w-10 h-10" alt="PHP">
                </div>
                <span class="mt-2 text-sm text-gray-400 group-hover:text-blue-500">PHP</span>
            </a>
            <a href="https://laravel.com/" target="_blank" class="flex flex-col items-center group tech-card transition-all duration-300">
                <div class="w-16 h-16 bg-gray-800/50 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-red-500 transition">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="w-10 h-10" alt="Laravel">
                </div>
                <span class="mt-2 text-sm text-gray-400 group-hover:text-red-500">Laravel</span>
            </a>
            <a href="https://tailwindcss.com/" target="_blank" class="flex flex-col items-center group tech-card transition-all duration-300">
                <div class="w-16 h-16 bg-gray-800/50 rounded-2xl flex items-center justify-center border border-gray-700 group-hover:border-teal-400 transition">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="w-10 h-10" alt="Tailwind">
                </div>
                <span class="mt-2 text-sm text-gray-400 group-hover:text-teal-400">Tailwind</span>
            </a>
        </div>
    </section>

    <footer class="border-t border-white/5 p-5 text-center text-gray-500 text-[10px] relative z-10 bg-slate-950/50 uppercase tracking-widest">
        © 2026 Hermz — System Heartbeat: <span class="text-green-500 animate-pulse">Operational</span>
    </footer>

    <script src="https://www.gstatic.com/firebasejs/9.22.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.22.0/firebase-database-compat.js"></script>

    <script>
        // FIREBASE CONFIGURATION
        const firebaseConfig = {
            apiKey: "AIzaSyAZeLdrBrAgPMgJw8gzlnoykBKYa1WwDp8",
            authDomain: "portfolio-342e5.firebaseapp.com",
            databaseURL: "https://portfolio-342e5-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "portfolio-342e5",
            storageBucket: "portfolio-342e5.firebasestorage.app",
            messagingSenderId: "151516295330",
            appId: "1:151516295330:web:2cc072d63f9ec0969b27fb",
            measurementId: "G-JBV3229YH2"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const database = firebase.database();
        const commentsRef = database.ref('comments');

        // CLOCK LOGIC (UNTOUCHED)
        function updateClock() {
            const now = new Date();
            const options = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
            document.getElementById('clock').textContent = now.toLocaleTimeString('en-US', options);
        }
        setInterval(updateClock, 1000);
        updateClock(); 

        // LATENCY LOGIC (UNTOUCHED)
        setInterval(() => {
            const base = 20;
            const random = Math.floor(Math.random() * 15);
            document.getElementById('latency').textContent = (base + random) + 'ms';
        }, 3000);

        // GLOBAL COMMENT LOGIC (NEW)
        commentsRef.on('value', (snapshot) => {
            const feed = document.getElementById('comment-feed');
            feed.innerHTML = ''; // Clear current local view
            const data = snapshot.val();
            
            if (data) {
                // We show newest comments at the top
                Object.keys(data).forEach((key) => {
                    const c = data[key];
                    const initial = c.name ? c.name.charAt(0).toUpperCase() : 'U';
                    const div = document.createElement('div');
                    div.className = "flex space-x-3 group animate-fade-in";
                    div.innerHTML = `
                        <div class="w-10 h-10 rounded-full bg-blue-500/20 border border-blue-500/50 flex items-center justify-center font-bold text-blue-400 text-xs shrink-0">${initial}</div>
                        <div class="bg-white/5 p-4 rounded-2xl rounded-tl-none border border-white/5 w-full relative">
                            <p class="text-[10px] font-black text-blue-400 uppercase mb-1">${c.name || 'Guest Visitor'}</p>
                            <p class="text-sm text-gray-400 leading-tight">${c.text}</p>
                            <button onclick="deleteComment('${key}')" class="absolute top-2 right-2 text-gray-600 hover:text-red-500 opacity-0 group-hover:opacity-100 transition-all text-[8px] font-bold">REMOVE</button>
                        </div>
                    `;
                    feed.prepend(div);
                });
            }
        });

        function postComment() {
            const nameInput = document.getElementById('nickname-input');
            const msgInput = document.getElementById('comment-input');
            
            if (msgInput.value.trim() === "") {
                alert("Please type a message first!");
                return;
            }

            // Save to Firebase (This syncs it for everyone globally)
            commentsRef.push({
                name: nameInput.value.trim() || 'Anonymous',
                text: msgInput.value.trim(),
                timestamp: Date.now()
            });

            // Clear inputs
            msgInput.value = "";
        }

        function deleteComment(id) {
            if(confirm("Delete this comment for everyone?")) {
                database.ref('comments/' + id).remove();
            }
        }
    </script>
</body>
</html>