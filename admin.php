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
     <h2><?php echo "- ".$user['first_name']." ".$user['last_name'] ?></h2>
     <span class="email"><?php echo "Email : ".$user['email']." - ID User : ".$user['id'] ?></span>
     <form action="delete.php" method="post">
        <input type="hidden" name="last_name" class="validate" value="<?php echo $user['last_name']; ?>">
        <button type="submit" name="delete_btn">Delete</button>
      </form>
   </Div>
   <?php } ?>
  </body>

 </html>
