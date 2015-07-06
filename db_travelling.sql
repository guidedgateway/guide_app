-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2015 at 11:03 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_travelling`
--
CREATE DATABASE db_travelling;
-- --------------------------------------------------------

--
-- Table structure for table `tb_guidedetails`
--

CREATE TABLE IF NOT EXISTS `tb_guidedetails` (
  `id` int(10) PRIMARY KEY NOT NULL,
  `guide_Name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `experiance` int(3) NOT NULL,
  `work_location` varchar(50) NOT NULL,
  `languages_known` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guidedetails`
--

INSERT INTO `tb_guidedetails` (`id`, `guide_Name`, `age`, `experiance`, `work_location`, `languages_known`, `address`, `description`, `image`) VALUES
(1, 'Ashutosh Goel', 29, 10, 'Delhi', 'hindi, english, urdu', '123, modipuram meerut, UP, INDIA', 'highly experience and young energetic guide to guide you through the whole city, know all the place with its history and background. more important this guide is efficient to your pocket.', '1_new.jpg'),
(2, 'Ankit Bhagat', 28, 15, 'Mumbai', 'Hindi, English, punjabi', '456, phool bagh colony meerut, UP, INDIA', 'highly experience and young energetic guide to guide you through the whole city, know all the place with its history and background. more important this guide is efficient to your pocket.', '5_new.jpg'),
(3, 'salman', 30, 8, 'Chennai', 'hindi, urdu', '789,shastri nagar, meerut, UP, INDIA', 'highly experience and young energetic guide to guide you through the whole city, know all the place with its history and background. more important this guide is efficient to your pocket.', '2_new.jpg'),
(4, 'vaibhav sharma', 32, 5, 'Kolkata', 'hindi, english', '234, shastri nagar, meerut,UP, INDIA', 'highly experience and young energetic guide to guide you through the whole city, know all the place with its history and background. more important this guide is efficient to your pocket.', '4_new.jpg'),
(5, 'kapil', 21, 2, 'Delhi', 'Hindi, Spnish', '567, sadar, meerut,UP, INDIA', 'highly experience and young energetic guide to guide you through the whole city, know all the place with its history and background. more important this guide is efficient to your pocket.', '6_new.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guidedetails`
--
ALTER TABLE `tb_guidedetails`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
