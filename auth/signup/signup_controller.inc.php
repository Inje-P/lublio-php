<?php

// For the Type Safety
declare(strict_types=1);

/*
* Error Handlers
*/
function is_input_empty(string $email, string $firstname, string $lastname, string $pwd)
{
    if (empty($email) || empty($firstname) || empty($lastname) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email)
{
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

/*
* DB Access
*/
function create_user(object $pdo, string $email, string $firstname, string $lastname, string $pwd)
{
    set_user($pdo, $email, $firstname, $lastname, $pwd);
}
