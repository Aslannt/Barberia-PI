-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS `barberia pi` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `barberia pi`;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id-usu` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) NOT NULL DEFAULT '',
  `contraseña` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id-usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Crear la tabla de productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id-prod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `cantidad` int(3) NOT NULL,
  `precio` decimal(20,6) NOT NULL DEFAULT 0.000000,
  PRIMARY KEY (`id-prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Crear la tabla de reservaciones
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `id_reser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `apellido` varchar(50) NOT NULL DEFAULT '',
  `correo` varchar(50) NOT NULL DEFAULT '',
  `teléfono` int(10) NOT NULL,
  `horario` varchar(10) NOT NULL DEFAULT '',
  `id_usu` int(11) NOT NULL, -- Clave externa para relacionar con usuarios
  PRIMARY KEY (`id_reser`),
  FOREIGN KEY (`id_usu`) REFERENCES `usuarios`(`id-usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Crear la tabla de servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_serv` int(11) NOT NULL AUTO_INCREMENT,
  `servicio` varchar(50) NOT NULL DEFAULT '',
  `precio` decimal(20,6) NOT NULL DEFAULT 0.000000,
  PRIMARY KEY (`id_serv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Crear la tabla de unión para reservaciones y servicios
CREATE TABLE IF NOT EXISTS `reservaciones_servicios` (
  `id_reser` INT(11) NOT NULL,
  `id_serv` INT(11) NOT NULL,
  PRIMARY KEY (`id_reser`, `id_serv`),
  FOREIGN KEY (`id_reser`) REFERENCES `reservaciones`(`id_reser`),
  FOREIGN KEY (`id_serv`) REFERENCES `servicios`(`id_serv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Crear la tabla de unión para reservaciones y productos
CREATE TABLE IF NOT EXISTS `reservaciones_productos` (
  `id_reser` INT(11) NOT NULL,
  `id_prod` INT(11) NOT NULL,
  PRIMARY KEY (`id_reser`, `id_prod`),
  FOREIGN KEY (`id_reser`) REFERENCES `reservaciones`(`id_reser`),
  FOREIGN KEY (`id_prod`) REFERENCES `productos`(`id-prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
