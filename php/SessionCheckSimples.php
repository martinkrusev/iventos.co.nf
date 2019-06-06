<?php
session_start();
if(isset($_SESSION['id']))
  echo '';
else
  header('Location: ../index.php?erro_loginreq=1');
?>