<?php
$nomeEvento = $_POST['NomeEvento'];
$localEvento =$_POST['LocalEvento'];
$lat =$_POST['lat'];
$lng =$_POST['lng'];
$dataEvento =$_POST['DataEvento'];
$descEvento =$_POST['DescEvento'];

include "RealConnect.php";
if(($nomeEvento != null) && ($localEvento != null)&& ($lat != null)&& ($lng != null)&& ($dataEvento != null)&& ($descEvento != null))
{

  $result = mysql_query("INSERT INTO Evento( NomeEvento,  Morada, lat, lng, DataEvento, DescEvento) VALUES ( '".$nomeEvento."' , '".$localEvento."' , '".$lat."' , '".$lng."', '".$dataEvento."', '".$descEvento."')" );
  
  header('Location: ../indexer.php?successo=1');
  if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
    {
      
        @mysql_close($connection);
    }
}
else
  header('Location: ../indexer_inserirEvento.php?erro=1');
  
  if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
    {
      
        @mysql_close($connection);
    }
?>