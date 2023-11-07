<?php
$l = readline("Saisir une largeur : ");
$h = readline("Saisir une hauteur : ");
for ($i = 1; $i <= $h; $i += 1) {
    for ($a = 1; $a <= $l; $a += 1) {
        echo "*";
    }
    echo "\n";
}
