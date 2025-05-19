<?php
session_start();
  if(isset($_POST['login']))
  {
    $id=$_POST['id'];
    $pass=$_POST['pass'];

    if(empty($id||$pass))
    {
       $_SESSION['error']="Id Or Pass empty";
       header('location:../View/homeView.php');
    }
  }
?>