-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2023 at 11:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclasse`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events_list`
--

DROP TABLE IF EXISTS `events_list`;
CREATE TABLE IF NOT EXISTS `events_list` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `EventName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Charges` varchar(255) NOT NULL,
  `DateOfEvent` date NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events_list`
--

INSERT INTO `events_list` (`Id`, `img`, `EventName`, `Location`, `Description`, `Charges`, `DateOfEvent`, `CategoryName`) VALUES
(23, 'p4.png', '#Tembea Kenya', 'Mombasa', '#TembeaKenya With #KenyaOutdoors Presents an interminable wildness of beautiful nature with different habitats ranging from the dried-up bed of Lake Amboseli, wetlands with sulphur springs, the savannah and woodlands.\r\nCrowned by Mount Kilimanjaro,The world\'s tallest free-standing mountain', 'Ksh7,000', '2023-09-02', 'Pool party'),
(25, 'p3.png', 'Tree Planting Nyeri', 'Nyeri', 'In just a few hours you can make a difference that can last decades!  Join us on Saturday, 26th August as we plant trees in Nyeri. There are so many benefits to planting trees. trees clean our air, they create oxygen and provide shade. when people plant trees together, it creates a feeling of community. the tree experts will be there to help volunteers and oversee the event. No planting experience is necessary.We hope to see you there!!', '1000', '2023-08-26', 'Tree Planting Day'),
(26, 'p2.png', 'Cleaning Town', 'Nanyuki', 'Environment conservation day emphasizes on the importance of environmental protection, which focuses on living sustainably in harmony with nature. On this particular day, the Organisation calls for collective, transformative action on a global scale to celebrate, protect and restore our planet. This is by teaming up with the members for a clean up exercise at Nanyuki town and its surrounding to mark this day.', '200', '2023-08-25', 'Environment Conservation'),
(27, 'p6.png', 'Nanyuki Trip', 'Nanyuki', 'PACKAGE INCLUDES;   Executive transport,  Entrance fee, Professional photography, Lunch, Evening party.     EXCLUDESPersonal items', '1000', '2023-09-10', 'Road Trip'),
(28, 'p5.png', 'Cleaning Beach', 'Mombasa', 'ACTIVITIES;\r\nLive DJS\r\nCake cutting\r\nNyama choma \r\nFood and drinks\r\nProfessional photography\r\nDancing\r\nPool activities eg swimming , games\r\nLots of celebrations!!!', '', '2023-10-20', 'Pool party'),
(29, 'p7.png', '#usafi Nyandarua', 'Nyandarua', 'Environment conservation day emphasizes on the importance of environmental protection, which focuses on living sustainably in harmony with nature. On this particular day, the Organisation calls for collective, transformative action on a global scale to celebrate, protect and restore our planet. This is by teaming up with the members for a clean up exercise at Nanyuki town and its surrounding to mark this day.', '200', '2023-09-16', 'Environment Conservation'),
(30, 'p3.png', 'Menengai Forest', 'Nakuru', 'In just a few hours you can make a difference that can last decades!  Join us on Saturday, 2nd September as we plant trees in Nakuru. There are so many benefits to planting trees. trees clean our air, they create oxygen and provide shade. when people plant trees together, it creates a feeling of community. the tree experts will be there to help volunteers and oversee the event. No planting experience is necessary.We hope to see you there!!', '1000', '2023-09-30', 'Tree Planting Day'),
(31, 'p1.jpg', '#Tembea Meru', 'Nakuru', 'In just a few hours you can make a difference that can last decades!  Join us on Saturday, 9th September as we plant trees in Meru. There are so many benefits to planting trees. trees clean our air, they create oxygen and provide shade. when people plant trees together, it creates a feeling of community. the tree experts will be there to help volunteers and oversee the event. No planting experience is necessary.We hope to see you there!!', '1000', '2023-09-09', 'Tree Planting Day');

-- --------------------------------------------------------

--
-- Table structure for table `payments_list`
--

DROP TABLE IF EXISTS `payments_list`;
CREATE TABLE IF NOT EXISTS `payments_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `PaymentSchedule` varchar(255) NOT NULL,
  `BillNumber` varchar(255) NOT NULL,
  `AmountPaid` varchar(255) NOT NULL,
  `BalanceAmount` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `Email`, `Password`) VALUES
(1, 'Job', 'job@gmail.com', 'job123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
