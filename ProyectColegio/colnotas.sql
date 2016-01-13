-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-10-2014 a las 05:08:12
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `colnotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellido` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=48 ;

--
-- Volcar la base de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `Apellido`, `edad`, `identificacion`) VALUES
(1, 'Jonatan', 'Javier', 21, '1073240664'),
(12, 'Edisson', 'velandia', 24, '1073240665'),
(13, 'Edisson', 'velandia', 24, '1073240665'),
(14, 'Edisson', '', 0, ''),
(15, '', '', 0, ''),
(16, '', '', 0, ''),
(17, '', '', 0, ''),
(18, '', '', 0, ''),
(19, '', '', 0, ''),
(20, '', '', 0, ''),
(21, '', '', 0, ''),
(22, '', '', 0, ''),
(23, '', '', 0, ''),
(24, '', '', 0, ''),
(25, '', '', 0, ''),
(26, '', '', 0, ''),
(27, 'Edisson', 'w', 21, '134'),
(28, 'jja', 's', 43, '4321'),
(29, 'jajajaj', 'koko', 21, 'jj'),
(30, 'kokoko', 'kaka', 99, '99'),
(31, 'jj', 'j', 0, 'j'),
(32, 'j', 'j', 0, 'j'),
(33, 'javier', '', 67, ''),
(34, 'h', 'h', 0, 'h'),
(35, '', '', 0, ''),
(36, '', '', 0, ''),
(37, 'Fredy ', 'Castillo', 27, '45678'),
(38, 'javier', 't', 0, 't'),
(39, 'n', 'n', 7, 'n'),
(40, '', '', 0, ''),
(41, '', '', 0, ''),
(42, 'h', 'h', 0, 'h'),
(43, 'l', 'l', 0, 'l'),
(44, 'm', 'm', 0, 'm'),
(45, 'Fredy ', 'f', 0, 'f'),
(46, 'Jonatan', 'zambrano', 21, '5555555'),
(47, 'Alberto', 'Castillo', 26, '444444');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `semestre` varchar(3) COLLATE utf8mb4_spanish_ci NOT NULL,
  `horaInicio` int(11) NOT NULL,
  `horaFinal` int(11) NOT NULL,
  `dia` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=51 ;

--
-- Volcar la base de datos para la tabla `horario`
--

INSERT INTO `horario` (`ID`, `materia`, `semestre`, `horaInicio`, `horaFinal`, `dia`) VALUES
(35, 'fisica1', 'I', 7, 9, 'Lunes'),
(36, 'matemati 1', 'I', 7, 10, 'Martes'),
(37, 'logica', 'I', 7, 9, 'Miercoles'),
(38, 'algebra lineal', 'I', 7, 9, 'Jueves'),
(39, 'fisica 2', 'II', 7, 10, 'Martes'),
(40, 'matematicas 2', 'II', 7, 10, 'Miercoles'),
(41, 'programacion', 'II', 7, 10, 'Jueves'),
(42, 'quimica', 'II', 7, 9, 'Viernes'),
(43, 'fund electronica', 'III', 7, 10, 'Lunes'),
(44, 'programacion2', 'III', 7, 10, 'Martes'),
(45, 'intro bd', 'III', 7, 9, 'Jueves'),
(46, 'electiva 1', 'III', 7, 9, 'Viernes'),
(47, 'teoria control', 'IV', 7, 9, 'Lunes'),
(48, 'sistemas operativos', 'IV', 7, 9, 'Miercoles'),
(49, 'ecuacion diferencial', 'IV', 7, 10, 'Jueves'),
(50, 'Calculo Vectorial', 'IV', 7, 10, 'Viernes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarioestudiantes`
--

CREATE TABLE IF NOT EXISTS `horarioestudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `identificacion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia1` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia2` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia3` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia4` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia5` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia6` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=22 ;

--
-- Volcar la base de datos para la tabla `horarioestudiantes`
--

INSERT INTO `horarioestudiantes` (`id`, `nombre`, `apellido`, `identificacion`, `materia1`, `materia2`, `materia3`, `materia4`, `materia5`, `materia6`) VALUES
(20, 'Jonatan', 'zambrano', '5555555', 'fisica1', 'programacion2', 'Calculo Vectorial', '', '', ''),
(21, 'Alberto', 'Castillo', '444444', 'logica', 'programacion', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `intensidad` int(11) NOT NULL,
  `semestre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=40 ;

--
-- Volcar la base de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`, `intensidad`, `semestre`) VALUES
(24, 'fisica1', 2, 'I'),
(25, 'matemati 1', 3, 'I'),
(26, 'logica', 2, 'I'),
(27, 'algebra lineal', 2, 'I'),
(28, 'fisica 2', 3, 'II'),
(29, 'matematicas 2', 3, 'II'),
(30, 'programacion', 3, 'II'),
(31, 'quimica', 2, 'II'),
(32, 'fund electronica', 3, 'III'),
(33, 'programacion2', 3, 'III'),
(34, 'intro bd', 2, 'III'),
(35, 'electiva 1', 2, 'III'),
(36, 'teoria control', 2, 'IV'),
(37, 'sistemas operativos', 2, 'IV'),
(38, 'ecuacion diferencial', 3, 'IV'),
(39, 'Calculo Vectorial', 3, 'IV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semestre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`id`, `semestre`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `estado` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `user`, `password`, `estado`, `tipo`) VALUES
(1, 'pedro', 'perez', 'pperez', '123456', 1, 1),
(2, 'sandra', 'cardenas', 'scardenas', '123456', 1, 2);
