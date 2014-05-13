<?php
    $letras='TRWAGMYFPDXBNJZSQVHLCKE';
    $dni=$_GET['dni'];
    $indice=intval($_GET['dni'])%23;
    $letra=$letras[$indice];
    echo "<p>La letra del dni $dni es $letra";
?>