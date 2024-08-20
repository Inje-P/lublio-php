<!DOCTYPE html>
<html lang="en" color-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lublio</title>

    <link rel="stylesheet" type="text/css" href="../../../../css/common.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3b42a5b89f.js" crossorigin="anonymous"></script>

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
</head>

<body>

    <?php
    require("../../../../components/header.php");
    ?>

    <div class="hero-blue animated fade_1">
        <h1 class="animated riseUp_2">Learn the French Alphabet: Foundation for Reading, Writing, and Speaking</h1>
    </div>

    <div class="wrapper animated fade_1">

        <?php
        require("../../../../components/breadcrumbs.php");
        ?>

        <div style="margin-bottom: 20px;">

            <div class="callout-container">
                <div class="callout-blue">
                    <h2>
                        French Alphabet
                    </h2>
                </div>
            </div>

            <div class="carousel">
                <div class="control-panel">
                    <button id="button-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="control-panel-title">
                        <p>Alphabet</p>
                    </div>
                    <button id="button-next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
                <div class="screen">
                    <p id="screen-text">Start</p>
                </div>
                <div class="progress-bar">
                    <div class="progress-value"></div>
                </div>
            </div>

            <p>
                The French alphabet is the foundation of your language learning journey. While similar to the English alphabet, the French alphabet has unique accents and sounds that are crucial to master. Understanding these 26 letters, along with their correct pronunciation, is your first step toward fluency in reading, writing, and speaking French.
            </p>

            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Lettre</th>
                        <th>Prononciation</th>
                        <th>Mot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A a</td>
                        <td>[a]</td>
                        <td>Avion</td>
                    </tr>
                    <tr>
                        <td>B b</td>
                        <td>[be]</td>
                        <td>Bateau</td>
                    </tr>
                    <tr>
                        <td>C c</td>
                        <td>[se]</td>
                        <td>Chat</td>
                    </tr>
                    <tr>
                        <td>D d</td>
                        <td>[de]</td>
                        <td>Chien</td>
                    </tr>
                    <tr>
                        <td>E e</td>
                        <td>[ø]</td>
                        <td>Éléphant</td>
                    </tr>
                    <tr>
                        <td>F f</td>
                        <td>[ɛf]</td>
                        <td>Fleur</td>
                    </tr>
                    <tr>
                        <td>G g</td>
                        <td>[ʒe]</td>
                        <td>Gâteau</td>
                    </tr>
                    <tr>
                        <td>H h</td>
                        <td>[aʃ]</td>
                        <td>Hôtel</td>
                    </tr>
                    <tr>
                        <td>I i</td>
                        <td>[i]</td>
                        <td>Île</td>
                    </tr>
                    <tr>
                        <td>J j</td>
                        <td>[ʒi]</td>
                        <td>Jardin</td>
                    </tr>
                    <tr>
                        <td>K k</td>
                        <td>[ka]</td>
                        <td>Kangourou</td>
                    </tr>
                    <tr>
                        <td>L l</td>
                        <td>[ɛl]</td>
                        <td>Lion</td>
                    </tr>
                    <tr>
                        <td>M m</td>
                        <td>[ɛm]</td>
                        <td>Maison</td>
                    </tr>
                    <tr>
                        <td>N n</td>
                        <td>[ɛn]</td>
                        <td>Neige</td>
                    </tr>
                    <tr>
                        <td>O o</td>
                        <td>[o]</td>
                        <td>Orange</td>
                    </tr>
                    <tr>
                        <td>P p</td>
                        <td>[pe]</td>
                        <td>Pomme</td>
                    </tr>
                    <tr>
                        <td>Q q</td>
                        <td>[ky]</td>
                        <td>Quatre</td>
                    </tr>
                    <tr>
                        <td>R r</td>
                        <td>[ɛʁ]</td>
                        <td>Renard</td>
                    </tr>
                    <tr>
                        <td>S s</td>
                        <td>[ɛs]</td>
                        <td>Soleil</td>
                    </tr>
                    <tr>
                        <td>T t</td>
                        <td>[te]</td>
                        <td>Train</td>
                    </tr>
                    <tr>
                        <td>U u</td>
                        <td>[y]</td>
                        <td>Ursule</td>
                    </tr>
                    <tr>
                        <td>V v</td>
                        <td>[ve]</td>
                        <td>Vache</td>
                    </tr>
                    <tr>
                        <td>W w</td>
                        <td>[dublə.ve]</td>
                        <td>Wagon</td>
                    </tr>
                    <tr>
                        <td>X x</td>
                        <td>[iks]</td>
                        <td>Xylophone</td>
                    </tr>
                    <tr>
                        <td>Y y</td>
                        <td>[igʁɛk]</td>
                        <td>Yacht</td>
                    </tr>
                    <tr>
                        <td>Z z</td>
                        <td>[zɛd]</td>
                        <td>Zoo</td>
                    </tr>
                </tbody>
            </table>

            <p>
                This section will guide you through each letter, emphasizing the differences and helping you practice their sounds. By mastering the French alphabet, you’ll be well-prepared to tackle more complex aspects of the language, making your learning experience smoother and more effective.
            </p>

        </div>

    </div>

    <script>
        /*
         * ──────────────────────────────
         * CAROUSEL
         * ──────────────────────────────
         */

        // Elements
        const buttonPrev = document.getElementById("button-prev");
        const buttonNext = document.getElementById("button-next");
        const screenText = document.getElementById("screen-text");
        const progress = document.querySelector(".progress-bar");

        // Data
        const data = [
            'A a',
            'B b',
            'C c',
            'D d',
            'E e',
            'F f',
            'G g',
            'H h',
            'I i',
            'J j',
            'K k',
            'L l',
            'M m',
            'N n',
            'O o',
            'P p',
            'Q q',
            'R r',
            'S s',
            'T t',
            'U u',
            'V v',
            'W w',
            'X x',
            'Y y',
            'Z z'
        ];

        // Init
        const proportion = 100 / data.length;
        var count = 1;

        // Event Listener
        buttonNext.addEventListener(
            'click',
            () => {
                if (count <= data.length) {
                    console.log(count);
                    screenText.innerHTML = data[count - 1].toString();
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    count++;
                } else {
                    count = data.length;
                    console.log(count);
                }
            }
        );
        buttonPrev.addEventListener(
            'click',
            () => {
                count--;
                if (count > 0) {
                    console.log(count);
                    screenText.innerHTML = data[count - 1].toString();
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                } else if (count <= 0) {
                    count = 1;
                }
            }
        );
    </script>

</body>