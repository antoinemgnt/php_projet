<?php
$text = "salut les bg";
$path = fopen('JeuDeviner.txt', 'a+' );
fwrite($path, $text);
fclose($path);