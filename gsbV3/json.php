<?php

include_once "api.php";

// use Exception;

/* Ce fichier va permettre de gérer les demandes qui seront reçues 
via les Urls , le fichier de routage */

//www.monsite.fr/articles
//www.monsite.fr/articles/:categorie (Web,Sport,Culture)
//www.monsite.fr/article/:id   (1,2,3)
// On aura besoin de décomposer notre URL 


/* Réécruture de nos URLs */

//www.monsite.fr/articles => www.monsite.fr/index.php?demande=articles
// Cela nous permettra d'identifier la demande reçue grâce à la méthode get
/* Pour pouvoir la transformation , nous aurons besoin de créer un fichier 
.htaccess */

// 1) Tester l'URL avec .htaccess

try {
    if (!empty($_GET['demande'])) {
        $url = explode("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));
        

        switch($url[0]){
            case "getProduit":
                if(empty($url[1])){
                    
                    getProduit();
                } else {
                    echo "API error";
                }
                break;
            case "getPrat":
                if(empty($url[1])){
                    getPrat();
                } else {
                    echo"id non renseigné";
                }
                break;
            case "getRapport":
                if(!empty($url[1])){
                    getRapport($url[1]);
                } else {
                    echo"Nom du représentant non renseigné";
                }
                break;    
            default:
                throw new Exception("demande non valide, vérifiez l'url");      
        }
    } else {
        throw new Exception("Problème de récupération de données");
    }
} catch (Exception $e) {
    $erreur = [
        "message" => $e->getMessage(),
        "code" => $e->getCode(),
    ];
    print_r($erreur);
}