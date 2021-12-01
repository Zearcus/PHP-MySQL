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
        <!-- Partie du menu -->
        <div class="row menu" id="Home">
        <div class="col s12 l1 green darken-1 blue-text text-darken-3 z-depth-5 btnmenu">
            <p>
            <a class="blue-text text-lighten-2" href="index.php">Home</a>
            </p>
            <a class="btn-small" id="cat">Click here</a></div>
        <div class="col s12 l2 green darken-1 z-depth-5">
            <p><a class="blue-text text-lighten-2" href="#team">Team</a></p></div>
        <div class="col s12 l2 green darken-1 z-depth-5"><p><a class="blue-text text-lighten-2" href="project1.php">La BulldoCorp Ltd.®</a></p></div>
        <div class="col s12 l2 green darken-2 z-depth-5"><p><a class="blue-text text-lighten-2" href="project2.php">Carré Rouge en Python</a></p></div>
        <div class="col s12 l2 green darken-3 z-depth-5"><p><a class="blue-text text-lighten-1" href="project3.php">I.O.T Système Domotique</a></p></div>
        <?php if (isset($_SESSION['user'])): ?>
            <?php if ($_SESSION['user']['is_admin']==1): ?>
                        <div class="col s12 l1 green darken-4 z-depth-5"><p><a class="blue-text text-lighten-2" href="admin.php">Admin</a></p><a class="btn-small" id="quack">Click here</a></div>
                        <div class="col s12 l2 green darken-4 z-depth-5"><p><a class="blue-text text-lighten-2" href="logout.php">Se déconnecter</a></p><a class="btn-small" id="quack">Click here</a></div>
                        <?php else: ?>
                        <div class="col s12 l3 green darken-4 z-depth-5"><p><a class="blue-text text-lighten-2" href="logout.php">Se déconnecter</a></p><a class="btn-small" id="quack">Click here</a></div>
                        <?php endif; ?>
            <?php else: ?>
            <div class="col s12 l3 green darken-4 z-depth-5"><p><a class="blue-text text-lighten-2" href="connexion.php">Se connecter</a></p><a class="btn-small" id="quack">Click here</a></div>
            <?php endif; ?>
        </div>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>
