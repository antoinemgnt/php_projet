<?php
$nombre = readline("Saisir un nombre entre 0 et 1000 : ");
$bot = random_int(0 , 1000);
$coups = 0;
while ($bot != $nombre ){
    if ($nombre < 0 || $nombre > 1000){
        $nombre = readline("Le nombre à deviner doit être compris entre 0 et 1000 : ");
    }
    $bot = random_int(0 , 1000);
    $coups += 1;
}
echo "Le nombre a deviner a été trouvé en $coups coups.";