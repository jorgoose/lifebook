<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    </head>
    <body class="antialiased">
        <nav class="bg-gray-800 py-4 px-8">
            <div class="flex items-center justify-between">
                <h1 class="text-white text-xl font-bold">My Living Eulogy</h1>
                <div>
                    <a href="#" class="text-white hover:text-gray-400 mr-6">Home</a>
                    <a href="#" class="text-white hover:text-gray-400 mr-6">Chapters</a>
                    <a href="#" class="text-white hover:text-gray-400">About</a>
                </div>
            </div>
        </nav>
        <div class="container text-center align-middle py-10">
            <p>TODO</p>
        </div>
        <div class="container text-center align-middle pb-20">
            <button id="goToIntro2" class="bg-gray-800 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full">
                    Next
            </button>

            <script type="text/javascript">
                document.getElementById("goToIntro2").onclick = function () {
                    location.href = "/introduction/2";
                };
            </script>
        </div>
    </body>
</html>
