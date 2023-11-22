<?php

$livre = "Les Misérables :Victor Hugo :1862 :Roman historique :978-0-679-60129-2";
//1. Extraire et afficher les informations du livre
//Utiliser la fonction explode()
$livreTab = explode(":",$livre);
//Retourne le tableau "livreTab" indice 0 = Les Misérables ; indice 1 = Victor Hugo ; indice 2 = 1862 ; indice 3 = Roman historique ; indice 4 = 978-0-679-60129-2.
foreach ($livreTab as $info){
    echo "$info";
}
echo PHP_EOL;
//2. Utiliser la fonction list()
list($titre,$auteur,$date,$genre,$ISBN) = explode(":",$livre);
echo "$titre $auteur $date $genre $ISBN";
echo PHP_EOL;

//3. Utiliser le destructuring (à partir de la version PHP 7.1
[$titre, $auteur, $date, $genre, $ISBN] = explode(":",$livre);
echo "$titre $auteur $date $genre $ISBN";
echo PHP_EOL;

//4. Afficher le titre et l'année de publication avec la méthode 1.
$livreTab = explode(":",$livre);
echo "$livreTab[0] $livreTab[2]";
echo PHP_EOL;

//Utiliser le list()
list($titre,,$date) = explode(":",$livre);
echo "$titre $date";
echo PHP_EOL;

//Utiliser le destructuring
[$titre,,$date] = explode(":",$livre);
echo "$titre $date";
echo PHP_EOL;

//Afficher l'auteur du livre
[,$auteur] = explode(":",$livre);
echo "$auteur";
echo PHP_EOL;
//Afficher l'ISBN du livre
[,,,,$ISBN] = explode(":",$livre);
echo "$ISBN";
echo PHP_EOL;
