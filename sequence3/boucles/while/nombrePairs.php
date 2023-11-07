<?php

$nombre = 0;
$user = readline("Saisir un nombre entier : ");
while ($nombre <= $user){
    if ($nombre % 2 == 0){
        echo $nombre . ' ';
    }
    $nombre += 2;
}
