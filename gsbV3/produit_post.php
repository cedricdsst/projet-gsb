<?php  
session_start();
//si la session est vide, redirection vers la page de login
if(!isset($_SESSION['nom'])) 
{
    header("Location:index.php");  
}
  if (isset($_POST['produit'])) {  
    
     
    include_once "pdoConnect.php";
    
     $connexion = pdo(); 

    $depot_legal = $_POST['depot_legal'];
    $nom_commercial = $_POST['nom_commercial'];
    $code_fam = $_POST['code_fam'];
    $composition = $_POST['composition'];
    $effets = $_POST['effets'];
    $contre_indication = $_POST['contre_indication'];

    $date_sortie = $_POST['date_sortie'];
    
    // REQUETE CREATION COLONE DATE

    //ALTER TABLE `produit` ADD `date_sortie` DATE NULL DEFAULT NULL AFTER `MED_CONTREINDIC`;

    
    
    
    
    // Si les 4 champs sont remplis, insert les VARCHAR dans la base de donnée
    if (!empty($depot_legal) && !empty($nom_commercial) && !empty($code_fam) && !empty($composition)) {

        $reponse = $connexion->prepare("INSERT INTO produit(MED_DEPOTLEGAL,MED_NOMCOMMERCIAL,FAM_CODE,MED_COMPOSITION,MED_EFFETS,MED_CONTREINDIC,date_sortie) VALUES (?,?,?,?,?,?,?)");

        //INSERT INTO `produit` (`date_sortie`) VALUE ('2022-04-20') WHERE MED_DEPOTLEGAL = "VALEUR" ;

        //UPDATE produit SET date_sortie = '21/09/2021' WHERE id-med = 'valeur';

        $reponse->execute(array($depot_legal, $nom_commercial, $code_fam, $composition, $effets, $contre_indication, $date_sortie));
        
        
        header("location:admin_produit.php");
    } else {
        
        echo"error";
    }
}
  
?>