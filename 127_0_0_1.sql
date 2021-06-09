-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 08, 2021 at 01:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marshall`
--
CREATE DATABASE IF NOT EXISTS `marshall` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `marshall`;

-- --------------------------------------------------------

--
-- Table structure for table `apunte`
--

DROP TABLE IF EXISTS `apunte`;
CREATE TABLE IF NOT EXISTS `apunte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenido_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `url` varchar(500) NOT NULL,
  `tipo` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contenido_id` (`contenido_id`),
  KEY `tipo_apunte` (`tipo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apunte`
--

INSERT INTO `apunte` (`id`, `contenido_id`, `nombre`, `url`, `tipo`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 1, 'apunte relacionado a integrales', 'N/A', 1, '2021-06-07 18:37:07', '2021-06-07 18:37:07'),
(2, 1, 'apunte relacionado a integrales', 'N/A', 1, '2021-06-07 18:38:05', '2021-06-07 18:38:05'),
(3, 2, 'apunte relacionado al contenido 2', 'https://web.microsoftstream.com/video/fdbd89cb-d011-4705-9232-24aeae4abb9b', 3, '2021-06-05 06:50:08', '2021-06-07 18:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `apunte_tipo`
--

DROP TABLE IF EXISTS `apunte_tipo`;
CREATE TABLE IF NOT EXISTS `apunte_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apunte_tipo`
--

INSERT INTO `apunte_tipo` (`id`, `nombre`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'documento de texto', '2021-06-05 03:23:51', '2021-06-07 21:20:41'),
(2, 'imagen', '2021-06-05 03:24:22', '2021-06-05 03:24:22'),
(3, 'video', '2021-06-05 03:24:40', '2021-06-05 03:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `contenido`
--

DROP TABLE IF EXISTS `contenido`;
CREATE TABLE IF NOT EXISTS `contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contenido`
--

INSERT INTO `contenido` (`id`, `nombre`, `descripcion`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'matematicas', 'manera de integrar funciones y comprobar densidad', '2021-06-07 18:23:33', '2021-06-07 18:23:33'),
(2, 'taller multimedios', 'creacion de plataforma web en php', '2021-06-07 18:24:24', '2021-06-07 18:24:24'),
(3, 'ing software', 'evaluacion diagramas en visual paradigm', '2021-06-07 18:25:01', '2021-06-07 18:25:01'),
(4, 'karioka', '2 trios, 1 trio 1 escala, 2 escalas, 3 trios, 2 trios y 1 escala...etc', '2021-06-04 02:05:29', '2021-06-07 18:28:25'),
(5, 'morocha', 'tipo de galleta cubierta de chocolate (no tiene relacion con la casa de los dibujos)', '2021-06-04 02:08:43', '2021-06-07 18:29:12'),
(6, 'capitanazo', 'mÃ¡s fuerte que superman', '2021-06-04 02:09:11', '2021-06-07 18:29:51'),
(7, 'provida', 'estoy cambiando el insulto, actualizando el insulto, que deje de descripcion a provida', '2021-06-04 20:03:45', '2021-06-04 21:21:04'),
(8, 'limites', 'este serÃ¡ un contenidi mÃ¡s largo para saber si se ajusta el texto o sigue pasando de largo y no se ajusta a la pantalla', '2021-06-04 20:28:00', '2021-06-04 20:28:00'),
(9, 'elmismisimo', 'este serÃ¡ un contenidi mÃ¡s largo para saber si se ajusta el texto o sigue pasando de largo y no se ajusta a la pantalla, este serÃ¡ un contenidi mÃ¡s largo para saber si se ajusta el texto o sigue pasando de largo y no se ajusta a la pantalla', '2021-06-04 20:28:19', '2021-06-04 20:28:19'),
(10, 'dracula', 'distintos tipos de sangre para una buena dieta', '2021-06-07 18:26:50', '2021-06-07 18:26:50'),
(11, 'HBO', 'peliculas para repetir todas las semanas sin nuevo contenido', '2021-06-07 18:27:27', '2021-06-07 18:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `creacion_clave` datetime NOT NULL,
  `expira_clave` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `codigo`, `creacion_clave`, `expira_clave`) VALUES
(1, 'marshall', 'marshaxgallardo2@gmail.com', 'probando123', '2021-05-29 20:27:10', '2021-05-29 20:27:10');
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
