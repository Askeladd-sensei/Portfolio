<!DOCTYPE html>
   <html lang="fr">
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="don de sang">
    <link rel="stylesheet" href="../CSS/style1.css">
    <title>Accueil - Med'demek</title>
    <link rel="Shortout icon" href="../images/logo.png">
    <style>
      * {box-sizing: border-box;}
      body {font-family: Verdana, sans-serif;}
      .mySlides {display: none;}
      img {vertical-align: middle;}
      
      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      
      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      
      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      
      /* The dots/bullets/indicators */
      .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      
      .active {
        background-color: #717171;
      }
      
      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      
      @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
      
      @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
      
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
      }
      </style>
  </head>
  <img>
    <div class="aqerru">
      <img class="logo" src="../images/logo.png" alt="logo"></img>
      <div class="btns-access">
      <button class="btn" onclick="document.location='connexion.php'">Connexion</button> 
      <button class="btn btn-insc" onclick="document.location='inscription.php'">Inscription</button> </div>
    </div>
    <br><br>
    <h1 class="titre titre1">&nbsp;&nbsp;Donnez du sang, c'est devenir un héros:</h1>
    <p class="principal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque non tellus orci ac auctor augue mauris augue. Nulla at volutpat diam ut. Dis parturient montes nascetur ridiculus mus mauris. Sed tempus urna et pharetra pharetra. Ipsum consequat nisl vel pretium lectus quam id. Orci eu lobortis elementum nibh tellus molestie. Tellus mauris a diam maecenas.</p>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="../images/img acceuil 1.png" style="width:100%">
      </div>
      
      <div class="mySlides fade">
        <img src="../images/accueil 2.jpg" style="width:100%">
      </div>
      
      <div class="mySlides fade">
        
        <img src="../images/accueil 3.jpg" style="width:100%">
      </div>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
    <h1 class="titre titre2">&nbsp;&nbsp;Suivi spontané de vos prélèvements </h1>
    <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
       et dolore magna aliqua. Quisque non tellus
       orci ac auctor augue mauris augue. Nulla at volutpat diam ut. Dis parturient montes nascetur ridiculus mus mauris. 
       Sed tempus urna et pharetra pharetra.</p>
    <h1 class="titre titre3">&nbsp;&nbsp;Hierarchie des donneur de sang:</h1>
    <img class="img" src="../images/don.png"></img>
    <br>
      <h1 classe="titre titre4">Quelque avis utilisateur:</h1>
      <div class="art">
        <div class="article"></div>
        <div class="article"></div>
      </div> <br>
      <div class="art">
        <div class="article"></div>
        <div class="article"></div>
      </div>
      <br>
      <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
      <br> <?php include '../php/corpse/footer.php' ?>
  </body>
  </html>