<?php
mail("tjaffe@gaming.tech","Message de la part de ".$_POST["first_name"]." ".$_POST["last_name"],"Mail : ".$_POST['email']."\nMessage : ".$_POST['message']);
?>
