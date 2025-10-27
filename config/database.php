<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$dbHost = $_ENV['DB_HOST'] ?? 'localhost';
$dbPort = $_ENV['DB_PORT'] ?? '3307';
$dbName = $_ENV['DB_NAME'] ?? '';
$dbUser = $_ENV['DB_USER'] ?? '';
$dbPass = $_ENV['DB_PASS'] ?? '';

// Crear conexion MySQLi orientada a objetos
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName, (int)$dbPort);

// Verificar error
if ($mysqli->connect_errno) {
    die("Error en la conexión MySQLi: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

$mysqli->set_charset('utf8mb4');
