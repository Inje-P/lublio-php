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

        .loader {
            --color: var(--text);
            --size-mid: 6vmin;
            --size-dot: 1.5vmin;
            --size-bar: 0.4vmin;
            --size-square: 3vmin;

            display: block;
            position: relative;
            width: 50%;
            display: grid;
            place-items: center;
        }

        .loader::before,
        .loader::after {
            content: '';
            box-sizing: border-box;
            position: absolute;
        }

        /**
    loader --1
**/
        .loader.--1::before {
            width: var(--size-mid);
            height: var(--size-mid);
            border: 4px solid var(--color);
            border-top-color: transparent;
            border-radius: 50%;
            animation: loader-1 1s linear infinite;
        }

        .loader.--1::after {
            width: calc(var(--size-mid) - 2px);
            height: calc(var(--size-mid) - 2px);
            border: 2px solid transparent;
            border-top-color: var(--color);
            border-radius: 50%;
            animation: loader-1 0.6s linear reverse infinite;
        }

        @keyframes loader-1 {
            100% {
                transform: rotate(1turn);
            }
        }

        /**
    loader --2
**/
        .loader.--2::before,
        .loader.--2::after {
            width: var(--size-dot);
            height: var(--size-dot);
            background-color: var(--color);
            border-radius: 50%;
            opacity: 0;
            animation: loader-2 0.8s cubic-bezier(0.2, 0.32, 0, 0.87) infinite;
        }

        .loader.--2::after {
            animation-delay: 0.3s;
        }

        @keyframes loader-2 {

            0%,
            80%,
            100% {
                opacity: 0;
            }

            33% {
                opacity: 1;
            }

            0%,
            100% {
                transform: translateX(-4vmin);
            }

            90% {
                transform: translateX(4vmin);
            }
        }

        /**
    loader --3
**/
        .loader.--3::before,
        .loader.--3::after {
            width: var(--size-dot);
            height: var(--size-dot);
            background-color: var(--color);
            border-radius: 50%;
            animation: loader-3 1.2s ease-in-out infinite;
        }

        .loader.--3::before {
            left: calc(50% - 1.6vmin - var(--size-dot));
        }

        .loader.--3::after {
            left: calc(50% + 1.6vmin);
            animation-delay: -0.4s;
        }

        @keyframes loader-3 {

            0%,
            100% {
                transform: translateY(-2.6vmin);
            }

            44% {
                transform: translateY(2.6vmin);
            }
        }

        /**
    loader --4
**/
        .loader.--4::before {
            height: var(--size-bar);
            width: 6vmin;
            background-color: var(--color);
            animation: loader-4 0.8s cubic-bezier(0, 0, 0.03, 0.9) infinite;
        }

        @keyframes loader-4 {

            0%,
            44%,
            88.1%,
            100% {
                transform-origin: left;
            }

            0%,
            100%,
            88% {
                transform: scaleX(0);
            }

            44.1%,
            88% {
                transform-origin: right;
            }

            33%,
            44% {
                transform: scaleX(1);
            }
        }

        /**
    loader --5
**/
        .loader.--5::before,
        .loader.--5::after {
            height: 3vmin;
            width: var(--size-bar);
            background-color: var(--color);
            animation: loader-5 0.6s cubic-bezier(0, 0, 0.03, 0.9) infinite;
        }

        .loader.--5::before {
            left: calc(50% - 1vmin);
            top: calc(50% - 3vmin);
        }

        .loader.--5::after {
            left: calc(50% + 1vmin);
            top: calc(50% - 1vmin);
            animation-delay: 0.2s;
        }

        @keyframes loader-5 {

            0%,
            88%,
            100% {
                opacity: 0;
            }

            0% {
                transform: translateY(-6vmin);
            }

            33% {
                opacity: 1;
            }

            33%,
            88% {
                transform: translateY(3vmin);
            }
        }

        /**
    loader --6
**/
        .loader.--6::before {
            width: var(--size-square);
            height: var(--size-square);
            background-color: var(--color);
            top: calc(50% - var(--size-square));
            left: calc(50% - var(--size-square));
            animation: loader-6 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
        }

        @keyframes loader-6 {

            0%,
            100% {
                transform: none;
            }

            25% {
                transform: translateX(100%);
            }

            50% {
                transform: translateX(100%) translateY(100%);
            }

            75% {
                transform: translateY(100%);
            }
        }

        /**
    loader --7
**/
        .loader.--7::before,
        .loader.--7::after {
            width: var(--size-square);
            height: var(--size-square);
            background-color: var(--color);
        }

        .loader.--7::before {
            top: calc(50% - var(--size-square));
            left: calc(50% - var(--size-square));
            animation: loader-6 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
        }

        .loader.--7::after {
            top: 50%;
            left: 50%;
            animation: loader-7 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
        }

        @keyframes loader-7 {

            0%,
            100% {
                transform: none;
            }

            25% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(-100%) translateY(-100%);
            }

            75% {
                transform: translateY(-100%);
            }
        }

        /**
    loader --8
**/
        .loader.--8::before,
        .loader.--8::after {
            width: var(--size-dot);
            height: var(--size-dot);
            border-radius: 50%;
            background-color: var(--color);
        }

        .loader.--8::before {
            top: calc(50% + 4vmin);
            animation: loader-8-1 0.8s cubic-bezier(0.06, 0.01, 0.49, 1.18) infinite;
        }

        .loader.--8::after {
            opacity: 0;
            top: calc(50% - 2vmin);
            animation: loader-8-2 0.8s cubic-bezier(0.46, -0.1, 0.27, 1.07) 0.2s infinite;
        }

        @keyframes loader-8-1 {

            0%,
            55%,
            100% {
                opacity: 0;
            }

            0% {
                transform: scale(0.2);
            }

            22% {
                opacity: 1;
            }

            33%,
            55% {
                transform: scale(1) translateY(-6vmin);
            }
        }

        @keyframes loader-8-2 {

            0%,
            100% {
                opacity: 0;
            }

            33% {
                opacity: 0.3;
            }

            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(4);
            }
        }

        /**
    loader --9
**/
        .loader.--9::before,
        .loader.--9::after {
            width: var(--size-dot);
            height: var(--size-dot);
            border-radius: 50%;
            background-color: var(--color);
            animation: loader-9 0.42s cubic-bezier(0.39, 0.31, 0, 1.11) infinite;
        }

        .loader.--9::before {
            left: calc(50% - var(--size-dot) - 1.6vmin);
        }

        .loader.--9::after {
            left: calc(50% + 1.6vmin);
            animation-delay: 0.12s;
        }

        @keyframes loader-9 {

            0%,
            100% {
                opacity: 0;
            }

            0% {
                transform: translate(-4vmin, -4vmin);
            }

            66% {
                opacity: 1;
            }

            66%,
            100% {
                transform: none;
            }
        }

        /**
    miscs
**/

        .container {
            display: grid;
            grid-template-columns: repeat(3, 18vmin);
            grid-template-rows: repeat(3, 18vmin);
            grid-gap: 1vmin;
        }

        .item {
            display: grid;
            place-items: center;
            transition: opacity 0.4s ease;
        }
    </style>
