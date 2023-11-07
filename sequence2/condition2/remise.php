<?php
$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$prix = readline("saisir un prix : ");
if($prix < 1000){
    $remise = $prix * 0.05;
    $prixB = $prix * 0.95;
    number_format($prixB, 2, ',', '  ');
    echo "La remise est de 5% soit ".$fondRouge.number_format($remise, 2, ',', ' ').$normal." euros sur le prix de l'article \n";
    echo "Le montant de l'article après remise est de ".$fondRouge.number_format($prixB, 2, ',', ' ').$normal." euros.";
} elseif($prix >= 5000){
    $remise = $prix * 0.20;
    $prixB = $prix * 0.80;
    echo "La remise est de 20% soit ".$fondRouge.number_format($remise, 2, ',', ' ').$normal." euros sur le prix de l'article \n";
    echo "Le montant de l'article après remise est de ".$fondRouge.number_format($prixB, 2, ',', ' ').$normal." euros.";
} else {
    $remise = $prix * 0.10;
    $prixB = $prix * 0.90;
    echo "La remise est de 10% soit " .$fondRouge.number_format($remise, 2, ',', ' ').$normal ." euros sur le prix de l'article \n";
    echo "Le montant de l'article après remise est de ".$fondRouge.number_format($prixB, 2, ',', ' ').$normal." euros.";
}