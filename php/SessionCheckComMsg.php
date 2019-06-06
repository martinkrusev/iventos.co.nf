<?php
session_start();
if(isset($_SESSION['id']))

    echo"<div class='WelcMsg'>
    <p>Bem-Vindo ao site iVentos '".$_SESSION['name']."'</p>
    </div>";

else

  header('Location: ../index.php?erro_loginreq=1');

?>