<?php
session_start();
require '../model/logar.php';

if ($_SESSION['email'] == 'adminpersonalite@gmail.com') {
    header("Location: ../view/personnaliteArua-Adm/dashboard-agenda.php");
}
