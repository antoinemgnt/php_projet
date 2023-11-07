<?php
$poids = readline("Saisir votre poids en Kg : ");
$taille = readline("Saisir votre taille en m : ");
$imc = $poids/($taille * $taille);
if($taille < 0 || $poids < 0){
    echo "Saisir des nombres positif !";
} else {
    echo $imc."\n";
}
if ($imc < 18.5){
    echo "Poids insuffisant ! ";
} elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "Poids normal ! ";
} elseif ($imc >= 25 && $imc < 29.9){
    echo "Excès de poids ! ";
} elseif ($imc >= 30 && $imc < 34.9){
    echo "Obésité de classe 1 ! ";
} elseif ($imc >= 35 && $imc < 39.9){
    echo "Obésité de classe 2 ! ";
} else{
    echo "Obésité de classe 3 ! ";
}