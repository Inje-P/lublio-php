<?php
$http_host = $_SERVER["HTTP_HOST"];
$request_uri = $_SERVER["REQUEST_URI"];
$original_url = "https://" . $http_host . $request_uri;

$url = parse_url($original_url);
$url_array = explode('/', $url["path"]);
// var_dump(count($url_array));
?>

<div style="margin-bottom: 20px;">
    <ul class="breadcrumbs">
        <?php
        echo '<li><a href="#"><i class="fa-solid fa-house" style="font-size: 14px"></i></a></li>';

        if (count($url_array) == 4) {
            switch ($url_array[2]) {
                case "learn":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/">Learn</a></li>';
                    break;
                case "blog":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/blog/">Blog</a></li>';
                    break;
                case "about-us":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/about-us/">About Us</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
        } else if (count($url_array) == 5) {
            switch ($url_array[2]) {
                case "learn":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/">Learn</a></li>';
                    break;
                case "blog":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/blog/">Blog</a></li>';
                    break;
                case "about-us":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/about-us/">About Us</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
            switch ($url_array[3]) {
                case "english":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/english/">English</a></li>';
                    break;
                case "french":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/french/">French</a></li>';
                    break;
                case "german":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/german/">German</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
        } else if (count($url_array) == 6) {
            switch ($url_array[2]) {
                case "learn":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/">Learn</a></li>';
                    break;
                case "blog":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/blog/">Blog</a></li>';
                    break;
                case "about-us":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/about-us/">About Us</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
            switch ($url_array[3]) {
                case "english":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/english/">English</a></li>';
                    break;
                case "french":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/french/">French</a></li>';
                    break;
                case "german":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/german/">German</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
            switch ($url_array[4]) {
                case "starter":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="./">Starter</a></li>';
                    break;
                case "pattern":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="./">Pattern</a></li>';
                    break;
                case "phrasebook":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="./">Phrasebook</a></li>';
                    break;
                case "united-states":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="./">United States</a></li>';
                    break;
                case "france":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="./">France</a></li>';
                    break;
                case "germany":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="./">Germany</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
        } else if (count($url_array) == 7) {
            switch ($url_array[2]) {
                case "learn":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/">Learn</a></li>';
                    break;
                case "blog":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/blog/">Blog</a></li>';
                    break;
                case "about-us":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/about-us/">About Us</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
            switch ($url_array[3]) {
                case "english":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/english/">English</a></li>';
                    break;
                case "french":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/french/">French</a></li>';
                    break;
                case "german":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="/lublio/learn/german/">German</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
            switch ($url_array[4]) {
                case "starter":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="../">Starter</a></li>';
                    break;
                case "pattern":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="../">Pattern</a></li>';
                    break;
                case "phrasebook":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="../">Phrasebook</a></li>';
                    break;
                case "united-states":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="../">United States</a></li>';
                    break;
                case "france":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="../">France</a></li>';
                    break;
                case "germany":
                    echo '<li>&#x3e;</li>';
                    echo '<li><a href="../">Germany</a></li>';
                    break;
                default:
                    echo '';
                    break;
            }
            switch ($url_array[5]) {
                default:
                    echo '';
                    break;
            }
        } else {
            echo '';
        }
        ?>
    </ul>
</div>