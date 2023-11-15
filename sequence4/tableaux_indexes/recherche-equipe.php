<?php
$utilisateur = readline("Saisir le nom d'une équipe : ");
$utilisateur = strtolower($utilisateur);
$utilisateur = ucfirst($utilisateur);
$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
if ($utilisateur == 'France' || $utilisateur == 'Brésil' || $utilisateur == 'Argentine' || $utilisateur == 'Espagne' || $utilisateur == 'Sénégal' || $utilisateur == 'Australie' || $utilisateur == 'Belgique'){
    echo "$utilisateur sera présente à la prochaine coupe du monde";
}else{
    echo "$utilisateur ne sera pas présente à la prochaine coupe du monde";
}


