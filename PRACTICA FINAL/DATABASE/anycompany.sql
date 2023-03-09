-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: proyectofinal.cyqw7kzjsvht.us-east-1.rds.amazonaws.com:3306
-- Tiempo de generación: 09-03-2023 a las 00:01:11
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anycompany`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `numserie` varchar(9) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `localidad` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`numserie`, `provincia`, `localidad`, `direccion`) VALUES
('123456789', 'hjdsgj', 'kjhkjhjh', 'lkhjkljhkl'),
('234567891', 'hjaghj', 'kjhkjhl', 'kljhklj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediciones`
--

CREATE TABLE `mediciones` (
  `idnumserie` varchar(9) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `mediciones`
--

INSERT INTO `mediciones` (`idnumserie`, `fecha`, `hora`) VALUES
('123456789', '2023-02-20', '20:00:00'),
('123456789', '2015-11-25', '11:11:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`numserie`);

--
-- Indices de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD KEY `fk_idnumserie` (`idnumserie`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD CONSTRAINT `fk_idnumserie` FOREIGN KEY (`idnumserie`) REFERENCES `dispositivos` (`numserie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
