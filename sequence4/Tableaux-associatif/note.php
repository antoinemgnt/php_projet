<?php
$notes = [
    "Damien"=>15,
    "Jules"=>9,
    "Olivier"=>12
];
//changement des notes pour Damien et Jules
$notes["Damien"] = 16;
$notes["Jules"] = 11;
//ajout d'un autre éléve et sa note
$notes["Mathieu"] = 18;
foreach ($notes as $nom=>$note) {
    echo "$nom : $note".PHP_EOL;
}