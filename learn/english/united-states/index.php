<?php

$json = '../../../json/cities/cities_usa.json';

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

$list = json_file_decode($json);

// Extract all cities
$cities = [];
foreach ($list as $value) {
    array_push($cities, $value['city']);
}

// Parameters
$cities_params = [];
foreach ($cities as $value) {
    $city = trim($value);
    $city = strtolower($city);
    $city = str_replace(' ', '-', $city);
    array_push($cities_params, $city);
}

// Descriptions
$descriptions = [
    "New York City" => "NYC, largest U.S. city, global hub for finance, arts, diverse culture, iconic skyline.",
    "Los Angeles" => "LA, Southern California city, famed for entertainment, beaches, cultural diversity, and Mediterranean climate.",
    "Chicago" => "Chicago, 'Windy City,' known for architecture, culture, economic significance, vibrant arts, and cuisine.",
    "Houston" => "Houston, Texas' largest city, renowned for diverse economy, cultural scene, energy, and healthcare industries.",
    "Phoenix" => "Phoenix, Arizona's capital, thriving desert metropolis, known for its economic diversity and cultural richness.",
    "Philadelphia" => "Philadelphia, historical city, key in American Revolution, rich in culture, arts, and education.",
    "San Antonio" => "San Antonio, Texas city, rich history, known for the Alamo, vibrant cultural scene, and tourism.",
    "San Diego" => "San Diego, coastal California city, renowned for climate, beaches, cultural diversity, and naval heritage.",
    "Dallas" => "Dallas, Texas metropolis, known for vibrant culture, history, diverse economy, and strong sports presence.",
    "Jacksonville" => "Jacksonville, largest city by area in U.S., known for culture, extensive parks, and coastal beauty.",
    "Austin" => "Austin, Texas' capital, vibrant cultural hub, famous for music scene, tech industry, and outdoor spaces.",
    "Fort Worth" => "Fort Worth, Texas city, blends Western heritage with vibrant arts scene, diverse economy, and culture.",
    "San Jose" => "San Jose, heart of Silicon Valley, innovation hub, diverse culture, tech-driven economy, and sustainability.",
    "Columbus" => "Columbus, Ohio's capital, rich in history, modern innovation, thriving economy, and cultural diversity.",
    "Charlotte" => "Charlotte, North Carolina's largest city, financial hub, known for vibrant culture, arts, and recreation.",
    "Indianapolis" => "Indianapolis, Indiana's capital, cultural heritage, famous for Indianapolis 500, thriving economy, and diverse museums.",
    "San Francisco" => "San Francisco, California city, iconic landmarks, tech hub, diverse culture, innovation, and scenic beauty.",
    "Seattle" => "Seattle, tech-driven city, known for innovation, arts, stunning natural beauty, and vibrant cultural scene.",
    "Denver" => "Denver, Colorado's capital, outdoor recreation, vibrant culture, thriving economy, and stunning Rocky Mountain backdrop.",
    "Oklahoma City" => "Oklahoma City, Great Plains metropolis, vibrant economy, rich history, cultural attractions, and sports enthusiasm."
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
    require ("../../../components/header.php");
    ?>

    <div class="wrapper animated fade_1">

        <div style="margin-bottom: 20px;">
            <?php
            require ("../../../components/breadcrumbs.php");
            ?>
        </div>

        <h1>
            United States
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <div class="styled-section-pink animated riseUp_1">
                <p>
                    Explore the diverse culture, history, and landscapes of the United States while enhancing your language skills.
                </p>
                <div class="styled-section-pink-icon">
                    <i class="fa-solid fa-plane"></i>
                </div>
            </div>

            <?php
            for ($i = 0; $i < count($cities); $i++) {
                $city = $cities[$i];
                ?>
                <a href="./city.php?city=<?= $cities_params[$i] ?>">
                    <div class="styled-box-pink">
                        <h2>
                            <?= $cities[$i] ?>
                        </h2>
                        <h4>
                            <span class="fi fi-us"></span>
                        </h4>
                        <p>
                            <?= $descriptions[$city] ?>
                        </p>
                    </div>
                </a>
                <?php
            }
            ?>

        </div>

    </div>

</body>