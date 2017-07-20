-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2017 a las 19:45:49
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sicautn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id_acceso` int(11) NOT NULL,
  `entrada` time NOT NULL,
  `salida` time DEFAULT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estacionamiento` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id_acceso`, `entrada`, `salida`, `fecha`, `id_usuario`, `id_estacionamiento`) VALUES
(1, '02:40:28', '02:45:27', '2016-08-05', 1, 1),
(2, '02:40:38', '02:45:32', '2016-08-05', 2, 2),
(3, '02:44:55', '02:45:41', '2016-08-05', 4, 3),
(4, '02:45:12', '02:45:51', '2016-08-05', 5, 4),
(5, '02:45:36', '02:54:25', '2016-08-05', 3, 1),
(6, '02:50:51', '02:52:10', '2016-08-05', 6, 2),
(7, '02:50:57', '02:52:17', '2016-08-05', 7, 3),
(8, '02:51:05', '02:52:28', '2016-08-05', 8, 4),
(9, '02:51:11', '02:52:35', '2016-08-05', 9, 5),
(10, '02:51:23', '02:51:37', '2016-08-05', 10, 6),
(11, '02:51:47', '02:53:07', '2016-08-05', 11, 6),
(12, '02:52:51', '02:52:59', '2016-08-05', 10, 2),
(13, '10:40:55', '10:48:31', '2016-08-05', 6, 1),
(14, '10:43:35', '12:57:24', '2016-08-05', 8, 2),
(15, '10:46:10', '10:46:35', '2016-08-05', 1, 3),
(16, '10:47:04', '12:56:59', '2016-08-05', 4, 3),
(17, '10:48:42', '10:52:35', '2016-08-05', 6, 1),
(18, '11:02:01', '11:02:25', '2016-08-05', 7, 1),
(19, '11:05:48', '11:06:17', '2016-08-05', 3, 1),
(20, '11:13:10', '12:56:40', '2016-08-05', 3, 1),
(21, '11:28:16', '11:28:35', '2016-08-05', 10, 4),
(22, '11:28:49', '12:51:31', '2016-08-05', 11, 4),
(23, '11:29:00', '12:51:43', '2016-08-05', 10, 5),
(24, '12:47:12', '12:50:21', '2016-08-05', 6, 6),
(25, '13:02:59', '13:04:17', '2016-08-05', 6, 1),
(26, '13:18:19', '13:43:25', '2016-08-05', 8, 1),
(27, '13:19:22', '13:19:57', '2016-08-05', 2, 2),
(28, '13:20:57', '13:21:33', '2016-08-05', 2, 2),
(29, '14:10:27', '14:11:44', '2016-08-05', 5, 1),
(30, '14:17:41', '14:18:54', '2016-08-05', 9, 1),
(31, '14:18:34', '05:17:23', '2016-08-05', 8, 2),
(32, '14:26:27', '14:26:49', '2016-08-05', 2, 1),
(33, '14:59:27', '15:00:43', '2016-08-05', 7, 1),
(34, '19:43:33', '19:44:09', '2016-09-19', 1, 1),
(35, '23:28:56', '23:29:16', '2017-02-03', 1, 1),
(36, '17:01:11', '17:03:39', '2017-07-04', 3, 1),
(37, '17:01:31', '17:03:14', '2017-07-04', 9, 3),
(38, '17:08:00', '17:08:13', '2017-07-04', 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carreras` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carreras`, `nombre`, `descripcion`) VALUES
(1, 'TIC Area Multimedia y Comercio Electronico', 'descripcion de carrera de la UTN'),
(2, 'TIC Area Redes y Telecomunicaciones', 'descripcion de carrera de la UTN'),
(3, 'TIC Area Sistemas Informaticos', 'descripcion de carrera de la UTN'),
(4, 'Mecatronica Area Sistemas de Manufactura ', 'descripcion de carrera de la UTN'),
(5, 'Administracion Area Recursos Humanos', 'descripcion de carrera de la UTN'),
(6, 'Desarrollo de Negocios Area Mercadotecnia', 'descripcion de carrera de la UTN'),
(7, 'Procesos Industriales Area Manufactura', 'descripcion de carrera de la UTN'),
(8, 'Quimica Tecnologia Ambiental', 'descripcion de carrera de la UTN'),
(9, 'Mantenimiento Aeronautico Area Avionica', 'descripcion de carrera de la UTN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefono` int(10) NOT NULL,
  `comentarios` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `comentarios`) VALUES
(1, 'martin', 'muñoz', 'martin@mail.com', 2147483647, '<p>interesante la pagina</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `manzana` varchar(45) NOT NULL DEFAULT 'N/A',
  `lote` varchar(45) NOT NULL DEFAULT 'N/A',
  `cp` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_localidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `calle`, `numero`, `manzana`, `lote`, `cp`, `id_estado`, `id_municipio`, `id_localidad`) VALUES
