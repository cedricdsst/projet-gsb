<?php

function pdo(){
    try {

           return  new PDO('mysql:host=cedriccdbnews.mysql.db;
                          dbname=cedriccdbnews;
                          charset=utf8', 
                          'cedriccdbnews', 
                          'Mdpgsbv1');

         // return  new PDO('mysql:host=localhost;
           //               dbname=gsbv1;
             //             charset=utf8', 
               //           'root', 
                 //         '');                
    
         // echo 'accès avec succès à  la base de données ';
    } catch (Exception $e) {
    
        die('Erreur : ' . $e->getMessage());
    } 
}