<?php
$nombre1 = readline("saisir un nombre entier : ");
$nombre2 = readline("saisir un nombre entier : ");
if ($nombre2 == 0){
    $nombre2 = readline("saisir un nombre entier autre que 0 : ");
}
$resultat = round($nombre1/$nombre2,2);
echo "le résultat de la division de $nombre1 par $nombre2 est $resultat";

