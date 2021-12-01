
<?php
require_once "config.php";

    $sql = "DELETE FROM user WHERE id =".$_POST['id'];
    $pre = $pdo->prepare($sql); 
    $pre->execute();

    header ("Location:admin.php");

?>