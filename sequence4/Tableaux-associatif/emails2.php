<?php
$emails = [
    "Maxime"=>"Maxime@gmail.com",
    "Ethan"=>"Ethan@laposte.net",
    "Thomas"=>"Thomas@free.fr"
];
$domaine = readline("Saisir le nom d'un domaine : ");
foreach ($emails as $nom=>$email) {
    if (str_contains($email,$domaine)){
        echo $email;
    }
}
