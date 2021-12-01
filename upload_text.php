#upload_text.php
<?php 
require_once "config.php"; 
$sql = "INSERT INTO picturestext(text) VALUES(:text_thomas,:text_fabien)";
$dataBinded=array(
    ':text_thomas'=> $_POST['text_jsp'],
    ':text_fabien'=> $_POST['text_jsp'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
?>