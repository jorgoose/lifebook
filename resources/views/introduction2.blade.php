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
        <div class="container flex flex-col text-center align-middle justify-center content-center py-10">
            <h1 class="text-4xl font-bold py-10">Life Stages According to Past Traditions</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
            Past traditions view life as a pattern across a predictable set of life stages, each spanning a certain number of years. Knowledge of how to navigate through these patterns can help us skillfully make key decisions across the life stages. Past traditions provide a predictable perspective towards life, which sets the stage for living a skillful life. In The Seasons of a Man’s Life, ancient life development examples from three past traditions are outlined: Greek, Chinese, and Hebrew (Levison et al., 1986). Although technology and culture change, and our understanding of psychology and physiology have advanced, we share fundamental similarities to people across history. This includes the need to belong and to be respected, to learn and grow, and to work toward something larger and longer lasting than the individual. This means past traditions remain as applicable in modern times as they were when first developed, as is further explained below.
            </p>
            <h2 class="text-2xl font-bold pt-10 pb-2">Life Stages According to Greek Tradition</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                The ancient Greek lawyer, Solon, introduced a nine stage life development model, with each stage lasting seven years in about 700 B.C.
            </p>
            <table class="table-auto border-2 mx-20 border-gray-800 bg-gray-100 text-gray-700 rounded-lg">
                <tr class="font-bold text-gray-800">
                    <td class="border px-4 py-4 bg-gray-300">Age</td>
                    <td class="border px-4 py-4 bg-gray-300">Description</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">0-7</td>
                    <td class="border px-4 py-4">A boy at first is the man; unripe; then he casts his teeth; milk-teeth befitting the child he sheds in his seventh year.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">7-14</td>
                    <td class="border px-4 py-4">Then to his seven years God adding another seven, signs of approaching manhood show in the bud.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">14-21</td>
                    <td class="border px-8 py-4">Still in the third of the sevens his limbs are growing; his chin touched with a fleecy down, the bloom of the cheek gone.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">21-28</td>
                    <td class="border px-8 py-4">Now, in the fourth of the sevens ripen to greatest completeness the powers of the man, and his worth becomes plain to see.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">28-35</td>
                    <td class="border px-8 py-4">In the fifth he bethinks him that this is the season for courting, bethinks him that sons will preserve and continue his line.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">35-42</td>
                    <td class="border px-8 py-4">Now in the sixth his mind, ever open to virtue, broadens and never inspires him to profitless deeds.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">42-56</td>
                    <td class="border px-8 py-4">Seven times seven, and eight; the tongue and the mind for fourteen years together are now at their best.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">56-63</td>
                    <td class="border px-8 py-4">Still in the ninth is he able, but never so nimble in speech and in wit as he was in the days of his prime.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">63-70</td>
                    <td class="border px-8 py-4">Who to the tenth has attained, and has lived to complete it, has come to the time to depart on the ebb-tide of death.</td>
                </tr>
            </table>

            <h2 class="text-2xl font-bold pt-10 pb-2">Life Stages According to Chinese Tradition</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20">
                Confucius, writing about 500 B.C. in the Analects, identifies six stages in the life-development process, which match very closely with contemporary life span research. 
            </p>
            <table class="table-auto border-2 mx-20 border-gray-800 bg-gray-100 text-gray-700 rounded-lg">
                <tr class="font-bold text-gray-800">
                    <td class="border px-4 py-4 bg-gray-300">Age</td>
                    <td class="border px-4 py-4 bg-gray-300">Description</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">At 15</td>
                    <td class="border px-4 py-4">A boy at first is the man; unripe; then he casts his teeth; milk-teeth befitting the child he sheds in his seventh year.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">At 30</td>
                    <td class="border px-4 py-4">Then to his seven years God adding another seven, signs of approaching manhood show in the bud.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">At 40</td>
                    <td class="border px-8 py-4">Still in the third of the sevens his limbs are growing; his chin touched with a fleecy down, the bloom of the cheek gone.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">At 50</td>
                    <td class="border px-8 py-4">Now, in the fourth of the sevens ripen to greatest completeness the powers of the man, and his worth becomes plain to see.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">At 60</td>
                    <td class="border px-8 py-4">In the fifth he bethinks him that this is the season for courting, bethinks him that sons will preserve and continue his line.</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">At 70</td>
                    <td class="border px-8 py-4">Now in the sixth his mind, ever open to virtue, broadens and never inspires him to profitless deeds.</td>
                </tr>
            </table>

            <h2 class="text-2xl font-bold pt-10 pb-2">Life Stages According to the Talmud</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-2 px-20">
                The Talmud is written Hebrew literature that records the discussions of rabbis. Part of the Talmud broke the human life cycle into 14 stages.</p>
            <p class="text-lg text-gray-700 leading-relaxed mb-6 px-20"> This plan talks of “the ages of man.”</p>
            <table class="table-auto border-2 mx-20 border-gray-800 bg-gray-100 text-gray-700 rounded-lg">
                <tr class="font-bold text-gray-800">
                    <td class="border px-4 py-4 bg-gray-300">Age</td>
                    <td class="border px-4 py-4 bg-gray-300">Description</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">5</td>
                    <td class="border px-4 py-4">The age for reading (Scripture)</td>
                </tr>
                <tr>
                    <td class="border px-4 py-4">10</td>
                    <td class="border px-4 py-4">Misnah (the laws)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">13</td>
                    <td class="border px-8 py-4">13	The Commandments (Bar Mitzvah; moral responsibility)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">15</td>
                    <td class="border px-8 py-4">15	Gemara (Talmudic discussions; abstract reasoning)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">18</td>
                    <td class="border px-8 py-4">18	Bridechamber or Hupa (wedding canopy)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">20</td>
                    <td class="border px-8 py-4">20	Seeking a livelihood (pursuing an occupation)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">30</td>
                    <td class="border px-8 py-4">Authority or attaining full strength (“Koah”)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">40</td>
                    <td class="border px-8 py-4">Understanding or discernment</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">50</td>
                    <td class="border px-8 py-4">Giving counsel</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">60</td>
                    <td class="border px-8 py-4">Becoming an elder (wisdom; old age)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">70</td>
                    <td class="border px-8 py-4">White or gray hair</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">80</td>
                    <td class="border px-8 py-4">Gevurah (new, special strength of age)</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">90</td>
                    <td class="border px-8 py-4">Being bent under the weight of years</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">100</td>
                    <td class="border px-8 py-4">Being as if already dead and passed away from the affairs of this world</td>
                </tr>
            </table>
            
        </div>

        <div class="container text-center align-middle pb-20">
            <button id="goToIntro3" class="bg-gray-800 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-full">
                    Next
            </button>

            <script type="text/javascript">
                document.getElementById("goToIntro3").onclick = function () {
                    location.href = "/introduction/3";
                };
            </script>
        </div>
    </body>
</html>
