-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2021 a las 18:52:57
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `dni`, `domicilio`, `telefono`, `provincia`, `ciudad`) VALUES
(2, 'María', 'Caseres', 28795468, 'San Martín 596', 3794259483, 'Corrientes', 'Corrientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE IF NOT EXISTS `seguros` (
  `polizaNumero` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_seguro` varchar(10) NOT NULL,
  PRIMARY KEY (`polizaNumero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`polizaNumero`, `tipo_seguro`) VALUES
(2, 'Alta');

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
  `patente` varchar(7) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `anio` int(4) NOT NULL,
  `numeroChasis` varchar(20) NOT NULL,
  `tipo_vehiculo` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `numeroMotor` varchar(15) NOT NULL,
  `destino` varchar(10) NOT NULL,
  `zonaRiesgo` varchar(2) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`patente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`patente`, `marca`, `anio`, `numeroChasis`, `tipo_vehiculo`, `modelo`, `numeroMotor`, `destino`, `zonaRiesgo`, `cliente_id`) VALUES
('EMU410', 'Volswagen', 2004, '9BWCB05X54T130847', 'Sedan', 'Gol Power 1.6 3 ptas', 'UNF285184', 'Particular', 'No', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD CONSTRAINT `seguros_ibfk_1` FOREIGN KEY (`polizaNumero`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
