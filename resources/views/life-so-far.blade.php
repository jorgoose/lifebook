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
            <h1 class="text-4xl font-bold py-10">My Life So Far</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">Although these traditions and perspectives are interesting to read about, the true benefit is realized when we apply them to our own life. To help with this, you will develop a timeline that records your story, up to and including part of the stage you are in. The timeline can be built on either the four or five life stage models. For example, here is an explanation of a timeline divided into four stage perspective as suggested by Buford (2016).</p>
        </div>
        <div class="container py-10">
            <p class="text-lg font-bold leading-relaxed mb-6 px-20">
                Stage 1: Lover (Childhood and Adolescence – ages 0-20)
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                A majority of our personality is formed by the time we are six years old. Much of the developmental research has been focused on this age – e.g., Kohlberg’s and Piaget’s research break down the oral and cognitive development of this period. From an adult’s perspective, however, this stage is past, so including it on your timeline is to better understand how this stage has shaped our present state of development. Record people, events, and experiences that were significant during your childhood and adolescence – to help you plan your development strategies from the present onward. 
            </p>
            <p class="text-lg font-bold leading-relaxed mb-6 px-20">
                Stage 2: Warrior (Early Adulthood – ages 20-40)
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                Once past the first transition occurring around twenty years old, concerns become finding and keeping work; laying financial, social, and religious foundations; and starting a family. If you are entering or living in this stage, record your goals around the concerns of this stage and look ahead as far as you can into the remaining stages. If you are in or past this stage, write about how the significant people, events, and experiences helped shape the time you are presently in, so you can better plan for Stages 3 and 4.
            </p>
            <p class="text-lg font-bold leading-relaxed mb-6 px-20">
                Stage 3: King (Middle Adulthood – ages 40-60)
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                Once past the second transition, concerns become building a deepening marriage, transitioning young adult children fully into life, building finances for the future, tending to personal health, and accomplishing meaningful and satisfying work. If you are in or past this stage, write about how the significant people, events, and experiences helped shape the time you are presently in, so you can better plan for Stage 4.
            </p>
            <p class="text-lg font-bold leading-relaxed mb-6 px-20">
                Stage 4: Sage (Late Adulthood – ages 60+)
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                After the third and final transition, primary concerns usually focus on financial well-being, health, and heritage. Heritage consists of passing on our values to our grandchildren and the future dispersion of wealth, possessions, and wisdom. The dominant concern too often focuses on enjoying the modern concept of retirement; however, the most fulfilled people in this stage often are those who continue some form of purposeful and meaningful work. If you are in this stage, write about how the significant people, events, and experiences helped shape the time you are presently in, so you can better explain all the events and people that have helped form who you are, which will help you articulate your legacy.
            </p>
        </div>
        <div class="container text-center pb-20">
            <button id="goToTimelineIntro" class="bg-gray-800 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full">
                    Next
            </button>

            <script type="text/javascript">
                document.getElementById("goToTimelineIntro").onclick = function () {
                    location.href = "/life-so-far/constructing-your-timeline";
                };
            </script>
        </div>
    </body>
</html>
