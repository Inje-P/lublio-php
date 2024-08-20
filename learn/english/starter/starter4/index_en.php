<?php

$json = '../../../../json/starter/starter4.json';
$json_fruits = '../../../../json/starter/starter4_fruits.json';
$json_vegetables = '../../../../json/starter/starter4_vegetables.json';

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
$fruits = json_file_decode($json_fruits);
$vegetables = json_file_decode($json_vegetables);

// Only English
$list_eng = array_column($list, 'english');

// Conversations
$sentences_fruits = [
    "I'd like one pineapple.",
    "I'd like two apples.",
    "I'd like three bananas.",
    "I'd like four oranges.",
    "I'd like five strawberries.",
    "I'd like six kiwis.",
    "I'd like seven peaches.",
    "I'd like eight cherries.",
    "I'd like nine grapes.",
    "I'd like ten blueberries."
];

$sentences_vegetables = [
    "I'd like one carrot.",
    "I'd like two tomatoes.",
    "I'd like three cucumbers.",
    "I'd like four hot peppers.",
    "I'd like five potatoes.",
    "I'd like six onions.",
    "I'd like seven cabbages.",
    "I'd like eight corns.",
    "I'd like nine avocados.",
    "I'd like ten eggplants."
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

    <div class="hero-pink animated fade_1">
        <h1 class="animated riseUp_2">Count in English: Master Numbers 1 to 10 with Confidence</h1>
    </div>

    <div class="wrapper animated fade_1">

        <?php
        require("../../../../components/breadcrumbs.php");
        ?>

        <div style="margin-bottom: 20px;">

            <div class="callout-container">
                <div class="callout-pink">
                    <h2>
                        Numbers 1 to 10
                    </h2>
                </div>
            </div>

            <div class="carousel">
                <div class="control-panel">
                    <button id="button-prev"><i class="fa-solid fa-chevron-left"></i></button>

                    <div class="control-panel-title">
                        <p>1 to 10</p>
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
                    <col style="width:50%">
                    <col style="width:50%">
                </colgroup>
                <tr>
                    <th>Numbers</th>
                    <th><span class="fi fi-gb"></span></th>
                </tr>
                <?php
                foreach ($list as $value) {
                    echo '<tr>'
                        . '<td>'
                        . $value["number"]
                        . '</td>'
                        . '<td>'
                        . $value["english"]
                        . '</td>'
                        . '</tr>';
                }
                ?>
            </table>

            <p>
                Learning the numbers 1 to 10 is a fundamental part of any language. In English, these numbers are used in a wide range of everyday contexts, from counting objects to telling time. This section will teach you how to pronounce, recognize, and use these basic numbers confidently.
            </p>

            <div class="callout-container">
                <div class="callout-pink">
                    <h2>
                        I'd like a coffee, please.
                    </h2>
                </div>
            </div>

            <div class="styled-quote-pink-left">
                <p class="text-original">
                    I'd like ...
                </p>
            </div>

            <h3>Fruits</h3>

            <table class="styled-table">
                <colgroup>
                    <col style="width:50%">
                    <col style="width:50%">
                </colgroup>
                <tr>
                    <th>Fruits</th>
                    <th><span class="fi fi-gb"></span></th>
                </tr>
                <?php
                foreach ($fruits as $value) {
                    echo '<tr>'
                        . '<td>'
                        . $value["emoji"]
                        . '</td>'
                        . '<td>'
                        . $value["english"]
                        . '</td>'
                        . '</tr>';
                }
                ?>
            </table>

            <?php
            for ($i = 0; $i < count($sentences_fruits); $i++) {
                echo '<div class="text-box">'
                    . '<ul class="styled-list-with-flags">'
                    . '<li>'
                    . '<h2>'
                    . $fruits[$i]["emoji"]
                    . '</h2>'
                    . '<p style="font-size=18px; font-weight:700px">'
                    . $sentences_fruits[$i]
                    . '</p>'
                    . '</li>'
                    . '</ul>'
                    . '</div>';
            }
            ?>

            <h3>Vegetables</h3>

            <table class="styled-table">
                <colgroup>
                    <col style="width:50%">
                    <col style="width:50%">
                </colgroup>
                <tr>
                    <th>Vegetables</th>
                    <th><span class="fi fi-gb"></span></th>
                </tr>
                <?php
                foreach ($vegetables as $value) {
                    echo '<tr>'
                        . '<td>'
                        . $value["emoji"]
                        . '</td>'
                        . '<td>'
                        . $value["english"]
                        . '</td>'
                        . '</tr>';
                }
                ?>
            </table>

            <?php
            for ($i = 0; $i < count($sentences_vegetables); $i++) {
                echo '<div class="text-box">'
                    . '<ul class="styled-list-with-flags">'
                    . '<li>'
                    . '<h2>'
                    . $vegetables[$i]["emoji"]
                    . '</h2>'
                    . '<p style="font-size=18px; font-weight:700px">'
                    . $sentences_vegetables[$i]
                    . '</p>'
                    . '</li>'
                    . '</ul>'
                    . '</div>';
            }
            ?>

            <p>
                Through practical examples and exercises, you'll become comfortable using these numbers in conversation, setting the stage for learning larger numbers and more complex numerical concepts.
            </p>

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