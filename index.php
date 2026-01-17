<?php
require_once 'config/database.php';

// Prueba de conexión
echo "<h1>Lessita - Panel de Control</h1>";

if ($conn->connect_error) {
    echo "<p style='color: red;'>❌ Error de conexión: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color: green;'>✅ Conexión a MySQL exitosa</p>";
    echo "<p>Base de datos: " . $conn->real_escape_string($dbname) . "</p>";
    echo "<p>Host: " . $conn->real_escape_string($servername) . "</p>";
}

$conn->close();

echo "Hola Mundo!";
?>
