-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 02:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
  `task_id` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `task_title` varchar(32) DEFAULT NULL,
  `task_type` varchar(32) DEFAULT NULL,
  `task_desc` varchar(32) DEFAULT NULL,
  `page_count` int(11) DEFAULT NULL,
  `word_count` int(11) DEFAULT NULL,
  `file_format` varchar(255) NOT NULL,
  `task_tags` varchar(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `id`, `task_title`, `task_type`, `task_desc`, `page_count`, `word_count`, `file_format`, `task_tags`, `created_at`, `updated_at`) VALUES
('1', 1, 'Sample Upload', 'Lab submission', 'Programming Lab Description', 2, 800, 'Doc.x', 'Programming, Software Design', '2017-03-16 18:20:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `task_claimed`
--

DROP TABLE IF EXISTS `task_claimed`;
CREATE TABLE `task_claimed` (
  `task_id` varchar(32) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_completed`
--

DROP TABLE IF EXISTS `task_completed`;
CREATE TABLE `task_completed` (
  `task_id` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `feedback` tinyint(4) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_tags`
--

DROP TABLE IF EXISTS `task_tags`;
CREATE TABLE `task_tags` (
  `task_id` varchar(32) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `user_tags` varchar(32) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `first`, `last`, `email`, `idnum`, `user_subject`, `user_tags`, `pwd`, `created_at`) VALUES
(1, 'TEST', 'test', 'test@gmail.com', 12345, 'Engineering', NULL, '1234', '2017-03-20 01:31:58'),
(2, 'test2', 'test2', 'test2@gmail.com', 12345, 'Engineering', NULL, '12345', '2017-03-20 01:32:32'),
(3, 'test15', 'test16', 'test16@gmail.com', 123456, 'Business', NULL, '123456', '2017-03-20 01:32:55');

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
-- Indexes for table `task_claimed`
--
ALTER TABLE `task_claimed`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `task_completed`
--
ALTER TABLE `task_completed`
  ADD KEY `task_id` (`task_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `task_tags`
--
ALTER TABLE `task_tags`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `task_id_fk` (`task_id`),
  ADD KEY `tag_id_fk` (`tag_id`);

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
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `task_claimed`
--
ALTER TABLE `task_claimed`
  ADD CONSTRAINT `task_claimed_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `task_claimed_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user1` (`id`);

--
-- Constraints for table `task_completed`
--
ALTER TABLE `task_completed`
  ADD CONSTRAINT `task_completed_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `task_completed_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `task_tags`
--
ALTER TABLE `task_tags`
  ADD CONSTRAINT `task_tags_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `task_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`) ON UPDATE CASCADE;

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
