-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-05-2018 a las 09:04:13
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id5676343_filmolin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientosgrande`
--

CREATE TABLE `asientosgrande` (
  `roomcode` int(11) NOT NULL,
  `fila` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asientosgrande`
--

INSERT INTO `asientosgrande` (`roomcode`, `fila`, `columna`, `timetable`, `taken`) VALUES
(1, 1, 1, '18:00:00', 0),
(1, 1, 2, '18:00:00', 0),
(1, 1, 3, '18:00:00', 0),
(1, 1, 4, '18:00:00', 0),
(1, 1, 5, '18:00:00', 0),
(1, 1, 6, '18:00:00', 0),
(1, 1, 7, '18:00:00', 0),
(1, 1, 8, '18:00:00', 0),
(1, 1, 9, '18:00:00', 0),
(1, 1, 10, '18:00:00', 0),
(1, 2, 1, '18:00:00', 0),
(1, 2, 2, '18:00:00', 0),
(1, 2, 3, '18:00:00', 0),
(1, 2, 4, '18:00:00', 0),
(1, 2, 5, '18:00:00', 0),
(1, 2, 6, '18:00:00', 0),
(1, 2, 7, '18:00:00', 0),
(1, 2, 8, '18:00:00', 0),
(1, 2, 9, '18:00:00', 0),
(1, 2, 10, '18:00:00', 0),
(1, 3, 1, '18:00:00', 0),
(1, 3, 2, '18:00:00', 0),
(1, 3, 3, '18:00:00', 0),
(1, 3, 4, '18:00:00', 0),
(1, 3, 5, '18:00:00', 0),
(1, 3, 6, '18:00:00', 0),
(1, 3, 7, '18:00:00', 0),
(1, 3, 8, '18:00:00', 0),
(1, 3, 9, '18:00:00', 0),
(1, 3, 10, '18:00:00', 0),
(1, 4, 1, '18:00:00', 0),
(1, 4, 2, '18:00:00', 0),
(1, 4, 3, '18:00:00', 0),
(1, 4, 4, '18:00:00', 0),
(1, 4, 5, '18:00:00', 0),
(1, 4, 6, '18:00:00', 0),
(1, 4, 7, '18:00:00', 0),
(1, 4, 8, '18:00:00', 0),
(1, 4, 9, '18:00:00', 0),
(1, 4, 10, '18:00:00', 0),
(1, 5, 1, '18:00:00', 0),
(1, 5, 2, '18:00:00', 0),
(1, 5, 3, '18:00:00', 0),
(1, 5, 4, '18:00:00', 0),
(1, 5, 5, '18:00:00', 0),
(1, 5, 6, '18:00:00', 0),
(1, 5, 7, '18:00:00', 0),
(1, 5, 8, '18:00:00', 0),
(1, 5, 9, '18:00:00', 0),
(1, 5, 10, '18:00:00', 0),
(1, 6, 1, '18:00:00', 0),
(1, 6, 2, '18:00:00', 0),
(1, 6, 3, '18:00:00', 0),
(1, 6, 4, '18:00:00', 0),
(1, 6, 5, '18:00:00', 0),
(1, 6, 6, '18:00:00', 0),
(1, 6, 7, '18:00:00', 0),
(1, 6, 8, '18:00:00', 0),
(1, 6, 9, '18:00:00', 0),
(1, 6, 10, '18:00:00', 0),
(1, 7, 1, '18:00:00', 0),
(1, 7, 2, '18:00:00', 0),
(1, 7, 3, '18:00:00', 0),
(1, 7, 4, '18:00:00', 0),
(1, 7, 5, '18:00:00', 0),
(1, 7, 6, '18:00:00', 0),
(1, 7, 7, '18:00:00', 0),
(1, 7, 8, '18:00:00', 0),
(1, 7, 9, '18:00:00', 0),
(1, 7, 10, '18:00:00', 0),
(1, 8, 1, '18:00:00', 0),
(1, 8, 2, '18:00:00', 0),
(1, 8, 3, '18:00:00', 0),
(1, 8, 4, '18:00:00', 0),
(1, 8, 5, '18:00:00', 0),
(1, 8, 6, '18:00:00', 0),
(1, 8, 7, '18:00:00', 0),
(1, 8, 8, '18:00:00', 0),
(1, 8, 9, '18:00:00', 0),
(1, 8, 10, '18:00:00', 0),
(1, 9, 1, '18:00:00', 0),
(1, 9, 2, '18:00:00', 0),
(1, 9, 3, '18:00:00', 0),
(1, 9, 4, '18:00:00', 0),
(1, 9, 5, '18:00:00', 0),
(1, 9, 6, '18:00:00', 0),
(1, 9, 7, '18:00:00', 0),
(1, 9, 8, '18:00:00', 0),
(1, 9, 9, '18:00:00', 0),
(1, 9, 10, '18:00:00', 0),
(1, 10, 1, '18:00:00', 0),
(1, 10, 2, '18:00:00', 0),
(1, 10, 3, '18:00:00', 0),
(1, 10, 4, '18:00:00', 0),
(1, 10, 5, '18:00:00', 0),
(1, 10, 6, '18:00:00', 0),
(1, 10, 7, '18:00:00', 0),
(1, 10, 8, '18:00:00', 0),
(1, 10, 9, '18:00:00', 0),
(1, 10, 10, '18:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientosmediana`
--

CREATE TABLE `asientosmediana` (
  `roomcode` int(11) NOT NULL,
  `fila` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asientosmediana`
--

INSERT INTO `asientosmediana` (`roomcode`, `fila`, `columna`, `timetable`, `taken`) VALUES
(2, 1, 1, '20:00:00', 0),
(2, 1, 2, '20:00:00', 0),
(2, 1, 3, '20:00:00', 0),
(2, 1, 4, '20:00:00', 0),
(2, 1, 5, '20:00:00', 0),
(2, 1, 6, '20:00:00', 0),
(2, 1, 7, '20:00:00', 0),
(2, 1, 8, '20:00:00', 0),
(2, 1, 9, '20:00:00', 0),
(2, 1, 10, '20:00:00', 0),
(2, 2, 1, '20:00:00', 0),
(2, 2, 2, '20:00:00', 0),
(2, 2, 3, '20:00:00', 0),
(2, 2, 4, '20:00:00', 0),
(2, 2, 5, '20:00:00', 0),
(2, 2, 6, '20:00:00', 0),
(2, 2, 7, '20:00:00', 0),
(2, 2, 8, '20:00:00', 0),
(2, 2, 9, '20:00:00', 0),
(2, 2, 10, '20:00:00', 0),
(2, 3, 1, '20:00:00', 0),
(2, 3, 2, '20:00:00', 0),
(2, 3, 3, '20:00:00', 0),
(2, 3, 4, '20:00:00', 0),
(2, 3, 5, '20:00:00', 0),
(2, 3, 6, '20:00:00', 0),
(2, 3, 7, '20:00:00', 0),
(2, 3, 8, '20:00:00', 0),
(2, 3, 9, '20:00:00', 0),
(2, 3, 10, '20:00:00', 0),
(2, 4, 1, '20:00:00', 0),
(2, 4, 2, '20:00:00', 0),
(2, 4, 3, '20:00:00', 0),
(2, 4, 4, '20:00:00', 0),
(2, 4, 5, '20:00:00', 0),
(2, 4, 6, '20:00:00', 0),
(2, 4, 7, '20:00:00', 0),
(2, 4, 8, '20:00:00', 0),
(2, 4, 9, '20:00:00', 0),
(2, 4, 10, '20:00:00', 0),
(2, 5, 1, '20:00:00', 0),
(2, 5, 2, '20:00:00', 0),
(2, 5, 3, '20:00:00', 0),
(2, 5, 4, '20:00:00', 0),
(2, 5, 5, '20:00:00', 0),
(2, 5, 6, '20:00:00', 0),
(2, 5, 7, '20:00:00', 0),
(2, 5, 8, '20:00:00', 0),
(2, 5, 9, '20:00:00', 0),
(2, 5, 10, '20:00:00', 0),
(2, 6, 1, '20:00:00', 0),
(2, 6, 2, '20:00:00', 0),
(2, 6, 3, '20:00:00', 0),
(2, 6, 4, '20:00:00', 0),
(2, 6, 5, '20:00:00', 0),
(2, 6, 6, '20:00:00', 0),
(2, 6, 7, '20:00:00', 0),
(2, 6, 8, '20:00:00', 0),
(2, 6, 9, '20:00:00', 0),
(2, 6, 10, '20:00:00', 0),
(2, 7, 1, '20:00:00', 0),
(2, 7, 2, '20:00:00', 0),
(2, 7, 3, '20:00:00', 0),
(2, 7, 4, '20:00:00', 0),
(2, 7, 5, '20:00:00', 0),
(2, 7, 6, '20:00:00', 0),
(2, 7, 7, '20:00:00', 0),
(2, 7, 8, '20:00:00', 0),
(2, 7, 9, '20:00:00', 0),
(2, 7, 10, '20:00:00', 0),
(2, 8, 1, '20:00:00', 0),
(2, 8, 2, '20:00:00', 0),
(2, 8, 3, '20:00:00', 0),
(2, 8, 4, '20:00:00', 0),
(2, 8, 5, '20:00:00', 0),
(2, 8, 6, '20:00:00', 0),
(2, 8, 7, '20:00:00', 0),
(2, 8, 8, '20:00:00', 0),
(2, 8, 9, '20:00:00', 0),
(2, 8, 10, '20:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientospequeña`
--

CREATE TABLE `asientospequeña` (
  `roomcode` int(11) NOT NULL,
  `fila` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asientospequeña`
--

INSERT INTO `asientospequeña` (`roomcode`, `fila`, `columna`, `timetable`, `taken`) VALUES
(3, 1, 1, '18:00:00', 0),
(3, 2, 1, '18:00:00', 0),
(3, 2, 2, '18:00:00', 0),
(3, 2, 3, '18:00:00', 0),
(3, 2, 4, '18:00:00', 0),
(3, 2, 5, '18:00:00', 0),
(3, 2, 6, '18:00:00', 0),
(3, 2, 7, '18:00:00', 0),
(3, 2, 8, '18:00:00', 0),
(3, 2, 9, '18:00:00', 0),
(3, 2, 10, '18:00:00', 0),
(3, 1, 2, '18:00:00', 0),
(3, 1, 3, '18:00:00', 0),
(3, 1, 4, '18:00:00', 0),
(3, 1, 5, '18:00:00', 0),
(3, 1, 6, '18:00:00', 0),
(3, 1, 7, '18:00:00', 0),
(3, 1, 8, '18:00:00', 0),
(3, 1, 9, '18:00:00', 0),
(3, 1, 10, '18:00:00', 0),
(3, 3, 1, '18:00:00', 0),
(3, 3, 2, '18:00:00', 0),
(3, 3, 3, '18:00:00', 0),
(3, 3, 4, '18:00:00', 0),
(3, 3, 5, '18:00:00', 0),
(3, 3, 6, '18:00:00', 0),
(3, 3, 7, '18:00:00', 0),
(3, 3, 8, '18:00:00', 0),
(3, 3, 9, '18:00:00', 0),
(3, 3, 10, '18:00:00', 0),
(3, 4, 1, '18:00:00', 0),
(3, 4, 2, '18:00:00', 0),
(3, 4, 3, '18:00:00', 0),
(3, 4, 4, '18:00:00', 0),
(3, 4, 5, '18:00:00', 0),
(3, 4, 6, '18:00:00', 0),
(3, 4, 7, '18:00:00', 0),
(3, 4, 8, '18:00:00', 0),
(3, 4, 9, '18:00:00', 0),
(3, 4, 10, '18:00:00', 0),
(3, 5, 1, '18:00:00', 0),
(3, 5, 2, '18:00:00', 0),
(3, 5, 3, '18:00:00', 0),
(3, 5, 4, '18:00:00', 0),
(3, 5, 5, '18:00:00', 0),
(3, 5, 6, '18:00:00', 0),
(3, 5, 7, '18:00:00', 0),
(3, 5, 8, '18:00:00', 0),
(3, 5, 9, '18:00:00', 0),
(3, 5, 10, '18:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `filmcode` int(11) NOT NULL,
  `filmname` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `description` varchar(1000) COLLATE latin1_spanish_ci NOT NULL,
  `image` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `director` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `genero` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`filmcode`, `filmname`, `duration`, `description`, `image`, `director`, `pais`, `genero`) VALUES
(1, '300', 117, 'Adaptación del cómic de Frank Miller sobre la famosa batalla de las Termópilas (480 a.C.). El objetivo de Jerjes, emperador de Persia, era la conquista de Grecia, lo que desencadenó las Guerras Médicas. Dada la gravedad de la situación, el rey Leónidas de Esparta y 300 espartanos se enfrentaron a un ejército persa que era inmensamente superior.', '300', 'Zack Snyder', 'Estados Unidos', 'Cine fantástico/Acción'),
(2, 'Ready Player One', 140, 'Año 2045. Wade Watts es un adolescente al que le gusta evadirse del cada vez más sombrío mundo real a través de una popular utopía virtual a escala global llamada \"Oasis\". Un día, su excéntrico y multimillonario creador muere, pero antes ofrece su fortuna y el destino de su empresa al ganador de una elaborada búsqueda del tesoro a través de los rincones más inhóspitos de su creación. Será el punto de partida para que Wade se enfrente a jugadores, poderosos enemigos corporativos y otros competidores despiadados, dispuestos a hacer lo que sea, tanto dentro de \"Oasis\" como del mundo real, para hacerse con el premio.', 'ready', 'Steven Spielberg', 'Estados Unidos', 'Suspense/Cine fantástico'),
(3, 'Black Panther', 115, '“Black Panther\" cuenta la historia de T\'Challa quien, después de los acontecimientos de \"Capitán América: Civil War\", vuelve a casa, a la nación de Wakanda, aislada y muy avanzada tecnológicamente, para ser proclamado Rey. Pero la reaparición de un viejo enemigo pone a prueba el temple de T\'Challa como Rey y Black Panther ya que se ve arrastrado a un conflicto que pone en peligro todo el destino de Wakanda y del mundo.', 'panther', 'Ryan Coogler', 'Estados Unidos', 'Cine fantástico/Ciencia ficción'),
(4, 'Proyecto Rampage', 107, '\r\nEl primatólogo Davis Okoye (Johnson), un hombre que mantiene las distancias con otras personas, ti', 'rampage', 'Brad Peyton', 'Estados Unidos', 'Cine fantástico/Ciencia ficción'),
(5, 'Campeones', 124, 'Marco es un tipo sin demasiado optimismo que, por vicisitudes de la vida, acaba entrenando a un equipo de baloncesto formado por chicos con discapacidad. A regañadientes comienza la tarea pero, lo que comienza siendo un trabajo forzado, acaba ayudándole a salir de su crisis existencial.', 'campeones', 'Javier Fesser', 'España', 'Comedia/Drama'),
(6, 'Vengadores: Infinity War', 156, 'El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a sacrificarlo todo por un bien mayor. Capitán América e Ironman deberán limar sus diferencias, Black Panther apoyará con sus tropas desde Wakanda, Thor y los Guardianes de la Galaxia e incluso Spider-Man se unirán antes de que los planes de devastación y ruina pongan fin al universo. ¿Serán capaces de frenar el avance del titán del caos?', 'vengadores', 'Anthony Russo & Joe Russo', 'Estados Unidos', 'Cine fantástico/Ciencia ficción'),
(7, 'Sherlock Gnomes', 87, 'En pleno corazón de Londres, Gnomeo y Julieta descubren que están desapareciendo de manera misteriosa los gnomos de jardín. Para resolver el misterio de los gnomos desaparecidos, la pareja decide pedir ayuda a un mítico detective británico: Sherlock Gnomes, \"el mayor detective ornamental\".\r\n\r\nPero, en seguida Gnomeo, Julieta y sus amigos se darán cuenta de que Sherlock no es tan buen detective como su homólogo humano, y pronto la amenaza a los gnomos de jardín se hará aún mayor. Aunque todos ellos unirán sus fuerzas para descubrir quién se encuentra tras los robos de gnomos, los problemas de su pequeño mundo se volverán cada vez más grandes.', 'gnomes', 'John Stevenson', 'Estados Unidos', 'Animación/Comedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`filmcode`, `roomcode`, `timetable`, `date`) VALUES
(1, 1, '13:30:00', '2018-04-28'),
(1, 2, '20:00:00', '2018-04-28'),
(3, 1, '20:00:00', '2018-05-09'),
(3, 2, '13:00:00', '2018-05-08'),
(4, 1, '13:00:00', '2018-05-09'),
(4, 2, '16:00:00', '2018-05-10');

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
('pablo', 'Que dices  adri', '$2y$10$2DbtsIicWFaPS/Qwo.cXi.8bFBS164aDEBaWN2A6YJAZyKltjMjZy', 'Aqui estuvo pablo', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientosgrande`
--
ALTER TABLE `asientosgrande`
  ADD KEY `fk_salas` (`roomcode`);

--
-- Indices de la tabla `asientosmediana`
--
ALTER TABLE `asientosmediana`
  ADD KEY `foreignSalas` (`roomcode`);

--
-- Indices de la tabla `asientospequeña`
--
ALTER TABLE `asientospequeña`
  ADD KEY `Sala_fk` (`roomcode`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`filmcode`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asientosgrande`
--
ALTER TABLE `asientosgrande`
  ADD CONSTRAINT `fk_salas` FOREIGN KEY (`roomcode`) REFERENCES `salas` (`roomcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asientosmediana`
--
ALTER TABLE `asientosmediana`
  ADD CONSTRAINT `foreignSalas` FOREIGN KEY (`roomcode`) REFERENCES `salas` (`roomcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asientospequeña`
--
ALTER TABLE `asientospequeña`
  ADD CONSTRAINT `Sala_fk` FOREIGN KEY (`roomcode`) REFERENCES `salas` (`roomcode`) ON DELETE CASCADE ON UPDATE CASCADE;

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
