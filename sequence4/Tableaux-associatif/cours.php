<?php
// Déclarer et initialiser un tableau de notes
//Clés = nom de l'étudiant
//Valeur = note
$notes = [
    "dupont"=>12,
    "martin"=>16,
    "durand"=>7,
    "jean"=>10
];
//Ajouter une nouvelle note pour l'étudiant (15) 'Petit'
$notes["petit"] = 15;
print_r($notes);
//Modifier la note de l'étudiant 'Petit' de 15 à 10
$notes["petit"] = 10;
print_r($notes);
//Afficher l'ensemble des notes
foreach ($notes as $note){
    echo $note.PHP_EOL;
}
echo PHP_EOL;
//Afficher le nom de chaque étudiant avec sa note
foreach ($notes as $nom=>$note) {
    echo "$nom : $note".PHP_EOL;
}
echo PHP_EOL;
foreach($notes as $nom=>$note){
    $nom = ucfirst(strtolower($nom));
    echo "$nom : $note".PHP_EOL;
}
echo PHP_EOL;
//Afficher le nom de chaque étudiant
$noms = array_keys($notes);
foreach ($noms as $nom){
    echo $nom.PHP_EOL;
}
echo PHP_EOL;
//Supprimer l'élément dont la clé est 'jean'
unset($notes['jean']);
print_r($notes);
PHP_EOL;
//calculer et afficher la moyenne des notes sans foreach
if (!empty($notes)){
    echo "La moyenne de classe est de ".round($moyenne = array_sum($notes)/count($notes),2);
}
//Afficher la liste des étudiants triés par ordre alphabétique
$noms = array_keys($notes);
sort($noms); //Trier les valeurs d'un tableau indexées
print_r($noms);
PHP_EOL;
//Afficher la liste des étudiants triés par ordre décroissant
$noms = array_keys($notes);
rsort($noms); //Trier les valeurs d'un tableau indexées
print_r($noms);
PHP_EOL;
//Rechercher et Afficher la meilleur note
$meilleurNote = max($notes);
echo $meilleurNote;
PHP_EOL;
//Rechercher et afficher les noms des étudiants ayant une note >= 10
foreach ($notes as $nom=>$note){
    if ($note <= 10){
        $noms[] = $nom;
    }
}
if (empty($noms)){
    echo "la liste est vide";
}else {
    sort($noms);
    foreach ($noms as $nom){
        echo $nom.PHP_EOL;
    }
}
