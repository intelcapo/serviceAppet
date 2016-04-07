-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2016 a las 13:10:24
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u177329608_appet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE IF NOT EXISTS `lugar` (
  `lugIdInt` int(11) NOT NULL AUTO_INCREMENT,
  `lugId` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `lugNombre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `lugNit` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `lugDireccion` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `lugTelefono` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `lugLatitud` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `lugLongitud` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `lugEstado` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'ACTIVO',
  `lugClasificacion` int(11) NOT NULL,
  PRIMARY KEY (`lugIdInt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE IF NOT EXISTS `mascota` (
  `mId` int(11) NOT NULL AUTO_INCREMENT,
  `usuUsername` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mNombre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mRaza` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mEdad` int(11) NOT NULL,
  `mVacuna` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `mSexo` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `mGusto` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `mUrlFoto` varchar(2000) COLLATE latin1_general_ci NOT NULL,
  `mEstado` varchar(15) COLLATE latin1_general_ci DEFAULT 'ACTIVO',
  PRIMARY KEY (`mId`),
  KEY `fk_usuario` (`usuUsername`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuId` int(11) NOT NULL AUTO_INCREMENT,
  `usuEmail` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `usuNombre` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `usuApellido` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `usuTelefono` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `usuFechaReg` datetime NOT NULL,
  `usuFechaMod` datetime DEFAULT NULL,
  `usuFechaCumple` datetime DEFAULT NULL,
  `usuUsername` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `usuPassword` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `usuUrlFoto` varchar(2000) COLLATE latin1_general_ci DEFAULT NULL,
  `usuEstado` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'ACTIVO',
  `usuTipo` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'ESTANDAR',
  `usuSexo` varchar(15) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`usuId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuId`, `usuEmail`, `usuNombre`, `usuApellido`, `usuTelefono`, `usuFechaReg`, `usuFechaMod`, `usuFechaCumple`, `usuUsername`, `usuPassword`, `usuUrlFoto`, `usuEstado`, `usuTipo`, `usuSexo`) VALUES
(1, '1', '1', '1', '1', '2016-04-07 00:00:00', NULL, NULL, '1', '1', '1', 'ACTIVO', 'ESTANDAR', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
