<?php
$notes = [10,12.5,14,7,15,9.5,8];
foreach ($notes as $note) {
    echo $note . PHP_EOL;
}
$sommeNote = array_sum($notes);
$i= count($notes);

$moyenne = $sommeNote / $i;
echo "La moyenne de classe à l'examen final est de: $sommeNote / $i = $moyenne";