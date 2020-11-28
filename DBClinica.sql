-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para clinica
CREATE DATABASE IF NOT EXISTS `clinica` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `clinica`;

-- Volcando estructura para tabla clinica.solicitudes
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(100) NOT NULL,
  `Cita` varchar(100) NOT NULL,
  `Dia` date DEFAULT NULL,
  `Hora` time NOT NULL,
  `Observacion` varchar(300) DEFAULT NULL,
  `Estado` varchar(100) NOT NULL,
  `Created_at` timestamp NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.solicitudes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
INSERT IGNORE INTO `solicitudes` (`id`, `Cedula`, `Cita`, `Dia`, `Hora`, `Observacion`, `Estado`, `Created_at`, `Updated_at`) VALUES
	(2, '8-294-369', 'Consulta General', '2020-11-29', '13:00:00', 'me siento mareado', 'aprovado', '2020-11-23 00:14:33', '2020-11-28 02:44:31'),
	(3, '8-294-369', 'Consulta General', '2020-11-29', '13:00:00', 'me siento mareado', 'ausente', '2020-11-23 00:14:33', '2020-11-28 01:59:15'),
	(4, '8-294-369', 'Consulta General', '2020-11-29', '13:00:00', 'me siento mareado', 'atendido', '2020-11-23 00:14:33', '2020-11-28 01:59:22'),
	(5, '8-294-369', 'Consulta General', '2020-11-29', '13:00:00', 'me siento mareado', 'revision', '2020-11-23 00:14:33', '2020-11-28 01:57:04'),
	(6, '8-294-369', 'Consulta General', '2020-11-29', '13:00:00', 'me siento mareado', 'revision', '2020-11-23 00:14:33', '2020-11-28 01:57:04');
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Cedula` varchar(15) NOT NULL,
  `Edad` int(2) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Rol` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Correo` (`Correo`),
  UNIQUE KEY `Cedula` (`Cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla clinica.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT IGNORE INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Cedula`, `Edad`, `Correo`, `Pass`, `Rol`) VALUES
	(1, 'Christian', 'Terrones', '8-941-804', 20, 'christian.terrones@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 'administrativo'),
	(2, 'Danilo', 'Torres', '8-294-369', 21, 'danilo.torres@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 'usuario');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
