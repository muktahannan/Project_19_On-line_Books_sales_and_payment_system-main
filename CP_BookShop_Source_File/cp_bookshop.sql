-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2016 at 01:44 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cp_bookshop`
--
CREATE DATABASE IF NOT EXISTS `cp_bookshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cp_bookshop`;

-- --------------------------------------------------------

--
-- Table structure for table `add_categorybooks`
--

CREATE TABLE IF NOT EXISTS `add_categorybooks` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Name` text NOT NULL,
  `Category_Description` text NOT NULL,
  `Publication_Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `add_categorybooks`
--

INSERT INTO `add_categorybooks` (`category_id`, `Category_Name`, `Category_Description`, `Publication_Status`) VALUES
(1, 'Science', 'all science related books here.......', 1),
(2, 'Horror', 'all horror related books here......', 1),
(9, 'Drama', 'author name ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `Book_id` int(11) NOT NULL,
  `Ip_add` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `Book_id`, `Ip_add`, `quantity`, `date`) VALUES
(2, 4, '::1', 1, '2016-01-25'),
(3, 1, '::1', 1, '2016-01-25'),
(4, 1, '::1', 1, '2016-01-25'),
(13, 1, '::1', 1, '2016-01-26'),
(14, 1, '::1', 1, '2016-01-26'),
(15, 1, '::1', 1, '2016-01-26'),
(16, 1, '::1', 1, '2016-01-26'),
(17, 1, '::1', 1, '2016-01-26'),
(18, 1, '::1', 1, '2016-01-26'),
(19, 1, '::1', 1, '2016-01-27'),
(20, 1, '::1', 1, '2016-01-27'),
(21, 1, '::1', 1, '2016-01-28'),
(22, 3, '::1', 1, '2016-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Book_id` int(11) NOT NULL AUTO_INCREMENT,
  `Book_Name` text NOT NULL,
  `Book_Description` text NOT NULL,
  `Book_image` text NOT NULL,
  `Book_Price` int(11) NOT NULL,
  `ISBN_Number` int(11) NOT NULL,
  `Author_Name` text NOT NULL,
  `Category_Name` text NOT NULL,
  PRIMARY KEY (`Book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Book_id`, `Book_Name`, `Book_Description`, `Book_image`, `Book_Price`, `ISBN_Number`, `Author_Name`, `Category_Name`) VALUES
(9, '', '', '1453842978', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `reg_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(30) NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`reg_id`, `name`, `email`, `phone`, `address`, `country`, `password`) VALUES
(0, 'as', 'as', 0, 'ads', 'as', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
