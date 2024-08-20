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

// Parameter
$param = $_GET["city"];

// Extract all cities
$cities = [];
foreach ($list as $value) {
    array_push($cities, $value['city']);
}

// Find the index number from the parameter list
$cities_params = [];
foreach ($cities as $value) {
    $city = trim($value);
    $city = strtolower($city);
    $city = str_replace(' ', '-', $city);
    array_push($cities_params, $city);
}
$index_num = array_search($param, $cities_params);

// Extract all contents
$contents = [];
foreach ($list as $key => $value) {
    array_push($contents, $value['content']);
}
switch ($index_num) {
    case 0:
        $contents = $contents[$index_num];
        break;
    case 1:
        $contents = $contents[$index_num];
        break;
    case 2:
        $contents = $contents[$index_num];
        break;
    case 3:
        $contents = $contents[$index_num];
        break;
    case 4:
        $contents = $contents[$index_num];
        break;
    case 5:
        $contents = $contents[$index_num];
        break;
    case 6:
        $contents = $contents[$index_num];
        break;
    case 7:
        $contents = $contents[$index_num];
        break;
    case 8:
        $contents = $contents[$index_num];
        break;
    case 9:
        $contents = $contents[$index_num];
        break;
    case 10:
        $contents = $contents[$index_num];
        break;
    case 11:
        $contents = $contents[$index_num];
        break;
    case 12:
        $contents = $contents[$index_num];
        break;
    case 13:
        $contents = $contents[$index_num];
        break;
    case 14:
        $contents = $contents[$index_num];
        break;
    case 15:
        $contents = $contents[$index_num];
        break;
    case 16:
        $contents = $contents[$index_num];
        break;
    case 17:
        $contents = $contents[$index_num];
        break;
    case 18:
        $contents = $contents[$index_num];
        break;
    case 19:
        $contents = $contents[$index_num];
        break;
    default:
        $contents = $contents[0];
        break;
}

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

        <?php
        require("../../../components/breadcrumbs.php");
        ?>

        <h1 class="article-title animated riseUp_1">
            <?= $cities[$index_num] ?>
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <p class="article animated riseUp_2">
                <?= $contents["content1"] ?>
            </p>
            <p class="article animated riseUp_3">
                <?= $contents["content2"] ?>
            </p>
            <p class="article animated riseUp_4">
                <?= $contents["content3"] ?>
            </p>
        </div>

    </div>

</body>