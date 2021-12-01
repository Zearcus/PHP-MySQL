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

   foreach($data as $user){ ?>
   <div class="bloc_user">
     <h2><?php echo $user['first_name']." ".$user['last_name'] ?></h2>
     <span class="email"><?php echo $user['email']." - User_ id : ".$user['id'] ?></span>
     <form action="delete.php" method="post">
        <input type="id" name="delete_id" class="validate" value="<?php echo $user['id']; ?>">
        <button type="submit" name="d_button"> delete </button>
      </form>
   </div>
   <?php } ?>
  </body>

 </html>
