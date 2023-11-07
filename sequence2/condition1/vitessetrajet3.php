<?php
$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$distance = readline("saisir une distance (km) : ");
$duree = readline("saisir une durée (h:mn) : ");
$minute = substr($duree,2,2);
$heure = substr($duree, 0,1);
if (substr($duree,1,1) != ":") {
    echo $texteRouge . "ERREUR la durée est invalide" . $normal;
} else {
    $duree = intval($minute) / 60 + intval($heure);
    $vitesse = round($distance / $duree, 0);

    if ($minute > 59) {
        echo $texteRouge . "ERREUR la durée est invalide" . $normal;
    } else {
        echo "la vitesse moyenne du trajet est de $vitesse km/h.\n";
        if ($vitesse >= 90) {
            echo $fondRouge . "Vous êtes au dessus des 90km/h." . $normal;
        } else {
            echo $fondVert . "Vous êtes en dessous des 90km/h." . $normal;
        }
    }
}