(1, 'ADIOS', '185', 'SIN MANZANA', 'SIN LOTE', 57800, 15, 714, 140878),
(2, 'citacuaro', '10', 'SIN MANZANA', 'SIN LOTE', 1025, 9, 267, 82139),
(3, 'rosales', '15', 'manzana 15', 'lote 10', 875644, 10, 318, 92237),
(4, 'mariquita', '95', 'SIN MANZANA', 'SIN LOTE', 954555, 2, 12, 104180),
(5, '9', '87', 'SIN MANZANA', 'SIN LOTE', 358548, 13, 495, 117101),
(6, '10', '58', 'SIN MANZANA', 'SIN LOTE', 894865, 2, 15, 144063),
(7, 'palmas', '55', 'SIN MANZANA', 'lote 10', 894865, 11, 356, 102490),
(8, 'caballo bayo', '88', 'SIN MANZANA', 'SIN LOTE', 456468, 17, 900, 157250),
(9, 'colmena', '41', 'manzana 5', 'lote 10', 874845, 27, 2001, 240881),
(10, 'ninos heroes', '55', 'manzana 9', 'lote 2', 694785, 14, 570, 124799),
(11, 'lago azul', '22', 'SIN MANZANA', 'SIN LOTE', 346855, 7, 184, 158815),
(12, 'ADIOS', '203', 'MANZANA 3', 'LOTE 5', 57800, 15, 714, 140878),
(13, 'Maguey', '2', 'Sin manzana', 'Sin lote', 163636, 3, 18, 158817),
(14, '', '', '', '', 0, 0, 0, 0),
(15, '', '', '', '', 0, 0, 0, 0),
(16, '', '', '', '', 0, 0, 0, 0),
(17, '', '', '', '', 0, 0, 0, 0),
(18, 'adios', '45', '12', '87', 9630, 15, 685, 139962),
(19, 'la que sea', '12', '2', '132', 9876, 1, 3, 9971);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `id_estacionamiento` int(11) NOT NULL,
  `nave` varchar(6) NOT NULL,
  `lugar` varchar(3) NOT NULL,
  `status` char(1) NOT NULL COMMENT '1: Ocupado / 0: Disponible'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estacionamiento`
--

INSERT INTO `estacionamiento` (`id_estacionamiento`, `nave`, `lugar`, `status`) VALUES
(0, 'Nave', 'XYZ', '0'),
(1, 'Nave A', 'A1', '0'),
(2, 'Nave A', 'A2', '0'),
(3, 'Nave A', 'A3', '0'),
(4, 'Nave A', 'A4', '0'),
(5, 'Nave A', 'A5', '0'),
(6, 'Nave A', 'A6', '0'),
(7, 'Nave A', 'A7', '0'),
(8, 'Nave A', 'A8', '0'),
(9, 'Nave A', 'A9', '0'),
(10, 'Nave A', 'A10', '0'),
(11, 'Nave A', 'A11', '0'),
(12, 'Nave A', 'A12', '0'),
(13, 'Nave A', 'A13', '0'),
(14, 'Nave A', 'A14', '0'),
(15, 'Nave A', 'A15', '0'),
(16, 'Nave A', 'A16', '0'),
(17, 'Nave A', 'A17', '0'),
(18, 'Nave A', 'A18', '0'),
(19, 'Nave A', 'A19', '0'),
(20, 'Nave A', 'A20', '0'),
(21, 'Nave A', 'A21', '0'),
(22, 'Nave A', 'A22', '0'),
(23, 'Nave A', 'A23', '0'),
(24, 'Nave A', 'A24', '0'),
(25, 'Nave A', 'A25', '0'),
(26, 'Nave A', 'A26', '0'),
(27, 'Nave A', 'A27', '0'),
(28, 'Nave A', 'A28', '0'),
(29, 'Nave A', 'A29', '0'),
(30, 'Nave A', 'A30', '0'),
(31, 'Nave B', 'B1', '0'),
(32, 'Nave B', 'B2', '0'),
(33, 'Nave B', 'B3', '0'),
(34, 'Nave B', 'B4', '0'),
(35, 'Nave B', 'B5', '0'),
(36, 'Nave B', 'B6', '0'),
(37, 'Nave B', 'B7', '0'),
(38, 'Nave B', 'B8', '0'),
(39, 'Nave B', 'B9', '0'),
(40, 'Nave B', 'B10', '0'),
(41, 'Nave B', 'B11', '0'),
(42, 'Nave B', 'B12', '0'),
(43, 'Nave B', 'B13', '0'),
(44, 'Nave B', 'B14', '0'),
(45, 'Nave B', 'B15', '0'),
(46, 'Nave C', 'C1', '0'),
(47, 'Nave C', 'C2', '0'),
(48, 'Nave C', 'C3', '0'),
(49, 'Nave C', 'C4', '0'),
(50, 'Nave C', 'C5', '0'),
(51, 'Nave C', 'C6', '0'),
(52, 'Nave C', 'C7', '0'),
(53, 'Nave C', 'C8', '0'),
(54, 'Nave C', 'C9', '0'),
(55, 'Nave C', 'C10', '0'),
(56, 'Nave C', 'C11', '0'),
(57, 'Nave C', 'C12', '0'),
(58, 'Nave C', 'C13', '0'),
(59, 'Nave C', 'C14', '0'),
(60, 'Nave C', 'C15', '0'),
(61, 'Nave D', 'D1', '0'),
(62, 'Nave D', 'D2', '0'),
(63, 'Nave D', 'D3', '0'),
(64, 'Nave D', 'D4', '0'),
(65, 'Nave D', 'D5', '0'),
(66, 'Nave D', 'D6', '0'),
(67, 'Nave D', 'D7', '0'),
(68, 'Nave D', 'D8', '0'),
(69, 'Nave D', 'D9', '0'),
(70, 'Nave D', 'D10', '0'),
(71, 'Nave D', 'D11', '0'),
(72, 'Nave D', 'D12', '0'),
(73, 'Nave D', 'D13', '0'),
(74, 'Nave D', 'D14', '0'),
(75, 'Nave D', 'D15', '0'),
(76, 'Nave D', 'D16', '0'),
(77, 'Nave D', 'D17', '0'),
(78, 'Nave D', 'D18', '0'),
(79, 'Nave D', 'D19', '0'),
(80, 'Nave D', 'D20', '0'),
(81, 'Nave D', 'D21', '0'),
(82, 'Nave D', 'D22', '0'),
(83, 'Nave D', 'D23', '0'),
(84, 'Nave D', 'D24', '0'),
(85, 'Nave D', 'D25', '0'),
(86, 'Nave D', 'D26', '0'),
(87, 'Nave D', 'D27', '0'),
(88, 'Nave D', 'D28', '0'),
(89, 'Nave D', 'D29', '0'),
(90, 'Nave D', 'D30', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Estados de la República Mexicana';

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Coahuila de Zaragoza'),
(6, 'Colima'),
(7, 'Chiapas'),
(8, 'Chihuahua'),
(9, 'Ciudad de Mexico'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Hidalgo'),
(14, 'Jalisco'),
(15, 'Mexico'),
(16, 'Michoacan de Ocampo'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo Leon'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz de Ignacio de la Llave'),
(31, 'Yucatán'),
(32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL COMMENT 'Relación con municipios',
  `nombre` varchar(110) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Localidades de la Republica Mexicana';

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id_localidad`, `id_municipio`, `nombre`) VALUES
(1, 1, 'Aguascalientes'),
(2, 1, 'Granja Adelita'),
(3, 1, 'Agua Azul'),
(4, 1, 'Rancho Alegre'),
(5, 1, 'Los Arbolitos [Rancho]'),
(2931, 2, 'Agua Caliente'),
(2932, 2, 'Ejido 18 de Marzo (El Álamo)'),
(2933, 2, 'Rancho Almaraz'),
(2934, 2, 'Rancho Aviña'),
(2935, 2, 'Bahía de los Ángeles'),
(9969, 3, 'Puerto Adolfo López Mateos'),
(9970, 3, 'Agua Escondida'),
(9971, 3, 'El Aguajito Uno'),
(9972, 3, 'El Aguajito'),
(9973, 3, 'Álvarez Lote 5'),
(15115, 4, 'Isla Arena'),
(15116, 4, 'Bacabchén'),
(15117, 4, 'Bécal'),
(15118, 4, 'Concepción'),
(15119, 4, 'San Agustín Chunhuás'),
(21, 5, 'Las Adjuntas'),
(22, 5, 'El Huracán'),
(23, 5, 'El Indio'),
(24, 5, 'Pájaros Azules'),
(25, 5, 'Los Pozos'),
(26, 6, 'El Banco de Jicotán'),
(27, 6, 'El Caminero'),
(28, 6, 'Cofradía de Juárez'),
(29, 6, 'Cuyutlán'),
(30, 6, 'El Taco'),
(31, 7, 'Los Amates'),
(32, 7, 'Arvin'),
(33, 251, 'Los Cacaos'),
(34, 7, 'El Castaño'),
(35, 7, 'Constitución'),
(36, 8, 'Agua Zarca'),
(37, 8, 'El Alamito'),
(38, 252, 'El Álamo'),
(39, 253, 'Álamos de Peña'),
(40, 8, 'Argelia'),
(82138, 266, 'Azcapotzalco'),
(82139, 267, 'Coyoacán'),
(82140, 268, 'Cuajimalpa de Morelos'),
(82164, 269, 'Gustavo A. Madero'),
(82165, 270, 'Iztacalco'),
(82166, 271, 'Iztapalapa'),
(82167, 272, 'La Magdalena Contreras'),
(82201, 273, 'Villa Milpa Alta'),
(82437, 274, 'Álvaro Obregón'),
(82446, 275, 'Tláhuac'),
(82498, 276, 'Tlalpan'),
(82703, 277, 'Xochimilco'),
(82777, 9, 'Naxayopa'),
(82778, 9, 'Coapantitla'),
(82779, 9, 'San Martín'),
(82798, 9, 'Alcanfores'),
(82804, 278, 'Benito Juárez'),
(82805, 279, 'Cuauhtémoc'),
(82806, 280, 'Miguel Hidalgo'),
(82807, 281, 'Venustiano Carranza'),
(82808, 282, 'Canatlán'),
(46, 10, 'La Alcancía'),
(47, 10, 'Colonia Anáhuac (Palo Blanco)'),
(48, 10, 'Arnulfo R. Gómez (Los Sauces)'),
(49, 254, 'Benjamín Aranda (San Rafael)'),
(50, 10, 'Bruno Martínez (San Bartolo)'),
(51, 11, 'Estación Abasolo'),
(52, 11, 'Agua Blanca'),
(53, 11, 'San Francisco de Horta (El Alacrán)'),
(54, 11, 'Alameda de Álvarez'),
(55, 11, 'Alto de Chamacua'),
(104179, 71, 'Agua del Perro'),
(104180, 12, 'Aguas Calientes'),
(104181, 12, 'Alto del Camarón'),
(104182, 12, 'Amatepec'),
(104183, 12, 'Amatillo'),
(114050, 13, 'Agustín Olvera [Colonia]'),
(114051, 72, 'Alcholoya (El Salto de Alcholoya)'),
(114052, 13, 'Almoloya'),
(114053, 13, 'Los Arcos'),
(114054, 13, 'Benito Juárez [Colonia]'),
(119404, 14, 'Agua Prieta (Tepetates)'),
(119405, 14, 'Alacates'),
(119406, 14, 'Las Amarillas'),
(119407, 73, 'El Bajío de los Herrera'),
(119408, 14, 'El Bañadero'),
(138779, 657, 'Villa de Acambay de Ruíz Castañeda'),
(138880, 658, 'Acolman de Nezahualcóyotl'),
(138914, 659, 'Aculco de Espinoza'),
(138984, 660, 'Almoloya de Alquisiras'),
(139022, 661, 'Villa de Almoloya de Juárez'),
(139133, 662, 'Almoloya del Río'),
(139137, 663, 'Amanalco de Becerra'),
(139168, 664, 'Amatepec'),
(139364, 665, 'Amecameca de Juárez'),
(139419, 666, 'Apaxco de Ocampo'),
(139437, 667, 'San Salvador Atenco'),
(139452, 668, 'Santa Cruz Atizapán'),
(139458, 669, 'Ciudad López Mateos'),
(139465, 670, 'Atlacomulco de Fabela'),
(139533, 671, 'Atlautla de Victoria'),
(139578, 672, 'Axapusco'),
(139628, 673, 'Ayapango de Gabriel Ramos M.'),
(139660, 674, 'Calimaya de Díaz González'),
(139694, 675, 'Capulhuac de Mirafuentes'),
(139711, 676, 'San Francisco Coacalco'),
(139715, 677, 'Coatepec Harinas'),
(139776, 678, 'Cocotitlán'),
(139789, 679, 'Coyotepec'),
(139795, 680, 'Cuautitlán'),
(139826, 681, 'Chalco de Díaz Covarrubias'),
(139906, 682, 'Chapa de Mota'),
(139944, 683, 'Chapultepec'),
(139952, 684, 'Chiautla'),
(139962, 685, 'Chicoloapan de Juárez'),
(139978, 686, 'Chiconcuac de Juárez'),
(139980, 687, 'Chimalhuacán'),
(139986, 688, 'Villa Donato Guerra'),
(140017, 689, 'Ecatepec de Morelos'),
(140024, 690, 'Ecatzingo de Hidalgo'),
(140034, 691, 'Huehuetoca'),
(140060, 692, 'Hueypoxtla'),
(140074, 693, 'Huixquilucan de Degollado'),
(140135, 694, 'Tlazala de Fabela'),
(140153, 695, 'Ixtapaluca'),
(140213, 696, 'Ixtapan de la Sal'),
(140247, 697, 'Ixtapan del Oro'),
(140267, 698, 'Ixtlahuaca de Rayón'),
(140329, 699, 'Xalatlaco'),
(140348, 700, 'Jaltenco'),
(140350, 701, 'Jilotepec de Molina Enríquez'),
(140415, 702, 'Santa Ana Jilotzingo'),
(140437, 703, 'Jiquipilco'),
(140518, 704, 'Ciudad de Jocotitlán'),
(140580, 705, 'Joquicingo de León Guzmán'),
(140593, 706, 'Juchitepec de Mariano Rivapalacio'),
(140622, 707, 'Lerma de Villada'),
(140694, 708, 'Malinalco'),
(140736, 709, 'Melchor Ocampo'),
(140747, 710, 'Metepec'),
(140768, 711, 'San Mateo Mexicaltzingo'),
(140772, 712, 'San Bartolo Morelos'),
(140819, 713, 'Naucalpan de Juárez'),
(140878, 714, 'Ciudad Nezahualcoyotl'),
(140885, 715, 'Santa Ana Nextlalpan'),
(140913, 716, 'Ciudad Nicolás Romero'),
(140957, 717, 'Nopaltepec'),
(140970, 718, 'Ocoyoacac'),
(141010, 719, 'Ocuilan de Arteaga'),
(141059, 720, 'El Oro de Hidalgo'),
(141103, 721, 'Otumba de Gómez Farías'),
(141151, 722, 'Otzoloapan'),
(141192, 723, 'Villa Cuauhtémoc'),
(141231, 724, 'Ozumba de Alzate'),
(141250, 725, 'Papalotla'),
(141253, 726, 'Los Reyes Acaquilpan'),
(141271, 727, 'Polotitlán de la Ilustración'),
(141300, 728, 'Santa María Rayón'),
(141309, 729, 'San Antonio la Isla'),
(141315, 730, 'San Felipe del Progreso'),
(141419, 731, 'San Martín de las Pirámides'),
(141440, 732, 'San Mateo Atenco'),
(141443, 733, 'San Simón de Guerrero'),
(141472, 734, 'Santo Tomás de los Plátanos'),
(141509, 735, 'San Francisco Soyaniquilpan'),
(141525, 736, 'Sultepec de Pedro Ascencio de Alquisiras'),
(141605, 737, 'Tecámac de Felipe Villanueva'),
(141657, 738, 'Tejupilco de Hidalgo'),
(141843, 739, 'Temamatla'),
(141869, 740, 'Temascalapa'),
(141898, 741, 'Temascalcingo de José María Velasco'),
(141964, 742, 'Temascaltepec de González'),
(142029, 743, 'Temoaya'),
(142093, 744, 'Tenancingo de Degollado'),
(142154, 745, 'Tenango del Aire'),
(142181, 746, 'Tenango de Arista'),
(142232, 747, 'Teoloyucan'),
(142238, 748, 'Teotihuacán de Arista'),
(142279, 749, 'Tepetlaoxtoc de Hidalgo'),
(142321, 750, 'Tepetlixpa'),
(142346, 751, 'Tepotzotlán'),
(142390, 752, 'Tequixquiac'),
(142404, 753, 'Texcaltitlán'),
(142439, 754, 'San Mateo Texcalyacac'),
(142444, 755, 'Texcoco de Mora'),
(142551, 756, 'Tezoyuca'),
(142565, 757, 'Santiago Tianguistenco de Galeana'),
(142603, 758, 'San Andrés Timilpan'),
(142630, 759, 'Tlalmanalco de Velázquez'),
(142680, 760, 'Tlalnepantla'),
(142685, 761, 'Tlatlaya'),
(142880, 762, 'Toluca de Lerdo'),
(142992, 763, 'Tonatico'),
(143007, 764, 'Tultepec'),
(143025, 765, 'Tultitlán de Mariano Escobedo'),
(143037, 766, 'Valle de Bravo'),
(143114, 767, 'San José Villa de Allende'),
(143189, 768, 'Villa del Carbón'),
(143248, 769, 'Villa Guerrero'),
(143292, 770, 'Villa Victoria'),
(143400, 771, 'Xonacatlán'),
(143421, 772, 'Zacazonapan'),
(143433, 773, 'Zacualpan'),
(143507, 774, 'San Miguel Zinacantepec'),
(143562, 775, 'Zumpahuacán'),
(143593, 776, 'Zumpango de Ocampo'),
(143676, 777, 'Cuautitlán Izcalli'),
(143689, 778, 'Xico'),
(143697, 779, 'Villa Luvianos'),
(143919, 780, 'San José del Rincón Centro'),
(304184, 2490, 'Zacatecas'),
(302699, 2480, 'Tepetongo'),
(300872, 2466, 'Morelos'),
(299375, 2454, 'Jerez de García Salinas'),
(297595, 2444, 'Fresnillo'),
(286886, 2431, 'Boxactún'),
(286879, 2430, 'Kankabchén Gamboa'),
(286877, 2429, 'Santo Domingo'),
(286872, 2332, 'Baca'),
(286728, 2329, 'Abalá'),
(286477, 2327, 'San Rafael'),
(286291, 2326, 'Poblado 10'),
(286229, 2325, 'Tatahuicapan'),
(286142, 2324, 'Carlos A. Carrillo'),
(285792, 2323, 'Tres Valles'),
(259181, 2114, 'Santa Catarina Ayometla'),
(259171, 2113, 'Santa Apolonia Teacalco'),
(258616, 2089, 'Tlaxcala de Xicohténcatl'),
(258262, 2079, 'Natívitas'),
(257391, 2061, 'Ciudad de Apizaco'),
(255485, 2052, 'Ciudad Tula'),
(255478, 2051, 'Tampico'),
(252556, 2046, 'Ciudad Río Bravo'),
(251712, 2045, 'Reynosa'),
(250911, 2040, 'Nuevo Laredo'),
(248902, 2035, 'Heroica Matamoros'),
(242375, 2013, 'Tenosique de Pino Suárez'),
(242228, 2011, 'Tacotalpa'),
(241574, 2005, 'Jalapa'),
(240881, 2001, 'Comalcalco'),
(240259, 1998, 'Cárdenas'),
(233842, 1967, 'Heroica Nogales'),
(233279, 1966, 'Navojoa'),
(229829, 1954, 'Hermosillo'),
(224906, 1941, 'Heroica Caborca'),
(222338, 1926, 'Agua Prieta'),
(221784, 1924, 'Navolato'),
(220964, 1923, 'Sinaloa de Leyva'),
(218720, 1918, 'Mazatlán'),
(217956, 1917, 'Guasave'),
(214746, 1912, 'Culiacán Rosales'),
(212807, 1856, 'Los Mochis'),
(212671, 1906, 'El Naranjo'),
(212583, 1905, 'Matlapa'),
(212455, 1904, 'Villa de Arista'),
(212277, 1903, 'Villa de Zaragoza'),
(203093, 1848, 'Bacalar'),
(202719, 1847, 'Tulum'),
(201096, 1843, 'Cancún'),
(199562, 1841, 'Isla Mujeres'),
(198908, 1839, 'Cozumel'),
(198171, 1835, 'San Joaquín'),
(197827, 1834, 'Santiago de Querétaro'),
(197674, 1833, 'Peñamiller'),
(197513, 1832, 'Pedro Escobedo'),
(197104, 1831, 'La Cañada'),
(194957, 1815, 'Santiago Zautla'),
(191568, 1717, 'Heróica Puebla de Zaragoza'),
(191065, 1706, 'Nicolás Bravo'),
(188345, 1640, 'San Vicente Coyotepec'),
(187832, 1622, 'Atlixco'),
(178720, 1176, 'San Juan Bautista Guelache'),
(178686, 1175, 'San Juan Bautista Cuicatlán'),
(178652, 1174, 'San Juan Bautista Coixtlahuaca'),
(178646, 1173, 'San Juan Bautista Atatlahuca'),
(178641, 1172, 'Ánimas Trujano'),
(174157, 998, 'Ciudad de Villaldama'),
(173530, 994, 'Hidalgo'),
(172148, 986, 'Monterrey'),
(170063, 978, 'Ciudad Benito Juárez'),
(163875, 951, 'Ciudad de Allende'),
(162106, 945, 'Tuxpan'),
(161790, 944, 'Tepic'),
(161021, 939, 'San Blas'),
(159973, 935, 'Xalisco'),
(159006, 929, 'Ahuacatlán'),
(158749, 925, 'Zacatepec de Hidalgo'),
(158656, 924, 'Yecapixtla'),
(158050, 914, 'Tepoztlán'),
(157317, 901, 'Cuernavaca'),
(157250, 900, 'Cuautla'),
(156844, 894, 'Pastor Ortiz'),
(156671, 893, 'Heróica Zitácuaro'),
(156235, 887, 'Yurécuaro'),
(156159, 885, 'Villamar'),
(155147, 880, 'Tuzantla'),
(138442, 655, 'Zapotlanejo'),
(137850, 651, 'Zapopan'),
(129675, 598, 'Puerto Vallarta'),
(124799, 570, 'Guadalajara'),
(123408, 561, 'Chapala'),
(119097, 529, 'Zapotlán de Juárez'),
(118320, 515, 'Tianguistengo'),
(117101, 495, 'Pachuca de Soto'),
(116190, 480, 'Juárez'),
(115448, 472, 'Huautla'),
(113466, 440, 'Zitlala'),
(112980, 438, 'Zapotitlán Tablas'),
(109412, 411, 'Olinalá'),
(107415, 393, 'Cutzamala de Pinzón'),
(104178, 367, 'Acapulco de Juárez'),
(102998, 358, 'Tarandacuao'),
(92557, 319, 'Vicente Guerrero'),
(92584, 320, 'Nuevo Ideal'),
(102217, 354, 'Santa Catarina'),
(102263, 355, 'Juventino Rosas'),
(92088, 317, 'Tlahualilo de Zaragoza'),
(92237, 318, 'Topia'),
(144058, 74, 'Guarda la Lagunita el Pueblito'),
(102505, 357, 'Silao de la Victoria'),
(144060, 15, 'San Miguel Agua Bendita Uno'),
(144061, 781, 'Santa María Tonanitla'),
(144063, 15, 'Colonia PEMEX'),
(144064, 15, 'Colonia las Chinampas'),
(144065, 15, 'Valle Verde'),
(102490, 356, 'Santiago Maravatío'),
(144067, 782, 'Acuitzio del Canje'),
(144068, 16, 'Los Aguacates'),
(144069, 16, 'La Angostura'),
(144070, 16, 'Aróstaro'),
(144071, 16, 'Arroyo Hondo'),
(144072, 16, 'El Auxilio (Los Tanques)'),
(156887, 17, 'Cajones'),
(156888, 17, 'Casahuatlan'),
(156889, 17, 'Coahuixtla'),
(156890, 75, 'Huajintlán'),
(156891, 17, 'Miahuatlán (El Cuiji)'),
(158815, 184, 'El Aguaje'),
(158816, 18, 'El Alacrán'),
(158817, 18, 'Amado Nervo'),
(158818, 183, 'La Morita (Anamorita)'),
(158819, 18, 'El Antigue'),
(163567, 58, 'La Gloria'),
(163568, 19, 'Los Ligeros'),
(163569, 185, 'La Muralla'),
(163570, 19, 'Seis de Enero (Las Bugambilias)'),
(163571, 19, 'Seis de Enero'),
(174297, 20, 'Agua Escondida (Joya Honda)'),
(174298, 20, 'Arroyo de Enmedio'),
(174299, 60, 'Arroyo de Pita'),
(174300, 182, 'Aserradero Segundo'),
(174301, 20, 'Barbasco'),
(187186, 21, 'Acultzingo'),
(187187, 21, 'La Cardenista (Colonia Lázaro Cárdenas)'),
(187188, 21, 'La Magdalena Tetela Morelos'),
(187189, 21, 'Cuautenco (La Cañería)'),
(187190, 21, 'San Agustín Tlaxco'),
(195216, 62, 'Agua Blanca'),
(195217, 22, 'El Apartadero'),
(195218, 181, 'El Aserrín (Ojo de Agua del Hornito)'),
(195219, 22, 'El Atorón'),
(195220, 22, 'El Batán'),
(198909, 23, 'Punta Celarain'),
(198910, 23, 'Punta Molas'),
(198911, 23, 'Las Palmitas'),
(198912, 23, 'El Cedral'),
(198913, 23, 'Palancar'),
(203465, 24, 'Potrero Agua Bendita'),
(203466, 24, 'El Aguaje'),
(203467, 24, 'Arenal de Morelos'),
(203468, 70, 'Barrancas'),
(203469, 24, 'Cañada Grande (El Bosque)'),
(212808, 25, 'El Aguajito'),
(212809, 25, 'Agua Nueva'),
(212810, 25, 'Ahome'),
(212811, 25, 'Los Algodones'),
(212812, 25, 'El Añil'),
(222313, 26, 'Chavoverachi'),
(222314, 26, 'La Estancia'),
(222315, 26, 'Maicobabi'),
(222316, 26, 'El Rodeo (El Rodeo de Aconchi)'),
(222317, 26, 'San Pablo (San Pablo de Aconchi)'),
(239789, 27, 'Agricultores del Norte 1ra. Sección'),
(239790, 27, 'El Águila'),
(239791, 27, 'Apatzingán'),
(239792, 27, 'El Arenal'),
(239793, 27, 'Arroyo el Triunfo 1ra. Sección'),
(242520, 28, 'Abasolo (Abasolito)'),
(242521, 28, 'Nuevo Morelos (Adolfo López Mateos)'),
(242522, 28, 'Los Añejos'),
(242523, 28, 'El Arrendador'),
(242524, 28, 'Buenos Aires'),
(257217, 29, 'Segunda Fracción de Olivares'),
(257218, 29, 'Ex-Hacienda San José Atlanga'),
(257219, 29, 'Colonia Agrícola San Luis'),
(257220, 29, 'San Pedro Ecatepec'),
(257221, 29, 'Santa Clara Ozumba'),
(259187, 30, 'Barranquillas'),
(259188, 30, 'Colexta'),
(259189, 30, 'Cruz Verde'),
(259190, 30, 'Dos Veredas'),
(259191, 30, 'El Encinal'),
(286729, 31, 'Mucuyché'),
(286730, 31, 'Sihunchén'),
(286731, 31, 'Temozón'),
(286732, 31, 'Uayalceh'),
(286733, 31, 'Peba'),
(296953, 32, 'Achoquen'),
(296954, 32, 'Las Anonas'),
(296955, 32, 'Rancho de Ayo'),
(296956, 32, 'Banco de Piedra'),
(296957, 32, 'La Calera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL COMMENT 'Relación con estados',
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Municipios de la Republica Mexicana';

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `id_estado`, `nombre`) VALUES
(1, 1, 'Aguascalientes'),
(2, 1, 'Asientos'),
(3, 1, 'Calvillo'),
(4, 1, 'Cosío'),
(5, 1, 'Jesus Maria'),
(6, 1, 'Pabellón de Arteaga'),
(7, 1, 'Rincón de Romos'),
(8, 1, 'San José de Gracia'),
(9, 1, 'Tepezalá'),
(10, 1, 'El Llano'),
(11, 1, 'San Francisco de los Romo'),
(12, 2, 'Ensenada'),
(13, 2, 'Mexicali'),
(14, 2, 'Tecate'),
(15, 2, 'Tijuana'),
(16, 2, 'Playas de Rosarito'),
(17, 3, 'Comondu'),
(18, 3, 'Mulegé'),
(19, 3, 'La Paz'),
(20, 3, 'Los Cabos'),
(21, 3, 'Loreto'),
(22, 4, 'Calkiní'),
(23, 4, 'Campeche'),
(24, 4, 'Carmen'),
(25, 4, 'Champotón'),
(26, 4, 'Hecelchakán'),
(27, 4, 'Hopelchén'),
(28, 4, 'Palizada'),
(29, 4, 'Tenabo'),
(30, 4, 'Escárcega'),
(31, 4, 'Calakmul'),
(32, 4, 'Candelaria'),
(58, 5, 'Progreso'),
(60, 5, 'Sabinas'),
(62, 5, 'Saltillo'),
(70, 5, 'Zaragoza'),
(71, 6, 'Armería'),
(72, 6, 'Colima'),
(73, 6, 'Comala'),
(74, 6, 'Coquimatlán'),
(75, 6, 'Cuauhtémoc'),
(181, 7, 'Tuxtla Chico'),
(182, 7, 'Tuzantan'),
(183, 7, 'Tzimol'),
(184, 7, 'Unión Juárez'),
(251, 8, 'Praxedis G. Guerrero'),
(252, 8, 'Riva Palacio'),
(253, 8, 'Rosales'),
(266, 9, 'Azcapotzalco'),
(267, 9, 'Coyoacán'),
(268, 9, 'Cuajimalpa de Morelos'),
(269, 9, 'Gustavo A. Madero'),
(270, 9, 'Iztacalco'),
(271, 9, 'Iztapalapa'),
(272, 9, 'La Magdalena Contreras'),
(273, 9, 'Milpa Alta'),
(274, 9, 'Álvaro Obregón'),
(275, 9, 'Tláhuac'),
(276, 9, 'Tlalpan'),
(277, 9, 'Xochimilco'),
(278, 9, 'Benito Juárez'),
(279, 9, 'Cuauhtémoc'),
(280, 9, 'Miguel Hidalgo'),
(281, 9, 'Venustiano Carranza'),
(317, 10, 'Tlahualilo'),
(318, 10, 'Topia'),
(319, 10, 'Vicente Guerrero'),
(320, 10, 'Nuevo Ideal'),
(354, 11, 'Santa Catarina'),
(355, 11, 'Santa Cruz de Juventino Rosas'),
(356, 11, 'Santiago Maravatío'),
(357, 11, 'Silao de la Victoria'),
(358, 11, 'Tarandacuao'),
(367, 12, 'Acapulco de Juárez'),
(393, 12, 'Cutzamala de Pinzón'),
(411, 12, 'Olinalá'),
(438, 12, 'Zapotitlán Tablas'),
(440, 12, 'Zitlala'),
(472, 13, 'Huautla'),
(480, 13, 'Juárez Hidalgo'),
(495, 13, 'Pachuca de Soto'),
(515, 13, 'Tianguistengo'),
(529, 13, 'Zapotlán de Juárez'),
(561, 14, 'Chapala'),
(570, 14, 'Guadalajara'),
(598, 14, 'Puerto Vallarta'),
(651, 14, 'Zapopan'),
(655, 14, 'Zapotlanejo'),
(657, 15, 'Acambay de Ruíz Castañeda'),
(658, 15, 'Acolman'),
(659, 15, 'Aculco'),
(660, 15, 'Almoloya de Alquisiras'),
(661, 15, 'Almoloya de Juárez'),
(662, 15, 'Almoloya del Río'),
(663, 15, 'Amanalco'),
(664, 15, 'Amatepec'),
(665, 15, 'Amecameca'),
(666, 15, 'Apaxco'),
(667, 15, 'Atenco'),
(668, 15, 'Atizapán'),
(669, 15, 'Atizapán de Zaragoza'),
(670, 15, 'Atlacomulco'),
(671, 15, 'Atlautla'),
(672, 15, 'Axapusco'),
(673, 15, 'Ayapango'),
(674, 15, 'Calimaya'),
(675, 15, 'Capulhuac'),
(676, 15, 'Coacalco de Berriozábal'),
(677, 15, 'Coatepec Harinas'),
(678, 15, 'Cocotitlán'),
(679, 15, 'Coyotepec'),
(680, 15, 'Cuautitlán'),
(681, 15, 'Chalco'),
(682, 15, 'Chapa de Mota'),
(683, 15, 'Chapultepec'),
(684, 15, 'Chiautla'),
(685, 15, 'Chicoloapan'),
(686, 15, 'Chiconcuac'),
(687, 15, 'Chimalhuacán'),
(688, 15, 'Donato Guerra'),
(689, 15, 'Ecatepec de Morelos'),
(690, 15, 'Ecatzingo'),
(691, 15, 'Huehuetoca'),
(692, 15, 'Hueypoxtla'),
(693, 15, 'Huixquilucan'),
(694, 15, 'Isidro Fabela'),
(695, 15, 'Ixtapaluca'),
(696, 15, 'Ixtapan de la Sal'),
(697, 15, 'Ixtapan del Oro'),
(698, 15, 'Ixtlahuaca'),
(699, 15, 'Xalatlaco'),
(700, 15, 'Jaltenco'),
(701, 15, 'Jilotepec'),
(702, 15, 'Jilotzingo'),
(703, 15, 'Jiquipilco'),
(704, 15, 'Jocotitlán'),
(705, 15, 'Joquicingo'),
(706, 15, 'Juchitepec'),
(707, 15, 'Lerma'),
(708, 15, 'Malinalco'),
(709, 15, 'Melchor Ocampo'),
(710, 15, 'Metepec'),
(711, 15, 'Mexicaltzingo'),
(712, 15, 'Morelos'),
(713, 15, 'Naucalpan de Juárez'),
(714, 15, 'Nezahualcoyotl'),
(715, 15, 'Nextlalpan'),
(716, 15, 'Nicolás Romero'),
(717, 15, 'Nopaltepec'),
(718, 15, 'Ocoyoacac'),
(719, 15, 'Ocuilan'),
(720, 15, 'El Oro'),
(721, 15, 'Otumba'),
(722, 15, 'Otzoloapan'),
(723, 15, 'Otzolotepec'),
(724, 15, 'Ozumba'),
(725, 15, 'Papalotla'),
(726, 15, 'La Paz'),
(727, 15, 'Polotitlán'),
(728, 15, 'Rayón'),
(729, 15, 'San Antonio la Isla'),
(730, 15, 'San Felipe del Progreso'),
(731, 15, 'San Martín de las Pirámides'),
(732, 15, 'San Mateo Atenco'),
(733, 15, 'San Simón de Guerrero'),
(734, 15, 'Santo Tomás'),
(735, 15, 'Soyaniquilpan de Juárez'),
(736, 15, 'Sultepec'),
(737, 15, 'Tecámac'),
(738, 15, 'Tejupilco'),
(739, 15, 'Temamatla'),
(740, 15, 'Temascalapa'),
(741, 15, 'Temascalcingo'),
(742, 15, 'Temascaltepec'),
(743, 15, 'Temoaya'),
(744, 15, 'Tenancingo'),
(745, 15, 'Tenango del Aire'),
(746, 15, 'Tenango del Valle'),
(747, 15, 'Teoloyucan'),
(748, 15, 'Teotihuacán'),
(749, 15, 'Tepetlaoxtoc'),
(750, 15, 'Tepetlixpa'),
(751, 15, 'Tepotzotlán'),
(752, 15, 'Tequixquiac'),
(753, 15, 'Texcaltitlán'),
(754, 15, 'Texcalyacac'),
(755, 15, 'Texcoco'),
(756, 15, 'Tezoyuca'),
(757, 15, 'Tianguistenco'),
(758, 15, 'Timilpan'),
(759, 15, 'Tlalmanalco'),
(760, 15, 'Tlalnepantla de Baz'),
(761, 15, 'Tlatlaya'),
(762, 15, 'Toluca'),
(763, 15, 'Tonatico'),
(764, 15, 'Tultepec'),
(765, 15, 'Tultitlán'),
(766, 15, 'Valle de Bravo'),
(767, 15, 'Villa de Allende'),
(768, 15, 'Villa del Carbón'),
(769, 15, 'Villa Guerrero'),
(770, 15, 'Villa Victoria'),
(771, 15, 'Xonacatlán'),
(772, 15, 'Zacazonapan'),
(773, 15, 'Zacualpan'),
(774, 15, 'Zinacantepec'),
(775, 15, 'Zumpahuacán'),
(776, 15, 'Zumpango'),
(777, 15, 'Cuautitlán Izcalli'),
(778, 15, 'Valle de Chalco Solidaridad'),
(779, 15, 'Luvianos'),
(780, 15, 'San José del Rincón'),
(781, 15, 'Tonanitla'),
(880, 16, 'Tuzantla'),
(885, 16, 'Villamar'),
(887, 16, 'Yurécuaro'),
(893, 16, 'Zitácuaro'),
(894, 16, 'José Sixto Verduzco'),
(900, 17, 'Cuautla'),
(901, 17, 'Cuernavaca'),
(914, 17, 'Tepoztlán'),
(924, 17, 'Yecapixtla'),
(925, 17, 'Zacatepec'),
(929, 18, 'Ahuacatlán'),
(935, 18, 'Xalisco'),
(939, 18, 'San Blas'),
(944, 18, 'Tepic'),
(945, 18, 'Tuxpan'),
(951, 19, 'Allende'),
(978, 19, 'Juárez'),
(986, 19, 'Monterrey'),
(994, 19, 'Hidalgo'),
(998, 19, 'Villaldama'),
(1172, 20, 'Ánimas Trujano'),
(1173, 20, 'Magdalena Yodocono de Porfirio Díaz'),
(1174, 20, 'Villa de Zaachila'),
(1175, 20, 'San Mateo Yucutindoo'),
(1176, 20, 'Zapotitlán Lagunas'),
(1622, 21, 'Atlixco'),
(1640, 21, 'Coyotepec'),
(1706, 21, 'Nicolás Bravo'),
(1717, 21, 'Puebla'),
(1815, 21, 'Zautla'),
(1831, 22, 'El Marqués'),
(1832, 22, 'Pedro Escobedo'),
(1833, 22, 'Peñamiller'),
(1834, 22, 'Querétaro'),
(1835, 22, 'San Joaquín'),
(1839, 23, 'Cozumel'),
(1841, 23, 'Isla Mujeres'),
(1843, 23, 'Benito Juárez'),
(1847, 23, 'Tulum'),
(1848, 23, 'Bacalar'),
(1856, 24, 'Cerritos'),
(1903, 24, 'Zaragoza'),
(1904, 24, 'Villa de Arista'),
(1905, 24, 'Matlapa'),
(1906, 24, 'El Naranjo'),
(1912, 25, 'Culiacán'),
(1917, 25, 'Guasave'),
(1918, 25, 'Mazatlán'),
(1923, 25, 'Sinaloa'),
(1924, 25, 'Navolato'),
(1926, 26, 'Agua Prieta'),
(1941, 26, 'Caborca'),
(1954, 26, 'Hermosillo'),
(1966, 26, 'Navojoa'),
(1967, 26, 'Nogales'),
(1998, 27, 'Cárdenas'),
(2001, 27, 'Comalcalco'),
(2005, 27, 'Jalapa'),
(2011, 27, 'Tacotalpa'),
(2013, 27, 'Tenosique'),
(2035, 28, 'Matamoros'),
(2040, 28, 'Nuevo Laredo'),
(2045, 28, 'Reynosa'),
(2046, 28, 'Río Bravo'),
(2051, 28, 'Tampico'),
(2052, 28, 'Tula'),
(2061, 29, 'Apizaco'),
(2079, 29, 'Natívitas'),
(2089, 29, 'Tlaxcala'),
(2113, 29, 'Santa Apolonia Teacalco'),
(2114, 29, 'Santa Catarina Ayometla'),
(2323, 30, 'Tres Valles'),
(2324, 30, 'Carlos A. Carrillo'),
(2325, 30, 'Tatahuicapan de Juárez'),
(2326, 30, 'Uxpanapa'),
(2327, 30, 'San Rafael'),
(2329, 31, 'Abalá'),
(2332, 31, 'Baca'),
(2429, 31, 'Umán'),
(2430, 31, 'Valladolid'),
(2431, 31, 'Xocchel'),
(2444, 32, 'Fresnillo'),
(2454, 32, 'Jerez'),
(2466, 32, 'Morelos'),
(2480, 32, 'Tepetongo'),
(2490, 32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penalizaciones`
--

CREATE TABLE `penalizaciones` (
  `id_penalizaciones` int(11) NOT NULL,
  `motivo` varchar(355) NOT NULL,
  `sancion` varchar(355) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `penalizaciones`
--

INSERT INTO `penalizaciones` (`id_penalizaciones`, `motivo`, `sancion`) VALUES
(1, 'No presenta código de Acceso - 1D', 'Acceso denegado 1 día'),
(2, 'El usuario no respeto el cajón asignado 1-D', 'Acceso denegado 1 día'),
(3, 'Información del usuario no coincide 1-D', 'Acceso denegado 1 día'),
(4, 'El usuario ne pertenece a la  institución 30-D', 'Retiro de tarjetón 1 mes'),
(5, 'No presenta su tarjeton 0-D', 'Se le niega el acceso temporalmente'),
(6, 'Intento de Robo', 'Expulsión definitiva'),
(7, 'No presenta tarjetón', 'Se le niega el acceso temporalmente'),
(8, 'Choque 5-D', 'Acceso denegado 5 días');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_persona` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ap_paterno` varchar(45) NOT NULL,
  `ap_materno` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `curp` varchar(15) NOT NULL,
  `telefonoCasa` int(10) NOT NULL,
  `telefonoCelular` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `licencia` varchar(45) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `id_tipo_usuarios` int(11) NOT NULL,
  `id_carreras` int(11) NOT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_persona`, `matricula`, `turno`, `nombre`, `ap_paterno`, `ap_materno`, `fecha_nacimiento`, `sexo`, `curp`, `telefonoCasa`, `telefonoCelular`, `email`, `licencia`, `foto`, `id_tipo_usuarios`, `id_carreras`, `id_vehiculo`, `id_direccion`) VALUES
