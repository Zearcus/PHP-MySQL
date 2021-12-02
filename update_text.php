#update text.php

<?php
require_once "config.php";

    $sql = "UPDATE picturestext SET text_all WHERE id=".$_POST['id'];
    $pre = $pdo->prepare($sql); 
    $pre->execute();

    header("Location:admin.php")


?>