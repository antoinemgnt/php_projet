<?php
$contacts = [
    "Andy" => "06.06.06.06.06",
    "Khang" => "07.07.07.07.07",
    "Hugo" => "08.08.08.08.08",
];
$noms = readline("Saisir un nom : ");
foreach ($contacts as $nom=>$contact){
    if($noms == $nom) {
        $i[] = $contact;
    }
}
if (empty($i)){
    echo "Le contact n'est pas trouvé";
} else {
    foreach ($i as $a){
        echo $a;
    }
}