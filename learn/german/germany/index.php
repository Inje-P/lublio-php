<?php

$json = '../../../json/cities/cities_germany.json';

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
    "Berlin" => "Berlin, Deutschlands Hauptstadt, bekannt für reiche Geschichte, kulturelle Vielfalt und lebendige Kunstszene.",
    "Hamburg" => "Hamburg, zweitgrößte Stadt, bedeutender Hafen, bekannt für Speicherstadt, Elbphilharmonie und lebendige Musikszene.",
    "München" => "München, Hauptstadt Bayerns, berühmt für Oktoberfest, Kultur, historische Architektur und hohe Lebensqualität.",
    "Köln" => "Köln, am Rhein, bekannt für gotischen Dom, lebendige Altstadt und berühmten Karneval.",
    "Frankfurt am Main" => "Frankfurt, Finanzzentrum Europas, bekannt für Skyline, kulturelle Vielfalt und historische Altstadt.",
    "Stuttgart" => "Stuttgart, Zentrum der Automobilindustrie, bekannt für kulturelle Vielfalt, Neue Schloss und Staatsoper.",
    "Düsseldorf" => "Düsseldorf, Rheinmetropole, bekannt für Rheinuferpromenade, Kunstsammlung und internationale Messen.",
    "Leipzig" => "Leipzig, kulturelle Hochburg, bekannt für musikalisches Erbe, Buchmesse und lebendige Kunstszene.",
    "Dortmund" => "Dortmund, Ruhrgebietsstadt, bekannt für industrielle Geschichte, Fußballkultur und grünen Westfalenpark.",
    "Essen" => "Essen, im Ruhrgebiet, bekannt für Zeche Zollverein, kulturelle Vielfalt und grüne Erholungsgebiete.",
    "Bremen" => "Bremen, historische Hafenstadt, bekannt für UNESCO-Welterbe, Rolandstatue und Bremer Stadtmusikanten.",
    "Dresden" => "Dresden, \"Elbflorenz,\" bekannt für barocke Architektur, Frauenkirche und bedeutende Kunstsammlungen.",
    "Hannover" => "Hannover, Messestadt, bekannt für Herrenhäuser Gärten, Neues Rathaus und vielfältige Kulturszene.",
    "Nürnberg" => "Nürnberg, historische Stadt, bekannt für Kaiserburg, Altstadt und bedeutende Rolle im Nationalsozialismus.",
    "Duisburg" => "Duisburg, Ruhrgebietsstadt, bekannt für Binnenhafen, industrielle Geschichte und kulturelle Transformation.",
    "Bochum" => "Bochum, im Ruhrgebiet, bekannt für Bergbaugeschichte, Deutsches Bergbau-Museum und lebendige Kulturszene.",
    "Wuppertal" => "Wuppertal, bekannt für Schwebebahn, kulturelle Vielfalt und grüne Erholungsgebiete.",
    "Bielefeld" => "Bielefeld, Industriestadt, bekannt für Mittelaltergeschichte, blühende Wirtschaft und Universität.",
    "Bonn" => "Bonn, ehemalige Hauptstadt, bekannt für Beethoven-Haus, Museumsmeile und Universität.",
    "Münster" => "Münster, Universitätsstadt, bekannt für Westfälischen Frieden, reiche Kultur und Fahrradfreundlichkeit."
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
            Germany
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <div class="styled-section-yellow animated riseUp_1">
                <p>
                    Discover Germany's vibrant culture, history, and language through interactive lessons designed to enhance your learning experience.
                </p>
                <div class="styled-section-yellow-icon">
                    <i class="fa-solid fa-plane"></i>
                </div>
            </div>

            <?php
            for ($i = 0; $i < count($cities); $i++) {
                $city = $cities[$i];
            ?>
                <a href="./city.php?city=<?= $cities_params[$i] ?>">
                    <div class="styled-box-yellow">
                        <h2>
                            <?= $cities[$i] ?>
                        </h2>
                        <h4>
                            <span class="fi fi-de"></span>
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