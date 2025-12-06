<?php
$conexion = new mysqli("localhost", "root", "", "santicorpbdd");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Opcional: forzar charset UTF8
$conexion->set_charset("utf8");
?>
