<?php
$sexe = readline("Saisir votre sexe M/F : ");
$age = readline("Saisir votre age : ");
if($sexe == "M" && $age > 22 ){
    echo "Vous payez la surprime";
}elseif($sexe == "F" && $age >= 20 && $age <= 30){
    echo "Vous payez la surprime.";
} else {
    echo "Vous ne payez pas la surprime.";
}
