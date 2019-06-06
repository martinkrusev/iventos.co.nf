<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login iVentos</title>
<link href="css/iVentosLoginCSS.css" rel="stylesheet" type="text/css">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBg16t7JtkNuNv8IVvMpWkt28IB5phvWW0&sensor=false">
</script>
<script src="JavaScript/googlemapsLogin.js"></script>
<script>
function clearContents(element) {
  element.value = '';
}
</script>
</head>
<body onLoad="load()">
<div class="container">
  <div id="map"></div>
    <?php
    if(!empty($_GET["erro"]))
      echo "<div class='alerta_erro'><p>Por favor preencha todos os campos!</h4></div>";
    if(!empty($_GET["erro_user"]))
      echo "<div class='alerta_erro'><p>O Utilizador nao existe!</h4></div>";
    if(!empty($_GET["erro_pass"]))
      echo "<div class='alerta_erro'><p>A password nao coincide com os dados do utilizador!</h4></div>";
    if(!empty($_GET["logout"]))
      echo "<div class='alerta_successo'><p>Logout Efectuado Com Sucesso!</h4></div>";
    if(!empty($_GET["successo"]))
      echo "<div class='alerta_successo'><p>Utilizador Criado! Por favor volta a Pagina Inicial e fasa o Login de novo!</h4></div>";
    if(!empty($_GET["userApagado"]))
      echo "<div class='alerta_successo'><p>Utilizador Apagado Com Sucesso!</h4></div>";
    if(!empty($_GET["passChange"]))
      echo "<div class='alerta_successo'><p>Password Alterada com sucesso! Por favor volta a Pagina Inicial e fasa o Login de novo!</h4></div>";
  ?>
    <div class="wrapper">
  <div class="form-login">      
    <form method="post" action="php/validarLogin.php" class="login">
    <p><input type="text" name="login" id="login" value="Utilzador" onFocus="clearContents(this);"></p>
  <p><input type="password" name="password" id="password" value="4815162342" onFocus="clearContents(this);"></p>
    <nav>
    <ul class="nav">
    <li class="login-submit">
    <button type="submit" class="login-button">Entrar</button>
    </li>
    <li class="registar-submit">
    <button type="button" class="registar-button" onClick="location.href='formulario_registar.php'" >Registar</button>
    </li>
  </ul>
    </nav>
    </form>
<!-- <p class="recuperar-password"><a href="index.html">Esqeuceu se da sua Password?</a></p> -->
    </div>
    </div>
</div>
</html>