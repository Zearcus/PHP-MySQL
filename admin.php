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
     <span class="email"><?php echo "Email : ".$user['email'] ?></span>
     <form action="delete_user.php" method="post">
        <input type="hidden" name="id" class="validate" value="<?php echo $user['id']; ?>">
        <button type="submit" name="delete_btn"> delete </button>
      </form>
   </Div>
   <?php } ?>
    <?php
      $sql = "SELECT * FROM picturestext";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);

      ?>
      <div class="bloc_home">
      <h2>page d'acceuil :</h2>
        <p><?php echo $_POST['text_jsp'] ?></p>

      </div>



  </body>

 </html>
