-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2014 a las 18:17:37
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registrov`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE IF NOT EXISTS `colores` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `colores`
--

INSERT INTO `colores` (`Codigo`, `Nombre`) VALUES
(4, 'Anaranjado'),
(6, 'Rojo'),
(7, 'Amarillo'),
(8, 'Gris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`Codigo`, `Nombre`) VALUES
(1, 'Mazda'),
(2, 'Renault'),
(3, 'Kia'),
(4, 'Audi'),
(5, 'Porsh'),
(9, 'masda'),
(10, 'bmw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `Placa` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CodMarca` int(11) NOT NULL,
  `CodColor` int(11) NOT NULL,
  `Referencia` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Modelo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `colindraje` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`Placa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcar la base de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`Placa`, `CodMarca`, `CodColor`, `Referencia`, `Modelo`, `colindraje`) VALUES
('22', 2, 4, '2', '2014', '2'),
('4', 1, 4, '5', '5', '5'),
('88', 2, 4, '88', '99', '99'),
('aa', 1, 4, 'hjk', 'kj', 'kj'),
('n', 0, 4, '15', '2015', '2000'),
('nbg017', 1, 4, '12', '1979', '1200'),
('nbg018', 2, 4, '12', '1979', '1300'),
('OSY21A', 3, 6, '12', '2014', '1200');
