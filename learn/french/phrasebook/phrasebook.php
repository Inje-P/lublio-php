<?php

// Param
$chapter = $_GET["chapter"];

switch ($chapter) {
    case 1:
        refresh();
        $json1 = '../../../json/phrasebook1/phrasebook1_1.json';
        $json2 = '../../../json/phrasebook1/phrasebook1_2.json';
        $json3 = '../../../json/phrasebook1/phrasebook1_3.json';
        $json4 = '../../../json/phrasebook1/phrasebook1_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 2:
        refresh();
        $json1 = '../../../json/phrasebook2/phrasebook2_1.json';
        $json2 = '../../../json/phrasebook2/phrasebook2_2.json';
        $json3 = '../../../json/phrasebook2/phrasebook2_3.json';
        $json4 = '../../../json/phrasebook2/phrasebook2_4.json';
        $json5 = '../../../json/phrasebook2/phrasebook2_5.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        $list5 = json_file_decode($json5);
        break;
    case 3:
        refresh();
        $json1 = '../../../json/phrasebook3/phrasebook3_1.json';
        $json2 = '../../../json/phrasebook3/phrasebook3_2.json';
        $json3 = '../../../json/phrasebook3/phrasebook3_3.json';
        $json4 = '../../../json/phrasebook3/phrasebook3_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 4:
        refresh();
        $json1 = '../../../json/phrasebook4/phrasebook4_1.json';
        $json2 = '../../../json/phrasebook4/phrasebook4_2.json';
        $json3 = '../../../json/phrasebook4/phrasebook4_3.json';
        $json4 = '../../../json/phrasebook4/phrasebook4_4.json';
        $json5 = '../../../json/phrasebook4/phrasebook4_5.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        $list5 = json_file_decode($json5);
        break;
    case 5:
        refresh();
        $json1 = '../../../json/phrasebook5/phrasebook5_1.json';
        $json2 = '../../../json/phrasebook5/phrasebook5_2.json';
        $json3 = '../../../json/phrasebook5/phrasebook5_3.json';
        $json4 = '../../../json/phrasebook5/phrasebook5_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 6:
        refresh();
        $json1 = '../../../json/phrasebook6/phrasebook6_1.json';
        $json2 = '../../../json/phrasebook6/phrasebook6_2.json';
        $json3 = '../../../json/phrasebook6/phrasebook6_3.json';
        $json4 = '../../../json/phrasebook6/phrasebook6_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 7:
        refresh();
        $json1 = '../../../json/phrasebook7/phrasebook7_1.json';
        $json2 = '../../../json/phrasebook7/phrasebook7_2.json';
        $json3 = '../../../json/phrasebook7/phrasebook7_3.json';
        $json4 = '../../../json/phrasebook7/phrasebook7_4.json';
        $json5 = '../../../json/phrasebook7/phrasebook7_5.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        $list5 = json_file_decode($json5);
        break;
    case 8:
        refresh();
        $json1 = '../../../json/phrasebook8/phrasebook8_1.json';
        $json2 = '../../../json/phrasebook8/phrasebook8_2.json';
        $json3 = '../../../json/phrasebook8/phrasebook8_3.json';
        $json4 = '../../../json/phrasebook8/phrasebook8_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 9:
        refresh();
        $json1 = '../../../json/phrasebook9/phrasebook9_1.json';
        $json2 = '../../../json/phrasebook9/phrasebook9_2.json';
        $json3 = '../../../json/phrasebook9/phrasebook9_3.json';
        $json4 = '../../../json/phrasebook9/phrasebook9_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 10:
        refresh();
        $json1 = '../../../json/phrasebook10/phrasebook10_1.json';
        $json2 = '../../../json/phrasebook10/phrasebook10_2.json';
        $json3 = '../../../json/phrasebook10/phrasebook10_3.json';
        $json4 = '../../../json/phrasebook10/phrasebook10_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 11:
        refresh();
        $json1 = '../../../json/phrasebook11/phrasebook11_1.json';
        $json2 = '../../../json/phrasebook11/phrasebook11_2.json';
        $json3 = '../../../json/phrasebook11/phrasebook11_3.json';
        $json4 = '../../../json/phrasebook11/phrasebook11_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    case 12:
        refresh();
        $json1 = '../../../json/phrasebook12/phrasebook12_1.json';
        $json2 = '../../../json/phrasebook12/phrasebook12_2.json';
        $json3 = '../../../json/phrasebook12/phrasebook12_3.json';
        $json4 = '../../../json/phrasebook12/phrasebook12_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
    default:
        refresh();
        $json1 = '../../../json/phrasebook1/phrasebook1_1.json';
        $json2 = '../../../json/phrasebook1/phrasebook1_2.json';
        $json3 = '../../../json/phrasebook1/phrasebook1_3.json';
        $json4 = '../../../json/phrasebook1/phrasebook1_4.json';
        $list1 = json_file_decode($json1);
        $list2 = json_file_decode($json2);
        $list3 = json_file_decode($json3);
        $list4 = json_file_decode($json4);
        break;
}

