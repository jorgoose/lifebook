<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">

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
            <h1 class="text-4xl font-bold py-10">Constructing Your Timeline</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                It is time to start developing your own timeline. Adjust the timeline to your life. For example, the number of life stages or the years for each stage can be adjusted. Also, add your current age and labels to the timeline. Reflect on the wisdom traditions and add any descriptive words that will help you picture a given developmental stage. Keep comments brief and group information by the categories listed below. Try to complete the first draft in one sitting, writing something in every stage that you have experienced thus far. Once all your thoughts are captured and the first draft is complete, then review and revise.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                As you develop your life stage timeline, the idea of “hinge moments” can help provide substance, but only if these hinge moments have shaped your life in a significant way. A hinge moment is when the trajectory of your life changes in a relatively short time. A hinge acts to open or close something, to reorient it from one spot to another, marking a definite change from a previous status. Hinge moments shape or reshape your view of or direction in life. Examples include interactions with a significant person such as a teacher or significant events such as the death of a loved one, a major conflict or failure, a divorce or breakup, a key accomplishment such as graduation, relocation, change in jobs, etc. Hinge moments may occur in the following categories, but are not limited to these particular subjects:
            </p>
        </div>
        <div class="container">
            <ul class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                <li class="pb-5">
                    <p class="font-bold">Service Experiences:</p>
                    This refers to service to others, usually without pay. This could be through your community of faith, community service where you live, your school, in your neighborhood, etc. 
                </li>
                <li class="pb-5">
                    <p class="font-bold">Educational Experiences:</p>
                    These involve both formal experiences (e.g., high school and university education) and nonformal experiences such as conversations with a parent, vacations, or times around the dinner table. It can also be self-directed such as teaching yourself to play an instrument.
                </li>
                <li class="pb-5">
                    <p class="font-bold">Work Experiences:</p>
                    Work experiences can vary greatly – some paid work and some unpaid work, such as work growing up on a farm. Only record those work experiences that helped shape your character or gave you a view of the kind of work you would like to do in the future.
                </li>
                <li class="pb-5">
                    <p class="font-bold">Family Experiences:</p>
                    Family experiences often have some of the most profound effects on life development. How did my relationships impact my life direction?  Include any positive or negative family experiences that changed your development significantly. This may include vacations, conflict, divorce, marriage, or relationships with family members. It may include the birth of your own children.
                </li>
                <li class="pb-5">
                    <p class="font-bold">Non-family Relationships:</p>
                    As we age, particular friendships can impact our lives greatly, especially those that occur during personally or culturally formative times, such as high school and college. Individuals or groups of friends can greatly impact who we become. Events such as a breakup in a romantic relationship or death of a beloved pet can also serve as hinge moments.
                </li>
                <li class="pb-5">
                    <p class="font-bold">Achievements:</p>
                    What do you feel you are really good at, based upon accomplishments in your life up to this point? What recognitions, achievements, or promotions created a new trajectory in your life? 
                </li>
                <li class="pb-5">
                    <p class="font-bold">Mentors:</p>
                    A mentor is a person to whom you look for counsel at different points in life. There are several kinds of mentors: the most common being an older person with more life experience. A mentor could be a parent, teacher, spiritual leader, or professional colleague. Mentors may include an author or key historical figure whom you may only have met through written works or a biography or autobiography. Mentors may be peers whom you look up to, or even someone younger whose gifts or skills you greatly respect.
                </li>
            </ul>
        </div>
        <div class="container text-center align-middle py-10">
            <h1 class="text-4xl font-bold py-10">
                [ TODO - Develop interactive timeline for here ] </br>
                [ Hinge moments on timeline will be rankable ]
            </h1>
            <p class="text-lg font-bold leading-relaxed mb-6 px-20">
                Rank the Hinge Moments
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                Rank up to ten of your hinge moments on a scale ranging from -10 to 10 (10 being the highest high, -10 being the lowest low). Then graph the hinge moments chronologically. Do not worry about the “right answer,” simply use this exercise to stimulate reflection and observe any trends in your timeline. Use the “Life-Line” graph to help structure this exercise.
            </p>
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
