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

    <div class="wrapper-immersive">

        <div class="carousel">
            <div class="control-panel">
                <button id="button-prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="control-panel-title">
                    <p>This is a title</p>
                </div>
                <button id="button-next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="screen">
                <p id="screen-text2">Press the next button</p>
            </div>
            <div class="progress-bar">
                <div class="progress-value"></div>
            </div>
        </div>

    </div>

    <script>
        /*
         * ──────────────────────────────
         * Carousel
         * ──────────────────────────────
         */

        // Elements
        const buttonPrev = document.getElementById("button-prev");
        const buttonNext = document.getElementById("button-next");
        const screenText = document.getElementById("screen-text2");
        const progress = document.querySelector(".progress-bar");

        // Data
        const data = [
            'Can you help me?',
            'Where is the nearest bus stop?',
            'How do I get to the train station?',
            'How long does it take to get there?',
            'Where is the nearest subway station?'
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