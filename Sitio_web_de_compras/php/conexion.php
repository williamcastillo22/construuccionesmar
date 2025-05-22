<?php
$host = "localhost";    
$usuario = "root";        
$clave = "";              
$base_de_datos = "mi_tienda";  

$conexion = mysqli_connect($host, $usuario, $clave, $base_de_datos);

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
