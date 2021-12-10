-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 09:43 AM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Dynamite`
--

-- --------------------------------------------------------

--
-- Table structure for table `astronaut`
--

CREATE TABLE IF NOT EXISTS `astronaut` (
  `astronaut_id` int(11) NOT NULL,
  `name` text,
  `no_missions` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astronaut`
--

INSERT INTO `astronaut` (`astronaut_id`, `name`, `no_missions`) VALUES
(1, 'Mollie', 11),
(2, 'Dillan', 8),
(3, 'Thema', 52),
(4, 'Amber', 4),
(5, 'Fernando', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Attends`
--

CREATE TABLE IF NOT EXISTS `Attends` (
  `astronaut_id` int(11) NOT NULL DEFAULT '0',
  `mission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Attends`
--

INSERT INTO `Attends` (`astronaut_id`, `mission_id`) VALUES
(1, 1),
(2, 3),
(3, 7),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `Mission_id` int(11) NOT NULL,
  `name` text,
  `destination` text,
  `launch_date` date DEFAULT '2002-01-15',
  `type` text,
  `crew_size` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`Mission_id`, `name`, `destination`, `launch_date`, `type`, `crew_size`, `target_id`) VALUES
(1, 'G-8', 'Pluto', '1996-08-21', 'Group', 17, 3),
(3, 'G-6', 'mars', '1983-04-05', 'Satellite', 11, 1),
(6, 'G-2', 'Moon', '1999-01-01', 'Group', 52, 4),
(7, 'G-23', 'Jupiter', '2021-03-13', 'Group', 49, 2);

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL,
  `name` text,
  `first_mission` date DEFAULT NULL,
  `type` text,
  `no_mission` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `name`, `first_mission`, `type`, `no_mission`) VALUES
(1, 'RedPlanet', '1996-01-02', 'Space', 2),
(2, 'Alack', '1992-06-13', 'Space', 3),
(3, 'TinyTarget', '1984-02-02', 'Space', 1),
(4, 'Luna', '1965-02-04', 'Space', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astronaut`
--
ALTER TABLE `astronaut`
  ADD PRIMARY KEY (`astronaut_id`);

--
-- Indexes for table `Attends`
--
ALTER TABLE `Attends`
  ADD PRIMARY KEY (`astronaut_id`,`mission_id`),
  ADD KEY `Attends_ibfk_1` (`mission_id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`Mission_id`),
  ADD KEY `target_id` (`target_id`);

--
-- Indexes for table `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astronaut`
--
ALTER TABLE `astronaut`
  MODIFY `astronaut_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `Mission_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `targets`
--
ALTER TABLE `targets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Attends`
--
ALTER TABLE `Attends`
  ADD CONSTRAINT `Attends_ibfk_1` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`Mission_id`),
  ADD CONSTRAINT `Attends_ibfk_2` FOREIGN KEY (`astronaut_id`) REFERENCES `astronaut` (`astronaut_id`);

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`target_id`) REFERENCES `targets` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
