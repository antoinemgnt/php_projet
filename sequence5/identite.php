<?php
require "cours-fonction.php";
//Appel de la fonction
$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir un nom : ");
$identite = retournerIdentite($prenom,$nom);
echo $identite;
