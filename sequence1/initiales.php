<?php
$prenom = readline("rentrer votre prénom : ");
$nom = readline("renter votre nom : ");
$majPrenom = ucwords($prenom);
$majNom = ucwords($nom);
echo "vos initiales sont ", $majPrenom[0],$majNom[0];