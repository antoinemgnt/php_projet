<?php
$utilisateurs = NULL;
$notes = [];
while ($utilisateurs != "q") {
    $utilisateurs = readline("Saisir une note comprise entre 0 et 20 : (q pour arrêter)");
    if ($utilisateurs == "q"){
        echo "Vous sortez de la saisie de notes\n";
    } elseif ($utilisateurs > 20 || $utilisateurs < 0) {
        echo "la note saisie est incorrect\n";
    } else {
        $notes[] = $utilisateurs;
    }
}
$nombre = count($notes);
echo "Vous avez saisi $nombre notes\n";
foreach ($notes as $note) {
    echo $note.PHP_EOL;
}