#signup.php
<?php 
require_once "config.php"; 
$sql = "INSERT INTO user(first_name,last_name,email,password) VALUES(:first_name,:last_name,:email,:password)";
$dataBinded=array(
    ':first_name'=> $_POST['first_name'],
    ':last_name'=> $_POST['last_name'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>