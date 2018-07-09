-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2018 at 11:04 PM
-- Server version: 5.6.38
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_team`
--

CREATE TABLE `cms_team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `logo_uri` varchar(128) NOT NULL,
  `club_state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='THIS TABLE CONSIST OF TEAM DETAILS';

--
-- Dumping data for table `cms_team`
--

INSERT INTO `cms_team` (`team_id`, `name`, `logo_uri`, `club_state`) VALUES
(6, 'Ireland', '/images/team/23px-Cricket_Ireland_flag.svg.png', ''),
(7, 'Afghanistan', '/images/team/23px-Flag_of_Afghanistan.svg.png', ''),
(8, 'Australia', '/images/team/23px-Flag_of_Australia.svg.png', ''),
(9, 'Bangladesh', '/images/team/23px-Flag_of_Bangladesh.svg.png', ''),
(10, 'England', '/images/team/23px-Flag_of_England.svg.png', ''),
(11, 'India', '/images/team/23px-Flag_of_India.svg.png', ''),
(12, 'New Zealand', '/images/team/23px-Flag_of_New_Zealand.svg.png', ''),
(13, 'Pakistan', '/images/team/23px-Flag_of_Pakistan.svg.png', ''),
(14, 'South Africa', '/images/team/23px-Flag_of_South_Africa.svg.png', ''),
(15, 'Sri Lanka', '/images/team/23px-Flag_of_Sri_Lanka.svg.png', ''),
(16, 'Zimbabwe', '/images/team/23px-Flag_of_Zimbabwe.svg.png', ''),
(17, 'West Indies', '/images/team/23px-WestIndiesCricketFlagPre1999.svg.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_team_match`
--

CREATE TABLE `cms_team_match` (
  `id` int(11) NOT NULL,
  `one_team_id` int(11) NOT NULL,
  `two_team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_team_match`
--

INSERT INTO `cms_team_match` (`id`, `one_team_id`, `two_team_id`) VALUES
(1, 7, 11),
(2, 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_team_match_winner`
--

CREATE TABLE `cms_team_match_winner` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `winner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_team_match_winner`
--

INSERT INTO `cms_team_match_winner` (`id`, `match_id`, `winner_id`) VALUES
(1, 1, 11),
(2, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_team_player`
--

CREATE TABLE `cms_team_player` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `image_uri` varchar(100) NOT NULL,
  `jersy_number` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_team_player`
--

INSERT INTO `cms_team_player` (`id`, `first_name`, `last_name`, `image_uri`, `jersy_number`, `team_id`) VALUES
(4, 'Virat', 'Kohli', '/images/player/1129.png', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `cms_team_player_detail`
--

CREATE TABLE `cms_team_player_detail` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `matches` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `highest_score` int(11) NOT NULL,
  `fifties` int(11) NOT NULL,
  `hundreds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_team_player_detail`
--

INSERT INTO `cms_team_player_detail` (`id`, `player_id`, `matches`, `score`, `highest_score`, `fifties`, `hundreds`) VALUES
(1, 4, 208, 9588, 183, 46, 35);

-- --------------------------------------------------------

--
-- Table structure for table `cms_team_point`
--

CREATE TABLE `cms_team_point` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `matches` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_team_point`
--

INSERT INTO `cms_team_point` (`id`, `team_id`, `matches`, `point`, `rating`) VALUES
(1, 11, 29, 3634, 125),
(2, 14, 32, 3589, 112),
(3, 8, 33, 3499, 106),
(4, 12, 23, 2354, 102),
(5, 10, 39, 3772, 97);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_team`
--
ALTER TABLE `cms_team`
  ADD PRIMARY KEY (`team_id`),
  ADD UNIQUE KEY `logo_uri` (`logo_uri`);

--
-- Indexes for table `cms_team_match`
--
ALTER TABLE `cms_team_match`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_one_team_id` (`one_team_id`),
  ADD KEY `fk_two_team_id` (`two_team_id`);

--
-- Indexes for table `cms_team_match_winner`
--
ALTER TABLE `cms_team_match_winner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_match_id` (`match_id`),
  ADD KEY `fk_winner_id` (`winner_id`);

--
-- Indexes for table `cms_team_player`
--
ALTER TABLE `cms_team_player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_team_id` (`team_id`);

--
-- Indexes for table `cms_team_player_detail`
--
ALTER TABLE `cms_team_player_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_player_id` (`player_id`);

--
-- Indexes for table `cms_team_point`
--
ALTER TABLE `cms_team_point`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cms_tp_team_id` (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_team`
--
ALTER TABLE `cms_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cms_team_match`
--
ALTER TABLE `cms_team_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_team_match_winner`
--
ALTER TABLE `cms_team_match_winner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_team_player`
--
ALTER TABLE `cms_team_player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_team_player_detail`
--
ALTER TABLE `cms_team_player_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_team_point`
--
ALTER TABLE `cms_team_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cms_team_match`
--
ALTER TABLE `cms_team_match`
  ADD CONSTRAINT `fk_one_team_id` FOREIGN KEY (`one_team_id`) REFERENCES `cms_team` (`team_id`),
  ADD CONSTRAINT `fk_two_team_id` FOREIGN KEY (`two_team_id`) REFERENCES `cms_team` (`team_id`);

--
-- Constraints for table `cms_team_match_winner`
--
ALTER TABLE `cms_team_match_winner`
  ADD CONSTRAINT `fk_match_id` FOREIGN KEY (`match_id`) REFERENCES `cms_team_match` (`id`),
  ADD CONSTRAINT `fk_winner_id` FOREIGN KEY (`winner_id`) REFERENCES `cms_team` (`team_id`);

--
-- Constraints for table `cms_team_player`
--
ALTER TABLE `cms_team_player`
  ADD CONSTRAINT `fk_team_id` FOREIGN KEY (`team_id`) REFERENCES `cms_team` (`team_id`);

--
-- Constraints for table `cms_team_player_detail`
--
ALTER TABLE `cms_team_player_detail`
  ADD CONSTRAINT `fk_player_id` FOREIGN KEY (`player_id`) REFERENCES `cms_team_player` (`id`);

--
-- Constraints for table `cms_team_point`
--
ALTER TABLE `cms_team_point`
  ADD CONSTRAINT `fk_cms_tp_team_id` FOREIGN KEY (`team_id`) REFERENCES `cms_team` (`team_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
