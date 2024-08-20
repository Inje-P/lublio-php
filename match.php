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
</head>

<body>

    <?php
    require("./components/header.php");
    ?>

    <div id="popup" class="popup animated fade_1">
        <div class="popup-content">
            <h1>Lublio</h1>
            <p>You've successfully completed this section!</p>
            <div class="popup-buttons">
                <button id="redirectTo" style="width: 100%">
                    Finish
                </button>
            </div>
        </div>
    </div>

    <div class="wrapper-immersive">

        <div class="match">
            <div class="progress-bar">
                <div class="progress-value"></div>
            </div>
            <div class="match-screen">
                <div id="match-screen" class="match-screen-text">
                    <p id="match-text" class="match-text"></p>
                </div>
            </div>
        </div>

        <ul id="match-buttons" style="list-style: none;">
        </ul>

    </div>

    <script>
        /*
         * ──────────────────────────────
         * Match
         * ──────────────────────────────
         */

        // Data
        const data = [
            "Можете мне помочь?",
            "Где ближайшая автобусная остановка?",
            "Как добраться до вокзала?"
        ];

        // Elements
        const matchScreen = document.getElementById("match-screen");
        const matchText = document.getElementById("match-text");
        const matchButtons = document.getElementById("match-buttons");
        const progress = document.querySelector(".progress-bar");
        const proportion = 100 / data.length;
        let count = 1;

        // Animation : Shake
        // When the answer is incorrect
        let shake_keyframes = [{
                transform: "translate(3px, 0)"
            },
            {
                transform: "translate(-3px, 0)"
            },
            {
                transform: "translate(0, 0)"
            }
        ];
        let shake_options = {
            duration: 150,
            iterations: 2,
            easing: "linear"
        };

        // Animation : Pop
        // When the answer is correct
        let pop_keyframes = [{
                transform: "scale(1)",
            },
            {
                transform: "scale(1.05)",
            },
            {
                transform: "scale(1)",
            }
        ];
        let pop_options = {
            duration: 300,
            easing: "ease-in-out"
        };

        // Animation : Fade-out
        let fadeOut_keyframes = [{
                opacity: 1,
            },
            {
                opacity: 0,
            }
        ];
        let fadeOut_options = {
            duration: 500,
            delay: 200,
        };

        // Init
        let sentence = data[count - 1];
        let words = data[count - 1].split(' ');
        createButtons(words);
        // progress.style.setProperty("--progress", `${proportion * count}%`);

        // Create Buttons
        function createButtons(words) {
            for (let i = 0; i < words.length; i++) {
                let button = document.createElement('button');
                let number = i + 1;
                button.id = "choice" + number;
                button.textContent = words[i];
                button.addEventListener(
                    'click',
                    (event) => {
                        event.preventDefault();
                        var choice = event.target.textContent;
                        matchText.textContent += choice;
                        if (i < words.length - 1) {
                            matchText.textContent += " ";
                        }

                        var question = sentence;
                        var answer = matchText.textContent;
                        match(question, answer);
                    }
                );
                matchButtons.appendChild(button);
            }
            // shuffle
            shuffle(matchButtons);
        }

        // Shuffle the buttons
        function shuffle(container) {
            var elements = container.children;
            for (var i = elements.length; i >= 0; i--) {
                container.appendChild(elements[Math.random() * i | 0]);
            }
        }

        // Check the answer
        function checkAnswer(choice, answer) {
            if (choice.textContent == answer.textContent) {
                return true;
            } else {
                return false;
            }
        }

        // When the choice is matched with the answer
        function match(question, answer) {
            console.log(question.length);
            console.log(answer.length);
            if (question.length == answer.length) {
                if (question === answer) {
                    matchText.animate(pop_keyframes, pop_options);
                    matchText.animate(fadeOut_keyframes, fadeOut_options);
                    setTimeout(() => {
                        matchText.innerText = "";
                        matchButtons.innerHTML = "";
                        count++;
                        words = data[count - 1].split(' ');
                        sentence = data[count - 1];
                        createButtons(words);
                    }, 700);
                } else {
                    matchText.animate(shake_keyframes, shake_options);
                    setTimeout(() => {
                        matchText.innerText = "";
                    }, 700);
                }
            }
        }

        function endSection() {
            // Redirect
        }

        /*
         * ──────────────────────────────
         * POP-UP
         * ──────────────────────────────
         */

        const popup = document.querySelector('#popup');
        const redirectButton = document.querySelector('#redirectTo');

        redirectButton.addEventListener(
            'click',
            () => {
                // Redirect
                // document.location.href = '';
                console.log("Redirect");
            }
        );
    </script>

</body>