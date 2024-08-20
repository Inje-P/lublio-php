<?php

$json = '../../../json/cities/cities_france.json';

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
    "Paris" => "Paris, France's capital, known for iconic landmarks, rich history, and vibrant culture.",
    "Marseille" => "Marseille, vibrant Mediterranean city, famous for historic Vieux-Port, diverse culture, and stunning views.",
    "Lyon" => "Lyon, UNESCO site, renowned for gastronomy, historic architecture, and dynamic cultural scene.",
    "Toulouse" => "Toulouse, 'Ville Rose,' known for rich history, aerospace hub, and vibrant cultural heritage.",
    "Nice" => "Nice, elegant seaside city on Côte d'Azur, famous for Promenade des Anglais and Mediterranean charm.",
    "Nantes" => "Nantes, historic city on Loire, known for vibrant culture, green spaces, and architectural elegance.",
    "Strasbourg" => "Strasbourg, historic and European political center, famous for its Gothic cathedral and cultural diversity.",
    "Montpellier" => "Montpellier, dynamic southern city, known for rich history, vibrant student life, and cultural vitality.",
    "Bordeaux" => "Bordeaux, renowned for historic architecture, prestigious wines, and UNESCO-listed city center.",
    "Lille" => "Lille, cultural and economic hub in northern France, known for its Flemish-French heritage.",
    "Rennes" => "Rennes, vibrant student city with rich history, known for architecture, parks, and cultural life.",
    "Reims" => "Reims, historic city known for Gothic cathedral, royal coronations, and world-renowned Champagne houses.",
    "Le Havre" => "Le Havre, port city with modernist architecture, rebuilt post-WWII, UNESCO-listed for its urban design.",
    "Cergy-Pontoise" => "Cergy-Pontoise, modern planned city near Paris, known for green spaces, cultural sites, and sustainable development.",
    "Saint-Étienne" => "Saint-Étienne, industrial city with rich history, known for metallurgy, museums, and architectural diversity.",
    "Toulon" => "Toulon, Mediterranean port city, rich maritime heritage, known for naval base and scenic beauty.",
    "Angers" => "Angers, Loire Valley city known for its medieval castle, historic tapestries, and vibrant cultural scene.",
    "Grenoble" => "Grenoble, 'Capital of the Alps,' renowned for its scenic surroundings, research institutions, and cultural heritage.",
    "Dijon" => "Dijon, historic Burgundy city, famous for medieval architecture, renowned mustard, and prestigious wines.",
    "Nîmes" => "Nîmes, 'French Rome,' known for well-preserved Roman monuments like the Amphitheatre and Maison Carrée."
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
            France
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <div class="styled-section-blue animated riseUp_1">
                <p>
                    Immerse yourself in France's rich culture, history, and language through engaging lessons and interactive activities.
                </p>
                <div class="styled-section-blue-icon">
                    <i class="fa-solid fa-plane"></i>
                </div>
            </div>

            <?php
            for ($i = 0; $i < count($cities); $i++) {
                $city = $cities[$i];
                ?>
                <a href="./city.php?city=<?= $cities_params[$i] ?>">
                    <div class="styled-box-blue">
                        <h2>
                            <?= $cities[$i] ?>
                        </h2>
                        <h4>
                            <span class="fi fi-fr"></span>
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