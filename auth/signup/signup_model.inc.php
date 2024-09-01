<?php

// For the Type Safety
declare(strict_types=1);

function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM TB_USERS WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_firstname(object $pdo, string $firstname)
{
    $query = "SELECT firstname FROM TB_USERS WHERE firstname = :firstname;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_lastname(object $pdo, string $lastname)
{
    $query = "SELECT lastname FROM TB_USERS WHERE lastname = :lastname;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $email, string $firstname, string $lastname, string $pwd)
{
    $query = "INSERT INTO TB_USERS (email, firstname, lastname, pwd) VALUES (:email, :firstname, :lastname, :pwd);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->execute();
}