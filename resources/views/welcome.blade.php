{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
    <title>SpotMyAlien</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900 font-quicksand">

    {{-- Header --}}
    <header class="flex justify-between items-center px-6 py-4 shadow">
        <div class="font-bold text-lg w-[50px]">
            <img src="{{ asset('images/alien-space.svg') }}" alt="Kleine alien">
        </div>
        <nav class="space-x-4">
    <a href="{{ route('login') }}" class="text-sm hover:underline">login</a>
    <a href="{{ route('register') }}" class="text-sm hover:underline">register</a>
    <a href="{{ route('contact') }}" class="text-sm hover:underline">contact</a>
</nav>
    </header>

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-blue-300 to-blue-500 text-white py-36 px-24 md:flex items-center justify-between">
        <div class="md:w-1/2 space-y-4">
            <h1 class="text-5xl font-bold font-quicksand">SpotMyAlien</h1>
            <p>
                <a href="#" class="underline">Verzamelen. Documenteren. Begrijpen.</a>
            </p>
            <a href="#" class="inline-block bg-green-300 text-white px-6 py-2 mt-6 rounded hover:bg-green-600">
                Maak melding
            </a>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
            <img src="{{ asset('images/header-photo.jpg') }}" alt="UFO" class="rounded-xl max-w-sm shadow-lg transform scale-130">
        </div>
    </section>

    {{-- Waarom SpotMyAlien --}}
    <section class="bg-blue-400 text-white py-16 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Waarom SpotMyAlien</h2>
            <p class="text-gray-300 mb-10">
                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-green-300 p-6 rounded-xl shadow text-left">
                    <h3 class="text-xl font-bold mb-2">Informatie</h3>
                    <p>
                        Lees betrouwbare artikelen, analyses en getuigenverslagen over UFO-fenomenen. We scheiden feit van fictie.
                    </p>
                </div>
                <div class="bg-green-500 p-6 rounded-xl shadow text-left">
                    <h3 class="text-xl font-bold mb-2">Meldpunt</h3>
                    <p>
                        Documenteer waarnemingen in Vlaanderen. Vul een formulier in en upload beeldmateriaal.
                    </p>
                </div>
                <div class="bg-green-500 p-6 rounded-xl shadow text-left">
                    <h3 class="text-xl font-bold mb-2">Data Analyseren</h3>
                    <p>
                        Binnenkomende meldingen worden verwerkt in een openbaar overzicht: kaarten, tijdlijnen en trends.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white text-center py-4 text-sm">
        <p>Logo</p>
        <p>Made by team Baziel, Karel, Lisa & Brent</p>
    </footer>

</body>
</html>