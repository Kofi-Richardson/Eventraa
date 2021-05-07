-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 12:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Eventraa`
--

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `Events_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `EVENT_TITLE` varchar(255) NOT NULL,
  `EVENT_SPK` varchar(255) NOT NULL,
  `EVENT_DES` varchar(255) NOT NULL,
  `IMG_LINK` varchar(1000) NOT NULL,
  `EVENT_LINK` varchar(255) NOT NULL,
  `TIME_START` varchar(50) NOT NULL,
  `TIME_END` varchar(50) NOT NULL,
  `DATE_START` varchar(255) NOT NULL,
  `DATE_END` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Events_id`, `user_id`, `EVENT_TITLE`, `EVENT_SPK`, `EVENT_DES`, `IMG_LINK`, `EVENT_LINK`, `TIME_START`, `TIME_END`, `DATE_START`, `DATE_END`) VALUES
(4, 1, 'DANIELS PHP SESSION', 'MR.DANIEL', 'egfklahfa;kgfna;lgfbalejgbalkjgbslvbask;jfbwalkfbKJCBslkv<mbcALKJBGKAJSDBAJDB', 'https://www.reachfirst.com/wp-content/uploads/2018/08/Web-Development.jpg', 'https://zoom.us/postattendee?id=46', '14:52', '05:09', '2021-05-12', '2021-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `Registration_data`
--

CREATE TABLE `Registration_data` (
  `Reg_id` int(255) NOT NULL,
  `Reg_user_id` int(255) NOT NULL,
  `Reg_event_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Registration_data`
--

INSERT INTO `Registration_data` (`Reg_id`, `Reg_user_id`, `Reg_event_id`) VALUES
(13, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `email`, `contact`, `password`) VALUES
(1, 'KofiRichardson', 'kofirichardson@gmail.com', 209319086, '202cb962ac59075b964b07152d234b70'),
(2, 'Pkay', 'kofi@gmail.com', 246591453, '250cf8b51c773f3f8dc8b4be867a9a02'),
(3, 'pk', 'abc@gmail.com', 12, '250cf8b51c773f3f8dc8b4be867a9a02'),
(4, 'hello', '123', 209319086, '202cb962ac59075b964b07152d234b70'),
(5, 'micheal', 'micheal@gmail.com', 246591453, '250cf8b51c773f3f8dc8b4be867a9a02'),
(6, 'free', 'kofirichardson@gmail.com', 246591453, '66f58263e52adf212dba53babf296533');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`Events_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Registration_data`
--
ALTER TABLE `Registration_data`
  ADD PRIMARY KEY (`Reg_id`),
  ADD KEY `Reg_user_id` (`Reg_user_id`),
  ADD KEY `Reg_event_id` (`Reg_event_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `Events_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Registration_data`
--
ALTER TABLE `Registration_data`
  MODIFY `Reg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Events`
--
ALTER TABLE `Events`
  ADD CONSTRAINT `Events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

--
-- Constraints for table `Registration_data`
--
ALTER TABLE `Registration_data`
  ADD CONSTRAINT `Registration_data_ibfk_1` FOREIGN KEY (`Reg_user_id`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `Registration_data_ibfk_2` FOREIGN KEY (`Reg_event_id`) REFERENCES `Events` (`Events_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
