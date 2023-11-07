<?php

$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir votre nom : ");
$chiffre = count_chars($nom);
echo $chiffre;