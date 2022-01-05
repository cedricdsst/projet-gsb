<?php  
session_start();
//si la session est vide, redirection vers la page de login
if(!isset($_SESSION['nom'])) 
{
    header("Location:Login.php");  
}
  if (isset($_POST['produit'])) {  
    
    try {
        // Connexion à la base de donnée
        $connexion = new PDO('mysql:
                              host=localhost;
                              dbname=gsbv1;
                              charset=utf8', 
                              'root', 
                              '');

        
    } catch (Exception $e) {

       die('Erreur : ' . $e->getMessage());
    }
    $depot_legal = $_POST['depot_legal'];
    $nom_commercial = $_POST['nom_commercial'];
    $code_fam = $_POST['code_fam'];
    $composition = $_POST['composition'];
    $effets = $_POST['effets'];
    $contre_indication = $_SESSION['contre_indication'];
    
    
    
    
    
    // Si les trois champs sont remplis, insert les VARCHAR dans la base de donnée
    if (!empty($depot_legal) && !empty($nom_commercial) && !empty($code_fam) && !empty($composition)) {

        $reponse = $connexion->prepare("INSERT INTO produit(MED_DEPOTLEGAL,MED_NOMCOMMERCIAL,FAM_CODE,MED_COMPOSITION,MED_EFFETS,MED_CONTREINDIC) VALUES (?,?,?,?,?,?)");

        $reponse->execute(array($depot_legal, $nom_commercial, $code_fam, $composition, $effets, $contre_indication));
        
        
        header("location:admin_produit.php");
    } else {
        
        echo"error";
    }
}
  
?>