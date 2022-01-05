<?php  
session_start();

      //si la session est vide, redirection vers la page de login
      if(!isset($_SESSION['nom'])) 
       {
           header("Location:Login.php");  
       }

       

try {

    $connexion = new PDO('mysql:host=localhost;dbname=gsbv1;charset=utf8', 'root', '');

     // echo 'accès avec succès à  la base de données ';
} catch (Exception $e) {

    die('Erreur : ' . $e->getMessage());
} 
$sql1 = "SELECT * FROM produit  ";

$reponse1 = $connexion->query($sql1);
 
$sql2 = "SELECT * FROM praticien  ";

$reponse2 = $connexion->query($sql2);
$nomv = $_SESSION['nom'];

$sql3 = "SELECT * FROM rapport WHERE rep_name=\"$nomv\" order by date_visite DESC ";

$reponse3 = $connexion->query($sql3);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_rapport.css">
    <script src="https://kit.fontawesome.com/edec10413c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <title>rapports</title>
</head>
<body>

<header>
    <div class="logo">
    <img src="logo.png" alt="">
    </div>
    <div class="id">
    <div class="id_name">
    <p>
    <?php echo $_SESSION['prenom']; ?> <?php echo $_SESSION['nom']; ?>  
    </p>
    </div>
    <div class="id_photo">
    <img src="pp.jpg" alt="">
    </div>
    <a href="logout.php">  
    <i class="fas fa-sign-out-alt"></i> 
    </a>  

    </div>
</header>
<nav>
    <li>
    <!-- <a href="">planning</a> -->
    <a href="">produits</a>
    <a href="rapport.php">rapports</a>
    <a href="synthese.php">synthese</a>
    </li>
    
</nav>

<main>
    
    <div class="result_produit">
    <table>
    <thead>
        <tr> 
            <td>Depot legal</td>
            <td>Nom commercial</td>
            <td>Code FAM</td>
            <td>Composition</td>
            <td>Effets</td>
            <td>Contre indications</td>
        </tr>
        
    </thead>
    <tbody>
        <?php  
            while ($data1 = $reponse1->fetch()) { ?>
    
    <tr>
    <td>    
    <?php 
    echo $data1['MED_DEPOTLEGAL']
    ?>    
    </td>
    <td>
    <?php
    echo $data1['MED_NOMCOMMERCIAL']
    ?>
    </td>
    <td>
    <?php
    echo $data1['FAM_CODE']
    ?>
    </td>
    <td>
    <?php
    echo $data1['MED_COMPOSITION']
    ?>
    </td>
    <td>
    <?php
    echo $data1['MED_EFFETS']
    ?>
    </td>
    <td>
    <?php
    echo $data1['MED_CONTREINDIC']
    ?>
    </td>
    </tr>
    <?php
     }  
     ?>
     </tbody> 
      
     </table>
    </div>
    
</main>

</body>
</html>