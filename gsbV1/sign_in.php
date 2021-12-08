<?php  
  if (isset($_POST['sign'])) {  
    
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
    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pass = $_POST['pass'];
    $admin_statue = 0;
    
    $pass=password_hash($pass, PASSWORD_DEFAULT);
    
    // Si les trois champs sont remplis, insert les VARCHAR dans la base de donnée
    if (!empty($nom) && !empty($prenom) && !empty($pass) && !empty($email)) {

        $reponse = $connexion->prepare("INSERT INTO user(mail,mdp,nom,prenom,admin_statue) VALUES (?,?,?,?,?)");

        $reponse->execute(array($email, $pass, $nom, $prenom, $admin_statue));
        
        
         header("location:valid.php");
    } else {
        
        header("location:sign_page.php");
    }
}

?>