<?php
$doc_root = $_SERVER['DOCUMENT_ROOT'];
$root = $doc_root . "/lublio";
?>

<!DOCTYPE html>
<html lang="en" color-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lublio</title>

    <link rel="stylesheet" type="text/css" href="./css/common.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3b42a5b89f.js" crossorigin="anonymous"></script>

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />

    <style>
        .highlight {
            background-color: #eee;
        }
    </style>
</head>

<body>

    <?php
    require("./components/header.php");
    ?>

    <div class="hero-pink">
        <h1>The Evolution of Language: How Words Shape Our World</h1>
    </div>

    <div id="popup" class="popup animated fade_1">
        <div class="popup-content">
            <h1>Lublio</h1>
            <p>This is a popup box!</p>
            <div class="popup-buttons">
                <button id="redirectTo">
                    Start
                </button>
                <button id="closePopup">
                    Close
                </button>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <div style="margin-bottom: 20px;">
            <h1>Styled Quotes</h1>
            <div class="styled-quote-pink-left">
                <p class="text-original">
                    Hello! This is the best app in the world.
                </p>
                <p class="text-translated">
                    Bonjour ! C'est la meilleure application du monde.
                </p>
            </div>
            <div class="styled-quote-lime-right">
                <p class="text-original">
                    Salom! Bu dunyodagi eng yaxshi ilova.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
            <div class="styled-quote-azure-left">
                <p class="text-original">
                    Сәлем! Бұл әлемдегі ең жақсы қолданба.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
            <div class="styled-quote-blue-right">
                <p class="text-original">
                    Bonjour ! C'est la meilleure application du monde.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
            <div class="styled-quote-yellow-left">
                <p class="text-original">
                    Hallo! Dies ist die beste App der Welt.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
            <div class="styled-quote-orange-right">
                <p class="text-original">
                    Hola! Esta es la mejor aplicación del mundo.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
            <div class="styled-quote-green-left">
                <p class="text-original">
                    Ciao! Questa è la migliore app del mondo.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
            <div class="styled-quote-purple-right">
                <p class="text-original">
                    Привет! Это лучшее приложение в мире.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
            <div class="styled-quote-red-left">
                <p class="text-original">
                    Merhaba! Bu dünyanın en iyi uygulaması.
                </p>
                <p class="text-translated">
                    Hello! This is the best app in the world.
                </p>
            </div>
        </div>

        <div class="callout-container">
            <div class="callout-pink">
                <h2>
                    When is your birthday?
                </h2>
            </div>
        </div>

        <h3>Carousel</h3>

        <div class="carousel">
            <div class="control-panel">
                <button id="button-prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="control-panel-title">
                    <p>This is a title</p>
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

        <h3>
            Pop-up
        </h3>

        <div style="margin-bottom: 20px;">
            <ul style="list-style: none;">
                <button id="openPopup">Pop-up</button>
            </ul>
        </div>

        <h3>
            Drag
        </h3>

        <div style="margin-bottom: 20px;">
            <div id="drag" class="styled-section-pink" draggable="true">
                <p>
                    Drag Me
                </p>
            </div>
            <div id="drag" class="styled-section-blue" draggable="true">
                <p>
                    Drag Me
                </p>
            </div>
        </div>

        <div id="drophere" class="text-box">
            Drop Here!
        </div>

        <div style="margin-bottom: 20px;">
            <p>
                Lublio isn't just about learning a language; it's about embracing the freedom to explore the world with confidence. Our
                app is tailored for the modern wanderer, offering:
            </p>
            <ul class="styled-list">
                <li>Quick, practical lessons focused on real-world travel scenarios</li>
                <li>Cultural insights that help you blend in and avoid faux pas</li>
                <li>Location-based content that adapts to your travel destination</li>
                <li>Offline mode for learning on-the-go, even in remote areas</li>
                <li>Interactive challenges that make learning fun and addictive</li>
            </ul>
            <p>
                From ordering street food in Bangkok to negotiating with landlords in Lisbon, Lublio equips you with the linguistic
                tools to turn every interaction into an adventure. Our community of globe-trotting users shares tips, local secrets, and
                language exchange opportunities, making your journey richer and more connected.
            </p>
        </div>

    </div>

    <script>
        /*
         * ──────────────────────────────
         * POP-UP
         * ──────────────────────────────
         */

        const openPopup = document.querySelector('#openPopup');
        const closePopup = document.querySelector('#closePopup');
        const popup = document.querySelector('#popup');

        openPopup.addEventListener(
            "click",
            function() {
                popup.classList.add("show");
            }
        );
        closePopup.addEventListener(
            "click",
            function() {
                popup.classList.remove(
                    "show"
                );
            }
        );
        window.addEventListener(
            "click",
            function(event) {
                if (event.target == popup) {
                    popup.classList.remove(
                        "show"
                    );
                }
            }
        );

        /*
         * ──────────────────────────────
         * CAROUSEL
         * ──────────────────────────────
         */

        // Init
        const data = ['A', 'B', 'C', 'D', 'E'];
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

        /*
         * ──────────────────────────────
         * DRAG AND DROP
         * ──────────────────────────────
         */

        const drags = document.querySelectorAll('#drag');
        const dropHere = document.getElementById('drophere');

        drags.forEach((drag) => {

            console.log(drag);

            drag.addEventListener(
                'dragstart',
                (event) => {
                    event.dataTransfer.setData("text/plain", event.target.classList[0]);
                }
            );

            dropHere.addEventListener(
                'dragenter',
                () => {
                    dropHere.classList.add("highlight");
                }
            );

            dropHere.addEventListener(
                'dragleave',
                () => {
                    dropHere.classList.remove("highlight");
                }
            );

            dropHere.addEventListener(
                'dragover',
                (event) => {
                    event.preventDefault();
                }
            );

            dropHere.addEventListener(
                'drop',
                (event) => {
                    event.preventDefault();

                    const className = event.dataTransfer.getData("text");

                    const draggableElement = document.getElementsByClassName(className)[0];
                    dropHere.appendChild(draggableElement);

                    dropHere.classList.remove("highlight");
                }
            )
        });
    </script>

</body>