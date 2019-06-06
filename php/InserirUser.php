<?php
$username = $_POST['UserLogin'];
$password =$_POST['UserPass'];
$realname =$_POST['UserName'];
$dnasc =$_POST['UserDNasc'];
$email =$_POST['UserEmail'];

include "RealConnect.php";
if(($username != null) && ($password != null)&& ($realname != null)&& ($dnasc != null)&& ($email != null))
{
  $resultado_User = mysql_query ("SELECT UserLogin, UserEmail FROM User WHERE UserLogin = '".$username."' and UserEmail = '".$email."'");
  if(mysql_num_rows($resultado_User) > 0)
  {
  header('Location: ../formulario_registar.php?erro_userexist=1');
  }
  else
  {
  $resultado_Registo = mysql_query("INSERT INTO User( UserLogin, UserPass, UserName, UserDNasc, UserEmail) VALUES ('".$username."' , '".$password."' , '".$realname."' , '".$dnasc."' , '".$email."' )" );
  header('Location: ../index.php?successo=1');
  }
}
else
{
  header('Location: ../formulario_registar.php?erro=1');
}
if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
  {
    @mysql_close($connection);
  }
  ?>