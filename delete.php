#delete.php
<?php
require_once "config.php";
$sql = "SELECT * FROM user";
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = current($pre->fetchAll(PDO::FETCH_ASSOC)); //current prend la première ligne du tableau

    if (isset($_POST['d_button'])){
        $id = $_POST['delete_id'];

        $sql = "DELETE * FROM user WHERE id=$id";

        if(empty($id)){
            header ("Location:index.php");
        }
        else{
            header("Location:admin.php");
        }
    }
?>