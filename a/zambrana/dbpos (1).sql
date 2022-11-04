-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2017 at 03:17 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact`, `address`, `note`) VALUES
(7, 'Walk in Customers', 'na', 'na', 'na'),
(8, 'Paolo Asoy', '09456465465', 'Quezon City', 'na'),
(9, 'Carl Moneda', '09431215641', 'Valenzuela', 'na'),
(10, 'Ian Estabaya', '09644164565', 'Quezon City', 'na'),
(11, 'Jun Magayanes', '09641513561', 'Malabon', 'na'),
(12, 'Platea21', 'Gorchor', 'Peru', 'Hola');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `retail` int(11) NOT NULL,
  `supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `quantity`, `purchase`, `retail`, `supplier`) VALUES
(21, 'Jinetes', 'Jinetes', 95, 3, 4, ''),
(22, 'jinetes', 'Rodilleras', 100, 2, 100, ''),
(23, 'jinetes', 'Chamarra de cuero ', 100, 1, 500, ''),
(24, 'jinetes', 'corbata', 99, 3, 5, ''),
(25, 'jinetes', 'casco', 97, 3, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `customers` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amnt` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `tendered` int(11) NOT NULL,
  `changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `dates`, `customers`, `category`, `name`, `amnt`, `quantity`, `total`, `profit`, `tendered`, `changed`) VALUES
(1, '2015-11-13', 'Walk in Customers', 'Dessert', 'Puto', 5, 3, 15, 6, 20, 5),
(2, '2015-11-13', 'Platea21', 'Finger Food', 'Chicken Ball', 5, 1, 5, 2, 5, 0),
(3, '2017-12-03', 'Walk in Customers', 'Finger Food', 'Beta max', 4, 100, 400, 100, 111111111, 111110711),
(4, '2017-12-03', 'Walk in Customers', 'Finger Food', 'Beta max', 4, 1, 4, 1, 100, 96),
(5, '2017-12-03', 'Walk in Customers', 'Jinetes', 'Jinetes', 4, 5, 20, 5, 100, 80);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `suppliername` varchar(100) NOT NULL,
  `contactperson` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `suppliername`, `contactperson`, `address`, `contactno`, `note`) VALUES
(13, 'Mangboks betamax', 'Juli Sanjuan', 'Malabon', '09215454654', 'na'),
(14, 'Siomai tbp.', 'Jezzy Jaime', 'Caloocan', '09646454564', 'na'),
(15, 'Stick Fishing ball', 'Nardo Besoza', 'Valenzuela', '06365465446', 'na'),
(16, 'kakanin atb.', 'Loui Cruz', 'Pasay', '09634654654', 'na'),
(17, 'Street Quek2x', 'Nilo Cruz', 'Pasig', '09765464164', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `access`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'vendedor', 'vendedor', 'Salesperson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`,`category`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
