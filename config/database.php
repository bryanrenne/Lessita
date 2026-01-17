<?php

// Configuración de la base de datos
$servername = getenv('DB_HOST') ?: "mysql";
$username = getenv('DB_USER') ?: "root";
$password = getenv('DB_PASSWORD') ?: "root";
$dbname = getenv('DB_NAME') ?: "lessita_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer charset a UTF-8
$conn->set_charset("utf8mb4");

?>
