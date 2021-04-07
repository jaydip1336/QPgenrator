-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 11:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

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
-- Table structure for table `7d6sltu`
--

CREATE TABLE `7d6sltu` (
  `id` int(6) UNSIGNED NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `A` varchar(255) DEFAULT NULL,
  `B` varchar(255) DEFAULT NULL,
  `C` varchar(255) DEFAULT NULL,
  `D` varchar(255) DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `7d6sltu`
--

INSERT INTO `7d6sltu` (`id`, `Question`, `A`, `B`, `C`, `D`, `user_id`) VALUES
(1, 'test', 'b', 'b', 'b', 'b', 1),
(2, 'jaydip', 'a', 'a', 'a', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nuuspdw`
--

CREATE TABLE `nuuspdw` (
  `id` int(6) UNSIGNED NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `A` varchar(255) DEFAULT NULL,
  `B` varchar(255) DEFAULT NULL,
  `C` varchar(255) DEFAULT NULL,
  `D` varchar(255) DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question_papers`
--

CREATE TABLE `question_papers` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `Question_paper_name` varchar(255) NOT NULL,
  `Question_paper_id` varchar(255) NOT NULL,
  `Question_paper_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_papers`
--

INSERT INTO `question_papers` (`id`, `user_id`, `Question_paper_name`, `Question_paper_id`, `Question_paper_password`) VALUES
(1, 1, 'testing paper', '7d6SlTU', 'B0Rnhit'),
(2, 1, 'testing paper2', 'QvRHnoY', 'sXmKP6s'),
(3, 1, 't', 'nUUSpdw', 'D7U7lTT');

-- --------------------------------------------------------

--
-- Table structure for table `qvrhnoy`
--

CREATE TABLE `qvrhnoy` (
  `id` int(6) UNSIGNED NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `A` varchar(255) DEFAULT NULL,
  `B` varchar(255) DEFAULT NULL,
  `C` varchar(255) DEFAULT NULL,
  `D` varchar(255) DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'jaydip', 'jaydipdhrangu2@gmail.com', 'b626b4e8d3a3afb761ca49de338e95b5'),
(2, '', 'This email is already taken.', 'b626b4e8d3a3afb761ca49de338e95b5'),
(3, 'jaydip', 'jaydip@gmail.com', 'b626b4e8d3a3afb761ca49de338e95b5'),
(4, 'jaydip', 'jaydipdhrangu3@gmail.com', 'b626b4e8d3a3afb761ca49de338e95b5'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'jay', 'jay@gmail.com', 'b626b4e8d3a3afb761ca49de338e95b5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `7d6sltu`
--
ALTER TABLE `7d6sltu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nuuspdw`
--
ALTER TABLE `nuuspdw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_papers`
--
ALTER TABLE `question_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qvrhnoy`
--
ALTER TABLE `qvrhnoy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `7d6sltu`
--
ALTER TABLE `7d6sltu`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nuuspdw`
--
ALTER TABLE `nuuspdw`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_papers`
--
ALTER TABLE `question_papers`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qvrhnoy`
--
ALTER TABLE `qvrhnoy`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
