#update password.php

<?php
require_once "config.php";

$sql = "UPDATE user SET password = '".$_POST['text_password']."' WHERE id=" . $_POST['id'];
$pre = $pdo->prepare($sql);
$pre->execute();

header("Location:admin.php")


?>