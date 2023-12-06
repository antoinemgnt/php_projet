<?php
require "tp-fonction.php";

$phrase = readline("Saisir une phrase : ");
$acronyme = genererAcronyme($phrase);
echo $acronyme;