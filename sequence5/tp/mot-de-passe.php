<?php
require "tp-fonction.php";

$longueur = readline("Saisir une longueur de caractère : ");
$motdepasse = genererMotDePasse($longueur);
echo 'Mot de passe généré: '.$motdepasse;