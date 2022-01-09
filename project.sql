-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 09:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesstest`
--

CREATE TABLE `assesstest` (
  `id` int(10) NOT NULL,
  `Name` VARCHAR(20) NOT NULL,
  `Question1` int(10) NOT NULL,
  `Question2` int(10) NOT NULL,
  `Question3` int(10) NOT NULL,
  `Question4` int(10) NOT NULL,
  `Question5` int(10) NOT NULL,
  `Question6` int(10) NOT NULL,
  `Question7` int(10) NOT NULL,
  `Question8` int(10) NOT NULL,
  `Question9` int(10) NOT NULL,
  `Question10` int(10) NOT NULL,
  `Result` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assesstes`
--

INSERT INTO `assesstest` (`id`, `Name`, `Question1`, `Question2`, `Question3`, `Question4`, `Question5`, `Question6`, `Question7`, `Question8`, `Question9`, `Question10`, `Result`) VALUES
(39, 'Tester', 1, 9, 4, 5, 4, 7, 3, 8, 4, 6, 'Wizard'),
(43, 'JM', 2, 3, 4, 5, 6, 7, 8, 9, 8, 6, 'Wizard'),
(44, 'M', 9, 1, 3, 4, 8, 3, 5, 2, 6, 2, 'Warrior or Burglar'),
(45, 'T', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 'Wizard or Burgle'),
(46, 'New', 2, 3, 4, 2, 6, 4, 4, 6, 9, 9, 'Wizard'),
(47, 'Bilbo', 3, 1, 9, 9, 3, 1, 9, 1, 3, 9, 'Warrior or Burglar');

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pw` varchar(250) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users` 
--

INSERT INTO `users` (`id`, `username`, `pw`, `email`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'jmcp', 'test', 'test@test.com', 'test', 'test', 2021-12-06 11:27:03, 2021-12-06 11:27:03);

--
-- Indexes for table `assesstest`
--
ALTER TABLE `assesstest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assesstest`
--
ALTER TABLE `assesstest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
