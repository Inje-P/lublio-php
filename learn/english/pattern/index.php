<?php
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

$descriptions = [
    "I'm here to learn new things.",
    "Do you know what the weather will be like tomorrow?",
    "I think I've got a good understanding of the topic.",
    "I really like how you decorated your room.",
    "Would you like me to help you with that?",
    "Don't try to force it; let it happen naturally.",
    "I'm sorry to say that I won't be able to attend.",
    "Let me explain why I made that decision.",
    "There are so many beautiful places in the world.",
    "That's exactly what I expected.",
    "Let me tell you about the opportunity we have.",
    "I know how to handle this situation.",
    "What do you think of my presentation?",
    "When is the best time to post on social media?",
    "Is there anyone who's available this weekend?",
    "How long have you been interested in photography?",
    "It's better than doing it alone.",
    "I've never heard anyone speak like that.",
    "I'm quite sure you'll love this place.",
    "All I know is that this is the right decision.",
    "What I really think is that you're on the right track.",
    "No one would understand what we're going through.",
    "What I'm trying to say is we need to work together.",
    "It's time to finish this project.",
    "I'm absolutely focused on achieving my goals.",
    "Do you mind if I make a suggestion?",
    "It seems like the weather will be nice.",
    "I was wondering if you could join us for dinner."
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
            Pattern
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <div class="styled-section-pink animated riseUp_1">
                <p>
                    Learn how to construct sentences correctly. This section covers common sentence structures and patterns to help you communicate more clearly and confidently.
                </p>
                <div class="styled-section-pink-icon">
                    <i class="fa-solid fa-circle-nodes"></i>
                </div>
            </div>

            <?php
            for ($i = 0; $i < count($titles); $i++) {
            ?>
                <a href="./pattern.php?chapter=<?= $i + 1; ?>">
                    <div class="styled-box-pink">
                        <h2>
                            <?= $titles[$i] ?>
                        </h2>
                        <h4>
                            <?= $i + 1 ?>
                        </h4>
                        <p style="margin-top: 10px">
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