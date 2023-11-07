//demander la saisie d'un nombre a l'utilisateur puis afficher si le nombre saisie est positif ou negatif
<?php
$nombre = readline("saisir un nombre : ");
if ($nombre >= 0){
    echo "$nombre est positif.";
}else{
    echo "$nombre est négatif.";
}
