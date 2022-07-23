-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 03:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Toys', NULL, NULL, NULL),
(2, 'doaa', 'Test', NULL, NULL),
(3, 'Foods', 'Items', '2022-07-23 12:53:41', '2022-07-23 12:53:41'),
(4, 'Drinks', 'dgd', '2022-07-23 12:57:12', '2022-07-23 12:57:12'),
(5, 'sfsdf', 'sdfsd', '2022-07-23 12:59:40', '2022-07-23 12:59:40'),
(6, 'dfgdf', 'dfgfd', '2022-07-23 13:00:08', '2022-07-23 13:00:08'),
(7, 'test', 'test', '2022-07-23 13:18:35', '2022-07-23 13:18:35'),
(8, 'reer', 'erere', '2022-07-23 13:21:05', '2022-07-23 13:21:05'),
(9, 'sdsad', 'asdasd', '2022-07-23 13:21:19', '2022-07-23 13:21:19'),
(10, 'sadasd', 'aasd', '2022-07-23 13:21:33', '2022-07-23 13:21:33'),
(11, 'Dana', NULL, '2022-07-23 13:29:09', '2022-07-23 13:29:09'),
(12, 'sara', NULL, '2022-07-23 13:29:23', '2022-07-23 13:29:23'),
(13, 'Doaa', 'scss', '2022-07-23 13:37:05', '2022-07-23 13:37:05'),
(14, 'Dana', 'sdfsdf', '2022-07-23 13:37:58', '2022-07-23 13:37:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
