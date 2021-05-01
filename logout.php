<?php 
session_start();
if(session_destroy())
  {
    // Redirection vers la page de connexion
    header("Location: connexion.php");
  }
?>