<!DOCTYPE html>
<html lang="en" color-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lublio</title>

    <link rel="stylesheet" type="text/css" href="../../../css/common.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3b42a5b89f.js" crossorigin="anonymous"></script>

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
</head>

<body>

    <?php
    require("../../../components/header.php");
    ?>

    <div class="hero-yellow animated fade_1">
        <h2 class="animated riseUp_2">Learn the German Alphabet: Foundation for Reading, Writing, and Speaking</h2>
    </div>

    <div class="wrapper animated fade_1">

        <?php
        require("../../../components/breadcrumbs.php");
        ?>

        <div style="margin-bottom: 20px;">

            <div class="callout-container">
                <div class="callout-yellow">
                    <h3>
                        German Alphabet
                    </h3>
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
                    <p id="screen-text"></p>
                </div>
                <div class="progress-bar">
                    <div class="progress-value"></div>
                </div>
            </div>

            <p>
                The German alphabet is similar to the English alphabet, but with some important differences that are essential to master. In addition to the 26 standard letters, German includes special characters like ä, ö, ü, and the ß (Eszett or sharp S). Understanding the German alphabet is your first step toward becoming fluent in reading, writing, and speaking the language.
            </p>

            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Buchstabe</th>
                        <th>Aussprache</th>
                        <th>Wort</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A a</td>
                        <td>[aː]</td>
                        <td>Apfel</td>
                    </tr>
                    <tr>
                        <td>B b</td>
                        <td>[beː]</td>
                        <td>Ball</td>
                    </tr>
                    <tr>
                        <td>C c</td>
                        <td>[tseː]</td>
                        <td>Computer</td>
                    </tr>
                    <tr>
                        <td>D d</td>
                        <td>[deː]</td>
                        <td>Drache</td>
                    </tr>
                    <tr>
                        <td>E e</td>
                        <td>[eː]</td>
                        <td>Elefant</td>
                    </tr>
                    <tr>
                        <td>F f</td>
                        <td>[ɛf]</td>
                        <td>Fisch</td>
                    </tr>
                    <tr>
                        <td>G g</td>
                        <td>[geː]</td>
                        <td>Giraffe</td>
                    </tr>
                    <tr>
                        <td>H h</td>
                        <td>[haː]</td>
                        <td>Haus</td>
                    </tr>
                    <tr>
                        <td>I i</td>
                        <td>[iː]</td>
                        <td>Igel</td>
                    </tr>
                    <tr>
                        <td>J j</td>
                        <td>[jɔt]</td>
                        <td>Jacke</td>
                    </tr>
                    <tr>
                        <td>K k</td>
                        <td>[kaː]</td>
                        <td>Kuh</td>
                    </tr>
                    <tr>
                        <td>L l</td>
                        <td>[ɛl]</td>
                        <td>Löwe</td>
                    </tr>
                    <tr>
                        <td>M m</td>
                        <td>[ɛm]</td>
                        <td>Maus</td>
                    </tr>
                    <tr>
                        <td>N n</td>
                        <td>[ɛn]</td>
                        <td>Nase</td>
                    </tr>
                    <tr>
                        <td>O o</td>
                        <td>[oː]</td>
                        <td>Obst</td>
                    </tr>
                    <tr>
                        <td>P p</td>
                        <td>[peː]</td>
                        <td>Pferd</td>
                    </tr>
                    <tr>
                        <td>Q q</td>
                        <td>[kuː]</td>
                        <td>Qualle</td>
                    </tr>
                    <tr>
                        <td>R r</td>
                        <td>[ɛʁ]</td>
                        <td>Rose</td>
                    </tr>
                    <tr>
                        <td>S s</td>
                        <td>[ɛs]</td>
                        <td>Sonne</td>
                    </tr>
                    <tr>
                        <td>T t</td>
                        <td>[teː]</td>
                        <td>Tiger</td>
                    </tr>
                    <tr>
                        <td>U u</td>
                        <td>[uː]</td>
                        <td>Uhr</td>
                    </tr>
                    <tr>
                        <td>V v</td>
                        <td>[faʊ]</td>
                        <td>Vogel</td>
                    </tr>
                    <tr>
                        <td>W w</td>
                        <td>[veː]</td>
                        <td>Wasser</td>
                    </tr>
                    <tr>
                        <td>X x</td>
                        <td>[ɪks]</td>
                        <td>Xylophon</td>
                    </tr>
                    <tr>
                        <td>Y y</td>
                        <td>[ʏpsɪlɔn]</td>
                        <td>Yacht</td>
                    </tr>
                    <tr>
                        <td>Z z</td>
                        <td>[tset]</td>
                        <td>Zebra</td>
                    </tr>
                    <tr>
                        <td>Ä ä</td>
                        <td>[ɛː]</td>
                        <td>Ärger</td>
                    </tr>
                    <tr>
                        <td>Ö ö</td>
                        <td>[øː]</td>
                        <td>Öl</td>
                    </tr>
                    <tr>
                        <td>Ü ü</td>
                        <td>[yː]</td>
                        <td>Übel</td>
                    </tr>
                    <tr>
                        <td>ß</td>
                        <td>[ɛs'tsɛt]</td>
                        <td>Süß</td>
                    </tr>
                </tbody>
            </table>

            <p>
                This section will guide you through each letter, focusing on its pronunciation and usage. By mastering the German alphabet, you’ll be well-prepared to tackle more advanced language skills and communicate effectively in German.
            </p>

        </div>

    </div>

    <script>
        /*
         * ──────────────────────────────
         * CAROUSEL
         * ──────────────────────────────
         */

        // Init
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
            'Z z',
            'Ä ä',
            'Ö ö',
            'Ü ü',
            'ß'
        ];
        const progress = document.querySelector(".progress-bar");
        const proportion = 100 / data.length;
        var count = 1;

        // Event Listener
        const buttonPrev = document.getElementById("button-prev");
        const buttonNext = document.getElementById("button-next");
        buttonNext.addEventListener(
            'click',
            () => {
                if (count <= data.length) {
                    document.getElementById("screen-text").innerHTML = data[count - 1].toString();
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    count++;
                } else {
                    count = data.length;
                }
            }
        );
        buttonPrev.addEventListener(
            'click',
            () => {
                count--;
                if (count > 0) {
                    document.getElementById("screen-text").innerHTML = data[count - 1].toString();
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                } else if (count <= 0) {
                    count = 1;
                }
            }
        );
    </script>

</body>