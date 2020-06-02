-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2020 a las 08:05:29
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
