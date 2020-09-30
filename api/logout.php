<?php
session_start();
session_unset();
//   session_start();
//   unset($_SESSION["username"]);
//   unset($_SESSION["password"]);
   
//   echo 'You have cleaned session';
  // header('Refresh: 2; URL = ../main.php');
header('location:../main.php');
?>