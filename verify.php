<?php
        session_start();
        include 'config.php';
/*Récupérer nos données par la supervariable POST */
        $dated = $_POST["ddon"];

        /*Importer les données vers notre table utilisateur de la base de données*/
        !$mysqli->query("INSERT INTO formulaire_don(dater) VALUES
         ('$dated')");
         $hope= 'Formulaire de don enregistré ! Veuillez vous présenter dans les délais conformes.';
        header('Location: profil.php');