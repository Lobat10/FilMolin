-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2018 a las 11:46:52
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
  `roomcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`filmcode`, `filmname`, `duration`, `description`, `image`, `roomcode`) VALUES
(1, '300', 150, 'Peliculas muy guay', '300', 1),
(2, 'Ready Player One', 125, 'aaaaaaaaaa', 'ready', 1),
(3, 'Black Panther', 115, 'Pantera negra', 'panther', 1),
(4, 'Proyecto Rampage', 107, '\r\nEl primatólogo Davis Okoye (Johnson), un hombre que mantiene las distancias con otras personas, ti', 'rampage', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `roomcode` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `image` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`roomcode`, `capacity`, `image`) VALUES
(1, 100, 'salagrande.jpsg'),
(2, 80, 'salamediana.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `filmcode` int(11) NOT NULL,
  `roomcode` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`filmcode`, `roomcode`, `timetable`, `date`) VALUES
(1, 1, '13:30:00', '2018-04-28'),
(1, 2, '20:00:00', '2018-04-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`login`, `name`, `password`, `description`, `admin`) VALUES
('admin', 'Admin Admin', '$2y$10$UyfUbs7a5m1YXnLFOOPXT.Czd8J.6GS1vAjcgRrj6ap3a20s2v3Rq', 'Youngs Developers', 1);

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
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`roomcode`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`filmcode`,`roomcode`),
  ADD KEY `salas_foreigkey` (`roomcode`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `fk_salas` FOREIGN KEY (`roomcode`) REFERENCES `salas` (`roomcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `fk_pelis` FOREIGN KEY (`filmcode`) REFERENCES `peliculas` (`filmcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salas_foreigkey` FOREIGN KEY (`roomcode`) REFERENCES `salas` (`roomcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
