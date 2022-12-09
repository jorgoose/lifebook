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
            <h1 class="text-4xl font-bold py-10">Introduction</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
            We can think of our lives as a story. After we die, our life story will 
            be told by those who knew us. This story can help positively shape or inspire others. 
            Conversely, this story can end badly, with no real plot to stay engaged with along the way. 
            In an attempt to put some order into our life story, we often try to organize our lives with 
            daily to-do lists and monthly planners, yearly goals, long-term financial investments, etc. 
            Many of us use these tools, as they do have distinct merits, yet we do not take a step back 
            to view our lives as a whole. We do not realize that life is unfolding according to well-defined 
            stages, or chapters, that provide the structure for our life story and serve as a context for 
            making strategic life decisions. We often manage the present life situations but fail to see 
            how these moments fit into the larger storyline. We fail to see the long-term ramifications 
            from making particular choices or the possible benefits of life-course corrections. To help 
            us with a better view of the bigger picture, we need a guide for strategic life decisions; a 
            “table of contents” to help us see how individual chapters relate to the overall storyline. 
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
            The guide for strategic life decisions is important because we have very little or no control
             over certain parts of our story, particularly concerning early childhood or end of life. For
              example, we cannot choose our parents, their parenting abilities, or their vocation. We do 
              not choose the initial language we learn, culture that shapes us, or economic status. We also
               have very little control over when and how we will die, although certain decisions during 
               life may deeply affect this. Additionally, we cannot control certain things that occur as 
               part of the heart of our story – such as living through a war or natural catastrophe, the 
               loss of a child, friend, or spouse, or an unexpected career change. 
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
            As we mature, we often ask deep questions about life – about its meaning, the “what ifs” when 
            recalling divergent paths, the existence of God, etc. Regardless of how we deal with these deep 
            questions, life has a general pattern; it is not merely a chaotic series of events despite the 
            lack of control that we can feel. Thinking through this pattern can help us lead full and satisfying
            lives, and equip us to better confront the challenges that will certainly arise.
            </p>
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
