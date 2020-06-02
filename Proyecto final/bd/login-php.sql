-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2020 a las 08:04:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login-php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `tipo` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `numSerie` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `calibre` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `tipo`, `marca`, `modelo`, `numSerie`, `calibre`) VALUES
(1, 'Acustica', 'Rogue', 'Blue model', '4v54SV45', 0.9),
(2, 'Electrica', 'Fender', 'Stratocaster', '2030A8', 0.09),
(3, 'Electrica', 'Epiphone', 'Custom Lespaul Ebony', '651v8rs48bdfc', 0),
(4, 'Electrica', 'Epiphone', 'Custom Lespaul Ebony', '651v8rs48bdfknkak', 0),
(5, 'Electrica', 'Epiphone', 'Custom Lespaul Ebony', '651v8rs48bdfojb', 0),
(10, 'ElectroAcustica', 'Taylor', '2', '54f6az4', 0.01),
(11, 'ElectroAcustica', 'Taylor', '2', '54f6a', 0.09),
(12, 'Electrica', 'Epiphone', 'Standard', '4vijs5vs6', 0.09);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `clave`, `fecha_registro`) VALUES
(1, 'Carlos Gonzalez', 'cegc', 'cegc.1999@gmail.com', '1234', '2020-05-24 03:18:19'),
(7, 'Pancho perez', 'pp2', 'panchito@aol.com', '54321', '2020-05-28 04:54:12'),
(8, 'Maria', 'mariamorena5', 'Maria@gmail.com', '9876', '2020-05-28 05:01:28'),
(9, 'Leslie', 'leslicaradecaca', 'Leslie@l.com', '54369', '2020-05-28 05:25:36'),
(10, 'juana', 'rancho1958', 'juanadelrancho@ranch.com', '1958', '2020-05-28 05:27:18'),
(11, 'pp', 'pp89', 'pp@aol.com', '95*856pij', '2020-05-28 05:28:44'),
(12, 'Israel Copado', 'quesito', 'quesito02@aol.com', '54321', '2020-05-29 23:53:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
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
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
