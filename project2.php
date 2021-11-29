<?php require_once "config.php"; ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>
                project 1
            </title>
            <meta charset="utf-8">
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
            <link rel="stylesheet" type="text/css" href="css/styleProject2.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>

        <body>

            <?php require_once "menu.php" ?>

            <div class="carre" id="Carré">
                <div class="parallax-container">
                    <div class="parallax">
                        <img src="pictures/Carré_rouge/backgroundarcade.jpg" alt="Portfolio background carré rouge">
                    </div>
                </div>

                <form class="row">
                    <div class="text col l4 s12 textcarre1">
                        <h3>Le Carré Rouge</h3>
                        <h4>Description des photos :</h4>
                        <p>Dans l'ordre d'apparition des photos du carousssel : Le GUI quand on ouvre le jeu, le GUI quand on gagne,
                            le code des carrés,
                            le code permettant de changer la couleur d'un carré, le code faisant fonctionner les boutons,
                            partie 1 et 2, le code du bouton start, le code vérifiant si on a gagné et le code des boutons, et enfin
                            une image expliquant
                            quels boutons changent quels carrés.</p>
                    </div>

                    <div class="carousel col l4 s12">
                        <a class="carousel-item" href="#one!"><img src="pictures/Carré_rouge/GUI.png"
                                alt="Portfolio image carré rouge 1"></a>
                        <a class="carousel-item" href="#two!"><img src="pictures/Carré_rouge/GUI_gagné.png"
                                alt="Portfolio image carré rouge 2"></a>
                        <a class="carousel-item" href="#three!"><img src="pictures/Carré_rouge/Carré_rouge_start_1.png"
                                alt="Portfolio image carré rouge 3"></a>
                        <a class="carousel-item" href="#four!"><img src="pictures/Carré_rouge/Carré_rouge_start_2.png"
                                alt="Portfolio image carré rouge 4"></a>
                        <a class="carousel-item" href="#five!"><img src="pictures/Carré_rouge/Carré_rouge_start_3.png"
                                alt="Portfolio image carré rouge 5"></a>
                        <a class="carousel-item" href="#six!"><img src="pictures/Carré_rouge/Carré_rouge_start_4.png"
                                alt="Portfolio image carré rouge 6"></a>
                        <a class="carousel-item" href="#seven!"><img src="pictures/Carré_rouge/Carré_rouge_start_5.png"
                                alt="Portfolio image carré rouge 7"></a>
                        <a class="carousel-item" href="#eight!"><img src="pictures/Carré_rouge/Carré_rouge_start_6.png"
                                alt="Portfolio image carré rouge 8"></a>
                        <a class="carousel-item" href="#nine!"><img src="pictures/Carré_rouge/Carré_rouge_start_7.png"
                                alt="Portfolio image carré rouge 9"></a>
                        <a class="carousel-item" href="#ten!"><img src="pictures/Carré_rouge/Carré_rouge_start_8.png"
                                alt="Portfolio image carré rouge 10"></a>
                        <a class="carousel-item" href="#eleven!"><img src="pictures/Carré_rouge/params.png"
                                alt="Portfolio image carré rouge 11"></a>
                    </div>

                    <div class="text col l4 s12 textcarre2">
                        <h3>Description :</h3>
                        <p>Le but du jeu du Carré Rouge est de parvenir à rendre toutes les cases d'un carré de format 3x3
                            cases toutes rouges en utilisant 9 boutons, chaque bouton change la couleur de plusieurs cases entre
                            bleu et rouge, voir le lien ci dessous pour afficher l'image expliquant cela. Le bouton "START" au
                            milieu
                            de l'écran (voir carroussel de photos ci contre) sert à recommencer une partie en générant aléatoirement
                            une nouvelle grille. Le bouton "J'ai gagné ?" permet de savoir si on a gagné et combien de cases doivent
                            être mises en rouge dans le cas où on a pas encore gagné.<br>J'ai fait ce projet en classe de Première,
                            il m'a pris environ
                            une ou deux semaines et contient 231 lignes de code.</p>
                        <a class="modal-trigger" href="#modal1">Cliquer ici pour afficher la relation entre les boutons et les
                            carrés.</a>
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <img src="pictures/Carré_rouge/params.png" alt="Portfolio setting carré rouge" width="90%">
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close btn-flat">Close</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal Trigger -->
            <button data-target="modal2" class="btn modal-trigger btncontact">Nous Contacter</button>
            <!-- Modal Structure -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <div class="page-contact">

                            <h3 class="col l2 m2 s12 page-contact-title">
                                Contact
                            </h3>
                            <div class="input-field col l3 m2 s12  textinput">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Prénom</label>
                            </div>
                            <div class="input-field col l3 m2 s12  textinput">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Nom</label>
                            </div>
                            <div class="input-field col l3 m2 s12  textinput">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                                <span class="helper-text" data-error="Email incorrect" data-success=""></span>
                            </div>
                            <div class="input-field col l3 m2 s12 textinput">
                              <textarea id="textarea1" class="materialize-textarea"></textarea>
                              <label for="textarea1">Sujet</label>
                           </div>
                            <button class="btn waves-effect waves-light col l1 m4 s12 btncontact2" type="submit" name="action">Envoyer
                                <i class="material-icons right ">send</i>
                            </button>


                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>

            <!--JavaScript at end of body for optimized loading-->
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>
            <script type="text/javascript" src="js/project2.js"></script>

        </body>

    </html>
