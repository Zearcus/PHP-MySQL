#delete.php
<?php
require_once "config.php";
    if (isset($_POST['d_button'])){
        $id = $_POST['delete_id'];

        $sql = "DELETE * FROM user WHERE id='$id'";
        $pre = $pdo->prepare($sql); 
        $pre->execute();

        if(empty($id)){
            header("Location:index.php");
        }
        else{
            header("Location:admin.php");
        }
    }
?>