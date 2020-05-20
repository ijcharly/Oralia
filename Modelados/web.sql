-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2019 a las 17:09:15
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `username`, `password`) VALUES
(1, 'juan', 'juan', 'j'),
(2, 'Fernando', 'holaF', '1'),
(3, 'juan', 'Luis12', 'l'),
(4, 'Ivan', 'hola', 'hola'),
(5, 'juan', 'Luis12', 'hola'),
(6, 'juan', 'Luis12', 'hola'),
(7, 'Francisco', 'francias', 'f'),
(8, 'Ivan Uresti', 'taly', 'tra'),
(9, 'juan perez', 'jp', '67'),
(10, 'Sergio ', 'Serg', '123'),
(11, 'admin', 'admin', 'admin'),
(12, 'Francisco', 'Pancho1', '123'),
(13, 'gustavo', 'bymejia99', '12345'),
(14, 'Laura del bosque', 'Laura1', '123'),
(15, 'juan', 'Luis12', '123'),
(16, 'Luis Fernando Mendez Montoya', 'lfmm', '12345'),
(17, 'Luis Fernando Mendez', 'lfmm1', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
