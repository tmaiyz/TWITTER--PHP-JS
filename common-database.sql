-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2022 at 09:58 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--
DROP DATABASE IF EXISTS Twitter;
CREATE DATABASE Twitter;

USE Twitter;
-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tweet_id` int(11) UNSIGNED NOT NULL,
  `comment` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(10) UNSIGNED NOT NULL,
  `follow_id` int(11) UNSIGNED NOT NULL,
  `follower_id` int(11) UNSIGNED NOT NULL,
  `follow_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE `hashtag` (
  `id` int(11) NOT NULL,
  `hashtag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_hashtag` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tweet_id` int(11) UNSIGNED NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `destination_id` int(11) UNSIGNED NOT NULL,
  `expeditor_id` int(11) UNSIGNED NOT NULL,
  `view` tinyint(1) UNSIGNED NOT NULL,
  `message_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) UNSIGNED NOT NULL,
  `exped_id` int(11) UNSIGNED DEFAULT NULL,
  `dest_id` int(11) UNSIGNED DEFAULT NULL,
  `type` enum('follow','like','retweet','quote','comment','reply','mention','message') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` datetime NOT NULL,
  `count` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tweet_id` int(11) UNSIGNED DEFAULT NULL,
  `reply_id` int(11) UNSIGNED DEFAULT NULL,
  `quote_id` int(11) UNSIGNED DEFAULT NULL,
  `date_quote` datetime NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `accessibility` int(11) NOT NULL DEFAULT '1',
  `media` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tweet_id` int(11) UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `retweet`
--

CREATE TABLE `retweet` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tweet_id` int(11) UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_retweet` datetime NOT NULL,
  `visibility` int(5) DEFAULT NULL,
  `accessibility` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tweet_date` datetime NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `visibility` int(5) DEFAULT '1',
  `accessibility` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'everyone',
  `tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('m','f','x') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `visibility` int(5) DEFAULT '1',
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connect` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_preference`
--

CREATE TABLE `user_preference` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `theme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tweet_id` (`tweet_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follow_id` (`follow_id`),
  ADD KEY `follower_id` (`follower_id`);

--
-- Indexes for table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hashtag` (`hashtag`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `tweet_id` (`tweet_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinataire_id` (`destination_id`),
  ADD KEY `expediteur_id` (`expeditor_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_dest` (`dest_id`),
  ADD KEY `notifications_exped` (`exped_id`) USING BTREE;

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tweet_id` (`tweet_id`),
  ADD KEY `reply_id` (`reply_id`),
  ADD KEY `quote_id` (`quote_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tweet_id` (`tweet_id`);

--
-- Indexes for table `retweet`
--
ALTER TABLE `retweet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tweet_id` (`tweet_id`);

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `id_tweet` (`id`),
  ADD KEY `id_user_2` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_login` (`username`),
  ADD UNIQUE KEY `users_email` (`email`),
  ADD UNIQUE KEY `users_cell_phone` (`phone`);

--
-- Indexes for table `user_preference`
--
ALTER TABLE `user_preference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hashtag`
--
ALTER TABLE `hashtag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `retweet`
--
ALTER TABLE `retweet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `user_preference`
--
ALTER TABLE `user_preference`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tweet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`follow_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tweet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`expeditor_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`exped_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`dest_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `quote_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quote_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tweet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quote_ibfk_3` FOREIGN KEY (`reply_id`) REFERENCES `reply` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quote_ibfk_4` FOREIGN KEY (`quote_id`) REFERENCES `quote` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`tweet_id`) REFERENCES `tweet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `retweet`
--
ALTER TABLE `retweet`
  ADD CONSTRAINT `retweet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `retweet_ibfk_2` FOREIGN KEY (`tweet_id`) REFERENCES `tweet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_preference`
--
ALTER TABLE `user_preference`
  ADD CONSTRAINT `user_preference_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `user`(`name`, `username`, `email`, `password`, `birthdate`, `register_date`) VALUES
('Nicolas Ren', 'nicolasren', 'nicolasren@email.com', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', '2000-01-01', CURRENT_DATE()),
('Thomas Huynh', 'thomashuynh', 'thomashuynh@email.com', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', '2000-01-01', CURRENT_DATE()),
('Andry Ramanana', 'andryramanana', 'andryramanana@email.com', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', '2000-01-01', CURRENT_DATE()),
('Denis Fierens', 'denisfierens', 'denisfierens@email.com', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', '2000-01-01', CURRENT_DATE()),
('Christophe Feuillard', 'christophefeuillard', 'christophefeuillard@email.com', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', '2000-01-01', CURRENT_DATE()),
('Mohammed-Amine Merhdaoui', 'mohammedaminemerhdaoui', 'mohammedaminemerhdaoui@email.com', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe', '2000-01-01',  CURRENT_DATE());

INSERT INTO `follow`(`follow_id`, `follower_id`) VALUES
(1, 2),
(1, 3),
(2, 3),
(2, 4),
(3, 4),
(3, 5),
(4, 5),
(4, 6),
(5, 6),
(5, 1),
(6, 1),
(6, 2);

INSERT INTO `tweet`(`user_id`, `content`) VALUES
(1, 'Hello guys I ate an apple this morning.'),
(1, 'Hello guys my name is Nicolas Ren.'),
(2, 'Hello guys I ate a pizza this morning.'),
(2, 'Hello guys my name is Thomas Huynh.'),
(3, 'Hello guys I ate a lemon this morning.'),
(3, 'Hello guys my name is Andry Ramanana.'),
(4, 'Hello guys I ate a sushi this morning.'),
(4, 'Hello guys my name is Denis.'),
(5, 'Hello guys I ate a hamburger this morning.'),
(5, 'Hello guys my name is Christophe.'),
(6, 'Hello guys I ate a kebab this morning.'),
(6, 'Hello guys my name is Mohammed-Amine.');