<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../../phpmailer/src/Exception.php";
require "../../phpmailer/src/PHPMailer.php";
require "../../phpmailer/src/SMTP.php";

require_once '../db.inc.php';

function send_code($to, $subject, $body)
{
    $mail = new PHPMailer(true);

    try {
        // Server Settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'grandefidelite@gmail.com';
        $mail->Password = 'nflodloxvtvepjpo';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('grandefidelite@gmail.com', 'Luan Pak');
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $body;

        $mail->send();

        // echo
        // "
        // <script>
        // alert('Sent Successfully');
        // document.location.href = 'index.php';
        // </script>
        // ";
    } catch (Exception $e) {
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];

    $str = "qwertyuiopasdfghjklzxcvbnm1234567890";
    $code = "";

    for ($i = 1; $i <= 8; $i++) {
        $code .= $str[rand(0, strlen($str) - 1)];
    }

    $subject = "Email Verification";
    $body = "Here's your verification code to log in Lublio:"
        . "<br><br>"
        . "Your verification code is : "
        . $code;

    $query = "SELECT * FROM USER_PASSWORDLESS WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user == null) {
        $query = "INSERT INTO USER_PASSWORDLESS (email, code) VALUES (:email, :code)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":code", $code);
        $stmt->execute();

        send_code($email, $subject, $body);

        header("Location: ./verify.php?email=" . $email);
        exit();
    }

    $query = "UPDATE USER_PASSWORDLESS SET code = :code WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":code", $code);
    $stmt->execute();

    send_code($email, $subject, $body);

    header("Location: ./verify.php?email=" . $email);
    exit();
}
