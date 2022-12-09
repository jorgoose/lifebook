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
        <div class="container align-middle py-40">
            <h1 class="text-4xl font-bold text-center">My Living Eulogy</h1>
            <p class="text-gray-600 text-center py-4">A place to document and share the legacy you want to leave behind.</p>
            <div class="flex justify-center">
                <a href="introduction/1" class="bg-green-500 px-8 py-4 rounded-full text-white font-bold hover:bg-green-400">Start Your Eulogy</a>
            </div>
        </div>
    </body>
</html>
