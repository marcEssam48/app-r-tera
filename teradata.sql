-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 27, 2019 at 03:53 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teradata`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_type` varchar(100) DEFAULT 'EXAM',
  `version` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_type`, `version`) VALUES
(1, 'BI', '0'),
(2, 'ETL', '0'),
(3, 'Data Science', '0'),
(4, 'Ddevelopment', '0'),
(5, 'Internship', '0'),
(6, 'Testing', '0'),
(7, 'Modeling', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `mcq_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL DEFAULT '0',
  `flag` varchar(1) NOT NULL DEFAULT 'N',
  `choice` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question_desc` varchar(10000) NOT NULL DEFAULT '0',
  `exam_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT 'USER',
  `national_id` char(14) NOT NULL DEFAULT '0',
  `birthdate` date NOT NULL DEFAULT '9999-12-31',
  `email` varchar(100) NOT NULL DEFAULT 'name@something.com',
  `phonenumber` int(11) NOT NULL DEFAULT '0',
  `usertype` varchar(1) NOT NULL DEFAULT 'E',
  `score` int(11) NOT NULL DEFAULT '0',
  `exam_id` int(11) NOT NULL DEFAULT '0',
  `date_insert` date NOT NULL DEFAULT '9999-12-31',
  `status` varchar(1) NOT NULL DEFAULT 'D'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `national_id`, `birthdate`, `email`, `phonenumber`, `usertype`, `score`, `exam_id`, `date_insert`, `status`) VALUES
(1, 'USER', '0', '9999-12-31', 'name@something.com', 0, 'E', 0, 0, '9999-12-31', 'D'),
(2, 'Marc Essam', '29703190101231', '1997-03-19', 'marcessam48@gmail.com', 1201443035, 'A', 0, 1, '9999-12-31', 'D'),
(3, 'tdfs', '12', '2019-11-16', '7amada@zft.com', 23, 'E', 0, 5, '2019-11-25', 'D'),
(4, 'Marc Essam', '1234567890-', '2019-11-27', 'marcessam@sa.com', 123, 'E', 0, 4, '2019-11-25', 'D'),
(5, 'qwertyu', '123456789', '9999-12-31', 'name@something.com', 0, 'A', 0, 0, '2019-11-25', 'D'),
(6, 'seif', '2468', '2019-10-27', 'fr@seif.com', 142467686, 'E', 0, 6, '2019-11-26', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL DEFAULT '0',
  `user_answers` varchar(10000) NOT NULL DEFAULT 'Answers',
  `mcq_score` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`mcq_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `mcq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
