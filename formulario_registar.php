<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registar iVentos</title>
<link href="css/iVentosRegistarCSS.css" rel="stylesheet" type="text/css">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBg16t7JtkNuNv8IVvMpWkt28IB5phvWW0&sensor=false">
</script>
<script src="JavaScript/googlemapsLogin.js"></script>
<script>
function clearContents(element) {
  element.value = '';
}
</script>
<script src="JavaScript/datetimepicker_css.js"></script>
</head>
<body onLoad="load()">
<div class="container">
  <div id="map"></div>
    <?php
    if(!empty($_GET["erro"]))
    echo "<div class='alerta_erro'><p>Por favor preencha todos os campos!</h4></div>";
    if(!empty($_GET["erro_userexist"]))
    echo "<div class='alerta_erro'><p>Este Username/E-mail ja esta a ser utilizado!</h4></div>";
  ?> 
    <div class="wrapper">
  <div class="form-registo">       
    <form action="php/InserirUser.php" method="post" class="registar">
    <p><input type="text" id="UserLogin" name="UserLogin" value="Username" onFocus="clearContents(this);"/></p>
    <p><input type="password" id="UserPass" name="UserPass" value="Password" onFocus="clearContents(this);"/></p>
    <p><input type="text" id="UserName" name="UserName" value="Nome Real" onFocus="clearContents(this);"/></p>
    <p><input type="text" id="UserDNasc" name="UserDNasc" value="Data de Nascimento" onFocus="javascript:NewCssCal ('UserDNasc','yyyyMMdd')"/></p>
    <p><input type="text" id="UserEmail" name="UserEmail" value="E-Mail" onFocus="clearContents(this);"/> </p>
    <nav>
    <ul class="nav">
    <li class="registar-submit"><button type="submit" class="registar-button">Registar</button></li>
    <li class="cancelar-submit"><button type="button" class="cancel-button" onClick="location.href='index.php'" >Cancelar</button></li>
  </ul>
    </nav>
    </form>
    </div>
    </div>
</div>
</html>