<?php
 session_start(); 
     if ($_SESSION['loginUsuario'] == 'adminpersonalite@gmail.com'){
        header("Location: ../view/home-admin.php");
        }
?>