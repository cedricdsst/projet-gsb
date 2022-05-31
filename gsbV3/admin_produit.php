<?php  
include_once "pdoConnect.php";
session_start();

      //si la session est vide, redirection vers la page de login
      if(!isset($_SESSION['nom'])) 
       {
           header("Location:index.php");  
       }

$connexion = pdo();       


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
    <i class="fas fa-sign-out-alt logoutresp"></i> 
    </a>  

    </div>
</header>
<nav>
    <li>
    <!-- <a href="">planning</a> -->
    <a href="">produits</a>
    <a href="admin_rapport.php">rapports</a>
    <a href="">synthese</a>
    </li>
    
</nav>
<main>
    <div class="formul">
        
    <form action="produit_post.php" method="post">
        
        <div class="line">
        <legend>Depot legal</legend>    
        <input  class="inputs" type="text" name="depot_legal">
        </div>
        
        <div class="line">
        <legend>Nom commercial</legend>    
        <input  class="inputs" type="text" name="nom_commercial">
        </div>
       <br>
        <div class="line">
        <legend>Code FAM</legend>    
        <input  class="inputs" type="text" name="code_fam">
        </div>
        <br>
        <div class="line">
        <legend>Composition</legend>    
        <input  class="inputs" type="text" name="composition">
        </div>
        <br>
        
        <div class="line">
        <legend>Effets</legend>
        <textarea  name="effets" class="inputs" rows="10" cols="15"></textarea>
        </div>
        <br>
        <div class="line">
        <legend>Contre indications</legend>
        <textarea  name="contre_indication" class="inputs" rows="10" cols="15"></textarea>
        </div>
        <br>
        <div class="line">
        <legend>Date Sortie</legend>
        <input  class="inputs" type="date" name="date_sortie">
        </div>
        <br>
        <div class="line">
            
        <input type="submit" class="btn" name="produit" value="send produit">
        </div>
        
        
    </form>
    
    </div>
    <div class="result">
    <table>
    <thead>
        <tr> 
            <td>Depot legal</td>
            <td>Nom commercial</td>
            <td>Code FAM</td>
            <td>Composition</td>
            <td>Effets</td>
            <td>Contre indications</td>
            <td>date sortie</td>
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
    <td>
    <?php
    echo $data1['date_sortie']
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