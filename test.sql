-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 10:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'Shilpi', 'shilpivyas7@gmail.com', 'Hello World'),
(2, 'Shilpi', 'shilpivyas7@gmail.com', 'Hello world'),
(3, 'Shilpi', 'shilpivyas7@gmail.com', 'Hello World'),
(4, '', '', ''),
(5, '', '', ''),
(6, 'as', 'as', 'AS'),
(7, 'as', 'as', 'AS'),
(8, 'as', 'as', 'AS'),
(9, 'as', 'as', 'AS'),
(10, 'Shilpi', 'shilpivyas7@gmail.com', 'Hello World'),
(11, 'Shilpi', 'shilpivyas7@gmail.com', 'Hello World'),
(12, 'asdasd', 'asd', 'asd@sf.com'),
(13, 'shilpi', 'shilpi@gmail.com', 'gfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
