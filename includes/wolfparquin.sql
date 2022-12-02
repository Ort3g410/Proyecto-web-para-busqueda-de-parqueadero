-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-11-2022 a las 22:20:45
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wolfparquin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueaderos`
--

DROP TABLE IF EXISTS `parqueaderos`;
CREATE TABLE IF NOT EXISTS `parqueaderos` (
  `id_parq` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) DEFAULT NULL,
  `direccion` varchar(128) DEFAULT NULL,
  `ubicacion` varchar(128) DEFAULT NULL,
  `disponibles` int(20) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_parq`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parqueaderos`
--

INSERT INTO `parqueaderos` (`id_parq`, `nombre`, `direccion`, `ubicacion`, `disponibles`, `fecha_registro`) VALUES
(2, 'Wolfparquin\r\n', 'Cl. 62 #5-88', 'Chapinero', 4, '2022-11-25 22:03:45'),
(3, 'Parqueadero la 68', 'Av. Alberto Lleras Camargo #6714', 'Chapinero', 3, '2022-11-25 22:09:50'),
(4, 'Parqueadero de la fe', 'Cl. 69 #10a - 36', 'Chapinero', 1, '2022-11-25 22:09:50'),
(5, 'Parqueadero la embajada', 'Cl. 74 #6-77 a 6-1', 'Chapinero', 0, '2022-11-25 22:09:50'),
(6, 'Central parking', 'Cl. 72', 'Chapinero', 7, '2022-11-25 22:09:50'),
(7, 'Punto 6 parqueadero', 'Cl. 77 #10-2 a 10-98', 'Chapinero', 5, '2022-11-25 22:09:50'),
(8, 'Parqueadero Maria', 'Cra. 4 #91-19', 'Chapinero', 0, '2022-11-25 22:09:50'),
(9, 'Parqueadero publica', 'Cl. 57 #9-67 a 9-1', 'Chapinero', 2, '2022-11-25 22:09:50'),
(10, 'Parqueadero Galan', 'Cra. 79c Bis #58n Sur-34 a 58n Sur-2', 'Bosa', 5, '2022-11-25 22:13:25'),
(11, '80 parqueadero', 'Ak. 80', 'Bosa', 6, '2022-11-25 22:13:25'),
(12, 'Parqueadero Principal Bosa', 'Cra. 80i #61 Sur-1 a 61 Sur-49', 'Bosa', 4, '2022-11-25 22:13:25'),
(13, 'Parqueadero las brisas', 'Cra. 80h #60 Sur-90 a 60 Sur-2', 'Bosa', 8, '2022-11-25 22:13:25'),
(14, 'Parqueadero lider', 'Cl. 63 Sur #79b-87 a 79b-1', 'Bosa', 2, '2022-11-25 22:13:25'),
(15, 'Parqueadero el colegio', 'Cl. 65j Sur #78j-2 a 78j-86', 'Bosa', 3, '2022-11-25 22:13:25'),
(16, 'Parqueadero idelsa', 'Tv. 80d #66 Sur-82 a 66 Sur-8', 'Bosa', 4, '2022-11-25 22:13:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) DEFAULT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  `cedula` int(128) DEFAULT NULL,
  `contrasena` varchar(128) DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre`, `cedula`, `contrasena`, `fecha_creacion`) VALUES
(4, 'javier9952@hotmail.com', 'Javier Gonzalez', 99999, '$2y$10$4ne2IYjroJjt/yE.TdpOyetchunBJcjgi9wXHhN7Y4b3GHP4p3yhe', '2022-11-25 21:23:13'),
(3, 'jjgonzalez@cobranzasbeta.com.co', 'Jhonatan Beta', 123456, '$2y$10$F03FNemmzJWD98CorWuVNOnkudLSx4MrAn2.tIahqBmxYAAg6jhN.', '2022-11-25 19:43:48'),
(5, 'abc@abc.com', 'abc', 12345678, '$2y$10$TnteElNtbWlpiQqLs1njzOZ9vD6hIy1LKyD8F8niRFK0FswJi5xIq', '2022-11-25 21:28:31'),
(6, 'aaa@aaa.com', 'aaa', 1111, '$2y$10$jzywREKFhvtpoCGAxU1qCOax4khRXh57OsYyxE5Lyft1FA1pnkgZO', '2022-11-25 21:31:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
