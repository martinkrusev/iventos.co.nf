<?
include "php/SessionCheckSimples.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>iVentos - Painel de Utilizador</title>
<link href="css/iVentosEditarUserCSS.css" rel="stylesheet" type="text/css" >
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBg16t7JtkNuNv8IVvMpWkt28IB5phvWW0&sensor=false"></script>
<script src="JavaScript/googlemaps.js"></script>
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
    if(!empty($_GET["sucesso"]))
    echo "<div class='alerta_sucesso'>
    <p>Dados Editados Com Successo!</p>
    </div>";
    if(!empty($_GET["erro"]))
    echo "<div class='alerta_erro'>
    <p>Nenhum dado alterado! Por favor introduza dados nas caixas de texto!</p>
    </div>";
  ?>  
    <div class="wrapper">
    <div class="form-editarUser">
    <form action="php/EditarUtilizador.php" method="post">
    <p><label for="PassUser">Mudar Password:</label></p>
    <p>
    <input type="password" id="PassUser" name="PassUser" onFocus="clearContents(this);"/>
    </p>
    <p><label for="PassUser">Mudar Nome:</label></p>
    <p>
    <input type="text" id="NameUser" name="NameUser" onFocus="clearContents(this);"/>
    </p>
    <p><label for="PassUser">Mudar Data de Nascimento:</label></p>
    <p>
    <input type="text" id="DataNascUser" name="DataNascUser" onClick="javascript:NewCssCal ('DataEvento','yyyyMMdd')"/>
    </p>
    <p><label for="PassUser">Mudar Email:</label></p>
    <p>
    <input type="text" id="EmailUser" name="EmailUser" onFocus="clearContents(this);"/>
    </p>
    <nav>
    <ul class="nav">
      <li class="editar-submit">
        <button type="submit" class="EditarUser-button">Editar</button>
      </li>
        <li class="eliminar-submit">
        <button type="button" class="EliminarUser-button" onClick="window.location.href='php/EliminarUtilizador.php'">Apagar Conta</button>
      </li>
        <li class="cancelar-submit">
        <button type="button" class="Cancel-button" onClick="window.location.href='../indexer.php'" >Cancelar</button> 
      </li>
  </ul>
    </nav>
    </form>
    </div>
    </div>
</div>
</body>
</html>
