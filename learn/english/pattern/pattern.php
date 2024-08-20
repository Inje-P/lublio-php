<?php

// Param
$chapter = $_GET["chapter"];

switch ($chapter) {
    case 1:
        $json = '../../../json/patterns/english/pattern1.json';
        break;
    case 2:
        $json = '../../../json/patterns/english/pattern2.json';
        break;
    case 3:
        $json = '../../../json/patterns/english/pattern3.json';
        break;
    case 4:
        $json = '../../../json/patterns/english/pattern4.json';
        break;
    case 5:
        $json = '../../../json/patterns/english/pattern5.json';
        break;
    case 6:
        $json = '../../../json/patterns/english/pattern6.json';
        break;
    case 7:
        $json = '../../../json/patterns/english/pattern7.json';
        break;
    case 8:
        $json = '../../../json/patterns/english/pattern8.json';
        break;
    case 9:
        $json = '../../../json/patterns/english/pattern9.json';
        break;
    case 10:
        $json = '../../../json/patterns/english/pattern10.json';
        break;
    case 11:
        $json = '../../../json/patterns/english/pattern11.json';
        break;
    case 12:
        $json = '../../../json/patterns/english/pattern12.json';
        break;
    case 13:
        $json = '../../../json/patterns/english/pattern13.json';
        break;
    case 14:
        $json = '../../../json/patterns/english/pattern14.json';
        break;
    case 15:
        $json = '../../../json/patterns/english/pattern15.json';
        break;
    case 16:
        $json = '../../../json/patterns/english/pattern16.json';
        break;
    case 17:
        $json = '../../../json/patterns/english/pattern17.json';
        break;
    case 18:
        $json = '../../../json/patterns/english/pattern18.json';
        break;
    case 19:
        $json = '../../../json/patterns/english/pattern19.json';
        break;
    case 20:
        $json = '../../../json/patterns/english/pattern20.json';
        break;
    case 21:
        $json = '../../../json/patterns/english/pattern21.json';
        break;
    case 22:
        $json = '../../../json/patterns/english/pattern22.json';
        break;
    case 23:
        $json = '../../../json/patterns/english/pattern23.json';
        break;
    case 24:
        $json = '../../../json/patterns/english/pattern24.json';
        break;
    case 25:
        $json = '../../../json/patterns/english/pattern25.json';
        break;
    case 26:
        $json = '../../../json/patterns/english/pattern26.json';
        break;
    case 27:
        $json = '../../../json/patterns/english/pattern27.json';
        break;
    case 28:
        $json = '../../../json/patterns/english/pattern28.json';
        break;
    default:
        $json = '../../../json/patterns/english/pattern1.json';
        break;
}

function json_file_decode(string $path)
{
    if (file_exists($path) === false) {
        return false;
    }

    $content = file_get_contents($path);
    $content = trim($content);
    $content = str_replace(["\xEF\xBB\xBF", "\r\n", "\r", "\n", "\t"], '', $content);
    $content = str_replace(',}', '}', $content);
    $content = str_replace(',]', ']', $content);
    $content = json_decode($content, true);

    // $result = array_values($content);
    return $content;
}

$list = json_file_decode($json);
$number_of_lists = count($list);

// Extract all patterns
$patterns = array_keys($list);

// Extract all example sentences
$examples = array_values($list);

$titles = [
    "I'm -",
    "Do you -?",
    "I think -",
    "I like -",
    "Would you like -?",
    "Don't -",
    "I'm sorry -",
    "Let me -",
    "There is & There are",
    "That's -",
    "Tell",
    "Know",
    "What",
    "Where & When",
    "Who & Which",
    "How & Why",
    "Better",
    "I've",
    "I'm sure -",
    "All I -",
    "What I really -",
    "No one & Nobody",
    "Say",
    "It's time -",
    "Essential adverbs",
    "Emotion",
    "Sense",
    "Etc."
];

?>

<!DOCTYPE html>
<html lang="en" color-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lublio</title>

    <link rel="stylesheet" type="text/css" href="../../../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../../../css/transition.css" />
    <link rel="stylesheet" type="text/css" href="../../../css/phrasebook.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3b42a5b89f.js" crossorigin="anonymous"></script>

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
</head>

