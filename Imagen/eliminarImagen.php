<?php

$idImagen=$_GET['idImagen'];

include "conexion.php";

$eliminar=mysql_query("DELETE FROM imagenes WHERE id='".$idImagen."'");


if ($eliminar)
{
	echo "
	<html>
		<head>
			<meta http-equiv='REFRESH' content='0 ; url=verImagenes.php'>
			<script >
				alert('Eliminada con exito!!!');
			</script>
		</head>
	
	</html>
	
	";
	
	
}

else
{
	
	echo "
	<html>
		<head>
			<meta http-equiv='REFRESH' content='0 ; url=verImagenes.php'>
			<script >
				alert('No pudo ser eliminada');
			</script>
		</head>
	
	</html>
	
	";
	
}




?>
