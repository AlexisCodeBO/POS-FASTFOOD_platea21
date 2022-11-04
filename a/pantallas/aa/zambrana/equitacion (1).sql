-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2017 at 06:58 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equitacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `paquetes`
--

CREATE TABLE `paquetes` (
  `idPaquete` int(11) NOT NULL,
  `fechaSalida` datetime NOT NULL,
  `fechaRetorno` datetime NOT NULL,
  `precio` int(11) NOT NULL DEFAULT '0',
  `numeroPlazas` int(11) NOT NULL DEFAULT '0',
  `idPromocion` int(11) NOT NULL DEFAULT '0',
  `idSitio` int(11) NOT NULL DEFAULT '0',
  `idSitio1` int(11) NOT NULL DEFAULT '0',
  `idSitio2` int(11) NOT NULL DEFAULT '0',
  `idSitio3` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paquetes`
--

INSERT INTO `paquetes` (`idPaquete`, `fechaSalida`, `fechaRetorno`, `precio`, `numeroPlazas`, `idPromocion`, `idSitio`, `idSitio1`, `idSitio2`, `idSitio3`) VALUES
(1, '2017-11-15 00:00:00', '2017-11-24 00:00:00', 250, 30, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `promociones`
--

CREATE TABLE `promociones` (
  `idPromocion` int(11) NOT NULL,
  `temporada` varchar(50) NOT NULL DEFAULT '0',
  `porcentaje` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promociones`
--

INSERT INTO `promociones` (`idPromocion`, `temporada`, `porcentaje`) VALUES
(1, 'Baja', 60),
(2, 'Baja', 10);

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
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
-- Table structure for table `sitios`
--

CREATE TABLE `sitios` (
  `idSitio` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitios`
--

INSERT INTO `sitios` (`idSitio`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'limpieza', 'Articulos de limpieza de diferentes marcas tipos tallas para vestir de manera elegante y de una mejor vestimenta para el cliente', 'img/limpieza1.jpg'),
(2, 'Cepillos', 'para la limpieza del caballo', 'img/20170926_164700.jpg'),
(3, 'Limpieza', 'para el caballo', 'img/01 (1).jpg'),
(4, 'Limpieza', 'paralas patas del caballo', 'img/20170926_164800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sitios1`
--

CREATE TABLE `sitios1` (
  `idSitio1` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitios1`
--

INSERT INTO `sitios1` (`idSitio1`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Jinetes', 'xczczxz', 'img/jinete.jpg'),
(2, 'Guantes', 'colores rojo ,blanco,azul,negro', 'img/guante.jpg'),
(3, 'Rodilleras', 'color negro', 'img/rodilla.jpg'),
(4, 'Corbata', 'color blanco', 'img/corbata.jpg'),
(5, 'Chamarra de cuerina', 'color rojo', 'img/Chompa.jpg'),
(6, 'Casco', 'color negro', 'img/casco.jpg'),
(7, 'Botas', 'color negro', 'img/bota.jpg'),
(8, 'buzos deportivos', 'de varios colores muy elegantes', 'img/buzo.jpg'),
(9, 'Camisas', 'elegantes de diferentes colores y tallas', 'img/poleras.jpg'),
(10, 'pantalones', 'especiales para jinetes', 'img/pantalon.jpg'),
(11, 'Pantalones', 'de diversos colores y modelos', 'img/panta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sitios2`
--

CREATE TABLE `sitios2` (
  `idSitio2` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitios2`
--

INSERT INTO `sitios2` (`idSitio2`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Montador', 'color cafe', 'img/monto.jpg'),
(2, 'Montador ', 'color blanco, negro', 'img/mo.jpg'),
(3, 'Manta', 'color rojo, azul, celeste, blanco, cafe, ', 'img/manta.jpg'),
(4, 'Protector de goma', 'color blanco, negro', 'img/protector.jpg'),
(5, 'Funda', 'color blanco', 'img/funda.jpg'),
(6, 'protector', 'color cafe', 'img/mon.jpg'),
(7, 'Correas', 'especiales para caballo', 'img/correa.jpg'),
(8, 'Articulos', 'especilaes para caballo', 'img/12.jpg'),
(9, 'Protectores', 'de diferentes y varios colores', 'img/protectores.jpg'),
(10, 'Montador', 'especial de vivtoria chiaper', 'img/Victoria Chiaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sitios3`
--

CREATE TABLE `sitios3` (
  `idSitio3` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`idTipo`, `tipo`) VALUES
(1, 'Admin'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `ci` varchar(15) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `apPat` varchar(50) NOT NULL DEFAULT '0',
  `apMat` varchar(50) NOT NULL DEFAULT '0',
  `cel` varchar(9) NOT NULL DEFAULT '0',
  `correo` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `ci`, `nombre`, `apPat`, `apMat`, `cel`, `correo`, `password`, `tipo`) VALUES
(1, '23434', 'juan', 'pere', 'perez', '333', 'j@ejemplo.com', '1234', 2),
(2, '56456', 'juan', 'perez', 'pares', '4566778', 'juan@ejemplo.com', '789', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`idPaquete`),
  ADD UNIQUE KEY `idSitio1` (`idSitio1`),
  ADD UNIQUE KEY `idSitio2` (`idSitio2`),
  ADD UNIQUE KEY `idSitio3` (`idSitio3`),
  ADD KEY `FK_paquete_promocion` (`idPromocion`),
  ADD KEY `FK_paquetes_sitios` (`idSitio`);

--
-- Indexes for table `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`idPromocion`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `FK__paquete` (`idPaquete`);

--
-- Indexes for table `sitios`
--
ALTER TABLE `sitios`
  ADD PRIMARY KEY (`idSitio`);

--
-- Indexes for table `sitios1`
--
ALTER TABLE `sitios1`
  ADD PRIMARY KEY (`idSitio1`);

--
-- Indexes for table `sitios2`
--
ALTER TABLE `sitios2`
  ADD PRIMARY KEY (`idSitio2`);

--
-- Indexes for table `sitios3`
--
ALTER TABLE `sitios3`
  ADD PRIMARY KEY (`idSitio3`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `FK_usuarios_tipo` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `idPaquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `promociones`
--
ALTER TABLE `promociones`
  MODIFY `idPromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sitios`
--
ALTER TABLE `sitios`
  MODIFY `idSitio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sitios1`
--
ALTER TABLE `sitios1`
  MODIFY `idSitio1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sitios2`
--
ALTER TABLE `sitios2`
  MODIFY `idSitio2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sitios3`
--
ALTER TABLE `sitios3`
  MODIFY `idSitio3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `FK_paquete_promocion` FOREIGN KEY (`idPromocion`) REFERENCES `promociones` (`IdPromocion`),
  ADD CONSTRAINT `FK_paquetes_sitios` FOREIGN KEY (`idSitio`) REFERENCES `sitios` (`idSitio`);

--
-- Constraints for table `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `FK__paquete` FOREIGN KEY (`idPaquete`) REFERENCES `paquetes` (`idPaquete`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
