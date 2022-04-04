<?php

$numeri = [];

while (count($numeri) < 15) {

    $numeri_random = rand(1, 20);

    if (!in_array($numeri_random, $numeri)) {

        array_push($numeri, $numeri_random);

    };
    
}

var_dump($numeri)
?>