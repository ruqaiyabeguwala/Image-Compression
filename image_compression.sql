-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 04:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `image_compression`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `uid` int(255) NOT NULL AUTO_INCREMENT,
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`uid`, `id`, `img`) VALUES
(2, 1, 'files/24-01-2018-1516786818.png'),
(3, 1, 'files/24-01-2018-1516787005.png'),
(4, 1, 'files/24-01-2018-1516787406.png'),
(5, 1, 'files/24-01-2018-1516788013.png'),
(6, 2, 'files/24-01-2018-1516788854.png'),
(7, 2, 'files/24-01-2018-1516789435.png'),
(8, 2, 'files/24-01-2018-1516806896.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Ruqaiya', 'rb@gmail.c', 'admin'),
(2, 'abcd', 'rb@gmail.com', 'admin'),
(3, 'Anjali', 'anju@gmail.com', 'admin'),
(4, 'abcd', 'rb@gmail.c', 'admin'),
(5, 'rwewht', 'abcd@gmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
