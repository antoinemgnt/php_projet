<?php

$note = readline("Saisir une note : ");
while ($note > 20 || $note < 0){
    echo "La note saisie doit être comprise entre 0 et 20 !";
    echo PHP_EOL;
    $note = readline("Saisir une note : ");
}
echo "La note saisie est correct ! ";