function refresh()
{
    unset($json1);
    unset($json2);
    unset($json3);
    unset($json4);
    unset($json5);
    unset($list1);
    unset($list2);
    unset($list3);
    unset($list4);
    unset($list5);
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

    $result = array_values($content);
    return $result;
}

// Titles
$titles = [
    "Basic Greetings and Introductions",
    "Travel and Transportation",
    "Accommodation",
    "Food and Dining",
    "Shopping",
    "Health and Emergencies",
    "Work and Digital Connectivity",
    "Socializing and Networking",
    "Leisure and Activities",
    "Banking and Finance",
    "Utilities and Housing",
    "Legal and Administrative"
];

$sub_titles = [
    1 => [
        "Common greetings",
        "Introducing oneself",
        "Asking for someone's information",
        "Simple pleasantries"
    ],
    2 => [
        "Asking for directions",
        "Buying tickets",
        "Inquiring about schedules",
        "Renting a car or bicycle",
        "Getting a taxi"
    ],
    3 => [
        "Checking in and out of a hotel",
        "Asking about amenities",
        "Requesting services",
        "Dealing with issues"
    ],
    4 => [
        "Making reservations",
        "Ordering food and drinks",
        "Dietary restrictions",
        "Paying the bill",
        "Complimenting or complaining"
    ],
    5 => [
        "Asking for prices",
        "Describing items (size, color)",
        "Paying",
        "Returning or exchanging items"
    ],
    6 => [
        "Describing symptoms",
        "Asking for medication",
        "Emergency contact",
        "First aid phrases"
    ],
    7 => [
        "Finding co-working spaces",
        "Asking about facilities",
        "Setting up meetings",
        "Technical support for devices",
        "Discussing work schedules"
    ],
    8 => [
        "Common social phrases",
        "Talking about interests",
        "Networking at events",
        "Exchanging contact information"
    ],
    9 => [
        "Asking about local attractions",
        "Booking tours and activities",
        "Inquiring about cultural events",
        "Sports and recreational activities"
    ],
    10 => [
        "Exchanging money",
        "Using ATM",
        "Opening a bank account",
        "Discussing bank fees and services"
    ],
    11 => [
        "Setting up utilities",
        "Reporting issues",
        "Understanding rental agreements",
        "Communicating with landlords"
    ],
    12 => [
        "Understanding VISA requirements",
        "Reporting lost or stolen items",
        "Dealing with local authorities",
        "Knowing rights and responsibilities"
    ]
];

