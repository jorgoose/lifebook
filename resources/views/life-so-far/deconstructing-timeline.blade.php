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
                <h1 class="text-white text-xl font-bold">
                    My Living Eulogy
                </h1>
                <div>
                    <a href="#" class="text-white hover:text-gray-400 mr-6">Home</a>
                    <a href="#" class="text-white hover:text-gray-400 mr-6">Chapters</a>
                    <a href="#" class="text-white hover:text-gray-400">About</a>
                </div>
            </div>
        </nav>
        <div class="container text-center align-middle py-10">
            <h1 class="text-4xl font-bold py-10">
                Deconstructing Your Timeline
            </h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                Once your timeline is constructed and revised, it is now time to deconstruct it. This means taking a closer look at timeline elements in each stage and examining the impact these have had on your life.
            </p>
        </div>
        <div class="text-lg leading-relaxed mb-6 px-20">
            <h3 class="font-bold">Life Stage Transition</h3>
            <p class="text-gray-700 mb-6">
                Change is inevitable and is a constant part of our lives. However, this does not necessarily make change easier to navigate, and this is especially so at the major life transition stages outlined previously. The transition from one life stage to another can cause anxiety and can be overwhelming, stressful, and difficult to adapt to. To bring in a racing analogy, the transition points could be considered corners where you must take time to slow down, and then to regain speed again after turning. Transitions are the spots where it is easiest to go “off road” if a turn is not successfully navigated. Most of us will go through multiple life stage transitions, but not everyone reaches the final stages. We will all die at some point, but if we are lucky, we will age out of each of the life stages.
            </p>
            <p class="text-gray-700 mb-6">
                There are three major transitions in life: 
                </br>&emsp; 1) The transition between adolescence and early adulthood when entering the workforce
                </br>&emsp; 2) Midlife when we reflect on our past and take stock of our lives
                </br>&emsp; 3) Retirement as we move from paid to unpaid work.
            </p>
            <h4 class="italic">
                Adolescence to Early Adulthood
            </h4>
            <p class="text-gray-700 mb-6">
                The major crisis of adolescence is the forging of an identity (Erikson, 1963). This identity can be expressed as the beliefs and values that a person stands for, and the direction in which that person chooses to go. Part of your identity is focused on finding and preparing for a career. However, as you work through this book, hopefully you will realize that there is more to your life purpose than your career. There were four statuses identified to explain how some people can get stuck during this transition (Marcia, 1966).
            </p>
            <ul class="list-disc ml-20 mb-6">
                <li>
                    <p class="underline inline">Diffusion</p>: Low exploration, low commitment. This is not having the awareness of the need to do something with one’s life.
                </li>
                <li>
                    <p class="underline inline">Foreclosure</p>: Low exploration, high commitment. This is when someone does not explore alternatives and takes whatever principles, values or direction that were passed to them from other people.
                </li>
                <li>
                    <p class="underline inline">Moratorium</p>: High exploration, low commitment. This is when some thought has been given to identity related questions, but there is not a commitment to achieve satisfactory results.
                </li>
                <li>
                    <p class="underline inline">Achievement</p>: High exploration, high commitment. This is accomplished through exploring some alternatives and then making a commitment.
                </li>
            </ul>
            <h4 class="italic">
                Midlife
            </h4>
            <p class="text-gray-700 mb-6">
                The midlife period is usually between the ages of 35 and 60. It can be thought of as your halftime in the game of life, as Buford explains in his book (2016). People have different responses to their awareness of being half-way along life’s journey. Transitions during midlife, unfortunately, often are associated with a “midlife crisis.” Most midlife experiences can be better described as midlife consciousness – a time of re-assessment, a time to figure out where you are going in life. Midlife consciousness can be viewed as an opportunity, not about loss or regret. This is a time to do an appraisal of all aspects of your life – work, relationships, physical health and well-being, spiritual growth, and more. This appraisal should drive you to ask life’s big questions – who am I, what am I living for, and where am I heading?
            </p>
            <h4 class="italic">
                Retirement
            </h4>
            <p class="text-gray-700 mb-6">
                Many people in later maturity suffer from a crisis of despair, experiencing deep regrets and often a sense of futility about the way they have lived their lives. Ending your employment can be a difficult transition as many people tie their purpose to their job. You should develop a plan that includes a real continuity beyond paid employment. Your sense of purpose does not stop when you leave your job, it will just take on a different form, which often includes a mixture of part-time jobs, volunteer opportunities, and more informal contributions as a parent, grandparent, friend, mentor, etc.
            </p>
            <hr class="mb-6">
            <p class="text-gray-700 mb-6">
            If you are in the midst of a transition, any feelings of grief and anxiety can be quite natural. If you find yourself stuck in a transition, find a trusted friend or counselor to talk things over.
            </p>
            <div class="flex flex-col mt-4">
                <label for="input" class="text-lg font-bold">Assignment:</label>
                <label for="input" class="text-gray-700">
                    <ul class="list-decimal ml-20 mb-6">
                        <li>
                            Can you think of hinge moments in your life that occurred during or because of these life-stage transitions? 
                        </li>
                        <li>
                            Have any of your family or friends struggled through transition periods?
                        </li>
                        <li>
                            What can you learn from their experiences?
                        </li>
                    </ul>
                </label>
                <textarea id="input" rows="4" cols="50" class="border rounded p-2 w-full"></textarea>
            </div>
        </div>
        <div class="container text-center pb-20">
            <button id="goToImplicitBias" class="bg-gray-800 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full">
                Next
            </button>

            <script type="text/javascript">
                document.getElementById("goToImplicitBias").onclick = function () {
                    location.href = "/life-so-far/implicit-bias";
                };
            </script>
        </div>
    </body>
</html>
