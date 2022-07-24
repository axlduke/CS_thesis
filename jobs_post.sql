-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 08:09 AM
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
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs_post`
--

CREATE TABLE `jobs_post` (
  `post_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `job_experience` varchar(255) NOT NULL,
  `job_qualification` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_post`
--

INSERT INTO `jobs_post` (`post_id`, `employer_id`, `jobtitle`, `job_experience`, `job_qualification`, `logo`, `salary`, `date_posted`) VALUES
(1, 20, 'Software', 'Software', '123', '', '', '2022-07-23'),
(2, 20, 'Engineer', 'Engineer', 'test', '', '123as', '2022-07-23'),
(3, 20, 'Developer', 'Developer', 'e', 'wallpaper.png', 'r', '2022-07-23'),
(4, 20, 'Ching', 'Ching', '123', '', '123', '2022-07-23'),
(5, 20, 'Chong', '2', '1', '', '3', '2022-07-23'),
(6, 20, 'HTML', '123', '12321313', '', '12312313', '2022-07-23'),
(7, 20, 'Java Programmer', '123', '123', '', '123', '2022-07-23'),
(8, 20, 'R Lanugage Dev', '', '23', '', '1', '2022-07-23'),
(9, 20, 'C+ Lang', '123', '3123', '', '23', '2022-07-23'),
(10, 19, 'Python Dev', '2', '2', '', '2', '2022-07-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs_post`
--
ALTER TABLE `jobs_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs_post`
--
ALTER TABLE `jobs_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