(1, 10371131, 'Vespertino', 'MARTIN DE JESUS', 'MUNOZ', 'CHAVEZ', '1992-12-21', 'Masculino', 'mucm921221hmcxh', 57316978, 57316979, 'martin.mch21@gmail.com', 'N11952803', '329466_188546587942882_982482612_o.jpg', 2, 3, 1, 1),
(2, 10371132, 'Vespertino', 'JAIME', 'LOPEZ', 'HERNANDEZ', '1990-10-05', 'Masculino', 'jaimeh397765crh', 2147483647, 2147483647, 'jaime@gmail.com', '9ro-edd-54', 'images.jpg', 2, 1, 2, 2),
(3, 10371133, 'Vespertino', 'javier', 'ortega', 'suarez', '1989-01-31', 'Masculino', 'jaimeh398599esd', 2147483647, 2147483647, 'javier@mail.com', 'N119568486', 'img_00461.jpg', 2, 2, 4, 3),
(4, 10371134, 'Vespertino', 'andrea', 'hernandez', 'ramirez', '1990-12-31', 'Femenino', 'ahram21221hmcxh', 2147483647, 2147483647, 'andrea@mail.com', 'N119687468', 'uno.jpg', 4, 4, 5, 4),
(5, 10371135, 'Vespertino', 'martha', 'soria', 'rodriguez', '1991-03-01', 'Femenino', 'msrr921221hmcxh', 2147483647, 2147483647, 'martha@mail.com', 'N686748655', 'martha.jpg', 2, 5, 3, 5),
(6, 153111008, 'Vespertino', 'jesus', 'guzman', 'sanchez', '1977-12-31', 'Masculino', 'musdjduew8w7868', 2147483647, 2147483647, 'jesus@mail.com', 'N845367654', 'imagenes-de-personas.jpg', 3, 9, 6, 6),
(7, 153111009, 'Vespertino', 'jared', 'zepeda', 'suarez', '2015-12-31', 'Masculino', 'jaimeh397765crh', 2147483647, 2147483647, 'jared@mail.com', 'n989468542', 'indice.jpg', 1, 8, 7, 7),
(8, 153111010, 'Vespertino', 'juana', 'trujillo', 'carmona', '1979-04-01', 'Femenino', 'juandhuid74dew8', 2147483647, 2147483647, 'juana@mail.com', 'n321238464', 'indicsssse.jpg', 3, 7, 8, 8),
(9, 153111011, 'Vespertino', 'diana', 'grecia', 'garcia', '1987-06-25', 'Femenino', 'iihdfdfg787sdds', 2147483647, 2147483647, 'diana@mail.com', 'n789685541', 'PKKgLto.jpg', 3, 6, 9, 9),
(10, 153111012, 'Vespertino', 'viridiana', 'cervantes', 'jimenez', '1997-08-23', 'Femenino', 'fgder856456548r', 2147483647, 2147483647, 'viridiana@mail.com', 'li78984865', 'images_(2).jpg', 3, 5, 10, 10),
(11, 10371231, 'Vespertino', 'luis', 'martinez', 'ochoa', '1985-05-02', 'Masculino', 'luisaji745s4556', 2147483647, 2147483647, 'luis@mail.com', 'li89456sd3', 'INFANTIL.jpg', 2, 7, 11, 11),
(12, 2147483647, 'Vespertino', 'MARTIN', 'CHAVEZ', 'MUNOZ', '1990-12-21', 'Masculino', 'mucm823823jjaji', 57316978, 57316975, 'martin@mail.com', 'NWJ7674545', '20140928_140851.jpg', 1, 3, 12, 0),
(13, 1531111111, 'Matutino', 'Kevin', 'Zepeda', 'Suarez', '1990-08-05', 'Masculino', 'Se desconoce 71', 2147483647, 2147483647, 'kevin@mail.com', 'Li-usuj817', 'unnamed_(1).png', 2, 3, 13, 13),
(14, 153111029, 'Vespertino', 'arturo', 'sanchez', 'benitez', '0000-00-00', 'Femenino', '54376543', 1234654, 8765432, 'arturo.sanchez@gmail.com', '124235', 'Diseño.PNG', 3, 3, NULL, 18),
(15, 153111029, 'Matutino', 'victor', 'D', 'P', '1989-07-17', 'Masculino', '234567tyu', 8765432, 1234567890, 'victor.dp@gmail.com', '1234', '1dfca6f754f1ea852d3665e9bcb0c884.jpg', 2, 3, NULL, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pp_detalle`
--

CREATE TABLE `pp_detalle` (
  `id_detalle` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_penalizaciones` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date NOT NULL,
  `status` char(1) NOT NULL COMMENT '0:Expirada | 1:Vigente'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pp_detalle`
--

INSERT INTO `pp_detalle` (`id_detalle`, `id_persona`, `id_penalizaciones`, `descripcion`, `fecha_inicio`, `fecha_fin`, `status`) VALUES
(1, 2, 1, 'no podrá ingresar con el automóvil 1 día ', '2016-08-05', '2016-08-08', '0'),
(2, 8, 4, 'no pertenece', '2016-08-05', '2016-08-09', '0'),
(3, 3, 2, 'no respeto', '2016-08-05', '2016-08-08', '0'),
(4, 6, 2, 'No respeto el lugar', NULL, '2016-08-08', '0'),
(5, 8, 1, '--', NULL, '2016-08-08', '0'),
(6, 2, 2, '...', NULL, '2016-08-08', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id_tipo_usuarios` int(11) NOT NULL,
  `descripcion_usuario` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id_tipo_usuarios`, `descripcion_usuario`) VALUES
(1, 'Administrador'),
(2, 'Alumno'),
(3, 'Empleados'),
(4, 'Personal de seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`, `id_persona`) VALUES
(1, 'martin', '925d7518fc597af0e43f5606f9a51512', 1),
(2, 'jaime', 'fde2fdb1dbf604aede0ffee76d26e4ce', 2),
(3, 'javier', '3c9c03d6008a5adf42c2a55dd4a1a9f2', 3),
(4, 'andrea', '1c42f9c1ca2f65441465b43cd9339d6c', 4),
(5, 'martha', '3003051f6d158f6687b8a820c46bfa80', 5),
(6, 'jesus', '110d46fcd978c24f306cd7fa23464d73', 6),
(7, 'jared', 'b620e68b3bf4387bf7c43d51bd12910b', 7),
(8, 'juana', '9b4aaf9b8bbe6677bd119c356433a318', 8),
(9, 'diana', '3a23bb515e06d0e944ff916e79a7775c', 9),
(10, 'viridiana', '6792ee5270c9b8664fad7213d3ac7e71', 10),
(11, 'luis', '3acdd6f944badb666ea2c22a1fc9140d', 11),
(12, '@marks', '84374ee67fcded601fa8433a4b4b3c9b', 12),
(13, 'Kevin', '9d5e3ecdeb4cdb7acfd63075ae046672', 13),
(14, 'arturo', '65deafcf3c1ad1751415736c4cc11f76', 14),
(15, 'victorDP', '202cb962ac59075b964b07152d234b70', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `placas` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `foto_vehiculo` varchar(255) NOT NULL,
  `color` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `ano` year(4) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='							';

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `placas`, `modelo`, `foto_vehiculo`, `color`, `descripcion`, `ano`, `id_persona`) VALUES
(1, '9NE5EC', 'CHEVY', 'chevy10-0_1.jpg', 'Blanco', 'CHEVY BLANCO', 2013, 1),
(2, '558ddsd568', 'jetta', '225px-VW_Jetta_IV_Europa_2007.JPG', 'Blanco', 'jetta blanco', 2009, 2),
(3, '684565ds55', 'toyota', '799px-2006-2009_Toyota_Camry.jpg', 'Negro', 'toyota negro', 2011, 5),
(4, 'sd8486sd4d', 'nissan', 'nissan.jpg', 'Negro', 'nissan negro', 2015, 3),
(5, '86sd48f86d', 'ferrari', 'ferrari.jpg', 'Azul', 'ferrari azul', 2015, 4),
(6, '86486sd484', 'nissan', '2006-nissan-altima-2.jpg', 'Blanco', 'nissan blanco', 2004, 6),
(7, '485sd55435', 'auto', '-50-alquiler-de-carros-en-bogota-tel4680788-rent-a-car-22302-MCO20227468689_012015-F.jpg', 'Blanco', 'auto nuevo', 2016, 7),
(8, '8646sd6sd6', 'ford', 'ford-galaxy_0.jpg', 'Negro', 'color negro', 2008, 8),
(9, '8sd8d5dfes', 'jetta', '225px-VW_Jetta_IV_Europa_20071.JPG', 'Blanco', 'jetta', 2011, 9),
(10, '558ddsd568', 'automovil ', 'images_(3).jpg', 'Negro', 'centra', 2016, 10),
(11, 'seds56s455', 'ferrari', 'blanco.jpg', 'Blanco', 'carro blanco', 2016, 11),
(12, 'mucm-ss-23', 'FERRARI', 'ferrari1.jpg', 'Azul', 'FERRARI AZUL', 2013, 12),
(13, '6513cs6s-s', 'chevy', '16387420_410532432627789_7099717043637729588_n.jpg', 'Rojo', 'auto', 2017, 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id_acceso`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estacionamiento` (`id_estacionamiento`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carreras`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`id_estacionamiento`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id_localidad`),
  ADD KEY `municipio_id` (`id_municipio`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `estado_id` (`id_estado`);

--
-- Indices de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
  ADD PRIMARY KEY (`id_penalizaciones`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_vehiculo` (`id_vehiculo`),
  ADD KEY `id_tipo_usuarios` (`id_tipo_usuarios`),
  ADD KEY `id_carreras` (`id_carreras`),
  ADD KEY `id_direccion` (`id_direccion`);

--
-- Indices de la tabla `pp_detalle`
--
ALTER TABLE `pp_detalle`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id_tipo_usuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carreras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
  MODIFY `id_penalizaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `pp_detalle`
--
ALTER TABLE `pp_detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id_tipo_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
