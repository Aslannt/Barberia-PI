-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2024 a las 22:44:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barberia pi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id-prod` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `cantidad` int(3) NOT NULL,
  `precio` decimal(20,6) NOT NULL DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id_reser` int(11) NOT NULL,
  `nombreapellido` varchar(50) NOT NULL,
  `correoelectronico` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `horario` varchar(10) NOT NULL DEFAULT '',
  `mensaje` varchar(100) NOT NULL,
  `contacto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`id_reser`, `nombreapellido`, `correoelectronico`, `telefono`, `horario`, `mensaje`, `contacto`) VALUES
(2, '', '', 0, '', '', ''),
(3, 'sssssssss', 'ssssssss@ggg.com', 2147483647, '', 'ffffff', ''),
(4, 'sssssssss', 'ssssssss@ggg.com', 2147483647, '', 'ffffff', ''),
(5, 'samuel', 'samuel@hotmail.com', 1122334455, '', 'hola que hace', ''),
(6, 'samuel', 'samuel@hotmail.com', 1122334455, '', 'hola que hace', ''),
(7, 'samuel', 'samuel@hotmail.com', 1122334455, '', 'hola que hace', ''),
(8, 'william', 'william@gmail.com', 32294555, '', 'hola que hace XD', ''),
(9, 'william', 'william@gmail.com', 32294555, '', 'hola que hace XD', ''),
(10, 'PRUEBA ', 'asdsa@gamail.com', 2147483647, '', 'DSSASSSADSDDSA', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones_productos`
--

CREATE TABLE `reservaciones_productos` (
  `id_reser` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones_servicios`
--

CREATE TABLE `reservaciones_servicios` (
  `id_reser` int(11) NOT NULL,
  `id_serv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_serv` int(11) NOT NULL,
  `servicio` varchar(50) NOT NULL DEFAULT '',
  `precio` decimal(20,6) NOT NULL DEFAULT 0.000000
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id-usu` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL DEFAULT '',
  `contraseña` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id-prod`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id_reser`);

--
-- Indices de la tabla `reservaciones_productos`
--
ALTER TABLE `reservaciones_productos`
  ADD PRIMARY KEY (`id_reser`,`id_prod`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indices de la tabla `reservaciones_servicios`
--
ALTER TABLE `reservaciones_servicios`
  ADD PRIMARY KEY (`id_reser`,`id_serv`),
  ADD KEY `id_serv` (`id_serv`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_serv`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id-usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id-prod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id_reser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_serv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id-usu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservaciones_productos`
--
ALTER TABLE `reservaciones_productos`
  ADD CONSTRAINT `reservaciones_productos_ibfk_1` FOREIGN KEY (`id_reser`) REFERENCES `reservaciones` (`id_reser`),
  ADD CONSTRAINT `reservaciones_productos_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `productos` (`id-prod`);

--
-- Filtros para la tabla `reservaciones_servicios`
--
ALTER TABLE `reservaciones_servicios`
  ADD CONSTRAINT `reservaciones_servicios_ibfk_1` FOREIGN KEY (`id_reser`) REFERENCES `reservaciones` (`id_reser`),
  ADD CONSTRAINT `reservaciones_servicios_ibfk_2` FOREIGN KEY (`id_serv`) REFERENCES `servicios` (`id_serv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
