-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2015 a las 21:30:08
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `twitter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `comentarioId` int(11) NOT NULL AUTO_INCREMENT,
  `tweet` varchar(140) COLLATE utf8_bin NOT NULL,
  `usuarioID` int(12) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`comentarioId`),
  KEY `usuarioID` (`usuarioID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`comentarioId`, `tweet`, `usuarioID`, `fecha`) VALUES
(11, 'envio mi tercer tweet', 1, '2015-07-10 11:51:04'),
(12, 'envio cuarto comentario', 1, '2015-07-10 11:56:18'),
(13, 'envio quinto tweet', 1, '2015-07-10 11:57:51'),
(22, 'sad', 5, '2015-07-10 12:17:45'),
(23, 'asd', 5, '2015-07-10 12:17:47'),
(24, 'hola hoy es un lindo dia', 5, '2015-07-10 12:22:31'),
(25, 'tengo hambreeeeee....!!!', 7, '2015-07-10 13:13:41'),
(26, 'que bueno esta este TWIIITEEEET!!!', 1, '2015-07-10 14:19:36'),
(27, 'hola que tallll', 1, '2015-07-10 15:02:22'),
(29, 'hola como andan??', 1, '2015-07-13 10:44:37'),
(30, 'Hola cómo andas?\n\nEstuve revisando tu TP. Me gusta como esta quedando en líneas generales. Veo que tiraste bastante código JS! Entiendo e', 1, '2015-07-13 12:15:12'),
(31, 'hola a todos me hice un twitter !! esta muy buenoo...', 15, '2015-07-14 14:02:01'),
(32, 'les gusta mi avatar??', 15, '2015-07-14 14:04:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `imagenID` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(150) COLLATE utf8_bin NOT NULL,
  `file_name` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`imagenID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuarioID` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCompleto` varchar(150) COLLATE utf8_bin NOT NULL,
  `mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(16) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(12) COLLATE utf8_bin NOT NULL,
  `userName` varchar(12) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`usuarioID`),
  UNIQUE KEY `userName` (`userName`),
  KEY `imagen` (`imagen`),
  KEY `imagen_2` (`imagen`),
  KEY `imagen_3` (`imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarioID`, `nombreCompleto`, `mail`, `password`, `telefono`, `userName`, `imagen`) VALUES
(1, 'Nicolas Baduel', 'nikobm@hotmail.com', 'nmb123', '42220113', 'nikobm', 'files/1/1712389.jpg'),
(3, 'Juan Gimenez', 'juangimenz@hotmail.com', 'juan1234', '42220110', 'JuanGi', ''),
(4, 'pepe', 'pepe@pepep.com', 'pepe123', '1233434', 'Peerepe', ''),
(5, 'Gaston Campanella', 'GastonCampanella@hotmail.com', 'gaston12', '', 'Campang', 'files/5/EnanoPorongon.jpg'),
(7, 'Gabriel Ferreira', 'gabriel@hotmail.com', 'gabi123', '', 'gif', ''),
(8, 'Roberto Pereira', 'roberto@hotmail.com', 'roberto1', '', 'roberto18', ''),
(14, 'Nicolas Sanchez', 'nikoS@hotmail.com', 'nikos123', '', 'NikoS', ''),
(15, 'nuevoUser', 'NuevoUser@hotmail.com', 'nuevouser', '42221111', 'UserTest', 'files/15/Agumon4.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
