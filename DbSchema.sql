-- Database: `cs4014`

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(32) DEFAULT NULL
PRIMARY KEY (`tag_id`),
KEY `tag_id` (`tag_id`)
);

INSERT INTO `tags` (`tag_id`, `tag`) VALUES
(1, 'Sociology'), (2, 'Politics'), (3, 'History'), (4, 'Prose'), (5, 'Poetry'), (6, 'Languages'), (7, 'Media'), (8, 'Philosophy'),
(9, 'Physics'), (10, 'Chemistry'), (11, 'Biology'), (12, 'Astrology'), (13, 'Law'), (14, 'Accounting'), (15, 'Economics'),
(16, 'Management'), (17, 'Taxation'), (18, 'Software Design'), (19, 'Website Design'), (20, 'Hardware Design'), (21, 'Mathematics'),
(22, 'Programming'), (23, 'Networking'), (24, 'App Design');


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
PRIMARY KEY (`task_id`),
KEY (`task_id`)
);

INSERT INTO `task` (`task_id`, `id`, `task_title`, `task_type`, `task_desc`, `page_count`, `word_count`, `file_format`, `task_tags`, `created_at`, `updated_at`) VALUES
('1', 1, 'Sample Upload', 'Lab submission', 'Programming Lab Description', 2, 800, 'Doc.x', 'Programming, Software Design', '2017-03-16 18:20:37', '0000-00-00 00:00:00');


CREATE TABLE `task_claimed` (
  `task_id` varchar(32) NOT NULL,
  `id` int(11) NOT NULL
PRIMARY KEY (`task_id`),
KEY `task_id` (`task_id`),
KEY `id` (`id`),
CONSTRAINT `task_claimed_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`) ON UPDATE CASCADE,
CONSTRAINT `task_claimed_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) 
);
  
INSERT INTO `task_claimed` (`task_id`, `id`) VALUES
('1', 1);


CREATE TABLE `task_completed` (
  `task_id` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `feedback` tinyint(4) NOT NULL,
  `review` text NOT NULL
KEY (`task_id`),
KEY `id` (`id`),
CONSTRAINT `task_completed_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`) ON UPDATE CASCADE,
CONSTRAINT `task_completed_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) ON UPDATE CASCADE
);


CREATE TABLE `task_tags` (
  `task_id` varchar(32) NOT NULL,
  `tag_id` int(11) NOT NULL
PRIMARY KEY (`task_id`),
KEY `task_id_fk` (`task_id`),
KEY `tag_id_fk` (`tag_id`),
CONSTRAINT `task_tags_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`) ON UPDATE CASCADE,
CONSTRAINT `task_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`) ON UPDATE CASCADE
);


CREATE TABLE `user1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(32) DEFAULT NULL,
  `last` varchar(32) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `idnum` int(11) DEFAULT NULL,
  `user_subject` varchar(32) DEFAULT NULL,
  `user_tags` varchar(32) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
PRIMARY KEY (`id`)
);

INSERT INTO `user1` (`id`, `first`, `last`, `email`, `idnum`, `user_subject`, `user_tags`, `pwd`, `created_at`) VALUES
(1, 'Evan', 'Beaulieu', '15152669@studentmail.ul.ie', '15152669', 'Mobile Communications', '', 'evan12345', '2017-03-16 18:28:13');


CREATE TABLE `user_reputation` (
  `rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `reputation` int(11) NOT NULL
PRIMARY KEY (`id`),
KEY `id` (`id`),
CONSTRAINT `user_reputation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) ON UPDATE CASCADE
);
  
  
CREATE TABLE `user_tags` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
PRIMARY KEY (`id`),
KEY `userid_fk` (`id`),
KEY `tagid_fk` (`tag_id`),
KEY `id` (`id`),
CONSTRAINT `user_tags_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user1` (`id`) ON UPDATE CASCADE,
CONSTRAINT `user_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`) ON UPDATE CASCADE
);
 

