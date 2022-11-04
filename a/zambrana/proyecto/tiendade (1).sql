-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2017 at 07:59 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiendade`
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
  `idSitio` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paquetes`
--

INSERT INTO `paquetes` (`idPaquete`, `fechaSalida`, `fechaRetorno`, `precio`, `numeroPlazas`, `idPromocion`, `idSitio`) VALUES
(1, '2017-11-15 00:00:00', '2017-11-24 00:00:00', 250, 30, 1, 1);

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
(2, 'dias rojos', 10);

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
(1, 'mercurial magista', 'nike magista color amarillo', 'img/ad2.jpg'),
(3, 'evo speed', 'tenis de fÃºtbol de ultima generaciÃ³n revolucionarios ', 'img/evo1.jpg');

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
(1, '23434', 'adhemir', 'messi', 'paucara', '333', 'adhemir@gmail.com', '$2y$10$REjP5Dm/v/hpy5FbuGBfhuDkfzBOxDFM3Jf3HW0268vb81w/yOzgW', 1),
(2, '56456', 'mauricio', 'blacutt', 'garcia', '4566778', 'blacutt@gmail.com', '$2y$10$REjP5Dm/v/hpy5FbuGBfhuDkfzBOxDFM3Jf3HW0268vb81w/yOzgW', 2),
(3, '97845601', 'lucas', 'soto', 'perez', '60482194', 'lucas10@gmail.com', '100', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`idPaquete`),
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
  MODIFY `idSitio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
usuarios