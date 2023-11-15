<?php
//déclarer et intialiser un tableau contenant des notes
$notes = [12,18,9,12,15,8]; //autre notation: $note = array(12,18,9);
//accès a l'élément qui se trouve à l'index 0 dans le tableau $notes
echo $notes[0];
echo $notes[1];
echo $notes[2];
echo PHP_EOL;
//affichage du tableau avec une boucle for
for ($i=0; $i < count($notes); $i++){
    echo $notes[$i] . PHP_EOL;
}
echo PHP_EOL;
//affichage du tableau avec une boucle foreach
foreach ($notes as $note){
    echo $note.PHP_EOL;
}
//récupérer l'index avec une boucle for
echo PHP_EOL;
for ($i=0; $i < count($notes); $i++) {
    echo "$i:$notes[$i]" . PHP_EOL;
}
echo PHP_EOL;
//récupérer l'index avec une boucle foreach
foreach ($notes as $index => $note){
    echo "$index:$note".PHP_EOL;
}
echo PHP_EOL;
//affichage du tableau en mode debug
print_r($notes);
echo PHP_EOL;
//ou -->
var_dump($notes);
echo PHP_EOL;
//ajouter une valeur a un tableau (un nombre par ligne)
$notes[]=20;
print_r($notes);
echo PHP_EOL;
//autre méthode (plusieurs valeurs par ligne)
array_push($notes,19,15,6,15.5);
print_r($notes);
echo PHP_EOL;
