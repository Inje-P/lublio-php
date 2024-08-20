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

        <div class="quiz">
            <div class="progress-bar">
                <div class="progress-value"></div>
            </div>
            <div class="quiz-screen">
                <div class="quiz-screen-text">
                    <div id="question">
                        This is a sample question.
                    </div>
                    <div id="answer">
                        <p id="your-choice"></p>
                    </div>
                </div>
            </div>
        </div>

        <ul style="list-style: none;">
            <button id="choice1">Option 1</button>
            <button id="choice2">Option 2</button>
            <button id="choice3">Option 3</button>
            <button id="choice4">Option 4</button>
        </ul>

    </div>

    <script>
        /*
         * ──────────────────────────────
         * Quiz
         * ──────────────────────────────
         */

        // Data Source
        const data = [{
                "question": "The first day of &#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f; marks the beginning of a new year.",
                "answer": "January",
                "option1": "January",
                "option2": "February",
                "option3": "March",
                "option4": "April"
            },
            {
                "question": "Children dress up in costumes on the 31st of &#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f; to celebrate Halloween.",
                "answer": "October",
                "option1": "August",
                "option2": "September",
                "option3": "October",
                "option4": "November"
            },
            {
                "question": "The United States celebrates its Independence Day on the 4th of &#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f; every year.",
                "answer": "July",
                "option1": "June",
                "option2": "July",
                "option3": "August",
                "option4": "September"
            },
            {
                "question": "Valentine's Day, a day for love and friendship, is on the 14th of &#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f;&#x5f; .",
                "answer": "February",
                "option1": "January",
                "option2": "February",
                "option3": "March",
                "option4": "April"
            }
        ];

        // Elements
        const choice1 = document.getElementById("choice1");
        const choice2 = document.getElementById("choice2");
        const choice3 = document.getElementById("choice3");
        const choice4 = document.getElementById("choice4");
        const phraseFront = document.getElementById("question");
        const phraseBlank = document.getElementById("answer");
        const yourChoice = document.getElementById("your-choice");
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

        // Animation : Fade-In
        // When the answer is correct
        let fadeIn_keyframes = [{
                opacity: 0,
            },
            {
                opacity: 1,
            }
        ];
        let fadeIn_options = {
            duration: 300
        };

        // Init
        progress.style.setProperty("--progress", `${proportion * count}%`);
        phraseFront.innerHTML = data[count - 1]["question"];
        yourChoice.innerHTML = "";
        choice1.innerHTML = data[count - 1]["option1"];
        choice2.innerHTML = data[count - 1]["option2"];
        choice3.innerHTML = data[count - 1]["option3"];
        choice4.innerHTML = data[count - 1]["option4"];

        // Check the answer
        function checkAnswer(choice, answer) {
            if (choice === answer) {
                return true;
            } else {
                return false;
            }
        }

        // Event Listener
        choice1.addEventListener(
            'click',
            (event) => {
                event.preventDefault();
                var choice = event.target.textContent;

                if (checkAnswer(choice, data[count - 1]["answer"])) {
                    yourChoice.innerHTML = event.target.textContent;
                    yourChoice.animate(fadeIn_keyframes, fadeIn_options);
                    count++;
                    nextQuestion();
                } else {
                    phraseBlank.animate(shake_keyframes, shake_options);
                    yourChoice.innerHTML = "";
                }
            }
        );
        choice2.addEventListener(
            'click',
            (event) => {
                event.preventDefault();
                var choice = event.target.textContent;

                if (checkAnswer(choice, data[count - 1]["answer"])) {
                    yourChoice.innerHTML = event.target.textContent;
                    yourChoice.animate(fadeIn_keyframes, fadeIn_options);
                    count++;
                    nextQuestion();
                } else {
                    phraseBlank.animate(shake_keyframes, shake_options);
                    yourChoice.innerHTML = "";
                }
            }
        );
        choice3.addEventListener(
            'click',
            (event) => {
                event.preventDefault();
                var choice = event.target.textContent;

                if (checkAnswer(choice, data[count - 1]["answer"])) {
                    yourChoice.innerHTML = event.target.textContent;
                    yourChoice.animate(fadeIn_keyframes, fadeIn_options);
                    count++;
                    nextQuestion();
                } else {
                    phraseBlank.animate(shake_keyframes, shake_options);
                    yourChoice.innerHTML = "";
                }
            }
        );
        choice4.addEventListener(
            'click',
            (event) => {
                event.preventDefault();
                var choice = event.target.textContent;

                if (checkAnswer(choice, data[count - 1]["answer"])) {
                    yourChoice.innerHTML = event.target.textContent;
                    yourChoice.animate(fadeIn_keyframes, fadeIn_options);
                    count++;
                    nextQuestion();
                } else {
                    phraseBlank.animate(shake_keyframes, shake_options);
                    yourChoice.innerHTML = "";
                }
            }
        );

        // Functions
        function nextQuestion() {
            if (count <= data.length) {
                setTimeout(function() {
                    phraseFront.innerHTML = data[count - 1]["question"];
                    yourChoice.innerHTML = "";
                    choice1.innerHTML = data[count - 1]["option1"];
                    choice2.innerHTML = data[count - 1]["option2"];
                    choice3.innerHTML = data[count - 1]["option3"];
                    choice4.innerHTML = data[count - 1]["option4"];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                }, 1500)
            } else {
                console.log("The End");
                popup.classList.add("show");
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