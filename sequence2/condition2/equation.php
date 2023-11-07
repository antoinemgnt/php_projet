<?php
$a = readline("saisir le coefficient a : ");
$b = readline("saisir le coefficient b : ");
$c = readline("saisir le coefficient c : ");
$discriminant = $b ** 2 - 4 * $a * $c;

if($discriminant == 0){
    $solution = -$b/(2*$a);
    echo "La solution est x = $solution";
}elseif($discriminant > 0){
    $solution1 = -($b-sqrt($discriminant))/(2*$a);
    $solution2 = -($b+sqrt($discriminant))/(2*$a);
    echo "La solution 1 est x = $solution1.\n";
    echo "La solution 2 est x = $solution2.";
}else{
    echo "Il n'y a pas de solutions.";
}