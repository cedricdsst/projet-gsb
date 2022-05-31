<?php  session_start();   ?>
<html>
<head>
<link rel="stylesheet" href="style_login.css">
<title> Login Page   </title>

</head>

<body>
<?php  
include_once "pdoConnect.php";
  
$connexion = pdo();

//ALERTE DE BANISSEMENT 
if($_GET['alert'] == 1){
    ?>
    <div class="alert_ban">
    <?php echo "Le compte est bani " ?>
    </div>
    <?php

}

// On teste si une session est déja ouverte, si oui on redirige sur la home page
if(isset($_SESSION['nom'])& $_SESSION['ban'] == 0)   
 {
    header("Location:rapport.php"); 
 }

if(isset($_POST['login']))   
{
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = $_POST['pass'];


    // La requete sql recherche si le nom d'utilisateur rentré est dans la base de donnée, 
    //et selectionne les information liée à l'utilisateur
    $sql = "SELECT * FROM user where mail=\"$mail\"";

    $reponse = $connexion->query($sql);
   
    //vérification Pseudo et Password
    while ($data = $reponse->fetch()) {
        if($data['mail'] === $mail && (password_verify($mdp,$data['mdp'])))  {
            //si vérification réussi, création d'une session pour l'user
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['prenom'] = $data['prenom'];
            $admin = $data['admin_statue'];


            //UPDATE user SET ban_statue = 1 WHERE user_id = 'valeur';

            
            $ban = $data['ban_statue'];
            $_SESSION['ban'] = $data['ban_statue'];
            if( $admin == 1 & $ban == 0)
            {
                 header("Location:admin_rapport.php");  
                
            }
            else 
            {
                if($ban == 1){
                    header("Location:index.php?alert=1");}
                
                else {
                    header("Location:rapport.php");
                }
                
            }           
  
        }
  
          else
          {
              $alert = true;       
          }
    }
    
//si login ou mdp ne correspond pas, affiche un message d'erreur   
if($alert = true){
    ?>
    <div class="alert">
    <?php echo "no access" ?>
    </div>
    <?php
}

}

?>



<!-- <form action="" method="post">

    
  
    <p>  UserName</p>
     <input type="text" name="user" > 
  
  
    <p> PassWord  </p>
    <input type="password" name="pass">
    <br>
    <br>
    <div class="btn">
   <input type="submit" name="login" value="LOGIN">
   </div>
 
</form>
<div class="sign_btn">
<a href="sign_page.php">No account ? Sign in !</a>
</div> -->

<div style="text-align:center">

    <img src="gsb.png"> <br> <br> <br> <br> <br>
    


        <form action="index.php" method="post">
            <h1> Login </h1> <br> <br>
            <INPUT NAME="mail" TYPE="email" placeholder="Enter mail Here" class="identifiants"> <br><br><br> 
            <INPUT TYPE="password" NAME="pass" placeholder="Enter Password Here" class="identifiants"> <br><br><br><br>
            <INPUT TYPE="submit" VALUE="GO!" NAME="login" class="submit">
        </form>


</div>
</body>
</html>
