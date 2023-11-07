<?php
date_default_timezone_set('Europe/Monaco');
$date = date('l jS \of F Y ');
$heure = date('G:i:s');
//$heure = readline("saisir une heure : ");  pour tester
if ($heure > date('13:0:0')) {
    echo "Bon après-midi";
} else {
    echo "Bon matinée";
}

