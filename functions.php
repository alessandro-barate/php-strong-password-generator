<?php

$generated_password = '';
$_SESSION['my_password'] = $generated_password;

if (!empty($_GET['length'])) {
    $length = $_GET['length'];
    $generated_password = generatePassword($length);
};

function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $my_password = '';
    for ($i = 0; $i < $length; $i++) {
        $my_password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $my_password;
};
