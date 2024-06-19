<?php

$generated_password = '';

if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $generated_password = generatePassword($length);
};

function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $my_password = '';
    for ($i = 0; $i < $length; $i++) {
        $my_password .= $characters[rand(0, strlen($characters) - 1)];
        header('Location: generated-password.php');
    }
    return $my_password;
};

// if (isset($generated_password)) {
//     header('Location: generated-password.php');
// };
