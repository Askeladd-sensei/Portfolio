<?php 
session_start();
if(!isset($_SESSION['mail'])){
    header("Location: connexion.php");
    exit(); 
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Bienvenue</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/access.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">
</head>

<body>
	<?php include 'corpse/header.php' ?>
	<div class="corp">
		<h1 class="textile">Recherchez a votre guise :</h1>
		<div class="dropdown">
		<select id="list-wilaya" onchange="getSelectValue();">
			<?php include 'corpse/wilayalist.php' ?>
		</select>
		<select id="list-type" onchange="getSelectValue2();">
			<option value="null" active >Par type</option>
			<option value="nil">---</option>
			<option value="total">Don total</option>
			<option value="apherese">Par aphérèse</option>
			<option value="plasma">Don de plasma</option>
			<option value="plaquettes">Don de plaquettes</option>
			</select>
			<select id="list-groupe" onchange="getSelectValue3();">
			<option value="null" active>Groupe</option>
			<option value="nil">---</option>
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="AB+">AB+</option>
			<option value="O+">O+</option>
			<option value="A-">A-</option>
			<option value="B-">B-</option>
			<option value="AB-">AB-</option>
			<option value="O-">O-</option>
			</select>
		</div>
		<div class="searching">
			<input class="lope" type="text" placeholder="Saisissez un mot-clé ou autre..">
			<button class="launch">Rechercher</button>
		</div>
	</div>
	<div class="demandes">
		<br><br><br>
		<h1 class="textile">Demande du moment:</h1><br><br>
		<div class="row">
			<?php include 'corpse/carta.php' ?>
			<div class="column">
				<div class="card ">
					<br>
					<img src="../images/band-aid.png">
					<div class="container1">
						<h1 style="text-align: center;">Demandé pour:</h1>
						<p style="text-align: center;font-size: large;">White snow</p>
						<p><strong>Wilaya :</strong>Djelfa</p>
						<p><strong>G.Sanguin :</strong>O+</p>
						<p><strong>Contact :&nbsp;</strong>eamil@email.com</p>
						<p><strong>Description :</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
						<div class="opt">
							<a class=" tel" href="tel:+2135-4058-2405" style="text-decoration: none;"><i class="fas fa-phone"></i>&nbsp; telephoner</a>
							<a type="submit" class=" der" style="text-decoration: none;" href="form_don.php"><i class="fas fa-capsules"></i>&nbsp; Faire un don</a>
					    </div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card ">
					<br>
					<img src="../images/band-aid.png">
					<div class="container1">
						<h1 style="text-align: center;">Demandé pour:</h1>
						<p style="text-align: center;font-size: large;">White snow</p>
						<p><strong>Wilaya :</strong>Djelfa</p>
						<p><strong>G.Sanguin :</strong>O+</p>
						<p><strong>Contact :&nbsp;</strong>eamil@email.com</p>
						<p><strong>Description :</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
						<div class="opt">
							<a class=" tel" href="tel:+2135-4058-2405" style="text-decoration: none;"><i class="fas fa-phone"></i>&nbsp; telephoner</a>
							<a type="submit" class=" der" style="text-decoration: none;" href="form_don.php"><i class="fas fa-capsules"></i>&nbsp; Faire un don</a>
					    </div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card ">
					<br>
					<img src="../images/band-aid.png">
					<div class="container1">
						<h1 style="text-align: center;">Demandé pour:</h1>
						<p style="text-align: center;font-size: large;">White snow</p>
						<p><strong>Wilaya :</strong>Djelfa</p>
						<p><strong>G.Sanguin :</strong>O+</p>
						<p><strong>Contact :&nbsp;</strong>eamil@email.com</p>
						<p><strong>Description :</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
						<div class="opt">
							<a class=" tel" href="tel:+2135-4058-2405" style="text-decoration: none;"><i class="fas fa-phone"></i>&nbsp; telephoner</a>
							<a type="submit" class=" der" style="text-decoration: none;" href="form_don.php"><i class="fas fa-capsules"></i>&nbsp; Faire un don</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<br> <br><?php include '../php/corpse/footer.php' ?>