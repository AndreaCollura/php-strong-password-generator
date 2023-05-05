<?php


function passwordGen($characters)
{

    $password = '';
    $userLength = $_GET['numlength'];
    $charaLength =  strlen($characters) - 1;
    for ($i = 0; $i < $userLength; $i++) {
        $n = rand(0, $charaLength);
        $password .= $characters[$n];
    }
    return $password;
}