<body>

    <?php
    require("../../../components/header.php");
    ?>

    <div class="wrapper animated fade_1">

        <div style="margin-bottom: 20px;">
            <?php
            require("../../../components/breadcrumbs.php");
            ?>
        </div>

        <h1>
            <?= $chapter . ". " . $titles[$chapter - 1] ?>
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <select id="selection">
                <?php
                for ($i = 0; $i < count($patterns); $i++) {
                    if ($i == 0) {
                ?>
                        <option value="<?= $i + 1 ?>" selected>
                            <?= $patterns[$i] ?>
                        </option>
                    <?php
                    } else {
                    ?>
                        <option value="<?= $i + 1 ?>">
                            <?= $patterns[$i] ?>
                        </option>
                <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="carousel">
            <div class="control-panel">
                <button id="button-prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="control-panel-title">
                    <p id="carousel-title"></p>
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

        <?php
        for ($i = 0; $i < count($examples); $i++) {
        ?>
            <section id="section<?php echo $i + 1; ?>">
                <div class="text-box">
                    <?php
                    foreach ($examples[$i] as $value) {
                        echo '<p class="phrase-eng"><span class="fi fi-gb" style="margin-right: 10px"></span>'
                            . $value
                            . '</p>';
                    }
                    ?>
                </div>
            </section>
        <?php
        }
        ?>

    </div>

    <script>
        /*
         * ---------------------
         * Language Selector
         * ---------------------
         */

        // const checkEng = document.getElementById('check-eng');
        // const checkFra = document.getElementById('check-fra');
        // const checkDeu = document.getElementById('check-deu');
        // const checkSpa = document.getElementById('check-spa');
        // const checkIta = document.getElementById('check-ita');
        // const checkRus = document.getElementById('check-rus');
        // const checkTur = document.getElementById('check-tur');

        // const phrasesEng = document.getElementsByClassName('phrase-eng');
        // const phrasesFra = document.getElementsByClassName('phrase-fra');
        // const phrasesDeu = document.getElementsByClassName('phrase-deu');
        // const phrasesSpa = document.getElementsByClassName('phrase-spa');
        // const phrasesIta = document.getElementsByClassName('phrase-ita');
        // const phrasesRus = document.getElementsByClassName('phrase-rus');
        // const phrasesTur = document.getElementsByClassName('phrase-tur');

        // function changeDisplay(array, visibility) {
        //     for (var i = 0; i < array.length; i++) {
        //         array[i].style.display = visibility;
        //     }
        // }

        // changeDisplay(phrasesEng, 'block');
        // changeDisplay(phrasesFra, 'none');
        // changeDisplay(phrasesDeu, 'none');
        // changeDisplay(phrasesSpa, 'none');
        // changeDisplay(phrasesIta, 'none');
        // changeDisplay(phrasesRus, 'none');
        // changeDisplay(phrasesTur, 'none');

        // checkEng.addEventListener("click", (event) => {
        //     if (event.currentTarget.checked == true) {
        //         changeDisplay(phrasesEng, 'block');
        //     } else {
        //         changeDisplay(phrasesEng, 'none');
        //     }
        // });

        // checkFra.addEventListener("click", (event) => {
        //     if (event.currentTarget.checked == true) {
        //         changeDisplay(phrasesFra, 'block');
        //     } else {
        //         changeDisplay(phrasesFra, 'none');
        //     }
        // });

        // checkDeu.addEventListener("click", (event) => {
        //     if (event.currentTarget.checked == true) {
        //         changeDisplay(phrasesDeu, 'block');
        //     } else {
        //         changeDisplay(phrasesDeu, 'none');
        //     }
        // });

        // checkSpa.addEventListener("click", (event) => {
        //     if (event.currentTarget.checked == true) {
        //         changeDisplay(phrasesSpa, 'block');
        //     } else {
        //         changeDisplay(phrasesSpa, 'none');
        //     }
        // });

        // checkIta.addEventListener("click", (event) => {
        //     if (event.currentTarget.checked == true) {
        //         changeDisplay(phrasesIta, 'block');
        //     } else {
        //         changeDisplay(phrasesIta, 'none');
        //     }
        // });

        // checkRus.addEventListener("click", (event) => {
        //     if (event.currentTarget.checked == true) {
        //         changeDisplay(phrasesRus, 'block');
        //     } else {
        //         changeDisplay(phrasesRus, 'none');
        //     }
        // });

        // checkTur.addEventListener("click", (event) => {
        //     if (event.currentTarget.checked == true) {
        //         changeDisplay(phrasesTur, 'block');
        //     } else {
        //         changeDisplay(phrasesTur, 'none');
        //     }
        // });

        /*
         * ──────────────────────────────
         * Carousel
         * ──────────────────────────────
         */

        // Elements
        const carouselTitle = document.getElementById("carousel-title");
        const buttonPrev = document.getElementById("button-prev");
        const buttonNext = document.getElementById("button-next");
        const screenText = document.getElementById("screen-text2");
        const progress = document.querySelector(".progress-bar");

        // Data
        let json = <?= json_encode($examples) ?>;
        let data = json[0];

        // Init
        let proportion = 100 / data.length;
        var count = 1;

        // Event Listener
        buttonNext.addEventListener(
            'click',
            () => {
                if (count <= data.length) {
                    screenText.innerHTML = data[count - 1].toString();
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
                    screenText.innerHTML = data[count - 1].toString();
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                } else if (count <= 0) {
                    count = 1;
                }
            }
        );

        /*
         * ---------------------
         * Section Selector
         * ---------------------
         */

        const numberOfLists = <?= $number_of_lists ?>;

        // Elements
        const section1 = document.getElementById('section1');
        const section2 = document.getElementById('section2');
        const section3 = document.getElementById('section3');
        const section4 = document.getElementById('section4');
        const section5 = document.getElementById('section5');
        const section6 = document.getElementById('section6');
        const section7 = document.getElementById('section7');
        const section8 = document.getElementById('section8');
        const section9 = document.getElementById('section9');
        const section10 = document.getElementById('section10');
        const section11 = document.getElementById('section11');
        const section12 = document.getElementById('section12');

        // Titles
        let options = document.getElementsByTagName('option');
        let titles = [];
        for (let option of options) {
            titles.push(option.text);
        }

        // Init
        carouselTitle.innerHTML = titles[0];
        screenText.innerHTML = titles[0];
        if (section1) {
            section1.style.display = 'block';
        }
        if (section2) {
            section2.style.display = 'none';
        }
        if (section3) {
            section3.style.display = 'none';
        }
        if (section4) {
            section4.style.display = 'none';
        }
        if (section5) {
            section5.style.display = 'none';
        }
        if (section6) {
            section6.style.display = 'none';
        }
        if (section7) {
            section7.style.display = 'none';
        }
        if (section8) {
            section8.style.display = 'none';
        }
        if (section9) {
            section9.style.display = 'none';
        }
        if (section10) {
            section10.style.display = 'none';
        }
        if (section11) {
            section11.style.display = 'none';
        }
        if (section12) {
            section12.style.display = 'none';
        }

        let choice = 1;
        const selector = document.querySelector("select");
        selector.addEventListener("change", (event) => {
            choice = event.target.value;
            switch (choice) {
                case "1":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'block';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "2":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'block';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "3":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'block';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "4":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'block';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "5":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'block';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "6":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'block';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "7":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'block';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "8":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'block';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "9":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'block';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "10":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'block';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "11":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'block';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
                case "12":
                    // Carousel
                    data = json[choice - 1];
                    proportion = 100 / data.length;
                    count = 1;
                    carouselTitle.innerHTML = titles[choice - 1];
                    screenText.innerHTML = titles[choice - 1];
                    progress.style.setProperty("--progress", `${proportion * count}%`);
                    // Sections
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'block';
                    }
                    break;
                default:
                    if (section1) {
                        section1.style.display = 'none';
                    }
                    if (section2) {
                        section2.style.display = 'none';
                    }
                    if (section3) {
                        section3.style.display = 'none';
                    }
                    if (section4) {
                        section4.style.display = 'none';
                    }
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    if (section6) {
                        section6.style.display = 'none';
                    }
                    if (section7) {
                        section7.style.display = 'none';
                    }
                    if (section8) {
                        section8.style.display = 'none';
                    }
                    if (section9) {
                        section9.style.display = 'none';
                    }
                    if (section10) {
                        section10.style.display = 'none';
                    }
                    if (section11) {
                        section11.style.display = 'none';
                    }
                    if (section12) {
                        section12.style.display = 'none';
                    }
                    break;
            }
        });
    </script>

</body>