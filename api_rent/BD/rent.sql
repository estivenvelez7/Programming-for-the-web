-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2020 a las 20:36:01
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rent`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estate`
--

CREATE TABLE `estate` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rooms` int(10) NOT NULL,
  `price` bigint(20) NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estate`
--

INSERT INTO `estate` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`) VALUES
(1, 'Los Guapos', 'Hostal', 'calle 20', 3, 450000, 75),
(2, 'La Maravilla', 'Hostal', 'calle 5 #25-30', 5, 1350000, 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `owner`
--

CREATE TABLE `owner` (
  `id_owner` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type_id` varchar(3) NOT NULL,
  `identification` text NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `owner`
--

INSERT INTO `owner` (`id_owner`, `name`, `lastname`, `email`, `type_id`, `identification`, `password`) VALUES
(1, 'Santiago', 'Cardona', 'santi@gmail.com', 'CC', '2874927', '*arrozconhuevo!*'),
(2, 'Sebastian', 'Varela', 'sebitas@gmail.com', 'Pas', 'HDWAII89', 'arrozconcarne!*'),
(3, 'Estiven', 'Vélez', 'e.velez@gmail.com', 'CC', '4589364', 'chicharron*!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estate`
--
ALTER TABLE `estate`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estate`
--
ALTER TABLE `estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `owner`
--
ALTER TABLE `owner`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
