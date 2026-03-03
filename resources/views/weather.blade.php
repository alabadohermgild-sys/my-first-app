<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermz | Weather Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white flex items-center justify-center min-h-screen">

    <div class="max-w-md w-full bg-slate-900 p-8 rounded-3xl border border-slate-800 shadow-2xl">
        <a href="/" class="text-blue-500 text-sm mb-6 inline-block hover:underline">← Back to Portfolio</a>
        <h2 class="text-3xl font-bold mb-6">Weather <span class="text-blue-500">Dash</span></h2>
        
        <div class="flex space-x-2 mb-8">
            <input type="text" id="cityInput" placeholder="Enter city name..." 
                class="bg-slate-800 border border-slate-700 rounded-xl px-4 py-2 w-full focus:outline-none focus:border-blue-500 text-white">
            <button onclick="getWeather()" class="bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded-xl font-bold transition">
                Search
            </button>
        </div>

        <div id="weatherResult" class="hidden">
            <div class="text-center p-6 bg-slate-800/50 rounded-2xl border border-slate-700">
                <h3 id="cityName" class="text-2xl font-bold italic text-blue-400">City Name</h3>
                <p id="temp" class="text-6xl font-black my-4">24°C</p>
                <p id="desc" class="text-gray-400 capitalize tracking-wider">Clear Sky</p>
            </div>
        </div>
    </div>

    <script>
        async function getWeather() {
            const city = document.getElementById('cityInput').value;
            // FIXED: Your API key is now correctly placed here
            const apiKey = 'e564b830a2bb7c36327968f0691920b0'; 
            const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;

            if (!city) {
                alert("Please enter a city name first!");
                return;
            }

            try {
                const response = await fetch(url);
                const data = await response.json();
                
                if(data.cod === 200) {
                    document.getElementById('weatherResult').classList.remove('hidden');
                    document.getElementById('cityName').innerText = data.name;
                    document.getElementById('temp').innerText = Math.round(data.main.temp) + '°C';
                    document.getElementById('desc').innerText = data.weather[0].description;
                } else {
                    alert("City not found! Please check the spelling.");
                }
            } catch (error) {
                console.error("Error fetching weather:", error);
                alert("Connection error. Please try again later.");
            }
        }

        // Allow pressing "Enter" key to search
        document.getElementById('cityInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                getWeather();
            }
        });
    </script>
</body>
</html>