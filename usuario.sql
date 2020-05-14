-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2020 a las 21:33:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `Usu_Identificacion` int(11) NOT NULL,
  `Usu_Nombre1` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usu_Nombre2` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usu_Apellido1` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usu_Apellido2` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usu_Sexo` varchar(8) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usu_User` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usu_Celular` bigint(20) NOT NULL,
  `Usu_Telefono` int(7) NOT NULL,
  `Usu_Fax` int(11) NOT NULL,
  `Usu_Ciudad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usu_CodPostal` int(11) NOT NULL,
  `Usu_Correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`Usu_Identificacion`, `Usu_Nombre1`, `Usu_Nombre2`, `Usu_Apellido1`, `Usu_Apellido2`, `Usu_Sexo`, `Usu_User`, `Usu_Celular`, `Usu_Telefono`, `Usu_Fax`, `Usu_Ciudad`, `Usu_CodPostal`, `Usu_Correo`) VALUES
(123, 'juan', 'jose', 'hernandez', '', 'M', 'juan02', 0, 0, 0, '', 0, ''),
(234, 'jho', '', 'lili', '', 'O', 'jholui09', 0, 0, 0, '', 0, ''),
(444, 'javier', 'luis', 'beleño', '', 'M', 'javier02', 345678, 0, 0, 'cali', 0, 'luisa@gmail.com'),
(5656, 'luisa', '', 'rojas', '', 'M', 'lrojas02', 313, 3637537, 101, 'barranquilla', 101, 'luisa@gmail.com'),
(8787, 'kili56', 'kili', 'kili', '', 'M', 'kili09', 0, 0, 0, '', 0, ''),
(34567, 'jhon', '', 'rivera', '', 'M', 'jhonrivego', 0, 0, 0, '', 0, ''),
(234567, 'kelvin', '', 'guill', '', 'M', 'kmartinez', 0, 0, 0, '', 0, ''),
(123456789, 'JHON', '', 'RIVERA', 'BELEÑO', 'O', 'jhonrivego', 0, 0, 0, 'barranquilla', 0, 'jsdhsj@gmail.es'),
(1143270601, 'Jaime', 'jose', 'alvarez', '', '', '', 0, 0, 0, '', 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`Usu_Identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
