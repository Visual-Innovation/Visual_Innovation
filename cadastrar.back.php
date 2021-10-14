<?php
 
require('connect.php');
 
 extract($_POST);
 
 mysqli_query($con, "INSERT INTO `usuario` (`id`, `login`, `senha`) 
 VALUES (NULL, '$email', '$senha');");


 
 header("location:cadastrar.front.php");
?>
