<?php
$titles = [
    "One",
    "Two",
    "Three",
    "Four",
    "Five",
    "Six",
    "Seven",
    "Eight",
    "Nine",
    "Ten",
    "Eleven",
    "Twelve"
];

$sub_titles = [
    "Alphabet",
    "Pronunciation",
    "Everyday Expressions",
    "Numbers 1 to 10",
    "Days of the Week",
    "Numbers 1 to 100",
    "Months of the Year",
    "Telling Time",
    "Countries, Nationalities, and Languages",
    "Large Numbers",
    "Locations",
    "Directions"
];

$descriptions = [
    "Master the foundation by learning the alphabet, the essential building blocks of any language.",
    "Improve your speaking skills with key pronunciation tips, helping you sound more natural and confident.",
    "Familiarize yourself with common expressions used in daily conversations to sound more like a native speaker.",
    "Start counting with ease by learning numbers 1 to 10, essential for everyday situations.",
    "Learn the names of the days to discuss schedules, appointments, and plans confidently.",
    "Expand your numerical knowledge by mastering numbers 1 to 100 for shopping, dates, and more.",
    "Understand the months to talk about seasons, holidays, and important events effortlessly.",
    "Learn how to ask for and tell the time, an essential skill for daily interactions.",
    "Explore the vocabulary for discussing where people live, their nationalities, and the languages they speak.",
    "Tackle larger numbers to handle money, measurements, and other practical situations with confidence.",
    "Learn location-related words to describe places, give directions, and understand where things are.",
    "Master the vocabulary needed to ask for and give directions, ensuring you can find your way anywhere."
];

?>

<!DOCTYPE html>
<html lang="en" color-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lublio</title>

    <link rel="stylesheet" type="text/css" href="../../../css/common.css" />

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
            Starter
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <div class="styled-section-pink animated riseUp_1">
                <p>
                    Begin your language learning journey with the basics. This section introduces fundamental concepts and simple words to help you build a strong foundation from the ground up.
                </p>
                <div class="styled-section-pink-icon">
                    <i class="fa-regular fa-compass"></i>
                </div>
            </div>

            <?php
            for ($i = 0; $i < count($titles); $i++) {
            ?>
                <a href="/lublio/learn/english/starter/starter<?= $i + 1; ?>/">
                    <div class="styled-box-pink">
                        <h2>
                            <?= $titles[$i] ?>
                        </h2>
                        <h3>
                            <?= $sub_titles[$i] ?>
                        </h3>
                        <h4>
                            <?= $i + 1 ?>
                        </h4>
                        <p>
                            <?= $descriptions[$i] ?>
                        </p>
                    </div>
                </a>
            <?php
            }
            ?>

        </div>

    </div>

</body>