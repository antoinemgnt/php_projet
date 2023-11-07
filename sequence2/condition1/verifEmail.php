<?php
$email = readline("saisir une adresse mail : ");
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "$email est valide.";
} else {
    echo "$email est invalide";
}

