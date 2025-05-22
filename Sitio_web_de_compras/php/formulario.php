<?php
session_start();

if (!isset($_SESSION['usuario']) || !isset($_SESSION['acceso_formulario']) || $_SESSION['acceso_formulario'] !== true) {
    header("Location: ../admin/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>

<body>
    <!-- Barra de navegación -->
    <header class="header">
        <div class="header-left">
           
            <img src="../img/logo.png" alt="Logo de la empresa" class="imglogo">
        </div>
        <div class="header-right">
           
            <div class="nav_k">
 <a href="../php/logout.php" class="nav_k">Cerrar sesión</a>
 </div>
        </div>
    </header>
   
    <main class="main-content">
        <h2>Agregar nuevo producto</h2>

        <form action="../php/guardar.php" method="POST" enctype="multipart/form-data">
            <label for="imagen">Imagen del producto:</label>
            <input type="file" name="imagen" required>

            <label for="titulo">Título del producto:</label>
            <input type="text" name="titulo" placeholder="Nombre del producto" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" placeholder="Descripción breve del producto" required></textarea>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" step="0.01" placeholder="Precio del producto" required>

            <label for="mensaje_whatsapp">Mensaje para WhatsApp:</label>
            <textarea name="mensaje_whatsapp" placeholder="Ej: Hola, estoy interesado en este producto..." required></textarea>

            <input type="submit" value="Guardar Producto">
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Nuestra Empresa</p>
    </footer>
</body>
</html>
