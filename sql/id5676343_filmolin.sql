-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-05-2018 a las 08:04:23
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
  `seatcode` int(11) NOT NULL,
  `roomcode` int(11) NOT NULL,
  `fila` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asientosgrande`
--

INSERT INTO `asientosgrande` (`seatcode`, `roomcode`, `fila`, `columna`, `timetable`, `taken`) VALUES
(1, 1, 1, 1, '18:00:00', 0),
(2, 1, 1, 2, '18:00:00', 0),
(3, 1, 1, 3, '18:00:00', 0),
(4, 1, 1, 4, '18:00:00', 0),
(5, 1, 1, 5, '18:00:00', 0),
(6, 1, 1, 6, '18:00:00', 0),
(7, 1, 1, 7, '18:00:00', 0),
(8, 1, 1, 8, '18:00:00', 0),
(9, 1, 1, 9, '18:00:00', 0),
(10, 1, 1, 10, '18:00:00', 0),
(11, 1, 2, 1, '18:00:00', 0),
(12, 1, 2, 2, '18:00:00', 0),
(13, 1, 2, 3, '18:00:00', 0),
(14, 1, 2, 4, '18:00:00', 0),
(15, 1, 2, 5, '18:00:00', 0),
(16, 1, 2, 6, '18:00:00', 0),
(17, 1, 2, 7, '18:00:00', 0),
(18, 1, 2, 8, '18:00:00', 0),
(19, 1, 2, 9, '18:00:00', 0),
(20, 1, 2, 10, '18:00:00', 0),
(21, 1, 3, 1, '18:00:00', 0),
(22, 1, 3, 2, '18:00:00', 0),
(23, 1, 3, 3, '18:00:00', 0),
(24, 1, 3, 4, '18:00:00', 0),
(25, 1, 3, 5, '18:00:00', 0),
(26, 1, 3, 6, '18:00:00', 0),
(27, 1, 3, 7, '18:00:00', 0),
(28, 1, 3, 8, '18:00:00', 0),
(29, 1, 3, 9, '18:00:00', 0),
(30, 1, 3, 10, '18:00:00', 0),
(31, 1, 4, 1, '18:00:00', 0),
(32, 1, 4, 2, '18:00:00', 0),
(33, 1, 4, 3, '18:00:00', 0),
(34, 1, 4, 4, '18:00:00', 0),
(35, 1, 4, 5, '18:00:00', 0),
(36, 1, 4, 6, '18:00:00', 0),
(37, 1, 4, 7, '18:00:00', 0),
(38, 1, 4, 8, '18:00:00', 0),
(39, 1, 4, 9, '18:00:00', 0),
(40, 1, 4, 10, '18:00:00', 0),
(41, 1, 5, 1, '18:00:00', 0),
(42, 1, 5, 2, '18:00:00', 0),
(43, 1, 5, 3, '18:00:00', 0),
(44, 1, 5, 4, '18:00:00', 0),
(45, 1, 5, 5, '18:00:00', 0),
(46, 1, 5, 6, '18:00:00', 0),
(47, 1, 5, 7, '18:00:00', 0),
(48, 1, 5, 8, '18:00:00', 0),
(49, 1, 5, 9, '18:00:00', 0),
(50, 1, 5, 10, '18:00:00', 0),
(51, 1, 6, 1, '18:00:00', 0),
(52, 1, 6, 2, '18:00:00', 0),
(53, 1, 6, 3, '18:00:00', 0),
(54, 1, 6, 4, '18:00:00', 0),
(55, 1, 6, 5, '18:00:00', 0),
(56, 1, 6, 6, '18:00:00', 0),
(57, 1, 6, 7, '18:00:00', 0),
(58, 1, 6, 8, '18:00:00', 0),
(59, 1, 6, 9, '18:00:00', 0),
(60, 1, 6, 10, '18:00:00', 0),
(61, 1, 7, 1, '18:00:00', 0),
(62, 1, 7, 2, '18:00:00', 0),
(63, 1, 7, 3, '18:00:00', 0),
(64, 1, 7, 4, '18:00:00', 0),
(65, 1, 7, 5, '18:00:00', 0),
(66, 1, 7, 6, '18:00:00', 0),
(67, 1, 7, 7, '18:00:00', 0),
(68, 1, 7, 8, '18:00:00', 0),
(69, 1, 7, 9, '18:00:00', 0),
(70, 1, 7, 10, '18:00:00', 0),
(71, 1, 8, 1, '18:00:00', 0),
(72, 1, 8, 2, '18:00:00', 0),
(73, 1, 8, 3, '18:00:00', 0),
(74, 1, 8, 4, '18:00:00', 0),
(75, 1, 8, 5, '18:00:00', 0),
(76, 1, 8, 6, '18:00:00', 0),
(77, 1, 8, 7, '18:00:00', 0),
(78, 1, 8, 8, '18:00:00', 0),
(79, 1, 8, 9, '18:00:00', 0),
(80, 1, 8, 10, '18:00:00', 0),
(81, 1, 9, 1, '18:00:00', 0),
(82, 1, 9, 2, '18:00:00', 0),
(83, 1, 9, 3, '18:00:00', 0),
(84, 1, 9, 4, '18:00:00', 0),
(85, 1, 9, 5, '18:00:00', 0),
(86, 1, 9, 6, '18:00:00', 0),
(87, 1, 9, 7, '18:00:00', 0),
(88, 1, 9, 8, '18:00:00', 0),
(89, 1, 9, 9, '18:00:00', 0),
(90, 1, 9, 10, '18:00:00', 0),
(91, 1, 10, 1, '18:00:00', 0),
(92, 1, 10, 2, '18:00:00', 0),
(93, 1, 10, 3, '18:00:00', 0),
(94, 1, 10, 4, '18:00:00', 0),
(95, 1, 10, 5, '18:00:00', 0),
(96, 1, 10, 6, '18:00:00', 0),
(97, 1, 10, 7, '18:00:00', 0),
(98, 1, 10, 8, '18:00:00', 0),
(99, 1, 10, 9, '18:00:00', 1),
(100, 1, 10, 10, '18:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientosmediana`
--

