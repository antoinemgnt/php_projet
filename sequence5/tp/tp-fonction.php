<?php
//programme temperature.php
function convertirCelsiusFahrenheit ($temperature) : int{
     return $temperature * 9/5+32;
}

//programme mot-de-passe.php
function genererMotDePasse($longueur){
    $consonnes = "bcdfghjklmnpqrstvwxz";
    $voyelles = "aeiouy";
    $caractereSpecial = "!@#$%^&*()";
    $mdp='';
    for ($i=0; $i < $longueur; $i++) {
        if (($i % 3) == 0) {
            $mdp = $mdp.substr ($voyelles, rand(0,strlen($voyelles)-1), 1);
        } elseif (($i % 2) == 0) {
            $mdp = $mdp.substr ($consonnes, rand(0,strlen($consonnes)-1), 1);
        } else {
            $mdp = $mdp.substr ($caractereSpecial, rand(0,strlen($caractereSpecial)-1), 1);
        }
    }
    return $mdp;
}

//programme numero-adherent
function genererNumeroAdherent () : string {
    $numeroAdherent ="AD-";
    for ($i = 0; $i < 6; $i++){
        $numeroAdherent .= rand(0, 9);
    }
    return $numeroAdherent;
}
function genererAcronyme (string $phrase):string{
    $mots=explode(" ",$phrase);
    $acronyme = "";
    foreach ($mots as $mot){
        $acronyme .= ucfirst(substr($mot,0,1));
    }
    return $acronyme;
}