-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2019 at 04:32 PM
-- Server version: 5.6.37
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yegna_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `hash` varchar(64) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `date_of_birth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sex` varchar(10) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `username`, `full_name`, `password`, `email`, `location`, `user_type`, `hash`, `phone_num`, `date_of_birth`, `sex`, `active`) VALUES
(2, 'fuad', '', 'password', 'fuad@gmail.com', 'hawassa', 'event_organiser', 'hash', '0922223344', '2019-05-04 14:40:50', 'male', 1),
(7, 'Taju Ahmed', '', 'password', 'Taju@gmail.com', 'hawassa', 'event_organiser', '', '', '2019-05-04 16:28:20', '', 0),
(13, 'buba', 'buba bubako', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'bubako@gamil.com', '', 'event_org', '0f96613235062963ccde717b18f97592', '', '2019-05-05 19:20:49', '', 0),
(15, 'fuad23', 'Fuad Masresha', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'fuadgugu271@gmail.com', '', 'event_att', 'f7177163c833dff4b38fc8d2872f1ec6', '', '2019-05-08 16:27:15', '', 0),
(16, 'yonny', 'yonnu', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'yonidagne@gmail.com', '', 'event_org', '53c3bce66e43be4f209556518c2fcb54', '', '2019-05-08 16:28:40', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
