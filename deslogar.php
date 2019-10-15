<?php
session_start();
  unset($_SESSION['user_id']);
  unset($_SESSION['funcionario']);

  header('location:index.php');
?>