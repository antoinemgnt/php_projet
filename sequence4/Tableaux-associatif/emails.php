<?php
$emails = [
    "Maxime"=>"Maxime@gmail.com",
    "Ethan"=>"Ethan@laposte.net",
    "Thomas"=>"Thomas@free.fr"
];
foreach ($emails as $nom=>$email) {
    echo "$nom : $email".PHP_EOL;
}