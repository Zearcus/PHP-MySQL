<!DOCTYPE html>
    <html>
        <head>
            <title>Portfolio</title>
            <meta charset="utf-8">
            <meta name="description" content="We will present you our Portfolio " />
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
            <link rel="stylesheet" type="text/css" href="css/styleProject3.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>

        <body>

            <div class="row menu" id="Home">
                <div class="col s12 l2 green darken-1 blue-text text-darken-3 z-depth-5">
                    <p><a class="blue-text text-lighten-2" href="index.php">Home</a></p><a class="btn-small" id="cat">Click here</a>
                </div>
                <div class="col s12 l2 green darken-1 z-depth-5">
                    <p><a class="blue-text text-lighten-2" href="index.php">Team</a></p>
                </div>
                <div class="col s12 l2 green darken-1 z-depth-5">
                    <p><a class="blue-text text-lighten-2" href="project1.php">La BulldoCorp Ltd.®</a></p>
                </div>
                <div class="col s12 l2 green darken-2 z-depth-5">
                    <p><a class="blue-text text-lighten-2" href="project2.php">Carré Rouge en Python</a></p>
                </div>
                <div class="col s12 l2 green darken-3 z-depth-5">
                    <p><a class="blue-text text-lighten-1" href="project3.php">I.O.T Système Domotique</a></p>
                </div>
                <div class="col s12 l2 green darken-4 z-depth-5">
                    <p><a class="blue-text text-lighten-2" href="connexion.php">Se connecter</a></p><a class="btn-small" id="quack">Click
                        here</a>
                </div>
            </div>

            <div class="domotique">

                <div class="parallax-container">
                    <div class="parallax">
                        <img src="pictures/I.O.T_Système_Domotique/backgroundomotique.jpg" alt="Portfolio background domotique ">
                    </div>
                </div>

                <form class="row">

                    <div class="text  col l4 s12 textdomotique">

                        <h2 class="description_domotique">I.O.T Système Domotique</h2>
                        <p>J'ai effectué mon projet au lycée Pierre De Coubertin, le but de ce projet est d'automatiser une maison
                            domotique. <br>
                            Les images vous montrerons l'installation de ma partie dans ce projet avec une partie de programmation
                            en python avec une rapsberry PI3B+.</p>
                    </div>

                    <div class="carousel col l4 s12">
                        <a class="carousel-item" href="#one!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel1.jpg"
                                alt="Portfolio image domotique 1"></a>
                        <a class="carousel-item" href="#two!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel2.jpg"
                                alt="Portfolio image domotique 2"></a>
                        <a class="carousel-item" href="#three!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel3.jpg"
                                alt="Portfolio image domotique 3"></a>
                        <a class="carousel-item" href="#four!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel4.jpg"
                                alt="Portfolio image domotique 4"></a>
                        <a class="carousel-item" href="#five!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel5.jpg"
                                alt="Portfolio image domotique 5"></a>
                        <a class="carousel-item" href="#six!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel6.png"
                                alt="Portfolio image domotique 6"></a>
                        <a class="carousel-item" href="#seven!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel7.png"
                                alt="Portfolio image domotique 7"></a>
                        <a class="carousel-item" href="#eight!"><img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel8.png"
                                alt="Portfolio image domotique 9"></a>
                    </div>

                    <div class="text col l4 s12 textdomotique">

                        <h2 class="description_domotique">Description</h2>
                        <p>Dans ce projet j'étais en groupe avec deux autres personnes, notre but était de superviser un système
                            d'éclairage extérieur, c'est à dire de vérifier le fonctionnement de l'éclairage,
                            voir si les lampes fonctionnent bien de nuit et que de jour, elles ne s'allument pas mais se rechargent
                            pour pouvoir fonctionner de nuit.</p>
                    </div>

                    <a class="modal-trigger" href="#modal3">Cliquer ici pour afficher la présentation du projet en mode simulation</a>
                    <div id="modal3" class="modal">
                        <div class="modal-content">
                            <img src="pictures/I.O.T_Système_Domotique/domotiquecarrousel9.png" alt="Portfolio image domotique 10"
                                width="90%">
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close btn-flat">Close</a>
                        </div>
                    </div>

                </form>

            </div>

            <!-- Modal Trigger -->
            <button data-target="modal1" class="btn modal-trigger btncontact">Nous Contacter</button>
            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
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
                         <textarea id="textarea1" name="subject" class="materialize-textarea"></textarea>
                         <label for="textarea1">Sujet</label>
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

            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>
            <script type="text/javascript" src="js/project3.js"></script>

        </body>


    </html>
