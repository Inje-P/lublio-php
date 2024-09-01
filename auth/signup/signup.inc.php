<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $pwd = $_POST["pwd"];

    try {
        require_once '../db.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_controller.inc.php';

        $errors = [];

        // Error Handlers
        if (is_input_empty($email, $firstname, $lastname, $pwd)) {
            $errors["empty_input"] = "Please, fill in all fields.";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used.";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered.";
        }

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            // $signupData = [
            //     "email" => $email,
            //     "firstname" => $firstname,
            //     "lastname" => $lastname
            // ];
            // $_SESSION["signup_data"] = $signupData;

            header("Location: ./index.php");
            die();
        }

        create_user($pdo, $email, $firstname, $lastname, $pwd);

        header("Location: ./index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ./index.php");
    die();
}
