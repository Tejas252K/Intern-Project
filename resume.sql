-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 12:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Fname` text NOT NULL,
  `Mname` text DEFAULT NULL,
  `Lname` text DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `CPassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Fname`, `Mname`, `Lname`, `Email`, `Password`, `CPassword`) VALUES
('Dheeraj', 'Kumar', 'R', 'dheeraj@gmail.com', 'dheeraj', 'dheeraj'),
('Milan', 'n', 'p', 'milan12@gmail.com', 'milan1', 'milan1'),
('Milan', 'n', 'p', 'milan@com', 'milan1', 'milan1'),
('milli', 'm', 'n', 'milli@gmail.com', 'milli', 'milli'),
('asd', 'safaasf', 'sf', 'sfa@gmail.com', '123456', '123456'),
('Tejas', 'A', 'M', 'tejutejas533@gmail.com', 'tejas1', 'tejas1'),
('Tejas', '', 'M', 'tejutejas@gmail.com', '123456', '123456'),
('vilesh', 'v', 'b', 'vilesh@gmail.com', 'vilesh', 'vilesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
