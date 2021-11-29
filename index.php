<?php require_once "config.php"; ?>
<!DOCTYPE html>
 <html lang="fr">
    <head>
      <title>Portfolio</title>
      <meta charset="utf-8">
      <meta name="description" content="We will present you our Portfolio " />
       <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
       
      <?php require_once "menu.php" ?>


     <div class="row title_1">
        <h1 class="col s12 m12 l12"> ~ Portfolio ~</h1>
     </div>


      <!-- page de présentation de l'équipe -->
        <div class="team" id="team">

           <a class="btn-small keken" id="keken"></a>
           <h3>Présentation de l'équipe</h3>
           <a class="btn-small modal-trigger black" href="#info" id="infobouton">Info</a>
           <div id="info" class="modal">
             <div class="modal-content">
               <h4>Le saviez-vous ? La police d'écriture utilisée sur ce site s'appelle Courgette.</h4>
             </div>
           </div>

           <form class="row">
             <div class="col s4 l2 offset-s1">
               <a class="modal-trigger" href="#screamer1" id="screamerboutton1"><img src="pictures/Presentation/Fabien.png" alt="Portfolio image Fabien" width="100%"></a>
               <div id="screamer1" class="modal screamer">
                 <div class="modal-content">
                   <img src="pictures/Screamer/screamer_1.jpg" alt="Portfolio screamer 1" width="1700">
                 </div>
               </div>
               <figcaption>Fabien Marchand</figcaption>
             </div>

             <div class="col s12 l8 prestext">
               <div class="fabien">
                 <h2 class="textfabien">Fabien Marchand :</h2>
                 <p class="textfabien">Bonjour je suis Fabien Marchand, j'ai 20 ans et je suis orignaire du Grand-Est, plus précisement de Nancy.<br>Je suis arrivé au Gaming Campus après avoir
                   fait un BTS SN au lycée Pierre de Coubertin de Nancy.<br>Mes hobbies sont : <br>
                  - Écouter du métal (parce que c'est trop bien) <br>
                  - Jouer aux jeux vidéo <br>
                  - Dormir (parce que flémmarder toute la journée c'est pas mal aussi :) </p>
               </div>

               <div class=" col s12 thomas">
                 <h2>Thomas Jaffé :</h2>
                 <p>Originaire de Saint Maximin la Sainte Baume dans le Var (83), et né à Marseille en 2003.<br> Je suis arrivé au Gaming Campus
                   après un Bac Général avec les Spécialités Physique-Chimie et NSI et l'option Maths Complémentaires. J'aime beaucoup skier
                   en hiver (j'ai dû commencer vers 6 ans) et je faisais du tir à l'arc en salle avant d'arriver à Lyon. J'aime également
                   jouer aux jeux vidéos et écouter du métal.</p>
               </div>
             </div>

             <div class="col s4 l2">
               <a class="modal-trigger" href="#screamer2" id="screamerboutton2"><img src="pictures/Presentation/Thomas.png" alt="Portfolio image Thomas" width="100%"></a>
               <div id="screamer2" class="modal screamer">
                 <div class="modal-content">
                   <img src="pictures/Screamer/screamer_2.gif" alt="Portfolio screamer 2" width="1700">
                 </div>
               </div>
               <figcaption>Thomas Jaffé</figcaption>
             </div>
           </form>

        </div>

      <!-- présentation de la page de contact  -->
        <!-- Modal Trigger -->
        <button data-target="modal1" class="btn modal-trigger btncontact">Nous Contacter</button>
        <!-- Modal Structure -->
        <div id="modal1" class="modal ">
          <div class="modal-content">
            <div class="page-contact">

                <h3 class="col l2 m2 s12 page-contact-title" id="contact">
                Contact
                </h3>
                <div class="input-field col l3 m2 s12 textinput">
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Prénom</label>
                </div>
                <div class="input-field col l3 m2 s12 textinput">
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Nom</label>
                </div>
                <div class="input-field col l3 m2 s12 textinput">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                  <span class="helper-text" data-error="Email incorrect" data-success=""></span>
               </div>
               <div class="input-field col l3 m2 s12 textinput">
                 <textarea id="textarea1" class="materialize-textarea"></textarea>
                 <label for="textarea1">Sujet</label>
              </div>
                <button class="btn waves-effect waves-light col l1 m2 s12 btncontact2" type="submit" name="action">Envoyer
                  <i class="material-icons right ">send</i>
                </button>


          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
      </div>


      <!-- présentation de l'easter egg -->

      <div class="easter-egg white">
        <div class="row">
          <div class="col s12 whitz">
            <div class="easter-egg">
              <a class="btn-small" href="https://www.youtube.com/embed/iik25wqIuFo?autoplay=1"
                onclick="open('https://www.youtube.com/embed/iik25wqIuFo?autoplay=1', 'Popup',
                'height=840,width=1155'); return false;">Click here</a>
            </div>
          </div>
        </div>
      </div>

     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/script.js"></script>

    </body>
  </html> 