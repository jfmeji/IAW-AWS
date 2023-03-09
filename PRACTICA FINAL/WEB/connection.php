<?php

// Conexión con la base de datos

$servername = "proyectofinal.cyqw7kzjsvht.us-east-1.rds.amazonaws.com"; //conexion de la bbdd
$username = "admin";
$password = "usuario1";
$bd="anycompany"; //nombrebbdd

// Creo la conexion

$conn = new mysqli($servername, $username, $password, $bd);

// Compruebo que conecta, si no va, salta el mensaje die

if ($conn->connect_error) {
    die("Conexión falla " . $conn->connect_error);
}

?>
