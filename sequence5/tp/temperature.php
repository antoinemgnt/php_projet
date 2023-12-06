<?php
require "tp-fonction.php";

$temperature = readline("Saisir une température : ");
$fahrenheit = convertirCelsiusFahrenheit($temperature);
echo "$fahrenheit";