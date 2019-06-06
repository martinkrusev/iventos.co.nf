<?php
$password = $_POST['PassUser'];
$realname =$_POST['NameUser'];
$dnasc =$_POST['DataNascUser'];
$email =$_POST['EmailUser'];


session_start();
if(isset($_SESSION['id']))
  $sessionID=$_SESSION['id'];

include "RealConnect.php";
if (($password != null)or($realname != null)or($dnasc != null)or($email != null))
{

if(($password != null))
{
  $resultado_User = mysql_query ("UPDATE USER SET UserPass= '".$password."' WHERE IDUser='".$sessionID."'");
  include "SessionKill.php";
  header('Location: ../index.php?passChange=1');
}
if(($realname != null))
{
  $resultado_User = mysql_query ("UPDATE USER SET UserName= '".$realname."' WHERE IDUser='".$sessionID."'");
  header('Location: ../indexer_PainelDeUtil.php?sucesso=1');
}
if(($dnasc != null))
{
  $resultado_User = mysql_query ("UPDATE USER SET UserDNasc= '".$dnasc."' WHERE IDUser='".$sessionID."'");
  header('Location: ../indexer_PainelDeUtil.php?sucesso=1');
}
if(($email != null))
{
  $resultado_User = mysql_query ("UPDATE USER SET UserEmail= '".$email."' WHERE IDUser='".$sessionID."'");
  header('Location: ../indexer_PainelDeUtil.php?sucesso=1');
}
}
else
{
  header('Location: ../indexer_PainelDeUtil.php?erro=1');
}

if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
  {
    @mysql_close($connection);
  }
  ?>