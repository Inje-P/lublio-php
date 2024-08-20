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

    <div class="hero-pink animated fade_1">
        <h1 class="animated riseUp_2" style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 700">
            읽기, 쓰기, 말하기의 기초가 되는 영어 알파벳 배우기
        </h1>
    </div>

    <div class="wrapper animated fade_1">

        <?php
        require("../../../../components/breadcrumbs.php");
        ?>

        <div style="margin-bottom: 20px;">

            <div class="callout-container">
                <div class="callout-pink">
                    <h2 style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 700">
                        영어 알파벳
                    </h2>
                </div>
            </div>

            <div class="carousel">
                <div class="control-panel">
                    <button id="button-prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="control-panel-title">
                        <p style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 500">
                            알파벳
                        </p>
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

            <p style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 500">
                알파벳은 영어 학습의 출발점입니다. 26개의 글자를 익히면 읽기, 쓰기, 발음을 위한 기초를 탄탄하게 다질 수 있습니다. 각 글자는 고유한 소리와 모양을 가지고 있으며, 이는 단어를 인식하고 문장을 구성하는 데 필수적입니다.
            </p>

            <table class="styled-table">
                <thead>
                    <tr>
                        <th style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 700">알파벳</th>
                        <th style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 700">발음</th>
                        <th style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 700">예</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A a</td>
                        <td>[eɪ]</td>
                        <td>Apple</td>
                    </tr>
                    <tr>
                        <td>B b</td>
                        <td>[biː]</td>
                        <td>Ball</td>
                    </tr>
                    <tr>
                        <td>C c</td>
                        <td>[siː]</td>
                        <td>Cat</td>
                    </tr>
                    <tr>
                        <td>D d</td>
                        <td>[diː]</td>
                        <td>Dog</td>
                    </tr>
                    <tr>
                        <td>E e</td>
                        <td>[iː]</td>
                        <td>Elephant</td>
                    </tr>
                    <tr>
                        <td>F f</td>
                        <td>[ɛf]</td>
                        <td>Fish</td>
                    </tr>
                    <tr>
                        <td>G g</td>
                        <td>[dʒiː]</td>
                        <td>Goat</td>
                    </tr>
                    <tr>
                        <td>H h</td>
                        <td>[eɪtʃ]</td>
                        <td>Hat</td>
                    </tr>
                    <tr>
                        <td>I i</td>
                        <td>[aɪ]</td>
                        <td>Ice</td>
                    </tr>
                    <tr>
                        <td>J j</td>
                        <td>[dʒeɪ]</td>
                        <td>Juice</td>
                    </tr>
                    <tr>
                        <td>K k</td>
                        <td>[keɪ]</td>
                        <td>Kite</td>
                    </tr>
                    <tr>
                        <td>L l</td>
                        <td>[ɛl]</td>
                        <td>Lion</td>
                    </tr>
                    <tr>
                        <td>M m</td>
                        <td>[ɛm]</td>
                        <td>Monkey</td>
                    </tr>
                    <tr>
                        <td>N n</td>
                        <td>[ɛn]</td>
                        <td>Nest</td>
                    </tr>
                    <tr>
                        <td>O o</td>
                        <td>[oʊ]</td>
                        <td>Orange</td>
                    </tr>
                    <tr>
                        <td>P p</td>
                        <td>[piː]</td>
                        <td>Pencil</td>
                    </tr>
                    <tr>
                        <td>Q q</td>
                        <td>[kjuː]</td>
                        <td>Queen</td>
                    </tr>
                    <tr>
                        <td>R r</td>
                        <td>[ɑːr]</td>
                        <td>Rabbit</td>
                    </tr>
                    <tr>
                        <td>S s</td>
                        <td>[ɛs]</td>
                        <td>Sun</td>
                    </tr>
                    <tr>
                        <td>T t</td>
                        <td>[tiː]</td>
                        <td>Tree</td>
                    </tr>
                    <tr>
                        <td>U u</td>
                        <td>[juː]</td>
                        <td>Umbrella</td>
                    </tr>
                    <tr>
                        <td>V v</td>
                        <td>[viː]</td>
                        <td>Violin</td>
                    </tr>
                    <tr>
                        <td>W w</td>
                        <td>[ˈdʌbəl.juː]</td>
                        <td>Whale</td>
                    </tr>
                    <tr>
                        <td>X x</td>
                        <td>[ɛks]</td>
                        <td>Xylophone</td>
                    </tr>
                    <tr>
                        <td>Y y</td>
                        <td>[waɪ]</td>
                        <td>Yellow</td>
                    </tr>
                    <tr>
                        <td>Z z</td>
                        <td>[ziː]</td>
                        <td>Zebra</td>
                    </tr>
                </tbody>
            </table>

            <p style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 500">
                이 섹션에서는 각 글자의 발음과 용법을 이해하는 데 도움이 되는 가이드를 제공합니다. 영어 초보자든 기본을 다시 공부하는 사람이든 알파벳을 마스터하는 것은 유창한 영어를 위한 첫 번째 중요한 단계입니다.
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