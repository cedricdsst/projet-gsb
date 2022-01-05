<?php
  session_start();
  echo "Logout Successfully ";
  //destruction de la session et redirection vers la page de Login
  session_destroy();   
  header("Location: Login.php");
?>