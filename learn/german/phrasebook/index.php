<?php
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

$descriptions = [
    "Learn essential greetings, introduce yourself, ask for someone's information, and use simple pleasantries. Perfect for making a great first impression.",
    "Navigate travel easily by learning how to ask for directions, buy tickets, inquire about schedules, use public transport, rent vehicles, and get a taxi.",
    "Master the essentials of checking in and out, asking about amenities, requesting services, and dealing with common issues at hotels.",
    "From making reservations to ordering food and drinks, handling dietary restrictions, paying the bill, and expressing your opinion about the meal.",
    "Discover how to ask for prices, bargain, describe items, pay, and manage returns or exchanges while shopping.",
    "Find a doctor or pharmacy, describe symptoms, ask for medication, know emergency contacts, and learn first aid phrases.",
    "Find co-working spaces, ask about Wi-Fi, set up meetings, get tech support, and discuss work schedules.",
    "Use common social phrases, talk about hobbies, network at events, and exchange contact information to build connections.",
    "Learn to ask about local attractions, book tours, inquire about cultural events, and explore sports and recreational activities.",
    "Exchange money, use ATMs, open a bank account, and discuss bank fees and services for smooth financial transactions.",
    "Set up utilities, report issues, understand rental agreements, and communicate effectively with landlords.",
    "Navigate visa and immigration requirements, report lost or stolen items, deal with local authorities, and know your rights and responsibilities."
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
            Phrasebook
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <div class="styled-section-yellow animated riseUp_1">
                <p>
                    Access essential phrases for various scenarios. From everyday interactions to travel emergencies, this section equips you with practical expressions for effective communication.
                </p>
                <div class="styled-section-yellow-icon">
                    <i class="fa-regular fa-comment-dots"></i>
                </div>
            </div>

            <?php
            for ($i = 0; $i < count($titles); $i++) {
            ?>
                <a href="./phrasebook.php?chapter=<?= $i + 1; ?>">
                    <div class="styled-box-yellow">
                        <h2>
                            <?= $titles[$i] ?>
                        </h2>
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