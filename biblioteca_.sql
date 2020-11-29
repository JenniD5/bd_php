-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2020 a las 04:05:18
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Nacionalidad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Nacimiento` int(11) NOT NULL,
  `Libros` int(11) NOT NULL,
  `Sagas` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `Editoriales` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `Seudonimo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `Nombre`, `Apellido`, `Nacionalidad`, `Nacimiento`, `Libros`, `Sagas`, `Editoriales`, `Seudonimo`) VALUES
(1, 'hola', 'Gomez', 'Americana', 1955, 20, '', '', ''),
(2, 'hola', 'Gomez', 'Americana', 1955, 20, 'ert', 'ded', 'ded'),
(3, 'hola', 'Gomez', 'Americana', 1955, 20, '', 'ded', 'ded'),
(4, 'hola', 'Gomez', 'Americana', 1955, 20, 'ert', 'ded', 'ded');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Autor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Edicion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `Nombre`, `Autor`, `Edicion`) VALUES
(1, 'hola', 'juan', '23-11-2020'),
(2, 'hola', 'juan', '23-11-2020'),
(3, 'yo antes de ti ', 'Jo Jo ', '2017'),
(4, 'hola', 'juan', '23-11-2020'),
(5, 'hola', 'juan', '23-11-2020'),
(6, 'hola', 'rty', '23-11-2020');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