// Language Codes
$codes = [
    "fra" => "fr",
    "eng" => "gb",
    "deu" => "de",
    "ita" => "it",
    "spa" => "es",
    "rus" => "ru",
    "tur" => "tr"
];
$languages = array_keys($codes);
$flags = array_values($codes);

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

        <p>Choose your preferred language.</p>
        <div class="polyglot-wrapper">
            <?php
            for ($i = 0; $i < count($languages); $i++) {
                if ($i == 0) {
            ?>
                    <div class="checkbox-wrapper">
                        <input class="inp-cbx" id="check-<?= $languages[$i] ?>" type="checkbox" checked disabled />
                        <label class="cbx" for="check-<?= $languages[$i] ?>">
                            <span>
                                <svg width="12px" height="10px">
                                    <use xlink:href="#check-4"></use>
                                </svg>
                            </span>
                            <span class="fi fi-<?= $flags[$i] ?>" style="margin: 0px 10px; font-size: 14px"></span>
                        </label>
                        <svg class="inline-svg">
                            <symbol id="check-4" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </symbol>
                        </svg>
                    </div>
                <?php
                } else {
                ?>
                    <div class="checkbox-wrapper">
                        <input class="inp-cbx" id="check-<?= $languages[$i] ?>" type="checkbox" />
                        <label class="cbx" for="check-<?= $languages[$i] ?>">
                            <span>
                                <svg width="12px" height="10px">
                                    <use xlink:href="#check-4"></use>
                                </svg>
                            </span>
                            <span class="fi fi-<?= $flags[$i] ?>" style="margin: 0px 10px; font-size: 14px"></span>
                        </label>
                        <svg class="inline-svg">
                            <symbol id="check-4" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </symbol>
                        </svg>
                    </div>
            <?php
                }
            }
            ?>
        </div>

        <div style="margin-bottom: 20px;">
            <select id="selection">
                <?php
                for ($i = 0; $i < count($sub_titles[$chapter]); $i++) {
                    if ($i == 0) {
                ?>
                        <option value="<?= $i + 1 ?>" selected>
                            <?= $sub_titles[$chapter][$i] ?>
                        </option>
                    <?php
                    } else {
                    ?>
                        <option value="<?= $i + 1 ?>">
                            <?= $sub_titles[$chapter][$i] ?>
                        </option>
                <?php
                    }
                }
                ?>
            </select>
        </div>

        <section id="section1">
            <?php
            foreach ($list1 as $value) {
                echo '<div class="text-box">'
                    . '<p class="phrase-fra"><span class="fi fi-fr" style="margin-right: 10px"></span>'
                    . $value["fra"]
                    . '</p>'
                    . '<p class="phrase-eng"><span class="fi fi-gb" style="margin-right: 10px"></span>'
                    . $value["eng"]
                    . '</p>'
                    . '<p class="phrase-deu"><span class="fi fi-de" style="margin-right: 10px"></span>'
                    . $value["deu"]
                    . '</p>'
                    . '<p class="phrase-spa"><span class="fi fi-es" style="margin-right: 10px"></span>'
                    . $value["spa"]
                    . '</p>'
                    . '<p class="phrase-ita"><span class="fi fi-it" style="margin-right: 10px"></span>'
                    . $value["ita"]
                    . '</p>'
                    . '<p class="phrase-rus"><span class="fi fi-ru" style="margin-right: 10px"></span>'
                    . $value["rus"]
                    . '</p>'
                    . '<p class="phrase-tur"><span class="fi fi-tr" style="margin-right: 10px"></span>'
                    . $value["tur"]
                    . '</p>'
                    . '</div>';
            }
            ?>
        </section>

        <section id="section2">
            <?php
            foreach ($list2 as $value) {
                echo '<div class="text-box">'
                    . '<p class="phrase-fra"><span class="fi fi-fr" style="margin-right: 10px"></span>'
                    . $value["fra"]
                    . '</p>'
                    . '<p class="phrase-eng"><span class="fi fi-gb" style="margin-right: 10px"></span>'
                    . $value["eng"]
                    . '</p>'
                    . '<p class="phrase-deu"><span class="fi fi-de" style="margin-right: 10px"></span>'
                    . $value["deu"]
                    . '</p>'
                    . '<p class="phrase-spa"><span class="fi fi-es" style="margin-right: 10px"></span>'
                    . $value["spa"]
                    . '</p>'
                    . '<p class="phrase-ita"><span class="fi fi-it" style="margin-right: 10px"></span>'
                    . $value["ita"]
                    . '</p>'
                    . '<p class="phrase-rus"><span class="fi fi-ru" style="margin-right: 10px"></span>'
                    . $value["rus"]
                    . '</p>'
                    . '<p class="phrase-tur"><span class="fi fi-tr" style="margin-right: 10px"></span>'
                    . $value["tur"]
                    . '</p>'
                    . '</div>';
            }
            ?>
        </section>

        <section id="section3">
            <?php
            foreach ($list3 as $value) {
                echo '<div class="text-box">'
                    . '<p class="phrase-fra"><span class="fi fi-fr" style="margin-right: 10px"></span>'
                    . $value["fra"]
                    . '</p>'
                    . '<p class="phrase-eng"><span class="fi fi-gb" style="margin-right: 10px"></span>'
                    . $value["eng"]
                    . '</p>'
                    . '<p class="phrase-deu"><span class="fi fi-de" style="margin-right: 10px"></span>'
                    . $value["deu"]
                    . '</p>'
                    . '<p class="phrase-spa"><span class="fi fi-es" style="margin-right: 10px"></span>'
                    . $value["spa"]
                    . '</p>'
                    . '<p class="phrase-ita"><span class="fi fi-it" style="margin-right: 10px"></span>'
                    . $value["ita"]
                    . '</p>'
                    . '<p class="phrase-rus"><span class="fi fi-ru" style="margin-right: 10px"></span>'
                    . $value["rus"]
                    . '</p>'
                    . '<p class="phrase-tur"><span class="fi fi-tr" style="margin-right: 10px"></span>'
                    . $value["tur"]
                    . '</p>'
                    . '</div>';
            }
            ?>
        </section>

        <section id="section4">
            <?php
            foreach ($list4 as $value) {
                echo '<div class="text-box">'
                    . '<p class="phrase-fra"><span class="fi fi-fr" style="margin-right: 10px"></span>'
                    . $value["fra"]
                    . '</p>'
                    . '<p class="phrase-eng"><span class="fi fi-gb" style="margin-right: 10px"></span>'
                    . $value["eng"]
                    . '</p>'
                    . '<p class="phrase-deu"><span class="fi fi-de" style="margin-right: 10px"></span>'
                    . $value["deu"]
                    . '</p>'
                    . '<p class="phrase-spa"><span class="fi fi-es" style="margin-right: 10px"></span>'
                    . $value["spa"]
                    . '</p>'
                    . '<p class="phrase-ita"><span class="fi fi-it" style="margin-right: 10px"></span>'
                    . $value["ita"]
                    . '</p>'
                    . '<p class="phrase-rus"><span class="fi fi-ru" style="margin-right: 10px"></span>'
                    . $value["rus"]
                    . '</p>'
                    . '<p class="phrase-tur"><span class="fi fi-tr" style="margin-right: 10px"></span>'
                    . $value["tur"]
                    . '</p>'
                    . '</div>';
            }
            ?>
        </section>

        <?php
        if ($list5) {
        ?>
            <section id="section5">
                <?php
                foreach ($list5 as $value) {
                    echo '<div class="text-box">'
                        . '<p class="phrase-fra"><span class="fi fi-fr" style="margin-right: 10px"></span>'
                        . $value["fra"]
                        . '</p>'
                        . '<p class="phrase-eng"><span class="fi fi-gb" style="margin-right: 10px"></span>'
                        . $value["eng"]
                        . '</p>'
                        . '<p class="phrase-deu"><span class="fi fi-de" style="margin-right: 10px"></span>'
                        . $value["deu"]
                        . '</p>'
                        . '<p class="phrase-spa"><span class="fi fi-es" style="margin-right: 10px"></span>'
                        . $value["spa"]
                        . '</p>'
                        . '<p class="phrase-ita"><span class="fi fi-it" style="margin-right: 10px"></span>'
                        . $value["ita"]
                        . '</p>'
                        . '<p class="phrase-rus"><span class="fi fi-ru" style="margin-right: 10px"></span>'
                        . $value["rus"]
                        . '</p>'
                        . '<p class="phrase-tur"><span class="fi fi-tr" style="margin-right: 10px"></span>'
                        . $value["tur"]
                        . '</p>'
                        . '</div>';
                }
                ?>
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

        const checkEng = document.getElementById('check-eng');
        const checkFra = document.getElementById('check-fra');
        const checkDeu = document.getElementById('check-deu');
        const checkSpa = document.getElementById('check-spa');
        const checkIta = document.getElementById('check-ita');
        const checkRus = document.getElementById('check-rus');
        const checkTur = document.getElementById('check-tur');

        const phrasesEng = document.getElementsByClassName('phrase-eng');
        const phrasesFra = document.getElementsByClassName('phrase-fra');
        const phrasesDeu = document.getElementsByClassName('phrase-deu');
        const phrasesSpa = document.getElementsByClassName('phrase-spa');
        const phrasesIta = document.getElementsByClassName('phrase-ita');
        const phrasesRus = document.getElementsByClassName('phrase-rus');
        const phrasesTur = document.getElementsByClassName('phrase-tur');

        function changeDisplay(array, visibility) {
            for (var i = 0; i < array.length; i++) {
                array[i].style.display = visibility;
            }
        }

        changeDisplay(phrasesFra, 'block');
        changeDisplay(phrasesEng, 'none');
        changeDisplay(phrasesDeu, 'none');
        changeDisplay(phrasesSpa, 'none');
        changeDisplay(phrasesIta, 'none');
        changeDisplay(phrasesRus, 'none');
        changeDisplay(phrasesTur, 'none');

        checkEng.addEventListener("click", (event) => {
            if (event.currentTarget.checked == true) {
                changeDisplay(phrasesEng, 'block');
            } else {
                changeDisplay(phrasesEng, 'none');
            }
        });

        checkFra.addEventListener("click", (event) => {
            if (event.currentTarget.checked == true) {
                changeDisplay(phrasesFra, 'block');
            } else {
                changeDisplay(phrasesFra, 'none');
            }
        });

        checkDeu.addEventListener("click", (event) => {
            if (event.currentTarget.checked == true) {
                changeDisplay(phrasesDeu, 'block');
            } else {
                changeDisplay(phrasesDeu, 'none');
            }
        });

        checkSpa.addEventListener("click", (event) => {
            if (event.currentTarget.checked == true) {
                changeDisplay(phrasesSpa, 'block');
            } else {
                changeDisplay(phrasesSpa, 'none');
            }
        });

        checkIta.addEventListener("click", (event) => {
            if (event.currentTarget.checked == true) {
                changeDisplay(phrasesIta, 'block');
            } else {
                changeDisplay(phrasesIta, 'none');
            }
        });

        checkRus.addEventListener("click", (event) => {
            if (event.currentTarget.checked == true) {
                changeDisplay(phrasesRus, 'block');
            } else {
                changeDisplay(phrasesRus, 'none');
            }
        });

        checkTur.addEventListener("click", (event) => {
            if (event.currentTarget.checked == true) {
                changeDisplay(phrasesTur, 'block');
            } else {
                changeDisplay(phrasesTur, 'none');
            }
        });

        /*
         * ---------------------
         * Section Selector
         * ---------------------
         */

        const section1 = document.getElementById('section1');
        const section2 = document.getElementById('section2');
        const section3 = document.getElementById('section3');
        const section4 = document.getElementById('section4');
        const section5 = document.getElementById('section5');

        section1.style.display = 'block';
        section2.style.display = 'none';
        section3.style.display = 'none';
        section4.style.display = 'none';
        if (section5) {
            section5.style.display = 'none';
        }

        let choice = 1;
        const selector = document.querySelector("select");
        selector.addEventListener("change", (event) => {
            choice = event.target.value;
            switch (choice) {
                case "1":
                    section1.style.display = 'block';
                    section2.style.display = 'none';
                    section3.style.display = 'none';
                    section4.style.display = 'none';
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    break;
                case "2":
                    section1.style.display = 'none';
                    section2.style.display = 'block';
                    section3.style.display = 'none';
                    section4.style.display = 'none';
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    break;
                case "3":
                    section1.style.display = 'none';
                    section2.style.display = 'none';
                    section3.style.display = 'block';
                    section4.style.display = 'none';
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    break;
                case "4":
                    section1.style.display = 'none';
                    section2.style.display = 'none';
                    section3.style.display = 'none';
                    section4.style.display = 'block';
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    break;
                case "5":
                    section1.style.display = 'none';
                    section2.style.display = 'none';
                    section3.style.display = 'none';
                    section4.style.display = 'none';
                    if (section5) {
                        section5.style.display = 'block';
                    }
                    break;
                default:
                    section1.style.display = 'none';
                    section2.style.display = 'none';
                    section3.style.display = 'none';
                    section4.style.display = 'none';
                    if (section5) {
                        section5.style.display = 'none';
                    }
                    break;
            }
        });
    </script>

</body>