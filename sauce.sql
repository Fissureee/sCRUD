-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 02:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sauce`
--

-- --------------------------------------------------------

--
-- Table structure for table `dalink`
--

CREATE TABLE `dalink` (
  `id` int(11) NOT NULL,
  `sauce_name` varchar(222) NOT NULL,
  `sauce_link` varchar(222) NOT NULL,
  `sauce_desc` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dalink`
--

INSERT INTO `dalink` (`id`, `sauce_name`, `sauce_link`, `sauce_desc`) VALUES
(2, 'BoyWithUke', 'https://www.youtube.com/watch?v=V2cND9N9iKg', 'Relaxing Cheery Song'),
(22, 'like that is the worst', 'lawoawlawloaw', 'disidsidsidsid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dalink`
--
ALTER TABLE `dalink`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dalink`
--
ALTER TABLE `dalink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
