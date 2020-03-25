-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-03-2020 a las 04:19:57
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `streetrv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `comentario` varchar(600) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_contacto`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `email`, `comentario`, `fecha`) VALUES
(1, 'Ulises Resendiz', 'ulises.resendiz.r@outlook.com', 'Creo que el proyecto esta muy bien', '2020-03-24 04:42:18'),
(2, 'Antonio Torres', 'antonio@gmail.com', 'Al parecer el proyecto esta incompleto', '2020-03-24 04:47:28'),
(4, 'Antonio Resendiz', 'tonyrdz804@gmail.com', 'Grandioso game, muy divertido', '2020-03-24 05:48:04'),
(6, 'Ulises ', 'ulises@gmail.com', 'El proyecto ofrece grandes cualidades de diversion ', '2020-03-24 06:17:38'),
(8, 'Jose Perez', 'jperez@gmai.com', 'Creo que el proyecto ofrece grandes posibilidades de diversion y entretenimiento', '2020-03-24 20:57:41'),
(19, 'Rodrigo Prieto', 'rodrigop@gmail.com', 'El proyecto ofrece una experiencia agradable ', '2020-03-24 22:12:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
