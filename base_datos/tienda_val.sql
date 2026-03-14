-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2026 a las 07:01:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_val`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `texto_comentario` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_producto`, `nombre_usuario`, `texto_comentario`, `fecha`) VALUES
(16, 2, 'juan', 'prueba 1', '2026-03-13 03:04:52'),
(18, 5, 'juan', 'priueba 2\r\n', '2026-03-13 03:07:30'),
(19, 1, 'mao', 'prueba 3\r\n', '2026-03-14 00:36:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `imagen`, `marca`, `categoria`) VALUES
(1, 'Acondicionador con Ceramidas', 40000, '¡La hidratación en tu cabello comienza en la ducha!\r\nAcondicionador con ceramidas que ayudan al cabello a mantenerlo hidratado evitando que pierda agua.\r\nEs el complemento perfecto de tu rutina capilar, ayuda a que mantengas tu cabello hidratado y sedoso.\r\nNueva fragancia: Tropical con notas de coco y piña.', NULL, 'Kaba', 'Dañado'),
(2, 'Acondicionador con Romero', 40000, 'Perfecto para el crecimiento y brillo soñado para tu cabello\r\nHidrata y estimula el cabello, contiene Ácido hialurónico, delicioso aroma y refrescante\r\n                    500ml', NULL, 'Anyeluz', 'Todo tipo'),
(3, 'Acondicionador Kerat Ultra Force 300ml', 39900, 'Recupera la hidratación y suavidad del cabello. Su combinación de tres ingredientes emolientes: aceite de argán, macadamia y pracaxi facilitan el peinado del cabello seco o húmedo; aumenta el brillo, brinda nutrición profunda y protección térmica a la fibra capilar', NULL, 'Recamier', 'Dañado'),
(4, 'Acondicionador Reparador SOS 450ml', 80000, NULL, '', 'Kaba', 'Dañado'),
(5, 'Biomascarilla Capilar', 45000, '¡Crecimiento del cabello clínicamente demostrado!\r\nBiomascarilla capilar que estimula el crecimiento de tu cabello, ayuda a disminuir la caída y repara la fibra capilar.\r\nNo tiene ninguna contraindicación en personas embarazadas o bebés.\r\nCuenta con un estudio clínico que certifica que estimula el crecimiento del cabello con su uso constante.', NULL, 'Kaba', 'Seco / Dañado'),
(6, 'Bioterapia Capilar con Romero y Bioelixir', 43000, NULL, '', 'Anyeluz', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'tania', 'taniatiendaval@gmail.com', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
