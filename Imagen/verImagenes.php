<?php

include "conexion.php";



$consultar=mysql_query("SELECT * FROM imagenes");


echo "<table border='2' width='100%'>
        <tr>
            <th>Imagen</th>
            <th>Texto</th>
            <th>Eliminar</th>
            <th>Cambiar</th>
        
        </tr>
";

while($imagenes=mysql_fetch_array($consultar))
{
    $imagen=$imagenes['imagen'];
    $texto=$imagenes['texto'];
	$idImagen=$imagenes['id'];
	
    echo "<tr>
            
            <td><img src='$imagen' width='150' height='100'></td>
            <td>$texto</td>
            <td><a href='eliminarImagen.php?idImagen=$idImagen'>Eliminar</a></td>
            <td><a href='cambiarImagen.php?idImagen=$idImagen&texto=$texto&imagen=$imagen'>Cambiar</a></td>
        </tr>"  ;    


}

echo "</table>

	<br/><br/>
	  <form method='post' action='insertar.php' enctype='multipart/form-data'>
            <label>Elige Imagen:</label>
            <br/>
            <input type='file' name='imagen'/>
            <br/>
            <label>Descripcion:</label>
            <br/>
            <textarea cols='20' rows='10' name='texto'></textarea>
            <br/>
            <input type='submit' value='Enviar'/>
            
        </form>


";

?>
