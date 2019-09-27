<?php

function randomKey($key) {

    $alfa = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFJHIJKLMNOPQRSTUWXYZ";
    $token = "";

    for($i = 1; $i <= $key; $i ++) {

        $token .= $alfa[rand(1, strlen($alfa))];

    }    

    return $token;

}