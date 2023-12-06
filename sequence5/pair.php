<?php
//inclure le fichier dans lequel se trouve ma fonction estPaire
require "cours-fonction.php";
$nombre = readline("Saisir un nombre : ");
if (estPaire($nombre)) {
    echo "$nombre est paire";
} else {
    echo "$nombre est impaire";
}