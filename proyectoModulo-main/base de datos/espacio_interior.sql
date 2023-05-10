-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 14:35:46
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `espacio_interior`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_contacto`
--

CREATE TABLE `formulario_contacto` (
  `id` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `asunto` varchar(20) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `formulario_contacto`
--

INSERT INTO `formulario_contacto` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `fecha`) VALUES
(28, 'Juan JosÃ©', 'asa@asa.com', 987654321, 'Prueba del formulari', 'asa', '04/05/23'),
(29, 'Juan JosÃ©', 'asunto4@asunto.com', 11111111, 'prueba definitiva', 'prueba', '04/05/23'),
(30, 'Juan JosÃ©', 'asunto4@asunto.com', 11111111, 'prueba definitiva', 'prueba', '04/05/23'),
(31, 'Juan JosÃ©', 'asunto4@asunto.com', 11111111, 'prueba definitiva', 'prueba', '04/05/23'),
(32, 'Juan JosÃ©', 'asunto4@asunto.com', 11111111, 'prueba definitiva', 'prueba', '04/05/23'),
(33, 'Juan JosÃ©', 'asunto4@asunto.com', 11111111, 'prueba definitiva', 'prueba', '04/05/23'),
(34, 'prueba definitiva', 'pruebadefinitiva@pruebas.com', 0, 'prueba definitiva', 'prueba definitiva del formulario de contacto', '04/05/23'),
(35, 'index', 'index@index.com', 987654321, 'index prueba', 'index prueba', '04/05/23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardar_blog`
--

CREATE TABLE `guardar_blog` (
  `id` int(9) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `guardar_blog`
--

INSERT INTO `guardar_blog` (`id`, `titulo`, `mensaje`, `imagen`, `fecha`) VALUES
(1, 'casa campo', 'casa de campo con vistas', '41_Casa Cascais Exterior 02.webp', '0000-00-00'),
(2, 'casa campo 1', 'casa de campo con vistas al mar', '51_Casa Varanda Terraza 01.webp', '0000-00-00'),
(3, 'casa campo 3', 'casa de campo 3 ', '33_Elviria Baà¸„o Suite.webp', '0000-00-00'),
(4, 'casa campo 3', 'casa de campo 3 ', '33_Elviria Baà¸„o Suite.webp', '0000-00-00'),
(5, 'casa campo 4', 'casa de campo 4', '29_Benalà¸ƒs Salà¸‚n.webp', '2004-05-23'),
(6, 'casa campo 6', 'casa de campo 6', '14_Don Amaro Cocina.webp', '2004-05-23'),
(7, 'casa campo 7', 'casa de campo 7', '22_The Hills 12 Cocina 01.webp', '2004-05-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_pass`
--

CREATE TABLE `usuario_pass` (
  `ID` int(11) NOT NULL,
  `USUARIOS` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_pass`
--

INSERT INTO `usuario_pass` (`ID`, `USUARIOS`, `PASSWORD`) VALUES
(1, 'juan@juan.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario_contacto`
--
ALTER TABLE `formulario_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `guardar_blog`
--
ALTER TABLE `guardar_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_pass`
--
ALTER TABLE `usuario_pass`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario_contacto`
--
ALTER TABLE `formulario_contacto`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `guardar_blog`
--
ALTER TABLE `guardar_blog`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario_pass`
--
ALTER TABLE `usuario_pass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
