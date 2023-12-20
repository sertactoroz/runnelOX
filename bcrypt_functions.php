<?php

function generateHash($password)
{
    $options = [
        'cost' => 5,
    ];

    // Generate a salt and hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    return $hashedPassword;
}

function verify($password, $hashedPassword)
{

    return password_verify($password, $hashedPassword);
}
