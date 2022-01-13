 <?php require_once "config.php"; ?>
 <html>

 <head>
   <title>Panel Admin</title>
   <link type="text/css" rel="stylesheet" href="css/admin.css">
 </head>

 <body>
   <?php require "menu.php"; ?>
   <h1>Liste des utilisateurs :</h1>
   <?php
    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $user) { ?>
     <div class="bloc_user">
       <h2><?php echo "- " . $user['first_name'] . " " . $user['last_name'] ?></h2>
       <span class="email"><?php echo "Email : " . $user['email'] ?></span>
       <form action="delete_user.php" method="post">
         <input type="hidden" name="id" class="validate" value="<?php echo $user['id']; ?>">
         <button type="submit" name="delete_btn"> delete </button>
       </form>

       <form action="update_user.php" method="post">
         <span> password de l'id : <?php echo $user['id']; ?></span>
         <p> <?php echo $user['password']; ?> </p>
         <input type="text" name="text_password" class="validate" value="<?php $user['password'] ?>">
         <button type="submit" name="update_btn"> update </button>
       </form>
     </Div>
   <?php } ?>

   <h2>Page d'accueil : </h2>
   <?php
    $sql = "SELECT * FROM picturestext";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $picturestext) { ?>
     <div class="input-field bloc_home">

       <form action="update_text.php" method="post">
         <span> text de l'id : <?php echo $picturestext['id']; ?></span>
         <p> <?php echo $picturestext['text_all']; ?> </p>
         <input type="hidden" name="id" class="validate" value="<?php echo $picturestext['id']; ?>">
         <input type="text" name="text_home" class="validate" value="<?php $picturestext['text_all'] ?>">
         <button type="submit" name="update_btn"> update </button>

       </form>
     </div>
   <?php } ?>


 </body>

 </html>