<?php

require_once '../db.inc.php';

$email = $_GET["email"] ?? "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? "";
    $code = $_POST["code"] ?? "";

    $query = "SELECT * FROM USER_PASSWORDLESS WHERE email = :email AND code = :code";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":code", $code);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user == null) {
        die("Invalid Code");
    }

    $sql = "UPDATE USER_PASSWORDLESS SET code = NULL WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $user["id"]);
    $stmt->execute();

    die("Logged-In");
}
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
    // require("../../components/header.php");
    ?>

    <div class="wrapper-fixed animated fade_1">

        <div class="vertically-center">
            <h1>Verify your email</h1>
            <div class="styled-form animated riseUp_2">
                <form action="./verify.php" method="POST">
                    <input type="hidden" name="email" value="<?php echo $email; ?>" />
                    <ul>
                        <li>
                            <input type="text" name="code" placeholder="Enter your code">
                        </li>
                        <li>
                            <button type="submit" name="send">Verify</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

    </div>

</body>