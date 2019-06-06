<?php 
include "RealConnect.php";
$today = date("y-m-d");
		$delete=mysql_query("DELETE FROM Evento WHERE DataEvento<'".$today."'");
		if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
		{
		    @mysql_close($connection);
		}
	?>
	