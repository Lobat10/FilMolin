-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2018 a las 16:46:06
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
-- Base de datos: `filmolin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `filmcode` int(11) NOT NULL,
  `filmname` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `description` varchar(1000) COLLATE latin1_spanish_ci NOT NULL,
  `image` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`filmcode`, `filmname`, `duration`, `description`, `image`) VALUES
(1, '300', 150, 'Peliculas muy guay', '300'),
(2, 'Ready Player One', 125, 'aaaaaaaaaa', 'ready'),
(3, 'Black Panther', 115, 'Pantera negra', 'panther'),
(4, 'Proyecto Rampage', 107, '\r\nEl primatólogo Davis Okoye (Johnson), un hombre que mantiene las distancias con otras personas, ti', 'rampage'),
(5, 'Campeones', 124, 'Marco es un tipo sin demasiado optimismo que, por vicisitudes de la vida, acaba entrenando a un equipo de baloncesto formado por chicos con discapacidad. A regañadientes comienza la tarea pero, lo que comienza siendo un trabajo forzado, acaba ayudándole a salir de su crisis existencial.', 'campeones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `roomcode` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `image` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`roomcode`, `capacity`, `image`) VALUES
(1, 100, 'salagrande.jpg'),
(2, 80, 'salamediana.jpg'),
(3, 50, 'salapequeña.jpg'),
(4, 50, 'salapequeña.jpg'),
(5, 80, 'salamediana.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `filmcode` int(11) NOT NULL,
  `roomcode` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `date` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`filmcode`, `roomcode`, `timetable`, `date`) VALUES
(1, 1, '20:30:00', '2018-04-24'),
(1, 2, '18:00:00', '2018-04-24'),
(1, 3, '22:00:00', '2018-04-24'),
(5, 5, '22:00:00', '2018-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`login`, `nombre`, `password`, `descripcion`, `admin`) VALUES
('admin', 'Administrador/es', '$2y$10$e.vZRH3ccyJhGBdtTNpS..zUsqAGD63WOKR05.WycFj2QANn0g9xG', 'Young developer', 1),
('prueba', 'prueba', '$2y$10$jU9.1XILH454BT9IypLbSOUEXXNMvBzgAM5WUkLNuVfY.skmAcAuS', 'prueba', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`filmcode`);

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
  ADD KEY `sesionesSalasFK` (`roomcode`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesionesPeliculasFK` FOREIGN KEY (`filmcode`) REFERENCES `peliculas` (`filmcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sesionesSalasFK` FOREIGN KEY (`roomcode`) REFERENCES `salas` (`roomcode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
