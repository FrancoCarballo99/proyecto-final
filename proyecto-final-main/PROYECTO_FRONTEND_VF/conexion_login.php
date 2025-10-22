<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "plataforma_streaming";

$conexion = new mysqli($host, $usuario, $clave, $bd,3307);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$correo = $_POST['correo'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM usuarios WHERE email = '$correo' AND password = '$password'";
$resultado = $conexion->query($sql);
var_dump($resultado);
if ($resultado->num_rows > 0) {
    return json_encode(["status"=>"OK"]);
} else {
    echo "ERROR";
}

$conexion->close();
?>