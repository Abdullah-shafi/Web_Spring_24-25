<?php 
session_start();
session_destroy();
header('location: ../View/homeView.php');
?>