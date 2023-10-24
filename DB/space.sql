-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2023 a las 22:58:42
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sidereal_space`
--
CREATE DATABASE IF NOT EXISTS `sidereal_space` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `sidereal_space`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `achievement`
--

CREATE TABLE `achievement` (
  `id_achievement` int(11) NOT NULL,
  `achievement_name` varchar(100) NOT NULL,
  `achievement_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_achievement`
--

CREATE TABLE `player_achievement` (
  `id_user` int(11) NOT NULL,
  `id_achievement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_lastname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_photo` longblob NOT NULL,
  `user_born` date NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_height` double NOT NULL,
  `user_weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id_achievement`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id_achievement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
