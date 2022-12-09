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
        <div class="container flex flex-col text-center align-middle justify-center content-center py-10">
            <h1 class="text-4xl font-bold py-10">Life Stages in Modern Research</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
            The wisdom of these various traditions has been confirmed by modern research in life development. In more recent years there has been a vast amount of research on the life development process. Some of these are under the concept of “life cycle,” some referred to as “life span,” and all in the sphere of “developmental literature.” Several key development researchers include Carl Jung 
                <a class="text-blue-600" href="https://www.institute4learning.com/2020/04/10/the-stages-of-life-according-to-carl-jung/">(life cycle development)</a>, Erik Erickson 
                <a class="text-blue-600" href="https://www.verywellmind.com/erik-eriksons-stages-of-psychosocial-development-2795740">(childhood development)</a>, Jean Piaget 
                <a class="text-blue-600" href="https://childandfamilyblog.com/piaget-stages-cognitive-development/?gclid=Cj0KCQjwtvqVBhCVARIsAFUxcRtIQkh9d4zMSav2GHO6rvbL2VparzRh_fH0Y7kS8MfhbPsunMsfHhAaAiaUEALw_wcB">(cognitive development)</a>, and Lawrence Kohlberg 
                <a class="text-blue-600" href="https://www.simplypsychology.org/kohlberg.html">(moral development)</a>, whose findings are rooted in the Hebrew past tradition. This more modern research emphasizes that past wisdom traditions still have application to our lives today. 
            </p>

            <h2 class="font-bold py-10">Twelve life stage perspective suggested by Thomas Armstrong (Armstrong, 2019). </h2>
            <table class="table-auto border-2 mx-20 border-gray-800 bg-gray-100 text-gray-700 rounded-lg">
                <tr class="font-bold text-gray-800">
                    <td class="border px-4 py-4 bg-gray-300">Age</td>
                    <td class="border px-4 py-4 bg-gray-300">Life Stage</td>
                    <td class="border px-4 py-4 bg-gray-300">Description</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Prebirth</td>
                    <td class="border px-4 py-4">Potential</td>
                    <td class="border px-4 py-4">The child who has not yet been born could become anything and thus holds for all of humanity the principle of what we all may yet become in our lives.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Birth</td>
                    <td class="border px-4 py-4">Hope</td>
                    <td class="border px-4 py-4">When a child is born, it instills in its parents and other caregivers a sense of optimism; a sense that this new life may bring something new and special into the world. Hence, the newborn represents the sense of hope that we all nourish inside of ourselves to make the world a better place.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Infancy (0-3)</td>
                    <td class="border px-4 py-4">Vitality</td>
                    <td class="border px-4 py-4">The infant is a vibrant and seemingly unlimited source of energy. Babies thus represent the inner dynamo of humanity, ever fueling the fires of the human life cycle with new channels of psychic power.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Early Childhood (3-6)</td>
                    <td class="border px-4 py-4">Playfulness</td>
                    <td class="border px-4 py-4">When young children play, they recreate the world anew. They take what is and combine it with what is possible to fashion events that have never been seen before in the history of the world. As such, they embody the principle of innovation and transformation that underlies every single creative act that has occurred in the course of civilization.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Middle Childhood (6-9)</td>
                    <td class="border px-4 py-4">Imagination</td>
                    <td class="border px-4 py-4">In middle childhood, the sense of an inner subjective self develops for the first time, and this self is alive with images taken in from the outer world, and brought up from the depths of the unconscious. This imagination serves as a source of creative inspiration in later life for artists, writers, scientists, and anyone else who finds their days and nights enriched for having nurtured a deep inner life.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Late Childhood (9-12)</td>
                    <td class="border px-4 py-4">Ingenuity</td>
                    <td class="border px-4 py-4">Older children have acquired a wide range of social and technical skills that enable them to come up with marvelous strategies and inventive solutions for dealing with the increasing pressures that society places on them. This principle of ingenuity lives on in that part of ourselves that ever seeks new ways to solve practical problems and cope with everyday responsibilities.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Adolescence (12-20)</td>
                    <td class="border px-4 py-4">Passion</td>
                    <td class="border px-4 py-4">The biological event of puberty unleashes a powerful set of changes in the adolescent body that reflect themselves in a teenager’s sexual, emotional, cultural, and/or spiritual passion. Adolescence passion thus represents a significant touchstone for anyone who is seeking to reconnect with their deepest inner zeal for life.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Early Adulthood (20-35)</td>
                    <td class="border px-4 py-4">Enterprise</td>
                    <td class="border px-4 py-4">The biological event of puberty unleashes a powerful set of changes in the adolescent body that reflect themselves in a teenager’s sexual, emotional, cultural, and/or spiritual passion. Adolescence passion thus represents a significant touchstone for anyone who is seeking to reconnect with their deepest inner zeal for life.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Midlife (35-50)</td>
                    <td class="border px-4 py-4"></td>
                    <td class="border px-4 py-4"></td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Mature Adulthood (50-80)</td>
                    <td class="border px-4 py-4"></td>
                    <td class="border px-4 py-4"></td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Late Adulthood (80+)</td>
                    <td class="border px-4 py-4"></td>
                    <td class="border px-4 py-4"></td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">Death & Dying</td>
                    <td class="border px-4 py-4"></td>
                    <td class="border px-4 py-4"></td>
                </tr>
            </table>
        </div>
        <div class="container text-center align-middle pb-20">
            <button id="goToIntro4" class="bg-gray-800 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full">
                    Next
            </button>

            <script type="text/javascript">
                document.getElementById("goToIntro4").onclick = function () {
                    location.href = "/introduction/4";
                };
            </script>
        </div>
    </body>
</html>
