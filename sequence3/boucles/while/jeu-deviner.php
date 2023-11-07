<?php

$nbADeviner = random_int(1,100);
$nbTentativesRestantes = random_int(10,15);
$nbTentatives = 1;
$dateHeure = date('d/m/Y  h\:i\:s');
$resultat = "";
$quitter=false;
$partiesGagnees = 0;
$partiesPerdues = 0;
$partiesJouees = 0;

echo "\n
      Bienvenue dans le jeu de devinette!
      Le but du jeu est de deviner un nombre entre 1 et 100
      Vous avez 10 à 15 essais pour trouver le nombre.
      Bonne chance !";

while (!$quitter) {

    $choix = readline("\n
      1. Jouer 
      2. Voir les résultats
      3. Voir les résultats d'un jour
      4. Voir les résultats d'un joueur
      5. Quitter
      Votre choix (1,2,3,4 ou 5): ");
    if (!is_numeric($choix) || $choix < 1 || $choix > 6) {
        echo "Saisissez un nombre entre 1 et 5";
    }else {

    if ($choix == 5) {
        $quitter = true;
    }elseif ($choix == 2) {
        $lectureResultats = fopen("C:/Users/Mignota/Documents/php/projet/php_tp/sequence3/Boucles/While/jeu-deviner.txt", "r");
        while (($affichage = fgets($lectureResultats)) !==  false) {
            echo PHP_EOL;
            echo $affichage ;
        }
        fclose($lectureResultats);
    } elseif ($choix == 3) {
        $jour = readline("Saisissez un jour : ");
            $lectureResultats = fopen("C:/Users/Mignota/Documents/php/projet/php_tp/sequence3/Boucles/While/jeu-deviner.txt", "r");
            while (($affichage = fgets($lectureResultats)) !== false) {
                if (str_contains($affichage, $jour)) {
                    echo PHP_EOL;
                    echo $affichage;
                }
            }
            fclose($lectureResultats);
        }elseif($choix == 4) {
        $nom = readline("Saisissez un pseudo : ");
        $lectureResultats = fopen("C:/Users/Mignota/Documents/php/projet/php_tp/sequence3/Boucles/While/jeu-deviner.txt", "r");
        while (($affichage = fgets($lectureResultats)) !==  false) {
            if (str_contains($affichage,$nom)) {
                echo PHP_EOL;
                echo $affichage ;
            }
        }
        fclose($lectureResultats);
    }elseif ($choix == 1) {
    $pseudo = readline("Saisissez votre pseudo : ");
    $nbSaisi = readline("Saisissez un nombre entre 1 et 100 : ");
    while ($nbSaisi != $nbADeviner) {
        if ($nbTentativesRestantes == 0) {
            $resultat = "Désolé $pseudo : vous avez atteint le nombre maximum de tentatives ! Le nombre était $nbADeviner";
            echo $resultat;
            break;
        } elseif ($nbSaisi < 1 || $nbSaisi > 100) {
            $nbSaisi = readline("Saisissez un nombre compis entre 1 et 100 : ");
        } elseif ($nbSaisi < $nbADeviner) {
            echo "Le nombre est trop petit \n";
            $nbSaisi = readline("Saisissez un nombre entre 1 et 100 : ");
            $nbTentativesRestantes--;
            $nbTentatives++;
        } elseif ($nbSaisi > $nbADeviner) {
            echo "Le nombre est trop grand \n";
            $nbSaisi = readline("Saisissez un nombre entre 1 et 100 : ");
            $nbTentativesRestantes--;
            $nbTentatives++;

        }
    }
    $res = fopen("C:/Users/Mignota/Documents/php/projet/php_tp/sequence3/Boucles/While/jeu-deviner.txt", "a");
    if ($nbTentativesRestantes <= 10 && $nbTentativesRestantes > 0) {
        $resultat = "Excellent $pseudo : vous avez trouvé le nombre $nbADeviner en $nbTentatives tentatives !";
        echo $resultat;
        $resultat = "Excellent ! Vous avez trouvé le nombre $nbADeviner en $nbTentatives tentatives .";
        fwrite($res, "\r\n$dateHeure - Pseudo : $pseudo - Résultat: $resultat");
    } elseif ($nbTentativesRestantes > 10) {
        $resultat = "Bien joué $pseudo : vous avez trouvé le nombre $nbADeviner en $nbTentatives tentatives !";
        echo $resultat;
        $resultat = "Bien joué ! Vous avez trouvé le nombre $nbADeviner en $nbTentatives tentatives .";
        fwrite($res, "\r\n$dateHeure - Pseudo : $pseudo - Résultat: $resultat");
    } else {
        $resultat = "Perdu ! Le nombre a deviner était $nbADeviner .";
        fwrite($res, "\r\n$dateHeure - Pseudo : $pseudo - Résultat: $resultat");
    }
    fclose($res);
    }
    }
}