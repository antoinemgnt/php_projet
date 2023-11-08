<?php
$notes = [10,12.5,14,7,15,9.5,8];
foreach ($notes as $note) {
    echo $note . PHP_EOL;
}
$sommeNote = array_sum($notes);
$i= count($notes);

$moyenne = $sommeNote / $i;
echo "La moyenne de cet étudiant à l'examen final est de: $sommeNote / $i = $moyenne";
if ($moyenne < 10) {
    echo "Vous n'avez pas votre diplôme";
} elseif ($moyenne >= 10 && $moyenne < 12){
    echo " Mention passable";
} elseif ($moyenne >= 12 && $moyenne < 14){
    echo " Mention assez bien";
} elseif ($moyenne >= 14 && $moyenne < 16){
    echo " Mention bien";
} else {
    echo " Mention très bien";
}