#delete.php
<?php
require_once "config.php";

    $sql = "DELETE FROM 'user' WHERE last_name =".$_POST['last_name'];
    $pre = $pdo->prepare($sql); 
    $pre->execute();

?>