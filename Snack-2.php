<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if ((strlen($name) > 3) && (strpos($email, '@')) && (strpos($email, '.', -4)) && ((is_numeric($age)))) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
}

?>