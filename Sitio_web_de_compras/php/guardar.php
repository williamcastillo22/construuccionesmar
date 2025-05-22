<?php
include("conexion.php");

$titulo            = $_POST['titulo'];
$descripcion       = $_POST['descripcion'];
$precio            = $_POST['precio'];
$mensaje_whatsapp  = $_POST['mensaje_whatsapp'];

$imagen_nombre = $_FILES['imagen']['name'];
$imagen_tmp    = $_FILES['imagen']['tmp_name'];

$ruta_imagen = "../img/" . $imagen_nombre;
$ruta_imagen_bd = "img/" . $imagen_nombre;

if (move_uploaded_file($imagen_tmp, $ruta_imagen)) {
    $sql = "INSERT INTO productos 
            (titulo, descripcion, precio, imagen, mensaje_whatsapp)
            VALUES 
            ('$titulo', '$descripcion', '$precio', '$ruta_imagen_bd', '$mensaje_whatsapp')";

    if (mysqli_query($conexion, $sql)) {
        header("Location: ../php/formulario.php");
        exit();
    } else {
        echo "Error al guardar en BD: " . mysqli_error($conexion);
    }
} else {
    echo "Error al mover la imagen.";
}
?>


