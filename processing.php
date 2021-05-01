<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_form.css">
    <title>Inscription Réussie !</title>
</head>
<body style="background-image: url(../images/Background.png);background-size:cover">

        
    <?php
    session_start();
        include 'config.php';
        /*
        <h1> VOICI LES UTILISATEURS DE LA BASE DE DONNES :</h1>
        <p>Dans le formulaire précédent, vous avez fourni les informations suivantes :</p>
        $result = $mysqli->query("SELECT Nom, Prenom, Adresse, Sexe, Mdp, Gs FROM utilisateur ");
        while ($row = $result->fetch_assoc()) {
            $nope = $row['Nom'] ;
            $noobi = $row['Prenom'] ;
            $noobz = $row['Adresse'] ;
            $noobs = $row['Sexe'] ;
            $nooboobies = $row['Gs'] ;
            $no = $row['Mdp'] ;
            echo '<p> '.$nope.' <br>'.$noobi.' <br>'.$noobz.'  <br>'.$noobs.'  <br>'.$nooboobies.' <br> '.$no.'</p> <br> <br>'."\r\n" ;
          }*/


          /*Récupérer nos données par la supervariable POST */
        $username = $_POST["nom"];
        $usurname = $_POST["prenom"];
        $adrmail= $_POST["mail"];
        $passwrd= $_POST["pwd"];
        $sexe= $_POST["type"];
        $grps= $_POST["sang"];
        $date= $_POST["naiss"];

        /*Importer les données vers notre table utilisateur de la base de données*/
        !$mysqli->query("INSERT INTO utilisateur(Adresse,Nom,Prenom,Mdp,Sexe,Gs,DateN) VALUES ('$adrmail', '$username' , '$usurname','$passwrd', '$sexe','$grps','$date')");
	?>
    <div class="congrats" style="display: flex;flex-direction:column ;border: 4px solid #900000;padding: 2vw 3vw;width:25%;margin:auto;
    border-radius:8px;align-items:center; justify-content:center;background-color:#e9e9e9; margin-top: 150px;">
    <h2 class="congtext" style="color:green;font-size:32px;">Félicitations ! </h2>
    <h2 class="congtext" style="color:green;font-size:32px;">Vous vous êtes inscrits !</h2><br><br>
	<a style="font-size: 24px;text-decoration:none;color:#FFF8F6; padding:12px 12px;background-color:#cc1111;border:2px solid #900000; border-radius:5px;" href=" connexion.php ">Connectez-vous</a>
    </div>
</body>
</html>
