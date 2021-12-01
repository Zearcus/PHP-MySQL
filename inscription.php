<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta name="description" content="We will present you our Portfolio " />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/subscribe.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <?php require_once "menu.php" ?>

    <div class="page-inscription">

        <form action="signup.php" method="post">
            <h3 class="col l2 s12 page-contact-title textTitle" id="contact">
                Inscription
            </h3>
            <a href="connexion.php" class="textconnexion">Tu as déjà un compte ?</a>

            <div class="input-field col l3 s12 textinput">
                <textarea id="textarea1" name="first_name" class="materialize-textarea"></textarea>
                <label for="textarea1">First name</label>
            </div>
            <div class="input-field col l3 s12 textinput">
                <textarea id="textarea1" name="last_name" class="materialize-textarea"></textarea>
                <label for="textarea1">Last name</label>
            </div>
            <div class="input-field col l3 s12 textinput">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
                <span class="helper-text" data-error="Email incorrect" data-success=""></span>
            </div>
            <div class="input-field col l3 s12 textinput showpassword">
                <input id="password" name="password" type="password">
                <label for="password">Password</label>
                <a href="#" id="showpasswordbutton" onclick="Showpassword()">visibility</a>
            </div>
            <button class="btn waves-effect waves-light col l1 s12 btncontact2" type="submit" name="action">Créer un compte
                <i class="material-icons right ">send</i>
            </button>

            <a>Mot de passe oublié ?</a>
        </form>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/inscription.js"></script>

</body>

</html>
