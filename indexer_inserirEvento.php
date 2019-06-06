<?
include "php/SessionCheckSimples.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>iVentos - Inserir Evento</title>
<link href="css/iVentosInserirEventoCSS.css" rel="stylesheet" type="text/css" >
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBg16t7JtkNuNv8IVvMpWkt28IB5phvWW0&sensor=false"></script>
<script src="JavaScript/googlemapsListener.js"></script>
<script src="JavaScript/datetimepicker_css.js"></script>
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
    echo "<div class='alerta_erro'>
    <p>Por favor preencha todos os campos!
    Para inserir a longitude e a latitude
    basta clicar no mapa!</p>
    </div>";
  ?>  
    <div class="wrapper">
    <div class="form-inserirEvento">
    <form action="php/InserirEvento.php" method="post">
    <p>
    <input type="text" id="NomeEvento" name="NomeEvento" value="Nome do Evento" onFocus="clearContents(this);"/>
    </p>
    <p>
    <input type="text" id="LocalEvento" name="LocalEvento" value="Local do Evento" onFocus="clearContents(this);"/>
    </p>
    <p>
    <input type="text" id="lat" name="lat" value="Latitude" /><input type="text" id="lng" name="lng" value="Longitude"/>
    </p>
    <p>
    <input type="text" id="DataEvento" name="DataEvento" onClick="javascript:NewCssCal ('DataEvento','yyyyMMdd')" value="Data do Evento"/>
    </p>
    <p>
    <input type="text" id="DescEvento" name="DescEvento" value="Descricao do Evento" onFocus="clearContents(this);"/>
    </p>
    <nav>
    <ul class="nav">
      <li class="criarEvento-submit">
        <button type="submit" class="CriarEvento-button">Criar Evento</button>
      </li>
        <li class="Cancel-submit">
        <button type="button" class="Cancel-button" onClick="window.location.href='../indexer.php'" >Cancel</button> 
      </li>
  </ul>
    </nav>
    </form>
    </div>
    </div>
</div>
</body>
</html>
