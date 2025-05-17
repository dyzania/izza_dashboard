-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 07:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_dashboard`
--

CREATE TABLE `student_dashboard` (
  `student_name` varchar(255) NOT NULL,
  `year_level` int(12) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_dashboard`
--

INSERT INTO `student_dashboard` (`student_name`, `year_level`, `date`) VALUES
('Genesis Manzano', 2, '2025-05-17'),
('Mark Santos', 1, '2025-05-17'),
('Julia Ramirez', 2, '2025-05-17'),
('Rico Fernandez', 4, '2025-05-17'),
('Angela Cruz', 3, '2025-05-17'),
('Miguel Navarro', 1, '2025-05-17'),
('Kyla Reyes', 2, '2025-05-17'),
('David Lim', 4, '2025-05-17'),
('Trina Mendoza', 3, '2025-05-17'),
('Enzo Morales', 2, '2025-05-17'),
('Sam', 0, '2025-05-18'),
('Genesis Manzano', 4, '2025-05-18'),
('Izza', 3, '2025-05-18'),
('Sir Haber', 4, '2025-05-18'),
('Genesis Manzano', 3, '2025-05-18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
