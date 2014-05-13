<?php
if(!isset($_REQUEST['dni'])){
    $valor="0";
}else{
    $valor=$_REQUEST['dni'];
}
echo " <a href='eje1.php?dni=$valor'>Enviar</a>";
?>