</head>

<body>

    <?php
    require("./components/header.php");
    ?>

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
            <main class="container">
                <div class="item">
                    <i class="loader --2"></i>
                </div>
                <div class="item">
                    <i class="loader --9"></i>
                </div>
                <div class="item">
                    <i class="loader --3"></i>
                </div>

                <div class="item">
                    <i class="loader --4"></i>
                </div>
                <div class="item">
                    <i class="loader --1"></i>
                </div>
                <div class="item">
                    <i class="loader --5"></i>
                </div>

                <div class="item">
                    <i class="loader --6"></i>
                </div>
                <div class="item">
                    <i class="loader --8"></i>
                </div>
                <div class="item">
                    <i class="loader --7"></i>
                </div>
            </main>
        </div>

        <div style="margin-bottom: 20px;">
            <h1>Form</h1>
            <div class="styled-form">
                <form action="#" method="POST">
                    <ul>
                        <li>
                            <input type="email" name="email" placeholder="Email">
                        </li>
                        <li>
                            <input type="text" name="firstname" placeholder="First Name">
                            <input type="text" name="lastname" placeholder="Last Name">
                        </li>
                        <li>
                            <input type="password" name="pwd" placeholder="Password">
                        </li>
                        <li>
                            <button type="submit" name="send">Send</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        <h1>
            Pop-up
        </h1>

        <div style="margin-bottom: 20px;">
            <ul style="list-style: none;">
                <button id="openPopup">Pop-up</button>
            </ul>
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
            function () {
                popup.classList.add("show");
            }
        );
        closePopup.addEventListener(
            "click",
            function () {
                popup.classList.remove(
                    "show"
                );
            }
        );
        window.addEventListener(
            "click",
            function (event) {
                if (event.target == popup) {
                    popup.classList.remove(
                        "show"
                    );
                }
            }
        );
    </script>

</body>