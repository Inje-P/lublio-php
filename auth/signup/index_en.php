<?php
// require_once 'includes/config_session.inc.php';
require_once './signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en" color-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lublio</title>

    <link rel="stylesheet" type="text/css" href="../../css/common.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3b42a5b89f.js" crossorigin="anonymous"></script>

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
</head>

<body>

    <?php
    require("../../components/header.php");
    ?>

    <div class="wrapper-fixed animated fade_1">

        <div class="vertically-center">
            <h1>Email Login</h1>
            <div class="styled-form animated riseUp_2">
                <form action="./signup_passwordless.inc.php" method="POST">
                    <ul>
                        <li>
                            <input type="email" name="email" placeholder="Email">
                        </li>
                        <!-- <li>
                            <input type="text" name="firstname" placeholder="First Name">
                            <input type="text" name="lastname" placeholder="Last Name">
                        </li>
                        <li>
                            <input type="password" name="pwd" placeholder="Password">
                        </li> -->
                        <li>
                            <button type="submit" name="send">Sign-Up</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

    </div>

</body>