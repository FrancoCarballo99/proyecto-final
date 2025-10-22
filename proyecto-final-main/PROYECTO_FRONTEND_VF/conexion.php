<?php
$host = "localhost";
$usuario = "root";
$clave = ""; // <-- acá vacío, sin espacio ni nada
$bd = "plataforma_streaming";

$conexion = new mysqli($host, $usuario, $clave, $bd,3307);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa";
}
?>
