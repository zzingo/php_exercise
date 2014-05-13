<?php

echo "<form action='subir.php' method='POST' enctype='multipart/form-data'>
	<label for='id_nombre'>Nombre:</label>
	<input type='text' name='nombre' id='id_nombre'/>
	<br/>
	<input type='file' name='img' id='id_imagen'/>
	<br/>
	<input type='submit' value='Subir'/>
</form>";
?>