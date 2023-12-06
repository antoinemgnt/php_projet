<?php

//Définir une fonction qui affiche "Bonjour"
function direBonjour() : void {
    echo "Bonjour".PHP_EOL;
}

//Appeler la fonction afin de l'exécuter
direBonjour();

//Définir une fonction qui affiche "Bonjour $nom"
//La fonction à un paramètre
//$nom est une variable locale à la fonction
function direBonjourPrenom(string $nom) : void {
    echo "Bonjour $nom".PHP_EOL;
}
//Appeler la fonction afin de l'exécuter
direBonjourPrenom("Antoine");
$prenom = "antoine";
direBonjourPrenom($prenom);

//Définir une fonction permettant de calculer et retourner la somme de 2 nombres
function additionner(int $nb1, int $nb2) : int{
    //$resultat est une variable locale à la fonction
    return $nb1 + $nb2;
}
//Appeler la fonction
$resultat = additionner(10,20);
echo "Le résultat est égal à $resultat";
echo PHP_EOL;
echo "Le résultat est égal à " . additionner(10,20);