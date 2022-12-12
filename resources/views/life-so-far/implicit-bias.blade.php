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
            <h1 class="text-4xl font-bold pt-10">Timeline and Implicit Bias</h1>
        </div>
        <div class="text-lg leading-relaxed mb-6 px-20">
            <div class="flex flex-col mt-4">
                <label for="input" class="text-gray-700 mb-6">Implicit biases are personally held attitudes and stereotypes that we are not aware of. These are also known as unconscious biases or implicit social cognitions. There are many different examples of implicit biases, and can occur in categories such as race, gender, and sexuality. These biases often are developed as a result of the surrounding culture, media, family and non-family relationships, and upbringing. Take an implicit bias test, and reflect on how the moments in your timeline may have led to implicit biases, and also how any implicit biases may have or can influence items in your timeline.</label>
                <textarea id="input" rows="4" cols="50" class="border rounded p-2 w-full"></textarea>
            </div>
        </div>
        
        <div class="container text-center pb-20">
            <button id="goToDeconstructingTimeline" class="bg-gray-800 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full">
                    Next
            </button>

            <script type="text/javascript">
                document.getElementById("goToDeconstructingTimeline").onclick = function () {
                    location.href = "/life-so-far/deconstructing-your-timeline";
                };
            </script>
        </div>
    </body>
</html>
