<?php
$array=[];
$pourcentageif=0.01;
echo "Début du traitement \n";
$array=array_fill(0,100000,1);
for($i=0;$i<=100000;$i++){
    $pourcentage=$i/100000;
    if ($pourcentage!=1) {
        $pourcentage*=100;
        echo "\033[31m"."$pourcentage% \n"."\033[0m";
    } else {
        echo "\033[32m"."100% \n"."\033[0m";
    }

}
echo "Fin de traitement\n";
echo PHP_EOL;
echo "100000 valeurs ont été traitées !";