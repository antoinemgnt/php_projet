<?php
$phrase = readline("Saisir une phrase : ");
$consonne = 0;
$voyelle = 0;
$ini = 0;
while ($ini <= strlen($phrase)-1) {
    $car = substr($phrase,$ini,1);
    if ($car == "a" || $car == "e" || $car == "i" || $car == "o" || $car == "u" || $car == "y" ){
        $voyelle++;
    } else {

    }

    $ini++;
}