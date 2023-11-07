<?php
$mot = readline("saisir un mot : ");
if (str_starts_with(strtolower($mot), "p")) {
    echo "le mot $mot commence par la lettre 'p' ";
} else {
    echo "le mot $mot ne commence pas la lettre p";
}
if (strlen($mot) >= 5){
    echo "et le mot $mot possède au moins 5 caractères.";
} else {
    echo "et le mot $mot possède moins de 5 caractères.";
}