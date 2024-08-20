<?php

$json = './json/phrasebook1/phrasebook1_1.json';

function json_file_decode(string $path)
{
    if (file_exists($path) === false) {
        return false;
    }

    $content = file_get_contents($path);
    $content = trim($content);
    $content = str_replace(["\xEF\xBB\xBF", "\r\n", "\r", "\n", "\t"], '', $content); //BOM, 개행
    $content = str_replace(',}', '}', $content); // 마지막 , 짜르기 / {"aa",} 형태
    $content = str_replace(',]', ']', $content); // 마지막 , 짜르기 / ["aa",] 형태

    return json_decode($content, true);
}

$list = json_file_decode($json);

// var_dump($list["common_greetings"][0]["translations"]["eng"]);

foreach ($list as $value) {
    echo $value . '<br/>';
}

?>