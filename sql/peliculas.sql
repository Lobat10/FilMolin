-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2018 a las 10:32:30
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `filmmolin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `filmcode` int(11) NOT NULL,
  `filmname` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `description` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `image` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `roomcode` int(11) NOT NULL,
  `timetable` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`filmcode`, `filmname`, `duration`, `description`, `image`, `roomcode`, `timetable`) VALUES
(1, '300', 150, 'Peliculas muy guay', '300', 1, '10:30:00'),
(2, 'Ready Player One', 125, 'aaaaaaaaaa', 'ready', 1, '20:00:00'),
(3, 'Black Panther', 115, 'Pantera negra', 'panther', 1, '22:30:00'),
(4, 'Proyecto Rampage', 107, '\r\nEl primatólogo Davis Okoye (Johnson), un hombre que mantiene las distancias con otras personas, ti', 'rampage', 1, '19:15:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`filmcode`),
  ADD KEY `fk_salas` (`roomcode`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `fk_salas` FOREIGN KEY (`roomcode`) REFERENCES `salas` (`roomcode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
