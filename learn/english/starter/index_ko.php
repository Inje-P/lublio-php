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
    "알파벳",
    "발음 규칙",
    "기초 표현",
    "숫자 1~10",
    "요일",
    "숫자 1~100",
    "월",
    "시간",
    "국가, 국적, 언어",
    "숫자 100 이상",
    "위치",
    "방향"
];

$descriptions = [
    "모든 언어의 필수 구성 요소인 알파벳을 학습하여 기초를 다져보세요.",
    "핵심 발음 팁으로 말하기 실력을 향상시켜 더욱 자연스럽고 자신감 있게 말할 수 있습니다.",
    "일상 대화에서 자주 쓰이는 기초적인 표현을 배워 원어민들에게 자연스럽게 인사를 건넬 수 있습니다.",
    "필수적인 숫자 1부터 10까지를 배우며 숫자와 관련된 표현을 말할 수 있습니다.",
    "일정, 약속, 계획을 자신 있게 말할 수 있도록 요일 이름을 학습합니다.",
    "쇼핑, 날짜 등을 위해 1부터 100까지의 숫자를 익혀 표현을 확장해보세요.",
    "계절, 휴일, 중요한 이벤트에 대해 쉽게 이야기할 수 있도록 월 이름에 대해 학습합니다.",
    "일상적인 대화에서 필수적인 시간을 묻고 답하는 방법을 배워보세요.",
    "국적, 민족, 거주지, 사용하는 언어에 대해 묻고 답할 수 있습니다.",
    "경제활동을 하는데 필요한 표현들을 사용하기 위해 100 이상의 숫자들을 학습합니다.",
    "장소를 설명하고, 길을 안내하고, 사물이 어디에 있는지 묘사하기 위해 위치 관련 단어를 배웁니다.",
    "길을 묻고 방향을 알려주는데 필요한 어휘를 익혀 어디서든 길을 찾을 수 있습니다."
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

        <h1 style="font-family: 'Pretendard-Regular', sans-serif">
            첫걸음
        </h1>
        <hr />

        <div style="margin-bottom: 20px;">
            <div class="styled-section-pink animated riseUp_1">
                <p style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 500">
                    언어 학습의 여정은 기초부터 시작하세요. 이 섹션에서는 기본 개념과 간단한 단어들을 소개하며, 기초부터 탄탄하게 다질 수 있도록 도와드립니다.
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
                        <h2 style="font-size: 32px">
                            <?= $titles[$i] ?>
                        </h2>
                        <h3 style="font-family: 'Pretendard-Regular', sans-serif; font-size: 18px; font-weight: 600">
                            <?= $sub_titles[$i] ?>
                        </h3>
                        <h4>
                            <?= $i + 1 ?>
                        </h4>
                        <p style="font-family: 'Pretendard-Regular', sans-serif; font-weight: 500">
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