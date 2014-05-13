<?php

include "conexion.php";

$ruta="imagenes";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;
$texto=$_POST['texto'];
$id=rand(1,200);


$insertar=mysql_query("INSERT INTO imagenes VALUES('".$id."','".$ruta."','".$texto."')");

if($insertar)
{
    echo "<html>
		<head>
		
		
		</head>
		<body>
			<meta http-equiv='REFRESH' content='0 ; url=verImagenes.php'>
			<script>
			
				alert('Imagen insertada con exito');
			
			</script>
		</body>
    
    
    
    </html>";

}
else
{
	
	echo "<html>
		<head>
		
		
		</head>
		<body>
			<meta http-equiv='REFRESH' content='0 ; url=verImagenes.php'>
			<script>
			
				alert('La insercion Fallo');
			
			</script>
		</body>
    
    
    
    </html>";
}



?>
