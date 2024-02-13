-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 22:25:01
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `igo_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `curp` varchar(18) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apaterno` varchar(20) NOT NULL,
  `amaterno` varchar(20) NOT NULL,
  `fechanac` date NOT NULL,
  `grado` tinyint(4) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`curp`, `nombre`, `apaterno`, `amaterno`, `fechanac`, `grado`, `telefono`, `correo`, `estado`) VALUES
('LOMV160131MCLPCRA5', 'Virginia', 'Lopez', 'Macias', '2016-01-31', 1, 5321178960, 'shdhsdjhfjkdf@outlook.com', 'Coahuila de Zaragoza'),
('MEPM101223HTCDRNA1', 'Manuel', 'Medina', 'Pérez', '2010-12-23', 6, 5589763254, 'snsjhnjskaksn@gmail.com', 'Tabasco'),
('NATA960611HQTBRN06', 'Angel Isaac', 'Nabor', 'Torres', '2016-06-11', 1, 4425783038, 'a.isaac.nabor.torres@nube.unadmexico.mx', 'Querétaro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`) VALUES
('resp_escolar', 'unadm_responsable');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`curp`),
  ADD UNIQUE KEY `curp` (`curp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
