<?php

$nombre = $_POST["nombre"];

function subir($nombre) {
    $error_msg = "";
    $estado = false;
    if (!isset($nombre)) {
        echo "introduce un nombre valido";
    }
    if (empty($_FILES['img']['type'])) {
        $tipo = "";
        $error_msg = "Selecciona una img";
    } else {
        $tipo = explode("/", $_FILES['img']['type']);
        $tipo=$tipo[1];
    }
    if ($tipo == "jpeg" || $tipo == "gif") {
        $estado = true;
    } else {
        $error_msg = "No se admiten fotos " . $tipo;
    }
    if ($estado) {
        $subir = "mi_Imagen/$nombre.jpeg";
        move_uploaded_file($_FILES['img']['tmp_name'], $subir);
        header("Location:index.php");
    } else {
        echo $error_msg;
    }
}

subir($nombre);
?>