CREATE TABLE `asientosmediana` (
  `seatcode` int(11) NOT NULL,
  `roomcode` int(11) NOT NULL,
  `fila` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asientosmediana`
--

INSERT INTO `asientosmediana` (`seatcode`, `roomcode`, `fila`, `columna`, `timetable`, `taken`) VALUES
(1, 2, 1, 1, '20:00:00', 1),
(2, 2, 1, 2, '20:00:00', 1),
(3, 2, 1, 3, '20:00:00', 0),
(4, 2, 1, 4, '20:00:00', 1),
(5, 2, 1, 5, '20:00:00', 1),
(6, 2, 1, 6, '20:00:00', 0),
(7, 2, 1, 7, '20:00:00', 1),
(8, 2, 1, 8, '20:00:00', 1),
(9, 2, 1, 9, '20:00:00', 0),
(10, 2, 1, 10, '20:00:00', 0),
(11, 2, 2, 1, '20:00:00', 0),
(12, 2, 2, 2, '20:00:00', 1),
(13, 2, 2, 3, '20:00:00', 1),
(14, 2, 2, 4, '20:00:00', 0),
(15, 2, 2, 5, '20:00:00', 0),
(16, 2, 2, 6, '20:00:00', 1),
(17, 2, 2, 7, '20:00:00', 1),
(18, 2, 2, 8, '20:00:00', 1),
(19, 2, 2, 9, '20:00:00', 1),
(20, 2, 2, 10, '20:00:00', 0),
(21, 2, 3, 1, '20:00:00', 0),
(22, 2, 3, 2, '20:00:00', 0),
(23, 2, 3, 3, '20:00:00', 1),
(24, 2, 3, 4, '20:00:00', 1),
(25, 2, 3, 5, '20:00:00', 1),
(26, 2, 3, 6, '20:00:00', 1),
(27, 2, 3, 7, '20:00:00', 0),
(28, 2, 3, 8, '20:00:00', 0),
(29, 2, 3, 9, '20:00:00', 1),
(30, 2, 3, 10, '20:00:00', 1),
(31, 2, 4, 1, '20:00:00', 0),
(32, 2, 4, 2, '20:00:00', 0),
(33, 2, 4, 3, '20:00:00', 0),
(34, 2, 4, 4, '20:00:00', 1),
(35, 2, 4, 5, '20:00:00', 1),
(36, 2, 4, 6, '20:00:00', 0),
(37, 2, 4, 7, '20:00:00', 0),
(38, 2, 4, 8, '20:00:00', 0),
(39, 2, 4, 9, '20:00:00', 0),
(40, 2, 4, 10, '20:00:00', 1),
(41, 2, 5, 1, '20:00:00', 0),
(42, 2, 5, 2, '20:00:00', 0),
(43, 2, 5, 3, '20:00:00', 1),
(44, 2, 5, 4, '20:00:00', 1),
(45, 2, 5, 5, '20:00:00', 1),
(46, 2, 5, 6, '20:00:00', 1),
(47, 2, 5, 7, '20:00:00', 0),
(48, 2, 5, 8, '20:00:00', 0),
(49, 2, 5, 9, '20:00:00', 0),
(50, 2, 5, 10, '20:00:00', 0),
(51, 2, 6, 1, '20:00:00', 0),
(52, 2, 6, 2, '20:00:00', 1),
(53, 2, 6, 3, '20:00:00', 1),
(54, 2, 6, 4, '20:00:00', 0),
(55, 2, 6, 5, '20:00:00', 0),
(56, 2, 6, 6, '20:00:00', 1),
(57, 2, 6, 7, '20:00:00', 1),
(58, 2, 6, 8, '20:00:00', 0),
(59, 2, 6, 9, '20:00:00', 0),
(60, 2, 6, 10, '20:00:00', 1),
(61, 2, 7, 1, '20:00:00', 1),
(62, 2, 7, 2, '20:00:00', 1),
(63, 2, 7, 3, '20:00:00', 0),
(64, 2, 7, 4, '20:00:00', 0),
(65, 2, 7, 5, '20:00:00', 0),
(66, 2, 7, 6, '20:00:00', 0),
(67, 2, 7, 7, '20:00:00', 1),
(68, 2, 7, 8, '20:00:00', 1),
(69, 2, 7, 9, '20:00:00', 1),
(70, 2, 7, 10, '20:00:00', 1),
(71, 2, 8, 1, '20:00:00', 1),
(72, 2, 8, 2, '20:00:00', 0),
(73, 2, 8, 3, '20:00:00', 0),
(74, 2, 8, 4, '20:00:00', 1),
(75, 2, 8, 5, '20:00:00', 1),
(76, 2, 8, 6, '20:00:00', 0),
(77, 2, 8, 7, '20:00:00', 0),
(78, 2, 8, 8, '20:00:00', 1),
(79, 2, 8, 9, '20:00:00', 1),
(80, 2, 8, 10, '20:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientospequeña`
--

CREATE TABLE `asientospequeña` (
  `seatcode` int(11) NOT NULL,
  `roomcode` int(11) NOT NULL,
  `fila` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `timetable` time NOT NULL,
  `taken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asientospequeña`
--

INSERT INTO `asientospequeña` (`seatcode`, `roomcode`, `fila`, `columna`, `timetable`, `taken`) VALUES
(1, 3, 1, 1, '18:00:00', 0),
(2, 3, 2, 1, '18:00:00', 0),
(3, 3, 2, 2, '18:00:00', 0),
(4, 3, 2, 3, '18:00:00', 0),
(5, 3, 2, 4, '18:00:00', 0),
(6, 3, 2, 5, '18:00:00', 0),
(7, 3, 2, 6, '18:00:00', 0),
(8, 3, 2, 7, '18:00:00', 0),
(9, 3, 2, 8, '18:00:00', 0),
(10, 3, 2, 9, '18:00:00', 0),
(11, 3, 2, 10, '18:00:00', 0),
(12, 3, 1, 2, '18:00:00', 0),
(13, 3, 1, 3, '18:00:00', 0),
(14, 3, 1, 4, '18:00:00', 0),
(15, 3, 1, 5, '18:00:00', 0),
(16, 3, 1, 6, '18:00:00', 0),
(17, 3, 1, 7, '18:00:00', 0),
(18, 3, 1, 8, '18:00:00', 0),
(19, 3, 1, 9, '18:00:00', 0),
(20, 3, 1, 10, '18:00:00', 0),
(21, 3, 3, 1, '18:00:00', 0),
(22, 3, 3, 2, '18:00:00', 0),
(23, 3, 3, 3, '18:00:00', 0),
(24, 3, 3, 4, '18:00:00', 0),
(25, 3, 3, 5, '18:00:00', 0),
(26, 3, 3, 6, '18:00:00', 0),
(27, 3, 3, 7, '18:00:00', 0),
(28, 3, 3, 8, '18:00:00', 0),
(29, 3, 3, 9, '18:00:00', 0),
(30, 3, 3, 10, '18:00:00', 0),
(31, 3, 4, 1, '18:00:00', 0),
(32, 3, 4, 2, '18:00:00', 0),
(33, 3, 4, 3, '18:00:00', 0),
(34, 3, 4, 4, '18:00:00', 0),
(35, 3, 4, 5, '18:00:00', 0),
(36, 3, 4, 6, '18:00:00', 0),
(37, 3, 4, 7, '18:00:00', 0),
(38, 3, 4, 8, '18:00:00', 0),
(39, 3, 4, 9, '18:00:00', 0),
(40, 3, 4, 10, '18:00:00', 0),
(41, 3, 5, 1, '18:00:00', 0),
(42, 3, 5, 2, '18:00:00', 0),
(43, 3, 5, 3, '18:00:00', 0),
(44, 3, 5, 4, '18:00:00', 0),
(45, 3, 5, 5, '18:00:00', 0),
(46, 3, 5, 6, '18:00:00', 0),
(47, 3, 5, 7, '18:00:00', 0),
(48, 3, 5, 8, '18:00:00', 0),
(49, 3, 5, 9, '18:00:00', 0),
(50, 3, 5, 10, '18:00:00', 0);

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

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`) VALUES
(1, 'Vaso 50cl', 5, 'vasopequeño'),
(2, 'Vaso 75cl', 5.8, 'vasomediano'),
(3, 'Vaso 100cl', 6.5, 'vasogrande'),
(4, 'Palomitas pequeñas sal', 5, 'normalpequeñas'),
(5, 'Palomitas medianas sal', 6.5, 'normalmedianas'),
(6, 'Palomitas grandes sal', 8, 'normalgrandes'),
(7, 'Palomitas pequeñas color', 6, 'colorpequeñas'),
(8, 'Palomitas medianas color', 7.5, 'colormedianas'),
(9, 'Palomitas grandes color', 9, 'colorgrandes'),
(10, 'Nachos pequeños', 7, 'nachospequeños'),
(11, 'Nachos medianos', 8.5, 'nachosmedianos'),
(12, 'Nachos grandes', 10, 'nachosgrandes'),
(13, '2 vasos 50cl + Palomitas pequeñas', 12, 'combopequeño1'),
(14, '2 vasos 75cl + Palomitas medianas', 14, 'combomediano1'),
(15, '2 vasos 100cl + Palomitas grandes', 18, 'combogrande1'),
(16, '2 vasos 50cl + Nachos pequeños', 14, 'combopequeño2'),
(17, '2 vasos 75cl + Nachos medianos', 16, 'combomediano2'),
(18, '2 vasos 100cl + Nachos grandes', 20, 'combogrande2'),
(19, 'Perrito caliente', 4, 'perritocaliente'),
(20, 'Vaso 50cl + palomitas p. + perrito', 12, 'comboperrito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `roomcode` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `image` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`roomcode`, `capacity`, `image`, `price`) VALUES
(1, 100, 'salagrande.jpg', 10.2),
(2, 80, 'salamediana.jpg', 9.8),
(3, 50, 'salapequeña.jpg', 8),
(4, 50, 'salapequeña.jpg', 8),
(5, 80, 'salamediana.jpg', 9.8);

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
(1, 1, '18:00:00', '2018-05-10'),
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
('prueba', 'Prueba Prueba', '$2y$10$phsxhbtFbTCg2bl9/1ngkeHaOYgynbxLKj1Eng/cHkCVe9MOm2OCO', 'prueba', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientosgrande`
--
ALTER TABLE `asientosgrande`
  ADD PRIMARY KEY (`seatcode`),
  ADD KEY `fk_salas` (`roomcode`);

--
-- Indices de la tabla `asientosmediana`
--
ALTER TABLE `asientosmediana`
  ADD PRIMARY KEY (`seatcode`),
  ADD KEY `foreignSalas` (`roomcode`);

--
-- Indices de la tabla `asientospequeña`
--
ALTER TABLE `asientospequeña`
  ADD PRIMARY KEY (`seatcode`),
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
-- AUTO_INCREMENT de la tabla `asientosgrande`
--
ALTER TABLE `asientosgrande`
  MODIFY `seatcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `asientosmediana`
--
ALTER TABLE `asientosmediana`
  MODIFY `seatcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `asientospequeña`
--
ALTER TABLE `asientospequeña`
  MODIFY `seatcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
