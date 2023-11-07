<?php
$distance = readline("saisir une distance (km) : ");
$duree = readline("saisir une durée (h:mn)");
$minute = substr($duree, 2, 2);
$heure = substr($duree, 0, 1);
$duree = intval($minute) / 60 + intval($heure);
$vitesse = $distance / $duree;
echo "la vitesse moyenne du trajet est de $vitesse km/h.\n";
if ($vitesse > 90) {
    echo "Vous êtes au dessus des 90km/h.";
} else {
    echo "Vous êtes en dessous des 90km/h.";

}