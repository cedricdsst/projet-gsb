<?php

include_once "pdoConnect.php";
$connexion = pdo();
$mail = $_POST['email'];
$mdp = $_POST['password'];


// La requete sql recherche si le nom d'utilisateur rentré est dans la base de donnée, 
//et selectionne les information liée à l'utilisateur
$sql = "SELECT * FROM user where mail=\"$mail\"";

$reponse = $connexion->query($sql);

//vérification Pseudo et Password
while ($data = $reponse->fetch()) {
    if($data['mail'] === $mail && (password_verify($mdp,$data['mdp'])))  {
            
            echo "Login Success";
           
        } 
    else echo "Username or Password wrong";
    }
?>
