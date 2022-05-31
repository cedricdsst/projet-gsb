<?php  
session_start();
//si la session est vide, redirection vers la page de login
if(!isset($_SESSION['nom'])) 
{
    header("Location:index.php");  
}
  if (isset($_POST['report'])) {  
    
 
include_once "pdoConnect.php";

$connexion = pdo();
   
    $date = $_POST['date'];
    $prat = $_POST['prat'];
    $coef = $_POST['coef'];
    $produit = $_POST['produit'];
    $comment = $_POST['comment'];
    $motif = $_POST['motif'];
    $rep_name = $_SESSION['nom'];
    $rep_prenom = $_SESSION['prenom'];
    
    
    
    
    // Si les trois champs sont remplis, insert les VARCHAR dans la base de donnée
    if (!empty($date) && !empty($prat) && !empty($coef) && !empty($comment)) {

        $reponse = $connexion->prepare("INSERT INTO rapport(rep_name,rep_prenom,date_visite,prat,coef,comment,produit) VALUES (?,?,?,?,?,?,?)");

        $reponse->execute(array($rep_name, $rep_prenom, $date, $prat, $coef, $comment, $produit));
        
        
        header("location:rapport.php");
    } else {
        
        echo"error";
    }
}
  
?>


