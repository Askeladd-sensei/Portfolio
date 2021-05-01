<?php /*Code relatif à la connexion */
session_start();
require 'config.php';
if (isset($_POST['mail'])){
/*Ya du code ici */
$mailus = stripslashes($_REQUEST['mail']);
$mailus = mysqli_real_escape_string($conn, $mailus);
$password = stripslashes($_REQUEST['pwd']);
$password = mysqli_real_escape_string($conn, $password);
$query = "SELECT * FROM `utilisateur` WHERE Adresse= '$mailus' and Mdp='$password' ";
$nomuser= "SELECT Nom FROM `utilisateur` WHERE Adresse= '$mailus' and Mdp='$password' ";
$resultat =mysqli_query($conn, $query);
$rows = mysqli_num_rows($resultat);
if($rows==1){
    $_SESSION['mail'] = $mailus;
    header('Location: Bienvenue.php');
}else{
  $message = "Adresse électronique ou mot de passe est incorrect. Veuillez réessayer";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" href="../CSS/style_form.css">
</head>

<body>

<form action="" class="container" method="POST">
    <img class="logo" src="../images/logo.png" alt="logo">
    <div class="ret">
        <br>
	    <a class="back" href="index.php"><i class="arrow left"></i></a>
    </div>
    
    <div class="head">
        <h1>Connexion</h1>
    </div>
    <div class="camper">
    <label for="add"><b>Adresse E-Mail :</b></label><br>
    <input  class="inputer" type="email" placeholder="Saisissez votre adresse E-mail"style="padding: 12px;" name="mail" required><br><br>
    <label for="email"><b>Mot de passe :</b></label><br>
    <input class="inputer password" type="password" placeholder="Saisissez votre mot de passe" name="pwd" style="padding: 12px;" required ><br>
    <?php if (!empty($message)) { ?>
        <p style="color: red; font-size:small;" class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
    </div>
    <br>
    <div class="bet">
    <a style="font-size: 14px;text-decoration: underline;color: #101010;" href="#">Avez-vous un problème?</a></p>
    <a style="font-size: 14px;text-decoration: underline;color: #101010;" href="#">Mot de passe oublié?</a></p>
</div>
<div class="bet">
    <button type="submit" class="btn login" name="sub">Soumettre</button></div>

    <!-- Ici c'est le message du mot de passe oublié ou identifiant EMAIL invalide -->

    <!-- FINIIII --->
  </form>
</body>
</html>
