-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 07:03 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablepractice`
--

CREATE TABLE `tablepractice` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `hashName` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablepractice`
--

INSERT INTO `tablepractice` (`id`, `firstName`, `hashName`, `status`) VALUES
(1, 'Test', 'c4ca4238a0b923820dcc509a6f75849b', '0'),
(2, 'dfds', 'c81e728d9d4c2f636f067f89cc14862c', '0'),
(3, 'qwe', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '0'),
(4, 'rrr', 'a87ff679a2f3e71d9181a67b7542122c', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablepractice`
--
ALTER TABLE `tablepractice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablepractice`
--
ALTER TABLE `tablepractice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
