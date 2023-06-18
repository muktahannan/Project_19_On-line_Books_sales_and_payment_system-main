-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2016 at 11:23 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `add_categorybooks`
--

INSERT INTO `add_categorybooks` (`category_id`, `Category_Name`, `Category_Description`, `Publication_Status`) VALUES
(1, 'Science', 'all science related books here.......', 1),
(2, 'Horror', 'all horror related books here......', 1),
(9, 'Drama', 'author name ', 1),
(10, 'Drama', 'rtyuer', 1),
(11, 'Drama', 'rtyuer', 1),
(12, 'Drama', 'wrtyuio', 1);

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
  `reg_id` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `Book_id`, `Ip_add`, `quantity`, `date`, `reg_id`) VALUES
(1, 2, '::1', 2, '2016-01-30', 2),
(3, 3, '::1', 1, '2016-01-30', 2),
(4, 7, '::1', 1, '2016-01-30', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Book_id`, `Book_Name`, `Book_Description`, `Book_image`, `Book_Price`, `ISBN_Number`, `Author_Name`, `Category_Name`) VALUES
(2, 'Mirar gramer bari', 'this is lkf lksfh', '1454139627img8.JPG', 250, 12345, 'HA', 'Drama'),
(3, 'naturalq', 'kjhlfkas fd fksdajhfl fksadfh  ', '1454141069img5.JPG', 230, 12345, 'sd', 'Science'),
(4, 'naturalq', 'kjhlfkas fd fksdajhfl fksadfh  ', '1454144438img5.JPG', 230, 12345, 'sd', 'Science'),
(5, 'Science', 'rtyyehh', '1454145926img40.JPG', 123, 123456, 'e', 'Science'),
(6, 'Horror', 'N/A', '1454148116img26.JPG', 4556, 4543, 'Mukta', 'Horror'),
(7, 'Science', 'fsrtye', '1454163668img6.JPG', 120, 12, 'fatema', 'Science'),
(8, 'Science', 'wrtegtu', '1454165714img2.JPG', 120, 12, 'Mukta', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(30) NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`reg_id`, `name`, `email`, `phone`, `address`, `country`, `password`) VALUES
(1, 'fatema', 'muktahannan@gmail.com', 2147483647, 'hgfhfh', 'Bangladesh', '12345'),
(2, 'fatema', 'fatema@gmail.com', 5436534, 'Uttare', 'Bangladesh', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
