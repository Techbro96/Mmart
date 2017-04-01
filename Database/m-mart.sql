-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 10:01 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m-mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `sr_no` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `pres_filename` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`sr_no`, `username`, `itemname`, `pres_filename`, `status`) VALUES
(1, 'SAP', 'Crocin advance', '3D-HD-Wallpaper-For-Android-620x388.jpg', 0),
(10, 'neo', 'Benadon', '3D-HD-Wallpaper-For-Android-620x388.jpg', 2),
(11, 'neo', 'Rotahaler', 'images.jpg', 0),
(12, 'SAP', 'Benadon', 'images.jpg', 0),
(13, 'SAP', 'Crocin advance', 'images/3D-HD-Wallpaper-For-Android-620x388.jpg', 0),
(14, 'SAP', 'Crocin advance', 'images/WIN_20160220_16_02_19_Pro.jpg', 0),
(15, 'SAP', 'Rotahaler', 'images/WIN_20160220_16_02_19_Pro.jpg', 0),
(16, 'SAP', 'Rotahaler', 'images/WIN_20160523_18_57_36_Pro.jpg', 0),
(17, 'SAP', 'Crocin advance', 'images/main-slider1.jpg', 0),
(18, 'SAP', 'Crocin advance', 'images/Desktop-Download-Desktop-Android-HD-Wallpapers-620x349.jpg', 0),
(19, 'SAP', 'Metacin Syrup', 'images/Desktop-Download-Desktop-Android-HD-Wallpapers-620x349.jpg', 0),
(20, 'SAP', 'Metacin Syrup', 'Desktop-Download-Desktop-Android-HD-Wallpapers-620x349.jpg', 1),
(21, 'Marwadi', 'Budecort Repsules', 'main-slider1.jpg', 2),
(22, 'neo', 'Cetirizine', 'deepa.PNG', 1),
(23, 'neo', 'Budecort Repsules', 'Chrysanthemum.jpg', 1),
(24, 'neo', 'Benadon', 'Penguins.jpg', 1),
(25, 'neo', 'Crocin advance', 'BannerX4.jpg', 1),
(26, 'neo', 'Crocin advance', 'WIN_20160220_16_02_19_Pro.jpg', 0),
(27, 'neo', 'Budecort Repsules', 'ads.PNG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `password`, `emailid`) VALUES
('Amit', 'amitpatel', 'amit@patel.com'),
('Marwadi', 'kunalb', 'kunal@kunal.com'),
('Neo', 'harshjhaveri', 'harsh@neo.com'),
('SAP', 'sohampatel', 'sap@sap.com'),
('viral patel', 'viral123', 'pviral@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `sr_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
