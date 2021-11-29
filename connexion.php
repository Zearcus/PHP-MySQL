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
        <link rel="stylesheet" type="text/css" href="css/connexion.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

    <div class="row menu" id="Home">
        <div class="col s12 l2 green darken-1 blue-text text-darken-3 z-depth-5">
            <p>
                <a href="index.php" class="blue-text text-lighten-2"> Home</a>
            </p>
            <a class="btn-small" id="cat">Click here</a>
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

    <div class="page-connexion">
    
        <h3 class="col l2 s12 page-contact-title textTitle" id="contact">
            Se connecter
        </h3>
        
        <div class="input-field col l3 s12 textinput">
            <input id="email" type="email" class="validate">
            <label for="email">email</label>
            <span class="helper-text" data-error="Email incorrect" data-success=""></span>
        </div>
        <div class="input-field col l3 s12 textinput">
            <input id="email" type="email" class="validate">
            <label for="email">password</label>
            <span class="helper-text" data-error="Email incorrect" data-success=""></span>
        </div>

        <button class="btn waves-effect waves-light col l1 s12 btncontact2" type="submit" name="action">Connexion
            <i class="material-icons right ">send</i>
        </button>

        <a href="inscription.php">êtes-vous inscrit ?</a>
    
    
    </div>
        
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/inscription.js"></script>

    </body>

</html>