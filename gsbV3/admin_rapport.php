<?php  
include_once "pdoConnect.php";
session_start();
//si la session est vide, redirection vers la page de login
if(!isset($_SESSION['nom'])) 
{
    header("Location:index.php");  
}


$connexion = pdo();   

     // echo 'accès avec succès à  la base de données ';

$sql1 = "SELECT * FROM produit  ";

$reponse1 = $connexion->query($sql1);
 
$sql2 = "SELECT * FROM praticien  ";

$reponse2 = $connexion->query($sql2);
$nomv = $_SESSION['nom'];

$sql3 = "SELECT * FROM rapport order by date_visite DESC ";

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
    <div class="admin">
        <p>Admin Pannel</p>
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
    <a href="admin_produit.php">produits</a>
    <a href="admin_rapport.php">rapports</a>
    <a href="admin_synthese.php">synthese</a>
    </li>
    
</nav>
<main>
    
    <div class="result">
        <?php  
            while ($data3 = $reponse3->fetch()) { ?>
    <div class="card">
    <div class="admin">
        Auteur : 
    <?php echo $data3['rep_prenom']; ?> <?php echo $data3['rep_name']; ?> 
    </div>
    <div class="date_visite"> 
    date visite :   
    <?php 
    echo $data3['date_visite']
    ?>    
    </div>
    <div class="prat">
        praticien :
    <?php
    echo $data3['prat']
    ?>
    </div>
    <div class="comment">
        commentaire : 
    <?php
    echo $data3['comment']
    ?>
    </div>
    <div class="produit">
        Médicament : 
    <?php
    echo $data3['produit']
    ?>
    </div>
    </div>
    <?php
     }  
     ?>  
    </div>
    
</main>

</body>
</html>