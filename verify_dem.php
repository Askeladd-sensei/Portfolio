<?php
 session_start();
 include 'config.php';
/*Récupérer nos données par la supervariable POST */
        $namepat = $_POST["nompat"];
        $surpat = $_POST["prepat"];
        $number = $_POST["numpat"];
        $srequis = $_POST["sanguine"];
        $centre = $_POST["center"];
        $will= $_POST["place"];
        /*Importer les données vers notre table de formulaires de demande de la base de données*/
        !$mysqli->query("INSERT INTO formulaire_demande(NomPat, PrePat, Contact,TypePrel, Wilaya,LieuPrel) VALUES
         ('$namepat', '$surpat', '$number', '$srequis', '$will','$centre')");
         header('Location: profil.php');
?>