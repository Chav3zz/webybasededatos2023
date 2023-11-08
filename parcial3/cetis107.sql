-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 03:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cetis107`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `numero_control` varchar(30) NOT NULL,
  `semestre` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `sexo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `numero_control`, `semestre`, `edad`, `turno`, `sexo`) VALUES
(1, 'Chávez Espinoza Adrián', '21325061070471', 5, 17, 'Vespertino', 1),
(2, 'Inzunza Becerra Eitan Misael', '21325061070585', 5, 17, 'Vespertino', 1),
(3, 'López Sainz Sergio Octavio', '21325061070217', 5, 17, 'Vespertino', 1),
(4, 'Pérez Rojas Ángel Eduardo', '21325061070376', 5, 17, 'Vespertino', 1),
(5, 'Serrano González Itzel Amairany', '21325061070146', 5, 17, 'Vespertino', 0),
(6, 'Martinéz Blancas Ximena Noemí', '21325061070594', 5, 17, 'Vespertino', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `semestre` int(11) NOT NULL,
  `especialidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `semestre`, `especialidad`) VALUES
(1, 'Ingles V', 5, 'Programacion'),
(2, 'Fisica II', 5, 'Programacion'),
(3, 'Calculo integral', 5, 'Programacion'),
(4, 'C. T. S. y V.', 5, 'Programacion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
