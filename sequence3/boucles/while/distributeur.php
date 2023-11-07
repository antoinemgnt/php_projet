<?php
$eau = 1.20;
$soda = 3;
$cafe = 2;
$prixAPayer = 0;
$rend = 0;
echo "N°1 = Eau : 1,20€ \n";
echo "N°2 = Soda : 3€ \n";
echo "N°3 = Café : 2€ \n";


$choix = readline("Choisir un numéro de boisson : ");
while ($choix != 1 && $choix != 2 && $choix != 3){
    echo "Selection invalide. Veuillez choisir 1, 2 ou 3.\n";
    $choix = readline("Choisir un numéro de boisson : ");
}
if ($choix == 1){
    echo "Vous avez choisi de l'eau !\n";
    $prixAPayer = $eau;
    $rend = readline("Veuillez insérer de l'argent. Il vous reste a payer ".$prixAPayer."€ : ");
    $prixAPayer = $prixAPayer - $rend;
} elseif ($choix == 2){
    echo "Vous avez choisi un soda !\n";
    $prixAPayer = $soda;
    $rend = readline("Veuillez insérer de l'argent. Il vous reste a payer ".$prixAPayer."€ : ");
    $prixAPayer = $prixAPayer - $rend;
} else {
    echo "Vous avez choisi un café !\n";
    $prixAPayer = $cafe;
    $rend = readline("Veuillez insérer de l'argent. Il vous reste a payer ".$prixAPayer."€ : ");
    $prixAPayer = $prixAPayer - $rend;
}
while ($prixAPayer > 0){
    $rend = readline("Veuillez insérer de l'argent. Il vous reste a payer ".$prixAPayer."€ : ");
    $prixAPayer = $prixAPayer - $rend;
}
if ($prixAPayer < 0){
    echo "Voici votre monnaie : " .abs($prixAPayer). "€ !\n";
}
echo "Voici votre boisson. Merci !";


