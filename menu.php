      <!-- Partie du menu -->
     <div class="row menu" id="Home">
       <div class="col s12 l2 green darken-1 blue-text text-darken-3 z-depth-5 btnmenu">
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
                      <div class="col s12 l2 green darken-4 z-depth-5"><p><a class="blue-text text-lighten-2" href="admin.php">Admin</a></p><a class="btn-small" id="quack">Click here</a></div>
            <?php endif; ?>
          <div class="col s12 l2 green darken-4 z-depth-5"><p><a class="blue-text text-lighten-2" href="logout.php">Se déconnecter</a></p><a class="btn-small" id="quack">Click here</a></div>
        <?php else: ?>
          <div class="col s12 l2 green darken-4 z-depth-5"><p><a class="blue-text text-lighten-2" href="connexion.php">Se connecter</a></p><a class="btn-small" id="quack">Click here</a></div>
        <?php endif; ?>
     </div>
