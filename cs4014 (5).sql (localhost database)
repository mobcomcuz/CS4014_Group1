-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 10:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs4014`
--
CREATE DATABASE IF NOT EXISTS `cs4014` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cs4014`;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag`) VALUES
(1, 'Sociology'),
(2, 'Politics'),
(3, 'History'),
(4, 'Prose'),
(5, 'Poetry'),
(6, 'Languages'),
(7, 'Media'),
(8, 'Philosophy'),
(9, 'Physics'),
(10, 'Chemistry'),
(11, 'Biology'),
(12, 'Astrology'),
(13, 'Law'),
(14, 'Accounting'),
(15, 'Economics'),
(16, 'Management'),
(17, 'Taxation'),
(18, 'Software Design'),
(19, 'Website Design'),
(20, 'Hardware Design'),
(21, 'Mathematics'),
(22, 'Programming'),
(23, 'Networking'),
(24, 'App Design');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `task_id` int(32) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `task_title` varchar(32) DEFAULT NULL,
  `task_type` varchar(32) DEFAULT NULL,
  `task_desc` varchar(32) DEFAULT NULL,
  `page_count` int(11) DEFAULT NULL,
  `word_count` int(11) DEFAULT NULL,
  `file_format` varchar(255) NOT NULL,
  `task_tags` varchar(255) DEFAULT NULL,
  `claimed_at` varchar(255) DEFAULT NULL,
  `completed_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `id`, `task_title`, `task_type`, `task_desc`, `page_count`, `word_count`, `file_format`, `task_tags`, `claimed_at`, `completed_at`, `created_at`, `url`) VALUES
(24, 0, 'xcs', 'c', 'cd', 42, 5000, '.docx', 'Sociology, Prose', '', '', '2017-04-05 17:37:33', 'uploads/58e52b5dc10339.34576802.docx'),
(25, 0, 'jibber', 'kfj', 'doieh', 42, 5000, '.docx', 'Biology, Economics', '', '', '2017-04-05 17:41:11', 'uploads/58e52c37b6ad01.98851220.docx'),
(26, 0, 'test', 'test', 'test', 42, 5000, '.docx', 'Sociology, Prose', '', '', '2017-04-12 17:24:25', 'uploads/58ee62c91bbbc9.04087575.docx');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

DROP TABLE IF EXISTS `user1`;
CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `first` varchar(32) DEFAULT NULL,
  `last` varchar(32) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `idnum` int(11) DEFAULT NULL,
  `user_subject` varchar(32) DEFAULT NULL,
  `user_tags` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `first`, `last`, `email`, `idnum`, `user_subject`, `user_tags`, `pwd`, `created_at`) VALUES
(32, 'test3', 'test3', 'test3@studentmail.ul.ie', 15152669, 'Engineering', 'Sociology, Politics, History, Prose', '$2y$10$5a3hPnPUIhW7TBS9A4noOOF2rUX3c3USzhkLpJAHgcSt/lFRf/ice', '2017-04-04 12:11:10'),
(33, 'test4', 'test4', 'test4@ul.ie', 15152669, 'Engineering', 'Sociology, Politics, History, Prose', '$2y$10$97ZGFn1zFjJeHloFOluNeu6tVCr3KnQsPEvoH5vuh4AO4scbZa6xa', '2017-04-04 12:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_reputation`
--

DROP TABLE IF EXISTS `user_reputation`;
CREATE TABLE `user_reputation` (
  `rep_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `reputation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tags`
--

DROP TABLE IF EXISTS `user_tags`;
CREATE TABLE `user_tags` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reputation`
--
ALTER TABLE `user_reputation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_tags`
--
ALTER TABLE `user_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid_fk` (`id`),
  ADD KEY `tagid_fk` (`tag_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_reputation`
--
ALTER TABLE `user_reputation`
  ADD CONSTRAINT `user_reputation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_tags`
--
ALTER TABLE `user_tags`
  ADD CONSTRAINT `user_tags_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
