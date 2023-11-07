<?php

$prixHT = readline("saisir un prix :");
$tauxTVA = readline("saisir le taux de taxe en pourcentage :");
$tva = $tauxTVA / 100;
$tva = $tva + 1;
$prixTTC = $prixHT * $tva ;

echo "Le prix TTC est de $prixTTC\€";