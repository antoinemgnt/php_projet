<?php
//Programme pair.php
function estPaire (int $nombre) : bool{
    return $nombre % 2 == 0;
}
//Programme identite.php
function retournerIdentite (string $prenom, string $nom) : string{
    return ucfirst(strtolower($prenom)). ' ' .ucfirst(strtolower($nom));
}
//programme incrementer.php
function incrementer(int & $nombre) : void {
    $nombre +=1;
}