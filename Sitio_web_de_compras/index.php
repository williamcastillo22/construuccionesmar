<?php
include("php/conexion.php");
$resultado = mysqli_query($conexion, "SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Venta de Materiales de Construcción</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>

<header class="header">
    <img src="img/logo.png" alt="Logo de la empresa" class="imglogo">
    <nav class="nav">
        <ul class="nav__menu">
            <li class="nav__item"><a href="index.php" class="nav__link">Inicio</a></li>
            <li class="nav__item"><a href="html/nosotros.html" class="nav__link">Nosotros</a></li>
            <li class="nav__item"><a href="html/contacto.html" class="nav__link">Ubicanos</a></li>
        </ul>
    </nav>
</header>

<main class="main">
    <section class="products">
        <h2 class="products__title">Nuestros Productos</h2>
        <div class="products-grid">
            <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                <article class="producto">
                    <img src="<?php echo $fila['imagen']; ?>" alt="Imagen del producto">
                    <strong><?php echo $fila['titulo']; ?></strong>
                    <p><?php echo $fila['descripcion']; ?></p>
                    <p><strong>Precio:</strong> $<?php echo $fila['precio']; ?></p>
                    <a href="https://wa.me/+524811440849?text=<?php echo urlencode($fila['mensaje_whatsapp'] ?? 'Hola, me interesa este producto'); ?>" class="btn" target="_blank">Consultar por WhatsApp</a>
                </article>
            <?php } ?>
        </div>
    </section>
            </main>
<footer class="footer">
    <div class="footer__social">
        <a href="#" class="footer__link">Facebook</a>
        <a href="#" class="footer__link">Instagram</a>
        <a href="#" class="footer__link">Tik Tok</a>
    </div>
    <p>&copy; 2025 Nuestra Empresa</p>
</footer>
          
</body>
</html>