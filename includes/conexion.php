<?php
$conex = mysqli_connect("localhost", "root", "", "formulario");

if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>