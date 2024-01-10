<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/

/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherArticlesActifs(array $tableArticle) : array {
    $resultats = [];
    foreach ($tableArticle as $item){
        ["id_auteur"=>$id_auteur, "id_categorie"=>$id_categorie, "titre"=>$titre, "contenu"=>$contenu, "date_creation"=>$date_creation,"actif"=>$actif] = $item;
        if ($actif){
            array_push($resultats,$id_auteur, $id_categorie, $titre, $contenu, $date_creation);
        }
    }
    return $resultats;
}

/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherCategoriesDonnees(array $tableArticle, string $nomCategorie) : array {
    $resultats = [];
    foreach ($tableArticle as $item){
        ["id_auteur"=>$id_auteur, "id_categorie"=>$id_categorie, "titre"=>$titre, "contenu"=>$contenu, "date_creation"=>$date_creation,"actif"=>$actif] = $item;
        if ($id_categorie == $nomCategorie){
            array_push($resultats,$id_auteur, $id_categorie, $titre, $contenu, $date_creation);
        }
    }
    return $resultats;
}


/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/
function recupererNomCategorie(array $tableArticle, array $tableCategorie) : array {
    $resultats = [];
    foreach ($tableArticle as $id=>$item){
        ["id_auteur"=>$id_auteur, "id_categorie"=>$id_categorie, "titre"=>$titre, "contenu"=>$contenu, "date_creation"=>$date_creation,"actif"=>$actif] = $item;
        foreach ($tableCategorie as $nom){
            if ($id_categorie == $tableCategorie){
                array_push($resultats,$id_categorie,$id_auteur, $id_categorie, $titre, $contenu, $date_creation);
            }
        }
    }
    return $resultats;
}



/* Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/
function rechercherDate(array $tableArticle, array $tableAuteur,string $entreUser) : array {
    $resultats = [];
    // Implémentation
    foreach ($tableArticle as $item){
        ["titre"=>$titre,"contenu"=>$contenu,"date_creation"=>$date_creation,"actif"=>$actif,"id_auteur"=>$id_auteur,"id_categorie"=>$id_categorie] = $item;
        $date1 = substr($date_creation,6,4).substr($date_creation,3,2).substr($date_creation,0,2);
        $date2 = substr($entreUser,6,4).substr($entreUser,3,2).substr($entreUser,0,2);
        if ($date1>$date2){
            array_push($resultats, $id_categorie,$id_auteur,$titre,$contenu,$date_creation);
            foreach ($tableAuteur as $id=>$value){
                if ($id_auteur==$id){
                    array_push($resultats, $value["prenom"]);
                    array_push($resultats, $value["nom"]);
                }
            }
        }
    }
    return $resultats;
}


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/



/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/

function nombreArticle(array $tableArticle,array $tableAuteur ,string $entreUser): string {
    $somme=0;
    $resultats=0;
    foreach ($tableArticle as $item) {
        ["id_auteur"=>$id_auteur] = $item;
        if ($id_auteur==$entreUser){
            foreach ($tableAuteur as $id=>$value) {
                if ($entreUser==$id){
                    $somme=$somme+1;
                }
            }
        }
    }
    $resultats="l'auteur ".$value["prenom"]." ".$value["nom"]." à fait ".$somme." articles";
    return $resultats;
}

/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION
