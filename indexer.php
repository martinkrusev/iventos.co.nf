<?
include "php/updateDBEvento.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>iVentos - Site de Eventos</title>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBg16t7JtkNuNv8IVvMpWkt28IB5phvWW0&sensor=false">
</script>
<script src="JavaScript/googlemaps.js">
</script>
<script>
function clearContents(element) {
  element.value = '';
}
</script>
<link href="css/iVentosCSS.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="load()">
<div class="container">
  <div id="map"></div>
    <?php
      if(!empty($_GET["successo"]))
      echo "<div class='alerta_sucesso'><p>Evento Inserido Com Sucesso!</h4></div>";
      if(!empty($_GET["no_result_pesq"]))
      echo "<div class='alerta_sucesso'><p>Sem Resultados!</h4></div>";
  ?>
    <?php
    include "php/pesquisarEvento.php";
    include "php/SessionCheckComMsg.php";
  ?>
    <div class="wrapper">
  <div class="form-pesq">
    <form action="indexer.php" method="post" class="pesquisarEvento">
    <input type="text" id="pesquisarEvento" name="pesquisarEvento" value="Pesquisar Evento" onClick="clearContents(this);"/>

    </form>
    </div>
    <div class="nav">
    <ul class="ul-nav">
    <li class="Home">
    <button type="button" class="Home-button" onClick="window.location.href='../indexer.php'">Home</button>
    </li>
    <li class="Inserir">
    <button type="button" class="Inserir-button" onClick="window.location.href='../indexer_inserirEvento.php'" >Criar Evento</button>
    </li>
    <li class="User">
    <button type="button" class="User-button" onClick="window.location.href='../indexer_PainelDeUtil.php'" >Painel de Utilizador</button>
    </li>
    <li class="Logout">
    <button type="button" class="Logout-button" onClick="window.location.href='../php/SessionKill.php'" >Logout</button>
    </li>
    </ul>
    </div>
    <div class="footer">
    <p class="footer-info">Website Design por Martin Krusev, Eladio Branco e Daniel Louro</p>
  <p class="footer-info">iVentos, Site de Eventos DDI - Copyright © All Rights Reserved.</p>
    </div>
    </div>
</div>
</body>
</html>
