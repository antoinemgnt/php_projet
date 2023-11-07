<?php
$chaine = readline("Saisir une phrase ou mot a chiffrer: ");
$cle = readline("Saisir le décalage: ");
for ($i=0;$i<strlen($chaine);$i++){
    $car = substr($chaine,$i,1);
    for ($a=1;$a<=$cle;$a++){
        $car ++;
    }if (strlen($car)>=2){
        $car = substr($car,-1,1);
    }
    echo $car;
}