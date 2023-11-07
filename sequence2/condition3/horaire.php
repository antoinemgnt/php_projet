<?php
$horaire = readline("Saisir un horaire : ");
$heure = substr($horaire,0,2);
if($heure >= 9 && $heure < 19){
    echo "Le magasin est ouvert.";
} else {
    echo "Le magasin est fermé.";
}