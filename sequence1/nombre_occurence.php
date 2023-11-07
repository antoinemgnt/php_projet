<?php

$phrase = readline("saisir une phrase : ");
$mot = readline("mot : ");
$occurence = substr_count(strtolower($phrase), $mot ,0, null);
echo "le mot ", $mot, " apparait ", $occurence, " fois dans la phrase.";

