<?php
$username = $_POST['login'];
$password =$_POST['password'];

include "RealConnect.php";

if(($username != null) && ($password != null))
{
  $resultado_User = mysql_query("SELECT IDUser, UserLogin, UserPass FROM User WHERE UserLogin = '".$username."'");
  
  if(mysql_num_rows($resultado_User) != 0)
  {
    while($row = mysql_fetch_array($resultado_User))
    {    
      if($password == $row['UserPass'])
      {
        session_start();
        $_SESSION['id']= $row['IDUser'];
        $_SESSION['name']= $row['UserLogin'];
        
        header('Location: ../indexer.php');
      }
      else
        header('Location: ../index.php?erro_pass=1');
    }
  }
  else
    header('Location: ../index.php?erro_user=1');
    
    if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
    {
      
        @mysql_close($connection);
    }
}
else
  header('Location: ../index.php?erro=1');
?>