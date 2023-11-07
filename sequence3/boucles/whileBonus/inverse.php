<?php

$phrase = readline("Saisir une phrase : ");
$taille = strlen($phrase);
$ini = 0;
$newphrase = '';
while ($ini < strlen($phrase)){
    $lettre = substr ($phrase,$taille-1,1);
    $newphrase = $newphrase.$lettre;
    $ini++;
    $taille--;
    }
echo $newphrase;