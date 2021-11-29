-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2021 at 06:34 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturantrating`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratinginfo`
--

DROP TABLE IF EXISTS `ratinginfo`;
CREATE TABLE IF NOT EXISTS `ratinginfo` (
  `rate_ID` int NOT NULL AUTO_INCREMENT,
  `user_ID` int NOT NULL,
  `food_rate` int NOT NULL,
  `menu_rate` int NOT NULL,
  `service_rate` int NOT NULL,
  `atmosphere_rate` int NOT NULL,
  `transcation_date` date NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`rate_ID`),
  KEY `user-ID` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratinginfo`
--

INSERT INTO `ratinginfo` (`rate_ID`, `user_ID`, `food_rate`, `menu_rate`, `service_rate`, `atmosphere_rate`, `transcation_date`, `remarks`, `status`) VALUES
(1, 1, 5, 4, 3, 4, '2021-11-15', 'I wish there was better service', 0),
(2, 2, 3, 5, 2, 3, '2021-11-11', 'Lots of variety', 0),
(3, 3, 2, 4, 4, 4, '2021-11-02', 'Food was meh', 0),
(4, 4, 5, 3, 5, 5, '2021-11-25', 'amazing food and service', 0),
(5, 5, 3, 3, 2, 4, '2021-11-13', 'It was a good place but service was slow', 0),
(6, 6, 4, 5, 3, 5, '2021-11-27', 'I would go again', 0),
(7, 7, 4, 4, 3, 4, '2021-11-09', 'Man that food was gooood', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

DROP TABLE IF EXISTS `usersinfo`;
CREATE TABLE IF NOT EXISTS `usersinfo` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`user_id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(1, 'Micheal', 'Kit', 'mike@gmail.com', '9076347824'),
(2, 'huzaifa', 'zia', 'huzi@gmail.com', '9087456723'),
(3, 'Scottie', 'barnes', 'sb@gmail.com', '9087436456'),
(4, 'Klay ', 'Thompson', 'kv@gmail.com', '2893450968'),
(5, 'Draymond', 'Green', 'dgreen@gmail.com', '9082346172'),
(6, 'Kyle', 'lowry', 'kl@gmail.com', '9054672382'),
(7, 'DeMar', 'DeROZEN', 'ddl@gmail.com', '9054645632');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratinginfo`
--
ALTER TABLE `ratinginfo`
  ADD CONSTRAINT `ratinginfo_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `usersinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
