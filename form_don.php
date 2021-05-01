<?php 
session_start();
if(!isset($_SESSION['mail'])){
    header("Location: connexion.php");
    exit(); 
} 
?>

<!DOCTYPE html>
   <html lang="fr">
   <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="don de sang">
        <link rel="stylesheet" href="../CSS/style_form.css">
        <title>Formulaire RDV</title>
        <link rel="Shortout icon" href="../images/logo.png">
    </head>
<body>

    <div class="header">
        <img class="logo" src="../images/logo.png" alt="logo">
    </div>
<br>

<form action="verify.php" class="container" style="width: 460px;" method="POST">
    <div class="head">
        <img class="logo" src="../images/logo.png" alt="logo" style="width: 160px;height:auto;">
    </div>
     <div class="head">
        <h2>Formulaire de don :</h2>
    </div>
        <div class="champ" style="align-items:center">
             <label for="ddon"  ><b>Date du don:</b></label>
            <input class="inputer" type="date" name="ddon" required>     
         </div>

    <br>

    <div class="champ" style="align-items: center;">

            <label for="pdm"><b>Poid du moment:</b></label>
            <input type="radio" name="demo2" class="demo2 demoyes" id="demo2-a">
            <label for="demo2-a">-50Kg</label>
            <input type="radio" name="demo2" class="demo2 demono" id="demo2-b">
            <label for="demo2-b">50-55Kg</label>
            <input type="radio" name="demo2" class="demo2 demoni" id="demo2-c">
            <label for="demo2-c">+55Kg</label>
    </div>
    <div class="bet">
        <a style="font-size: 13px;"><h5>Avez-vous une maladie ces 2 dernières semaines? (anémie, opération, SIDA, Cancer, fièvre...)?</a></h5>
    </div>

    <div class="champ">
        <div class="came">
             <input type="radio" id="maladie" name="maladie" value="maladie">
             <label for="maladie"><a style="font-size: 13px;">Oui</a></label>
        </div>
        <div class="came">
            <input type="radio" id="maladie" name="maladie" value="maladie">
            <label for="maladie"><a style="font-size: 13px;">Non</a></label>
       </div>
    </div>

    <div class="bet">
        <a style="font-size: 13px;"><h5>Avez-vous une maladie ces 2 dernières semaines? (anémie, opération, SIDA, Cancer, fièvre...)?</a></h5>
    </div>

    <div class="champ">
        <div class="came">
             <input type="radio" id="maladie" name="maladie2" value="maladie">
             <label for="maladie2"><a style="font-size: 13px;">Oui</a></label>
        </div>
        <div class="came">
            <input type="radio" id="maladie" name="maladie2" value="maladie">
            <label for="maladie2"><a style="font-size: 13px;">Non</a></label>
       </div>
    </div>

    <div class="bet">
        <a style="font-size: 13px;"><h5>Avez-vous une maladie ces 2 dernières semaines? (anémie, opération, SIDA, Cancer, fièvre...)?</a></h5>
    </div>

    <div class="champ">
        <div class="came">
             <input type="radio" id="maladie" name="maladie3" value="maladie">
             <label for="maladie3"><a style="font-size: 13px;">Oui</a></label>
        </div>
        <div class="came">
            <input type="radio" id="maladie" name="maladie3" value="maladie" >
            <label for="maladie3"><a style="font-size: 13px;">Non</a></label>
       </div>
    </div>
    <div class="bet">
        <a style="font-size: 13px;"><h5>Avez-vous une maladie ces 2 dernières semaines? (anémie, opération, SIDA, Cancer, fièvre...)?</a></h5>
    </div>

    <div class="champ">
        <div class="came">
             <input type="radio" id="maladie" name="maladie4" value="maladie">
             <label for="maladie4"><a style="font-size: 13px;">Oui</a></label>
        </div>
        <div class="came">
            <input type="radio" id="maladie" name="maladie4" value="maladie">
            <label for="maladie4"><a style="font-size: 13px;">Non</a></p></label>
       </div>
    </div>
    <br>
    <div class="champ">
        <input type="checkbox" id="confirmation" name="confirmation" value="confirmé" required>&nbsp;&nbsp;
        <label for="confirmation"> <a style="font-size: 12px;"> Je confirme avoir remplis la charte afin d’effectuer le don concerné</a> </label>
   </div>
   <br>
   <a style="font-size: 12px; color:  red;">Notes importantes :</a>
    <a style="font-size: 12px;">&nbsp;&nbsp;&nbsp;<ul><li>Vous pouvez annuler le don 12h avant la date prise.</li><li>Vous pouvez changer de destinataire de don 48h avant la date prise.</li></ul></a>

    <br><br>
    <div class="bet">
        <a type="submit" class=" rollback" name="rollbackbro"
            style="font-size: 12px;text-decoration:none;" href="profil.php">Annuler</a>
        <button type="submit" class="btn login">Envoyer</button>
    </div>
</form>
</body>