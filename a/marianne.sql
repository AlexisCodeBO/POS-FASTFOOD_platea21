-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.2.3-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para marianne
CREATE DATABASE IF NOT EXISTS `marianne` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `marianne`;

-- Volcando estructura para tabla marianne.adquiere
CREATE TABLE IF NOT EXISTS `adquiere` (
  `fecha_compra` datetime DEFAULT NULL,
  `cant_prendas` tinyint(3) DEFAULT NULL,
  `observacion` varchar(130) DEFAULT NULL,
  `idadq` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.adquiere: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `adquiere` DISABLE KEYS */;
/*!40000 ALTER TABLE `adquiere` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(8) DEFAULT NULL,
  `appaterno` varchar(25) DEFAULT NULL,
  `apmaterno` varchar(25) DEFAULT NULL,
  `direccionc` varchar(50) DEFAULT NULL,
  `telefonoc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.cliente: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
REPLACE INTO `cliente` (`id_cliente`, `appaterno`, `apmaterno`, `direccionc`, `telefonoc`) VALUES
	(1, 'Cavero', 'Nuñez', 'Calle Loayza Miraflores #124', '2229890'),
	(2, 'Flores', 'Rivero', 'Calle Yanacocha Miraflores #130', '2249090'),
	(3, 'Flores', 'Rivero', 'Calle Yanacocha Miraflores #130', '2249090'),
	(4, 'Vargas', 'Terceros', 'Calle 5 Irpavi #6060', '2254812'),
	(5, 'Gutiérrez', 'Borora', 'Calle 7 Irpavi #6160', '2724156'),
	(6, 'Rojas', 'Gareca', 'Calle 10 Bolognia #5041', '2724150'),
	(7, 'Mamani', 'Mamani', 'Calle Aspiazu Sopocachi #4540', '2234512'),
	(8, 'Rodríguez', 'Veltzé', 'Avenida Brasil Sopocachi #2021', '2564185'),
	(9, 'López', 'Choque', 'Calle 10 Obrajes #4556', '2305214'),
	(10, 'Quispe', 'Feliciano', 'Calle 26 Chasquipampa #3052', '2415262'),
	(11, 'Fernandez', 'Yucra', 'Calle Kennedy Sopocachi #3052', '2458512'),
	(12, 'Gonzáles', 'Pinto', 'Avenida Soler Obrajes #1212', '2254414'),
	(13, 'Pérez', 'Jota', 'Calle Ecuador Miraflores #4150', '2458917');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` smallint(2) DEFAULT NULL,
  `telefono1` varchar(10) DEFAULT NULL,
  `telefono2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.contacto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.contiene
CREATE TABLE IF NOT EXISTS `contiene` (
  `cod_producto` int(4) DEFAULT NULL,
  `id_lote` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.contiene: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contiene` DISABLE KEYS */;
/*!40000 ALTER TABLE `contiene` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.empleado
CREATE TABLE IF NOT EXISTS `empleado` (
  `ide_empleado` tinyint(2) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido_pat` varchar(50) DEFAULT NULL,
  `apellido_mat` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.empleado: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.lote
CREATE TABLE IF NOT EXISTS `lote` (
  `nrolote` smallint(3) DEFAULT NULL,
  `cod_producto` int(4) DEFAULT NULL,
  `id_lote` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.lote: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `lote` DISABLE KEYS */;
/*!40000 ALTER TABLE `lote` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `cod_producto` int(4) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `preciocompra` float(5,2) DEFAULT NULL,
  `precioventa` float(5,2) DEFAULT NULL,
  `tipo` varchar(40) DEFAULT NULL,
  `subtipo` varchar(60) DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `cantidad` int(3) DEFAULT NULL,
  `talla` varchar(5) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.producto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `cod_proveedor` tinyint(2) DEFAULT NULL,
  `nombre_proveedor` varchar(30) DEFAULT NULL,
  `direccionp` varchar(30) DEFAULT NULL,
  `correoe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.proveedor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla marianne.reserva
CREATE TABLE IF NOT EXISTS `reserva` (
  `nro_venta` int(4) DEFAULT NULL,
  `cantidad` int(2) DEFAULT NULL,
  `precio_unitario` float(5,2) DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla marianne.reserva: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
