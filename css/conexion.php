<?php

$_SERVER= 'localhost';
$user='root';
$PASSWORD = '';
$DATABASE = 'tienda_laholandesa';

$conexion = new mysqli($_SERVER,$user,$PASSWORD,$DATABASE);

if ($conexion->connect_errno) {
    die("conexion fallida".$conexion->connect_errno);
    
} else {
    echo"conectado";
}

?>
