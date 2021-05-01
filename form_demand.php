<?php 
session_start();
if(!isset($_SESSION['mail'])){
    header("Location: connexion.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulaire de Demande</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../CSS/style_form.css">
    <link rel="Shortout icon" href="../images/logo.png">
</head>
<body>
    <br>
    <form action="verify_dem.php" class="container" method="POST">
        <div class="head">
            <img class="logo" src="../images/logo.png" alt="logo" style="width: 160px;height:auto;">
         </div>

         <div class="head">
            <h2>Formulaire de demande :</h2>
        </div>
        <br>
                <div class="flexer">
                    <label for="dure"><b class="durity">Duré de la demande:&nbsp;&nbsp;&nbsp;</b></label>
                    <div class="slidecontainer"><b class="comment"><span id="demo" name="dure" class="comment jr"></span>&nbsp;Jours </b></div>
                </div>
                    <input type="range" min="2" max="30" value="30" class="slider" id="myRange">
                    <script src="../javascript/slider.js" type="text/javascript"></script>
                </div>
                <div class="camper">
                <label for="ddn"><b>Nom du patient :</b></label><br>
                    <input class="inputer" type="text" placeholder="Introduisez nom du patient .." name="nompat" >
                    <label for="add"><b>Prénom Patient :</b></label><br>
                    <input  class="inputer" type="text" placeholder="Introduisez le prénom du patient..." name="prepat" >
                    <label for="mdp"><b>Numéro de contact :</b></label><br>
                    <input class="inputer" type="tel" placeholder="Sélectionnez un numéro joignable" name="numpat" >
                    <label><b>Spécifités du prélèvement :</b></label><br>
                    <SELECT size="1" class="selection" name="sanguine">
                    <OPTION active> Sélectionnez le type requis <OPTION>---&nbsp;&nbsp;<OPTION>A rhésus +&nbsp;&nbsp;<OPTION>A rhésus - &nbsp;&nbsp;<OPTION>B rhésus +&nbsp;&nbsp;
                        <OPTION>B rhésus -&nbsp;&nbsp;<OPTION>AB rhésus +&nbsp;&nbsp;<OPTION>AB rhésus -&nbsp;&nbsp;
                            <OPTION>O rhésus +&nbsp;&nbsp;<OPTION>O rhésus -&nbsp;&nbsp;<OPTION>Plaquettes &nbsp;&nbsp;
                </SELECT>
                <label><b>Wilaya :</b></label><br>
                <SELECT size="1" class="selection" name="place" >
                <OPTION value="null" active> Par Wilaya 
			<OPTION > ----- 
			<OPTION >Adrar
			<OPTION >Chlef
			<OPTION value="laghouat">Laghouat
			<OPTION value="oum el boouaghi">Oum El Bouaghi
			<OPTION value="batna">Batna
			<OPTION value="bejaia">Bejaia
			<OPTION value="biskra">Biskra
			<OPTION value="bechar">Bechar
			<OPTION value="blida">Blida
			<OPTION value="bouira">Bouira
			<OPTION value="tamanrasset">Tamanrasset
			<OPTION value="tebessa">Tebessa
			<OPTION value="tlemcen">Tlemcen
			<OPTION value="tiaret">Tiaret
			<OPTION value="tizi-ouzou">Tizi-Ouzou
			<OPTION value="alger">Alger
			<OPTION value="djelfa">Djelfa
			<OPTION value="jijel">Jijel
			<OPTION value="setif">Saida
			<OPTION value="skikda">Skikda
			<OPTION value="sidi bel abbes">Sidi bel abbes
			<OPTION value="annaba">Annaba
			<OPTION value="guelma">Guelma
			<OPTION value="constantine">Constantine
			<OPTION value="médéa">Médéa
			<OPTION value="mostaganem">Mostaganem
			<OPTION value="m'sila">M'sila
			        <OPTION value="mascara">Mascara
			        <OPTION value="ouargla">Ouargla
			        <OPTION value="oran">Oran
			        <OPTION value="bayedh">Bayedh
			        <OPTION value="illizi">Illizi
			        <OPTION value="bordj bou arreidj">Bordj bou arreidj
			        <OPTION value="boumerdes">Boumerdes
			        <OPTION value="tarf">Tarf
			        <OPTION value="tindouf">Tindouf
			        <OPTION value="tissemsilt">Tissemsilt
			        <OPTION value="el oued">El Oued
			        <OPTION value="khenchela">Khenchela
			        <OPTION value="souk ahras">Souk ahras
			        <OPTION value="tipaza">Tipaza
			        <OPTION value="mila">Mila
			        <OPTION value="defla">Defla
			        <OPTION value="naama">Nâama
			        <OPTION value="temouchent">Temouchent
			        <OPTION value="gherdaia">Gherdaia
			        <OPTION value="relizane">Relizane
			        <OPTION value="timimoune">Timimoune
			        <OPTION value="bordj badji mokhtar">Bordj Badji mokhtar
			        <OPTION value="ouled djellal">ouled djellal
			        <OPTION value="beni abbes">Beni abbes
			        <OPTION value="salah">Salah
			        <OPTION value="guezzam">Guezzam
			        <OPTION value="touggourt">Touggourt
			        <OPTION value="djanet">Djanet
			        <OPTION value="m'ghair">M'ghair
			        <OPTION value="meniaa">Meniaa
                </SELECT><br>
                <label><b>Centre de prélèvement :</b></label>
                    <input class="inputer" name="center" type="text" placeholder="Ex: Nom du laboratoire, croissant rouge.." >
                    <br><br>
                    <div class="bet">
                        <input type="checkbox" id="confirmation" name="confirmation" >&nbsp;&nbsp;
                        <label for="confirmation"> <a style="font-size: 12px;">  Je souhaiterais recevoir des notifications par e-mail sur l’avancée de la demande ci-dessus.</a> </label>
                    </div>
                    <br>
                    <a style="font-size: 12px; color:  red;">Note :</a>
                    <a style="font-size: 10px;">Vous pouvez retirer ou modifier votre demande dans le panneau du profil.</a>
                    <br><br><br>
                    <div class="bet">
                        <a type="submit" class=" rollback" name="rollbackbro"
                            style="font-size: 12px;text-decoration:none;" href="profil.php">Annuler</a>
                        <button type="submit" class="btn login">Envoyer</button>
                    </div>
    </form>
</body>
</html>