<?php
$n=readline("saisir un nombre entier : ");
for ($terme = 0; $terme <= 20; $terme++){
    echo $n.' ';
    if ($n % 2 == 0){
        $n = $n / 2;
    } else {
        $n = $n * 3 + 1;
    }
}
