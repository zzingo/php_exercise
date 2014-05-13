<?php

function dibujar_tab() {
    $cont = 0;
    $res = recorrer_dir("mi_Imagen");
    echo "<table border='1px' width='50%' height='10%'> ";

    echo "<tr>";

    foreach ($res as $valor) {
        if ($cont == 4) {
            echo "<tr>";
            $cont = 0;
        }
        echo $valor . "<br>";
        echo "<td>";
        echo "<img src='$valor' width='100%'>";
        echo "</td>";
        $cont++;
    }
    echo "</tr>";
    echo "<tr>
            <td><a href='form.php'>Subir</a></td>
         </tr>";
    echo "</table>";
}
function recorrer_dir($ruta) {
    $array_img = array();
    echo "la ruta es ".$ruta;
    $abrir = opendir($ruta);
    $n = 0;
    while ($elemento = readdir($abrir)) {
        if ($elemento != "." && $elemento != "..") {
            if ($elemento == "desktop.ini") {
                
            } else {
                $array_img[$n] = "mi_Imagen/" . $elemento;
            }
            $n++;
           
        }
    }
    return $array_img;
}

dibujar_tab();
?>