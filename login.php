#login.php
<?php 
require_once "config.php"; 
$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
      header('Location:connexion.php');
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     if($_SESSION['user']['is_admin']==1){
          header('Location:admin.php');
     }
     header('Location:index.php');
}
?>