<?php
 session_start();
 if (!isset($_SESSION['user'])) {
  header("Location: LogIn.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: Home.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: LogIn.php");
  exit;
 }