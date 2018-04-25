-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2018 a las 06:07:39
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `contrasena` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_usuario`, `nombre`, `apellido`, `cedula`, `direccion`, `tipo`, `contrasena`) VALUES
(1, 'Jose Carlos', 'Rivera Hernandez', '40222191120', '#180 calle Abrahan residencial Antonia Manoguayabo Santo Domingo Oeste', 'admin', '12341234'),
(3, 'Diogenes Emmanuel', 'Ramires Querrero', '48965899525', '#25 calle Ramon residencial Rivera Las Caobas  Santo Domingo Oeste', 'rango1', '12341234'),
(4, 'Fidel Ernesto', 'Rijo Ventura', '40258987654', '#21 Reparto Rosa Las palma Santo Domingo Oeste', 'rango2', '12341234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
