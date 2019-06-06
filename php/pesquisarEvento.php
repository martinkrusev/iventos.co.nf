<?php
$pesquisa=$_POST['pesquisarEvento'];

include "RealConnect.php";
if($pesquisa != "")
{
  $result = mysql_query("Select * FROM Evento WHERE NomeEvento LIKE '%".$pesquisa."%'");
  if (!$result) {
    header('Location: ../indexer.php?no_result_pesq=1');
  }
  else
  while ($row = mysql_fetch_array($result)) {
  echo "<div class='Resultado'>
      <ul class='ul_Resultado'>
      <li>$row[NomeEvento]</li> 
      <li>$row[Morada]</li> 
      <li>$row[DataEvento]</li>
      </ul>
    </div>";
  }
  
  if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
    {
      
        @mysql_close($connection);
    }
    
}
  ?>
  