<?php
    $conexion = mysqli_connect("localhost","root","","proyectoiudc");
    try {
        $vl ="¡Base de datos conectada exitosamente!";
    } catch (Exception $e) {
        $vl = "Error: " . $e->getMessage();
        exit();
    }
?>