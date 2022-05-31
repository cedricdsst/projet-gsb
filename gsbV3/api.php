<?php
include_once "pdoConnect.php";


function sendJSON($infos)
{
    header("Access-Control-Allow-Origin: *"); //Send a raw HTTP header
    header("Content-Type: application/json");
    echo json_encode( $infos, JSON_UNESCAPED_UNICODE);
     //Returns the JSON representation of a value
}

function getProduit():void{
    $connexion = pdo();
    $sql1 = "SELECT *
            FROM produit ";

$reponse1 = $connexion->prepare($sql1);
$reponse1 -> execute();
$articles1 = $reponse1 -> fetchAll(PDO::FETCH_ASSOC);
$reponse1 -> closeCursor();
sendJSON($articles1);
}

function getPrat():void{
    $connexion = pdo();
    $sql1 = "SELECT *
            FROM praticien";

$reponse1 = $connexion->prepare($sql1);
$reponse1 -> execute();
$articles1 = $reponse1 -> fetchAll(PDO::FETCH_ASSOC);
$reponse1 -> closeCursor();
sendJSON($articles1);
}

function getRapport(string $name):void{
    $connexion = pdo();
    $sql2 = "SELECT *
            FROM rapport
            WHERE rep_name = :_name";

$reponse2 = $connexion->prepare($sql2);
$reponse2 -> bindValue(":_name", $name, PDO::PARAM_STR);
$reponse2 -> execute();
$articles2 = $reponse2 -> fetchALL(PDO::FETCH_ASSOC);
$reponse2 -> closeCursor();

sendJSON($articles2);
}

/* function getArticleByCategorie(String $categorie):void{
    $connexion = getPdo();
    $sql2 = "SELECT b.id,b.titre,b.auteur, c.libelle 
            FROM billets b 
            INNER JOIN categorie c
            ON b.idcategorie = c.idcategorie 
            WHERE c.libelle = :cat";

$reponse2 = $connexion->prepare($sql2);
$reponse2 -> bindValue(":cat", $categorie, PDO::PARAM_STR);
$reponse2 -> execute();
$articles2 = $reponse2 -> fetchAll(PDO::FETCH_ASSOC);
$reponse2 -> closeCursor();

sendJSON($articles2);


} */

