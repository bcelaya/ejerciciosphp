-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2018 at 09:03 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baloncesto`
--

-- --------------------------------------------------------

--
-- Table structure for table `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(254) NOT NULL,
  `posicion` varchar(254) NOT NULL,
  `partidos` int(11) NOT NULL,
  `puntos` float NOT NULL,
  `rebotes` float NOT NULL,
  `asistencias` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `posicion`, `partidos`, `puntos`, `rebotes`, `asistencias`) VALUES
(1, 'Valero', 'base', 24, 5.2, 1.7, 9.8),
(2, 'Juanfran', 'base', 29, 6.1, 0.8, 5.8),
(3, 'Montilla', 'escolta', 19, 11.7, 2.7, 2.4),
(4, 'Rodriguez', 'escolta', 23, 17.1, 1.8, 3.7),
(5, 'Stipes', 'escolta', 31, 8.5, 3.1, 0.9),
(6, 'Montes', 'alero', 32, 13.1, 4.6, 4.1),
(7, 'Volkov', 'ala pivot', 11, 4.3, 5.6, 1.3),
(8, 'Suarez', 'ala pivot', 24, 6.9, 4.8, 4.5),
(9, 'Carter', 'ala pivot', 26, 26.1, 9.1, 1.8),
(10, 'Graham', 'pivot', 17, 2.1, 8.4, 0.2),
(11, 'Cesar', 'pivot', 8, 3.1, 6.8, 0.7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
