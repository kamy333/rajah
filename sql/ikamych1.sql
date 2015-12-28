-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: mysql.ikamy.ch
-- Generation Time: Dec 28, 2015 at 06:04 PM
-- Server version: 5.5.37-log
-- PHP Version: 5.5.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ikamych1`
--
CREATE DATABASE IF NOT EXISTS `ikamych1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ikamych1`;

-- --------------------------------------------------------

--
-- Table structure for table `blacklist_ip`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `blacklist_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `login_failed` int(11) NOT NULL,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(90) NOT NULL,
  `category_1_id` int(11) NOT NULL,
  `category_1` varchar(40) DEFAULT NULL,
  `category_2_id` int(11) NOT NULL,
  `category_2` varchar(40) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT '0.00',
  `company_unit_price` decimal(10,2) DEFAULT '0.00',
  `comment` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`),
  KEY `category_1_id` (`category_1_id`),
  KEY `category_2_id` (`category_2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- RELATIONS FOR TABLE `category`:
--   `category_1_id`
--       `category_1` -> `id`
--   `category_2_id`
--       `category_2` -> `id`
--

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `category_1_id`, `category_1`, `category_2_id`, `category_2`, `unit_price`, `company_unit_price`, `comment`) VALUES
(4, 'Production../.. Dancer', 4, 'Production', 4, 'Dancer', '45.00', '0.00', ''),
(5, 'Post-production../.. Premises', 6, 'Post-production', 9, 'Premises', '1500.00', '0.00', ''),
(6, 'Pre-production../.. Insurance', 5, 'Pre-production', 12, 'Insurance', '720.00', '0.00', ''),
(7, 'Pre-production../.. Crew', 5, 'Pre-production', 7, 'Crew', '450.00', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_1`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `category_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_1` varchar(40) NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_1` (`category_1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category_1`
--

INSERT INTO `category_1` (`id`, `category_1`, `comment`) VALUES
(4, 'Production', ''),
(5, 'Pre-production', ''),
(6, 'Post-production', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_2`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `category_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_2` varchar(40) NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_2` (`category_2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category_2`
--

INSERT INTO `category_2` (`id`, `category_2`, `comment`) VALUES
(4, 'Dancer', ''),
(6, 'Renting', ''),
(7, 'Crew', ''),
(8, 'Rental material', ''),
(9, 'Premises', ''),
(10, 'Hotel', ''),
(11, 'car rental', ''),
(12, 'Insurance', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `restricted_list` tinyint(1) NOT NULL DEFAULT '0',
  `company_name` varchar(50) DEFAULT '',
  `web_view` varchar(50) DEFAULT '',
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT '',
  `website` text,
  `address` varchar(50) DEFAULT '',
  `cp` varchar(50) DEFAULT '',
  `city` varchar(50) DEFAULT '',
  `country` varchar(50) DEFAULT '',
  `phone` varchar(50) DEFAULT '',
  `mobile` varchar(50) DEFAULT '',
  `comment` text,
  `liste_rank` int(11) DEFAULT NULL,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  KEY `pseudo_2` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `pseudo`, `restricted_list`, `company_name`, `web_view`, `last_name`, `first_name`, `email`, `website`, `address`, `cp`, `city`, `country`, `phone`, `mobile`, `comment`, `liste_rank`, `input_date`) VALUES
(4, 'COLLINE', 1, '', 'COLLINE', 'COLLINE', '', NULL, NULL, NULL, NULL, 'Gen', 'Suisse', NULL, NULL, NULL, 1, '2015-09-25 09:49:22'),
(5, 'AUTRES', 1, '', 'AUTRES', 'AUTRES', '', NULL, NULL, NULL, NULL, 'Gen', 'Suisse', NULL, NULL, NULL, 1, '2015-09-25 09:49:22'),
(6, 'Tour_Patient', 1, '', 'Tour Patient', 'comptabilit', 'Service', NULL, NULL, 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 2, '2015-09-25 09:49:22'),
(7, 'Tour_Sang', 0, '', 'Tour Sang', 'comptabilit', 'Service', NULL, NULL, 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 3, '2015-09-25 09:49:22'),
(8, 'Carouge_Sang', 0, '', 'Carouge Sang', 'comptabilit', 'Service', NULL, NULL, 'Avenue J.-D. Maillard 3', '1217', 'Meyrin', 'Suisse', NULL, NULL, NULL, 4, '2015-09-25 09:49:22'),
(33, 'BENOIST_FILLE', 0, '', 'BENOIST St', 'BENOIST', 'St', NULL, NULL, 'C', '1231', 'Conches', 'Suisse', NULL, NULL, NULL, 200, '2015-09-25 09:49:22'),
(34, 'BERNASCONI', 0, '', 'BERNASCONI Alexandre', 'BERNASCONI', 'Alexandre', NULL, NULL, 'Chemin des Cr', '1218', 'le Grand-Saconnex', 'Suisse', NULL, NULL, NULL, 200, '2015-09-25 09:49:22'),
(35, 'Geovani', 1, 'Geovani', '', 'Geovani', 'Geovani', 'Geovani@mlop.com', '', '', '', '', '', '', '', '', 1, '2015-12-15 00:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_logins`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `failed_logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `login_attempt` int(11) NOT NULL,
  `last_time` int(11) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `host` varchar(80) DEFAULT NULL,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `failed_logins`
--

INSERT INTO `failed_logins` (`id`, `username`, `login_attempt`, `last_time`, `ip`, `host`, `input_date`) VALUES
(4, 'kamy', 0, 1450890403, '85.7.198.9', '', '2015-10-13 07:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_actual`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `invoice_actual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `project_code` varchar(10) DEFAULT '',
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `company_unit_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `category_id` int(11) NOT NULL,
  `category` varchar(40) DEFAULT NULL,
  `ref_upload` varchar(70) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `invoiced` tinyint(1) DEFAULT '0',
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- RELATIONS FOR TABLE `invoice_actual`:
--   `project_id`
--       `projects` -> `id`
--   `category_id`
--       `category` -> `id`
--

--
-- Dumping data for table `invoice_actual`
--

INSERT INTO `invoice_actual` (`id`, `project_id`, `project_code`, `start_date`, `end_date`, `quantity`, `unit_price`, `company_unit_price`, `category_id`, `category`, `ref_upload`, `invoice_id`, `invoiced`, `comment`) VALUES
(4, 4, 'RAJAH', '2015-10-07', '2015-10-13', 1, '62.00', '99.00', 5, 'Post-production../.. Premises', '', 0, 0, ''),
(7, 5, 'KAMY', '2015-01-01', '2015-10-30', 6, '0.00', '0.00', 6, 'Pre-production../.. Insurance', '', 0, 0, ''),
(8, 5, 'KAMY', '2015-10-19', '2015-10-19', 1, '0.00', '0.00', 7, 'Pre-production../.. Crew', '', 0, 0, ''),
(9, 5, 'KAMY', '2015-10-19', '2015-10-19', 8, '450.00', '888.00', 7, 'Pre-production../.. Crew', '', 0, 0, ''),
(10, 5, 'KAMY', '2015-11-11', '2015-11-11', 1, '300.00', '200.00', 5, 'Post-production../.. Premises', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_estimate`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `invoice_estimate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estimate_no` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `project_code` varchar(10) DEFAULT '',
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category` varchar(40) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoiced` tinyint(1) DEFAULT '0',
  `ref_upload` varchar(70) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- RELATIONS FOR TABLE `invoice_estimate`:
--   `project_id`
--       `projects` -> `id`
--   `category_id`
--       `category` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice_send`
--
-- Creation: Dec 28, 2015 at 05:01 PM
--

CREATE TABLE IF NOT EXISTS `invoice_send` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `project_code` varchar(10) DEFAULT '',
  `invoice_date` date NOT NULL,
  `gross_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `vat` decimal(10,2) NOT NULL DEFAULT '0.00',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `canceled` enum('Yes','No') NOT NULL DEFAULT 'No',
  `status` enum('prepared','send','paid','partially_paid') DEFAULT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1001 ;

--
-- RELATIONS FOR TABLE `invoice_send`:
--   `project_id`
--       `projects` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycigarette`
--
-- Creation: Dec 28, 2015 at 05:01 PM
--

CREATE TABLE IF NOT EXISTS `mycigarette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_cig` int(11) NOT NULL DEFAULT '1',
  `cig_date` date NOT NULL,
  `cig_date_time` datetime NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `myexpense`
--
-- Creation: Dec 28, 2015 at 05:01 PM
--

CREATE TABLE IF NOT EXISTS `myexpense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `person_name` varchar(50) DEFAULT NULL,
  `expense_type` varchar(50) DEFAULT NULL,
  `expense_date` date NOT NULL,
  `comment` text,
  `modification_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--
-- Creation: Oct 19, 2015 at 08:12 AM
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_code` varchar(10) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `closed` tinyint(1) DEFAULT '0',
  `currency_iso` varchar(3) DEFAULT 'CHF',
  `vat` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `comment` text,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_code` (`project_code`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- RELATIONS FOR TABLE `projects`:
--   `client_id`
--       `clients` -> `id`
--

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_code`, `project_name`, `client_id`, `pseudo`, `start_date`, `end_date`, `closed`, `currency_iso`, `vat`, `comment`, `input_date`) VALUES
(4, 'RAJAH', 'India inc', 6, 'Tour_Patient', '2015-10-02', '2015-10-15', 0, 'CHF', 'Yes', '', '2015-10-13 01:14:30'),
(5, 'KAMY', 'kamy', 4, 'COLLINE', '2015-10-20', '0000-00-00', 0, 'INR', 'Yes', '', '2015-10-15 14:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user_type` varchar(60) DEFAULT NULL,
  `user_type_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `reset_token` varchar(70) DEFAULT NULL,
  `block_user` tinyint(1) DEFAULT '0',
  `address` varchar(100) DEFAULT NULL,
  `cp` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `img` longblob,
  `input_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `user_type_id` (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- RELATIONS FOR TABLE `users`:
--   `user_type_id`
--       `user_type` -> `id`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`, `nom`, `email`, `user_type`, `user_type_id`, `first_name`, `last_name`, `reset_token`, `block_user`, `address`, `cp`, `city`, `country`, `phone`, `mobile`, `img`, `input_date`) VALUES
(1, 'admin', '$2y$10$YzYyN2U3MjBkNGQ4MTliOOYg0RfXSbg5pFOVsO1vOeEFamBhPdnYS', 'admin', 'webmaster@ikamy.ch', 'admin', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-17 23:10:25'),
(2, 'kamy', '$2y$10$MmRhNmFlMTM0NWUxYTIwO.4NPDJDjfnCMoNb8wrye.WLXx6lX05s2', 'Kamran NAFISSPOUR', 'nafisspour@bluewin.ch', '', 1, 'Kamran', 'Nafisspour', 'cee139189723d5245d1d5c10c0445305', 0, '', '', '', '', '', '', NULL, '2015-09-17 23:10:25'),
(4, 'pablo', '$2y$10$OGEwYmRkMjc5NTNhMTVhNeS9iamczbZH3ag9qt2EXM8EliS2UwUTO', 'Pablo Arza', 'transmed@bluewin.ch', 'employee', 4, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-17 23:10:25'),
(5, 'kamy333', '$2y$10$OTAyYzczMGNmMzI2Y2ZjN.faDoYq2/ZSaAK42684GEbpTJ2/Q2Lyq', 'Kamy Manager', 'kamy333@hotmail.com', 'manager', 2, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-17 23:10:25'),
(7, 'gmail', '$2y$10$MWU4N2E5MDcwNDRjYjM1Mu2URCsGI9fUp9JCdmPZCX1cYOlmzeu5O', 'Kamy employee', 'kamran.nafisspour@gmail.com', 'employee', 4, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-17 23:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--
-- Creation: Oct 19, 2015 at 12:59 AM
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(50) NOT NULL,
  `comment` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_type` (`user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`, `comment`) VALUES
(1, 'admin', NULL),
(2, 'manager', NULL),
(3, 'secretary', NULL),
(4, 'employee', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`category_1_id`) REFERENCES `category_1` (`id`),
  ADD CONSTRAINT `category_ibfk_2` FOREIGN KEY (`category_2_id`) REFERENCES `category_2` (`id`);

--
-- Constraints for table `invoice_actual`
--
ALTER TABLE `invoice_actual`
  ADD CONSTRAINT `invoice_actual_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `invoice_actual_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `invoice_estimate`
--
ALTER TABLE `invoice_estimate`
  ADD CONSTRAINT `invoice_estimate_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `invoice_estimate_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `invoice_send`
--
ALTER TABLE `invoice_send`
  ADD CONSTRAINT `invoice_send_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;