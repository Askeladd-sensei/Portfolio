<?php session_start(); ?>
<!DOCTYPE html>
   <html lang="fr">
   <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="don de sang">
        <link rel="stylesheet" href="../CSS/style_form.css">
        <title>Inscription</title>
        <link rel="Shortout icon" href="../images/logo.png">
    </head>
<body>
    <div class="header">
<img class="logo" src="../images/logo.png" alt="logo">
    </div>
<br>
<form action="../php/processing.php" class="container" method="POST">
	<a class="back" href="index.php"><i class="arrow left"></i></a>
	<div class="head">
        <img class="logo" src="../images/logo.png" alt="logo" style="width: 160px;height:auto;">
    </div>
     <div class="head">
        <h1>Inscription :</h1>
    </div>
   	    <div class="champ">
               <div class="came">
                    <label><b>Nom:</b></label>
                    <input class="double" type="text" name="nom"  placeholder=" Votre nom" required>
                </div>
                <div class="came">
                        <label ><b>Prénom:</b></label>
                        <input class="double"type="text" name="prenom" placeholder="Votre Prénom" required>
                </div>
            </div>
        <div class="champ">
            <div class="came">
                <label><b>Sexe:</b></label><br>
                <SELECT name="type" size="1" required>
                    <OPTION>Homme &nbsp;&nbsp;<OPTION>Femme&nbsp;&nbsp;<OPTION>Autre</OPTION>
                </SELECT>
            </div>
            <div class="came">
                <label><b>Groupe sanguin:</b></label><br>
                <SELECT size="1" name="sang" required>
                    <OPTION>A+&nbsp;&nbsp;<OPTION>A-&nbsp;&nbsp;<OPTION>B+&nbsp;&nbsp;<OPTION>B-&nbsp;&nbsp;<OPTION>AB+&nbsp;&nbsp;<OPTION>AB-&nbsp;&nbsp;<OPTION>O+&nbsp;&nbsp;<OPTION>O-&nbsp;&nbsp;

                </SELECT>
            </div>
        </div>

    <div class="camper">
    <label><b>Date de naissance:</b></label><br>
    <input class="inputer" type="date" name="naiss" required>
    <label for="add"><b>Adresse E-mail:</b></label><br>
    <input  class="inputer" type="email" placeholder="Saisissez votre adresse E-mail" name="mail" required>
    <label for="email"><b>Mot de passe:</b></label><br>
    <input class="inputer password" type="password" placeholder="Saisissez un mot de passe" name="pwd" required>
    <label><b>Confirmez votre Mot de passe:</b></label>
    <input class="inputer confirm"type="password" placeholder="Confirmez votre mot de passe" name ="cpwd" required>
   <!-- require('processing.php') -->
   <?php if (!empty($message)) { ?>
        <p style="color: red; font-size:small;" class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
    </div>
    <br>
<div class="bet">
    <a style="font-size: 16px;text-decoration: underline;color: #101010;" href="#">Avez-vous un problème?</a></p>
    <a style="font-size: 16px;text-decoration: underline;color: #101010;" href="#">Mot de passe oublié?</a></p>
</div>
<div class="bet"> <button type="submit" class="btn login" name="sub">Soumettre</button></div>
   
  </form>
  <br><br><br><br>
</body>
</html>
