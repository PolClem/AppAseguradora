-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2021 a las 00:07:17
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aseguradora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `dni` int(10) NOT NULL,
  `domicilio` varchar(40) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `dni`, `domicilio`, `telefono`, `provincia`, `ciudad`) VALUES
(4, 'Pepe', 'Landa', 23458762, '9 de Julio 1233', 3794587423, 'Corrientes', 'Corrientes'),
(7, 'Cata', 'Lejos', 46578961, 'Itati 559', 3794254896, 'Corrientes', 'Corrientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE IF NOT EXISTS `seguros` (
  `polizaNumero` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_seguro` varchar(10) NOT NULL,
  PRIMARY KEY (`polizaNumero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`polizaNumero`, `tipo_seguro`) VALUES
(3, 'Alto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `mail` varchar(80) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `userName`, `password`, `mail`) VALUES
(1, 'Paula', 'abc123', 'clementepaula@gmail.com'),
(2, 'Pepe', '12345678', 'pepe@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `patente` varchar(7) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `anio` int(4) NOT NULL,
  `numeroChasis` varchar(20) NOT NULL,
  `tipo_vehiculo` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `numeroMotor` varchar(15) NOT NULL,
  `destino` varchar(10) NOT NULL,
  `zonaRiesgo` varchar(2) NOT NULL,
  PRIMARY KEY (`id_vehiculo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `patente`, `marca`, `anio`, `numeroChasis`, `tipo_vehiculo`, `modelo`, `numeroMotor`, `destino`, `zonaRiesgo`) VALUES
(3, 'KPL726', 'Chevrolet', 2011, 'AAJ145465SD545', 'Sedan', 'Cruze 4 puertas 1.8', 'ASD12564', 'Particulae', 'No');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
