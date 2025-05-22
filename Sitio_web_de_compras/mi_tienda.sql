-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-05-2025 a las 00:06:11
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `mensaje_whatsapp` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `descripcion`, `precio`, `imagen`, `mensaje_whatsapp`) VALUES
(67, 'Cemento', 'Polvo fino que, al mezclarse con agua y agregados, forma el concreto. Es la base para estructuras sólidas.', 200.00, 'img/descarga_3_-01.webp', 'Hola quiero comprar cemento'),
(68, 'Arena', 'Agregado fino utilizado en mezclas de mortero y concreto. También se usa como base o relleno.', 700.00, 'img/images.jpg', 'Hola quiero hacer un pedido de arena'),
(69, 'Grava', 'Piedra triturada de diferentes tamaños. Se mezcla con cemento y arena para formar concreto estructural.', 800.00, 'img/gravaaaaaa_cbb1d563-c376-4dd3-b39e-ee946449f68c.webp', 'Hola quiero ordenar grava'),
(70, 'Ladrillos', 'Piezas de arcilla cocida utilizadas para muros y tabiques. Ofrecen buena resistencia térmica.', 5.00, 'img/LADRILLOROJO.webp', 'Hola quiero ordenar ladrillos'),
(71, 'Bloques de concreto', 'Elementos modulares prefabricados, más grandes que los ladrillos, usados para muros y cerramientos.', 16.00, 'img/1-01-01_534b32f0-e7b7-4279-a3f1-23a409230904.webp', 'Hola quiero ordenar Block'),
(72, 'Varilla', 'Barras de acero utilizadas para reforzar el concreto y resistir fuerzas de tensión.', 180.00, 'img/images (1).jpg', 'Hola quiero ordenar varilla'),
(73, 'Concreto premezclado', 'Mezcla ya lista de cemento, agua, arena y grava. Se usa para colados de losas, cimentaciones y columnas.', 1500.00, 'img/images (2).jpg', 'Hola quiero ordenar concreto'),
(74, 'Madera', 'Material natural usado para estructuras, techos, encofrados o acabados. Muy versátil.', 90.00, 'img/images (3).jpg', 'Hola quiero ordenar Madera'),
(75, 'Yeso', 'Polvo que se mezcla con agua para revestimientos de muros interiores. Endurece rápidamente.', 130.00, 'img/595998_ogpy01500-2.jpg', 'Hola quiero ordenar yeso'),
(76, 'Panel de yeso', 'Placa ligera usada para tablaroca o paredes internas. Rápido de instalar y fácil de cortar.', 250.00, 'img/images (4).jpg', 'Hola quiero ordenar algunos paneles'),
(77, 'Teja', 'Cubiertas para techos que protegen de la lluvia y sol. Pueden ser de asfalto, arcilla, concreto o metal.', 200.00, 'img/images (5).jpg', 'Hola quiero ordenar algunas tejas'),
(78, 'Vidrio', 'Material transparente utilizado en ventanas, puertas, muros y elementos decorativos. Puede ser templado o laminado.', 500.00, 'img/images (6).jpg', 'Hola quiero ordenar vidrio'),
(79, 'Aluminio', 'Metal ligero y resistente a la corrosión. Se usa en estructuras, puertas, ventanas y acabados metálicos.', 150.00, 'img/laminas-de-aluminio-apiladas.webp', 'Hola quiero ordenar aluminio'),
(80, 'Tubo de PVC', 'Plástico rígido y liviano usado para instalaciones hidráulicas y sanitarias. Es resistente y económico.', 60.00, 'img/images (7).jpg', 'Hola quiero ordenar PVC'),
(81, 'Pintura', 'Revestimiento líquido que protege y decora superficies. Se usa en muros, techos y fachadas interiores/exteriores.', 500.00, 'img/VP-0200.blanca1.png', 'Hola quiero ordenar pintura'),
(82, 'Sellador', 'Materiales elásticos aplicados en juntas para evitar filtraciones de agua o aire. Usados en ventanas, baños, cocinas, etc.', 50.00, 'img/selladores-aceiticos.png', 'Hola quiero ordenar sellador'),
(83, 'Tornillos', 'Elementos metálicos que sirven para fijar piezas de madera, metal u otros materiales entre sí.', 30.00, 'img/images (8).jpg', 'Hola quiero ordenar algunos tornillos'),
(84, 'Malla', 'Red de varillas de acero unidas por puntos de soldadura. Se usa para reforzar losas, muros o pisos de concreto.', 400.00, 'img/images (9).jpg', 'Hola quiero ordenar Malla'),
(85, 'Mortero', 'Mezcla lista de cemento, cal y arena. Se usa para pegar ladrillos o recubrir muros.', 120.00, 'img/images (10).jpg', 'Hola quiero ordenar algunos bultos'),
(86, 'Aislante termico', 'Materiales como lana de vidrio o poliestireno expandido que reducen la transmisión de calor y ruido en paredes o techos.', 80.00, 'img/images (11).jpg', 'Hola quiero ordenar aislantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '$2y$10$ThhUE3NDQazJLMJWeHa2i.a2VjKUe8CsAtnJiK156YPKuqujKSy1e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
