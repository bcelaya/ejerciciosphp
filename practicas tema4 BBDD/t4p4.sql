-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2018 at 08:41 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `fruta` varchar(255) DEFAULT NULL,
  `precio_kg` float DEFAULT NULL,
  `temporada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `precios`
--

INSERT INTO `precios` (`id`, `fruta`, `precio_kg`, `temporada`) VALUES
(1, 'Judias', 3.5, 'primavera'),
(2, 'Patatas', 0.4, 'anual'),
(3, 'Tomates', 1, 'invierno'),
(5, 'Uvas', 2.5, 'otoño'),
(6, 'Melones', 0.6, 'verano'),
(7, 'Naranjas', 1.5, 'anual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
