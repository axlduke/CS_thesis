-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 05:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propose`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `email`, `password`, `type`) VALUES
(17, 'acemalto28223@gmail.', '', '1'),
(18, 'acemalto28223@gmail.', '', '1'),
(19, 'acemalto28223@gmail.', '', '1'),
(20, 'acemalto28223@gmail.', '', '1'),
(21, 'acemalto28223@gmail.', '', '1'),
(22, 'ace@gmail.com', '342344242434', '1'),
(23, 'mark@gmail.com', '23432423424', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `account_id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(5) NOT NULL,
  `business` varchar(20) NOT NULL,
  `permit` varchar(255) NOT NULL,
  `company` varchar(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  `pictures` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `account_id`, `fname`, `contact`, `email`, `address`, `password`, `type`, `business`, `permit`, `company`, `about`, `pictures`) VALUES
(14, 17, 'Ace Malto', '09206928571', 'acemalto28223@gmail.com', 'Tabaco City', '', 1, '', '', '', '', ''),
(15, 18, 'Ace Malto', '09206928571', 'acemalto28223@gmail.com', 'Tabaco City', '', 1, '', '', '', '', ''),
(16, 19, 'Ace Malto', '09206928571', 'acemalto28223@gmail.com', 'Tabaco City', '', 1, '', '', '', '', ''),
(17, 20, 'Ace Malto', '09206928571', 'acemalto28223@gmail.com', 'Tabaco City', '', 1, '', '', '', '', ''),
(18, 21, 'Ace Malto', '09206928571', 'acemalto28223@gmail.com', 'Tabaco City', '', 1, '', '', '', '', ''),
(19, 22, 'ace', '56766451', 'ace@gmail.com', 'sfdsf', '342344242434', 1, '', '', '', '', ''),
(20, 23, 'Mark Limpo', '76645987654', 'mark@gmail.com', 'legazpi', '23432423424', 2, 'mark shoee', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
