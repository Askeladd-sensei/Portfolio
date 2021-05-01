<?php
if(!isset($_SESSION['mail'])){
    header("Location: connexion.php");
    exit(); 
}
include 'config.php';
$result = $mysqli->query("SELECT NomPat, PrePat, Contact,TypePrel, Wilaya,LieuPrel FROM formulaire_demande ");
while ($row = $result->fetch_assoc()) {
    $patient = $row['NomPat'] ;
    $surnom = $row['PrePat'] ;
    $tell = $row['Contact'] ;
    $type = $row['TypePrel'] ;
    $wilaya = $row['Wilaya'] ;
    $lieu = $row['LieuPrel'] ;
?>



<div class="column">
				<div class="card">
					<br>
					<img src="../images/band-aid.png">
					<div class="container1">
						<h1 style="text-align: center;">Demandé pour :</h1>
						<p style="text-align: center;font-size: large;"><?= $patient?>&nbsp;<?= $surnom ?></p>
						<p><strong>Wilaya :</strong><?= $wilaya ?></p>
						<p><strong>G.Sanguin &nbsp;&nbsp;</strong><?= $type ?></p>
						<p><strong>Contact :&nbsp;&nbsp;</strong><?= $tell ?></p>
						<p><strong>Lieu de Prélèvement :&nbsp;&nbsp;</strong><?= $lieu ?></p>
						<br><br><div class="opt">
						<a class=" tel" href="tel:+2135-4058-2405" style="text-decoration: none;"><i class="fas fa-phone"></i>&nbsp; telephoner</a>
							<a type="submit" class=" der" style="text-decoration: none;" href="form_don.php"><i class="fas fa-capsules"></i>&nbsp; Faire un don</a>
					    </div>
					</div>
				</div>
			</div>

<?php } ?>