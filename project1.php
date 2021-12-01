<?php require_once "config.php"; ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>La BulldoCorp Ltd.®</title>
            <meta charset="utf-8">
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
            <link rel="stylesheet" type="text/css" href="css/styleProject1.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>

        <body>

            <?php require_once "menu.php" ?>
            
            <div class="bulldo">

                <div class="parallax-container">
                    <div class="parallax">
                        <img src="./pictures/bulldozer_à_reaction/backgroundpage1.jpg" alt="Portfolio bulldo background">
                    </div>
                </div>

                <form class="row">

                    <div class="text  col l4 s12 textbulldo1">
                        <h3>La BulldoCorp Ltd.®</h3>
                        <h4>Description des photos :</h4>
                        <p>Dans l'ordre d'apparition des photos du carousssel : Le Bulldozer à reaction normal,
                            le Bulldozer à reaction agricole, le Bulldozer à reaction de chasse, le Bulldozer
                            à reaction mode émeute.</p>
                    </div>

                    <div class="carousel col l4 s12">
                        <a class="carousel-item" href="#one!"><img
                                src="pictures/bulldozer_à_reaction/bulldozer_à_réaction_normal.png"
                                alt="Portfolio image bulldo 1"></a>
                        <a class="carousel-item" href="#two!"><img
                                src="pictures/bulldozer_à_reaction/bulldozer_à_réaction_agricole.png"
                                alt="Portfolio image bulldo 2"></a>
                        <a class="carousel-item" href="#three!"><img
                                src="pictures/bulldozer_à_reaction/bulldozer_à_réaction_de_chasse.png"
                                alt="Portfolio image bulldo 3"></a>
                        <a class="carousel-item" href="#four!"><img
                                src="pictures/bulldozer_à_reaction/bulldozer_à_réaction_émeute.png"
                                alt="Portfolio image bulldo 4"></a>
                    </div>

                    <div class="text col l4 s12 textbulldo2">
                        <h3>Description :</h3>
                        <p>Créée à l'occasion d'un projet d'anglais, la BulldoCorp Ltd.® est une société imaginaire vendant un
                            produit assez étonnant, un bulldozer à reaction.
                            <br>Ce bulldozer est capable de retourner un hectare de terre en 10 secondes, sa version agricole
                            (voir
                            carroussel de photos ci contre) est capable de récolter
                            un champ en 3 secondes, son carburant est du Kerosène infusé avec des Stéroïdes, il a un GPS dernier
                            cri
                            et une vitesse maximale de 10 Km/s, soit 36 000 Km/h.
                            <br>Il a également 4 variantes : Base, Agricole, Chasse et Émeute (voir carrousel de photos ci
                            contre).
                        </p>
                        <a class="modal-trigger" href="#modal2">Cliquer ici pour afficher le fond ci dessus.</a>
                        <div id="modal2" class="modal">
                            <div class="modal-content">
                                <img src="pictures/bulldozer_à_reaction/backgroundpage1.jpg"
                                    alt="Portfolio bulldo background full" width="90%">
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close btn-flat">Close</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal Trigger -->
            <button data-target="modal1" class="btn modal-trigger btncontact">Nous Contacter</button>
            <!-- Modal Structure -->
            <div id="modal1" class="modal gg2">
                <div class="modal-content gg">
                    <div class="page-contact">
                      <form action="mail.php" method="post">
                        <h3 class="col l2 m2 s12 page-contact-title" id="contact">
                        Contact
                        </h3>
                        <div class="input-field col l3 m2 s12 textinput">
                          <textarea id="textarea1" name="first_name" class="materialize-textarea"></textarea>
                          <label for="textarea1">Prénom</label>
                        </div>
                        <div class="input-field col l3 m2 s12 textinput">
                          <textarea id="textarea1" name="last_name" class="materialize-textarea"></textarea>
                          <label for="textarea1">Nom</label>
                        </div>
                        <div class="input-field col l3 m2 s12 textinput">
                          <input id="email" type="email" name="email" class="validate">
                          <label for="email">Email</label>
                          <span class="helper-text" data-error="Email incorrect" data-success=""></span>
                       </div>
                       <div class="input-field col l3 m2 s12 textinput">
                         <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                         <label for="textarea1">Message</label>
                      </div>
                        <button class="btn waves-effect waves-light col l1 m2 s12 btncontact2" type="submit" name="action">Envoyer
                          <i class="material-icons right ">send</i>
                        </button>
                      </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>

            <!--JavaScript at end of body for optimized loading-->
            <script type="text/javascript" src="./js/jquery.js"></script>
            <script type="text/javascript" src="./js/materialize.min.js"></script>
            <script type="text/javascript" src="./js/project1.js"></script>
           
        </body>

    </html>
