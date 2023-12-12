<?php
    require './inc/header.php';
  //accessing existing session
    session_start();
  //removing variables
    session_unset();
  //killing session
    session_destroy();
  //redirect to login
    header('location:signin.php');
    require './inc/footer.php';
?>
