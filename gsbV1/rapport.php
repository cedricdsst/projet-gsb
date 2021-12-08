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
    <a href="produit.php">produits</a>
    <a href="">rapports</a>
    <a href="">synthese</a>
    </li>
    
</nav>
<main>
    <div class="formul">
        <br>
      
    <form action="rapport_post.php" method="post">
        
        <div class="line">
        <legend>praticien</legend>    
        <select  class="inputs"  name="prat">
        <?php  
            while ($data2 = $reponse2->fetch()) {
                echo "<option value='{$data2['PRA_PRENOM']} {$data2['PRA_NOM']}'>{$data2['PRA_PRENOM']} {$data2['PRA_NOM']}</option>";
                 }
            ?>
        </select>
        </div>
        
        <div class="line">
        <legend>date</legend>    
        <input  class="inputs" type="date" name="date">
        </div>
       <br>
        <div class="line">
        <legend>coefficient</legend>    
        <input  class="inputs" type="number" min="1" max="5" step="1" name="coef" placeholder="1 à 5">
        </div>
        <br>
        <div class="line">
        <legend>Médicament</legend> 
        <select class="inputs"name="produit" >
            <?php  
            while ($data1 = $reponse1->fetch()) {
                echo "<option value='{$data1['MED_NOMCOMMERCIAL']}'>{$data1['MED_NOMCOMMERCIAL']}</option>";
                 }
            ?>
        </select>
        </div>
        <br>
        
        <div class="line">
        <legend>Commentaire</legend>
        <textarea  name="comment" class="inputs" rows="5" cols="15"></textarea>
        </div>
        <br>
        <div class="line">
        <input type="submit" class="btn" name="report" value="send report">
        </div>
        
        
    </form>
    </div>
    <div class="result">
        <?php  
            while ($data3 = $reponse3->fetch()) { ?>
    <div class="card">
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