<?php
session_start();
if(isset($_SESSION['id']))
  $sessionID=$_SESSION['id'];
  
include "RealConnect.php";

  $resultado_User = mysql_query ("DELETE FROM USER WHERE IDUser='".$sessionID."'");
  include "SessionKill.php";
  header('Location: ../index.php?userApagado=1');

if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
  {
    @mysql_close($connection);
  }
  ?>