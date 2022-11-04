-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 14:35:47
-- Versión del servidor: 10.1.28-MariaDBturismo
-- Versión de PHP: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IdCliente` int(11) NOT NULL,
  `Ci` varchar(15) NOT NULL DEFAULT '0',
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  `ApPat` varchar(50) NOT NULL DEFAULT '0',
  `ApMat` varchar(50) NOT NULL DEFAULT '0',
  `Cel` varchar(9) NOT NULL DEFAULT '0',
  `Correo` varchar(50) NOT NULL DEFAULT '0',
  `usr` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `idPaquete` int(11) NOT NULL,
  `fechaSalida` datetime NOT NULL,
  `fechaRetorno` datetime NOT NULL,
  `precio` int(11) NOT NULL DEFAULT '0',
  `numeroPlazas` int(11) NOT NULL DEFAULT '0',
  `idPromocion` int(11) NOT NULL DEFAULT '0',
  `idSitio` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`idPaquete`, `fechaSalida`, `fechaRetorno`, `precio`, `numeroPlazas`, `idPromocion`, `idSitio`) VALUES
(1, '2017-11-15 00:00:00', '2017-11-24 00:00:00', 250, 30, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `idPromocion` int(11) NOT NULL,
  `temporada` varchar(50) NOT NULL DEFAULT '0',
  `porcentaje` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`idPromocion`, `temporada`, `porcentaje`) VALUES
(1, 'Baja', 60),
(2, '1', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `idReserva` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idPaquete` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitios`
--

CREATE TABLE `sitios` (
  `idSitio` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sitios`
--

INSERT INTO `sitios` (`idSitio`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Plaza', 'Plaza en la paz', 'img/tiahuanaco.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`idPaquete`),
  ADD KEY `FK_paquete_promocion` (`idPromocion`),
  ADD KEY `FK_paquetes_sitios` (`idSitio`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`idPromocion`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `FK__clientes` (`idCliente`),
  ADD KEY `FK__paquete` (`idPaquete`);

--
-- Indices de la tabla `sitios`
--
ALTER TABLE `sitios`
  ADD PRIMARY KEY (`idSitio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `idPaquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `idPromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sitios`
--
ALTER TABLE `sitios`
  MODIFY `idSitio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `FK_paquete_promocion` FOREIGN KEY (`idPromocion`) REFERENCES `promociones` (`IdPromocion`),
  ADD CONSTRAINT `FK_paquetes_sitios` FOREIGN KEY (`idSitio`) REFERENCES `sitios` (`idSitio`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `FK__clientes` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`IdCliente`),
  ADD CONSTRAINT `FK__paquete` FOREIGN KEY (`idPaquete`) REFERENCES `paquetes` (`idPaquete`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
