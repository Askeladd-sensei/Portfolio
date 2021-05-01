<?php 
session_start();
if(!isset($_SESSION['mail'])){
    header("Location: connexion.php");
    exit(); 
}
?>

<?php
try

{

       $bdd = new PDO('mysql:host=localhost;dbname=demek', 'root', '');

}

catch(Exception $e)

{

       die('Erreur : '.$e->getMessage());

}
$arju= $_SESSION['mail'];

$reponse = $bdd->query("SELECT Nom, Prenom, Adresse, DateN, Sexe, Gs FROM `utilisateur` WHERE Adresse= '$arju'");


while ($donnees = $reponse->fetch()){

       $tafamiltis= $donnees['Nom'];
       $isemis= $donnees['Prenom'];
       $ladriss= $donnees['Adresse'];
       $iluled= $donnees['DateN'];
	   $dachut= $donnees['Sexe'];
	   $idamen= $donnees['Gs'];


}


$reponse->closeCursor();


?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Mon Profil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/access.CSS">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">
</head>
<body>
	<?php include 'corpse/header.php' ?>
	
	<div class="cont">
		<h1 style="margin-left: 50px;">Catalogue:</h1>
		<div class="catal">
			<a class="btnz ajout"href="form_demand.php"><i class="fas fa-plus"></i>&nbsp; Ajouter une demande</a>
			<a class="btnz consu"href="form_demand.php"><i class="far fa-file-alt"></i>&nbsp; Consuter mes demandes</a>
			<a class="btnz don" href="form_don.php">&nbsp;Don en cours</a>
		</div>
	</div>
	<br><br>
	<div class="dynamik">Message dynamique affiché ici.</div>
	<h1 style="margin-left:50px;">Mes informations personelles:</h1>
	<a href="#" style="float:right;margin-right:50px;color:#101d10;">Modifier mon profil</a>
	<br><br><br>
	<div class="informacions">
		<div class="inf">
			<p class="maloumat"><strong class="maloumat">Nom :</strong>&nbsp;&nbsp;<?= $tafamiltis ?></p>
		</div>
		<div class="inf">
			<p class="maloumat"><strong>Prénom :</strong>&nbsp;&nbsp;<?= $isemis ?></p>
		</div>
		<div class="inf">
			<p class="maloumat"><strong>Date de naissance :</strong>&nbsp;&nbsp;<?= $iluled ?></p>
		</div>
	</div>
	<div class="informacions">
		<div class="inf">
			<p class="maloumat"><strong>E-mail :</strong>&nbsp;&nbsp;<?= $ladriss ?></p>
		</div>
		<div class="inf">
			<p class="maloumat"><strong>Sexe :</strong>&nbsp;&nbsp;<?= $dachut ?></p>
		</div>
	</div>
	<div class="informacions">
		<h5><?=$idamen?></h5>
		<h5><?=$idamen?></h5>
		<h5><?=$idamen?></h5>
	</div>
	<br> <br><?php include '../php/corpse/footer.php' ?>
</body>

</html>