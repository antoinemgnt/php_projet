<?php

$nombre1 = readline("saisir un nombre :");
$nombre2 = readline("saisir un nombre :");

$nombre3 = $nombre1 + $nombre2;
$nombre1 = $nombre3 - $nombre1;
$nombre2 = $nombre3 - $nombre2;


echo "nombre 1 = $nombre1";
echo PHP_EOL;
echo "nombre 2 = $nombre2";