<?php

$host = "localhost"; // o la IP de tu servidor MySQL
$user = "root";
$password = "";
$database = "apptask";

try {

    // Crear la conexión con PDO
    $conection = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    // Establecer el modo de error de PDO a excepción
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Conexión fallida: " . $e->getMessage();

}
?>