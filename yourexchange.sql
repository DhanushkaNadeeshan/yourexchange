-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 05:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourexchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `category`, `img`, `data`) VALUES
(17, 'Game ', 'software', '1580571923.jpg', '2020-02-01 15:45:23'),
(18, 'Game  ', 'software', '1580571957.jpg', '2020-02-01 15:45:57'),
(19, 'Tesing Game ', 'software', '1580572117.jpg', '2020-02-01 15:48:37'),
(20, 'test ', 'software', '1580572152.jpg', '2020-02-01 15:49:12'),
(21, 'test ', 'software', '1580572220.jpg', '2020-02-01 15:50:20'),
(22, 'dev ', 'software', '1580572300.jpg', '2020-02-01 15:51:40'),
(23, 'test ', 'movie', '1580572886.jpg', '2020-02-01 16:01:26'),
(24, 'Update ', 'movie', '1580572898.jpg', '2020-02-01 16:01:38'),
(25, 'Test 2 ', 'movie', '1580572906.jpg', '2020-02-01 16:01:47'),
(26, 'Test 2 ', 'software', '1580572919.jpg', '2020-02-01 16:01:59'),
(27, 'last one ', 'movie', '1580572930.jpg', '2020-02-01 16:02:10'),
(28, 'Test 2 ', 'movie', '1580572964.jpg', '2020-02-01 16:02:44'),
(29, 'test ', 'movie', '1580573301.jpg', '2020-02-01 16:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
