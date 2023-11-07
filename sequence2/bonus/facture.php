<?php

$pappel = 0.30;
$psms = 0.20;
$pdonnees = 2;

$appel = readline("Saisir le nombre de minutes d'appels utilisées : ");
$sms = readline("Saisir le nombre de SMS envoyés : ");
$donnees = readline("Saisir la quantité des données consommées en Go : ");

if($appel < 0 || $sms < 0 || $donnees < 0){
    echo "Saisir des nombres positif ! ";
}else{
    $tappel = $pappel * $appel;
    $tsms = $psms * $sms;
    $tdonnees = $pdonnees * $donnees;
    echo "Appel = ".number_format($tappel, 2, ',', ' '). "€ \n";
    echo "SMS = ".number_format($tsms, 2, ',', ' '). "€ \n";
    echo "Données = ".number_format($tdonnees, 2, ',', ' '). "€.\n";

    $facture = $tappel + $tsms + $tdonnees;
    echo "Le coût total de la facture est de " .number_format($facture, 2, ',', ' ')." €.";
}
