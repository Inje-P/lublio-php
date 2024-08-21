<?php

$json = '../../../../json/starter/starter5.json';
$json_zodiac = '../../../../json/starter/starter5_zodiac.json';

function json_file_decode(string $path)
{
    if (file_exists($path) === false) {
        return false;
    }

    $content = file_get_contents($path);
    $content = trim($content);
    $content = str_replace(["\xEF\xBB\xBF", "\r\n", "\r", "\n", "\t"], '', $content); //BOM, 개행
    $content = str_replace(',}', '}', $content); // 마지막 , 짜르기 / {"aa",} 형태
    $content = str_replace(',]', ']', $content); // 마지막 , 짜르기 / ["aa",] 형태
    $content = json_decode($content, true);

    $result = array_values($content);
    return $result;
}

// Raw JSON Files
$list = json_file_decode($json);
$zodiac = json_file_decode($json_zodiac);

// Only English
$list_eng = array_column($list, 'english');

$sentences_days = [
    [
        "question" => "What day is it today?",
        "answer" => "It is Monday."
    ],
    [
        "question" => "What day was it yesterday?",
        "answer" => "It was Tuesday."
    ],
    [
        "question" => "What day is it tomorrow?",
        "answer" => "It is Wednesday."
    ],
    [
        "question" => "What day was it today?",
        "answer" => "It was Thursday."
    ],
    [
        "question" => "What day is it today?",
        "answer" => "It is Friday."
    ],
    [
        "question" => "What day was it yesterday?",
        "answer" => "It was Saturday."
    ],
    [
        "question" => "What day is it tomorrow?",
        "answer" => "It is Sunday."
    ]
];


$sentences_zodiac = [
    "I'm a Aries.",
    "I'm a Taurus.",
    "I'm a Gemini.",
    "I'm a Cancer.",
    "I'm a Leo.",
    "I'm a Virgo.",
    "I'm a Libra.",
    "I'm a Scorpio.",
    "I'm a Sagittarius.",
    "I'm a Capricorn.",
    "I'm a Aquarius.",
    "I'm a Pisces."
];

?>

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

    <div class="wrapper animated fade_1">

        <?php
        require("../../../../components/breadcrumbs.php");
        ?>

        <div style="margin-bottom: 20px;">

            <div class="callout-container">
                <div class="callout-pink">
                    <h2>
                        Days of the week
                    </h2>
                </div>
            </div>

            <div class="carousel">
                <div class="control-panel">
                    <button id="button-prev"><i class="fa-solid fa-chevron-left"></i></button>

                    <div class="control-panel-title">
                        <p>Days of the week</p>
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

            <table class="styled-table">
                <colgroup>
                    <col style="width:100%">
                </colgroup>
                <tr>
                    <th><span class="fi fi-gb"></span></th>
                </tr>
                <?php
                foreach ($list as $value) {
                    echo '<tr>'
                        . '<td>'
                        . $value["english"]
                        . '</td>'
                        . '</tr>';
                }
                ?>
            </table>

            <p>
                Knowing the days of the week is essential for managing your daily life in English. Whether scheduling appointments or discussing plans, these seven words are used frequently in conversation.
            </p>

            <div class="styled-quote-pink-left">
                <p class="text-original">
                    What day is it today?
                </p>
            </div>

            <div class="styled-quote-pink-right">
                <p class="text-original">
                    It is Sunday.
                </p>
            </div>

            <?php
            for ($i = 0; $i < count($sentences_days); $i++) {
                echo '<div class="text-box">'
                    . '<ul class="styled-list-with-flags">'
                    . '<li>'
                    . '<p style="font-size=18px; font-weight:700px">'
                    . $sentences_days[$i]["question"]
                    . '</p>'
                    . '<br/>'
                    . '<p style="font-size=18px; font-weight:700px">'
                    . '&#8594; '
                    . $sentences_days[$i]["answer"]
                    . '</p>'
                    . '</li>'
                    . '</ul>'
                    . '</div>';
            }
            ?>

            <div class="callout-container">
                <div class="callout-pink">
                    <h2>
                        Zodiac Signs
                    </h2>
                </div>
            </div>

            <div class="styled-quote-pink-left">
                <p class="text-original">
                    What's your zodiac sign?
                </p>
            </div>

            <div class="styled-quote-pink-right">
                <p class="text-original">
                    I'm a Gemini.
                </p>
            </div>

            <table class="styled-table">
                <colgroup>
                    <col style="width:50%">
                    <col style="width:50%">
                </colgroup>
                <tr>
                    <th></th>
                    <th><span class="fi fi-gb"></span></th>
                </tr>
                <?php
                foreach ($zodiac as $value) {
                    echo '<tr>'
                        . '<td>'
                        . $value["symbol"]
                        . '</td>'
                        . '<td>'
                        . $value["english"]
                        . '</td>'
                        . '</tr>';
                }
                ?>
            </table>

            <?php
            for ($i = 0; $i < count($sentences_zodiac); $i++) {
                echo '<div class="text-box">'
                    . '<ul class="styled-list-with-flags">'
                    . '<li>'
                    . '<h2>'
                    . $zodiac[$i]["symbol"]
                    . '</h2>'
                    . '<p style="font-size=18px; font-weight:700px">'
                    . $sentences_zodiac[$i]
                    . '</p>'
                    . '</li>'
                    . '</ul>'
                    . '</div>';
            }
            ?>

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
        const data = <?php echo json_encode($list_eng); ?>;

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