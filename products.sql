-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2014 at 04:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year_man` int(4) NOT NULL,
  `price` int(20) NOT NULL,
  `colour` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `product_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `about` varchar(500) NOT NULL,
  `prod_id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`category`, `brand`, `name`, `year_man`, `price`, `colour`, `quantity`, `image`, `product_date`, `about`, `prod_id`) VALUES
('Cars', 'BMW', 'BM3 CSU59', 2011, 120000, 'Light Blue', 15, 'prods/bmw_15.jpg', '2014-11-21 13:16:37', '   BM3 CSU59 is one of the fastes cars arround here \r\nit can move atleast the distance of 300KM per HOUR \r\nnow thats a whole lots of speed you konw that right? okay lets talk about my own car you it has a wanraty of two years plus you can return and get a new one if damaged or in need of repair', 6),
('Cars', 'Toyota', 'Ferrari 612', 2013, 500000, 'Blue', 10, 'prods/Ferrari-612-1.jpg', '2014-11-21 19:12:27', '     Ferrari 612 is one of the fastes cars arround here \r\nit can move atleast the distance of 350KM per HOUR \r\nnow thats a whole lots of speed you konw that right? okay lets talk about my own car you it has a wanraty of ONE years plus you can return and get a new one if damaged or in need of repair ', 7),
('Cars', 'Vox wagen', 'Dodge-Viper-1', 2014, 300000, 'Blue', 10, 'prods/Dodge-Viper-1.jpg', '2014-11-21 19:15:15', '     Dodge-Viper-1 is one of the fastes cars arround here \r\nit can move atleast the distance of 350KM per HOUR \r\nnow thats a whole lots of speed you konw that right? okay lets talk about my own car you it has a wanraty of ONE years plus you can return and get a new one if damaged or in need of repair ', 8),
('Cars', 'Mercedes 800', 'Mercedes 800', 2014, 340000, 'Harsh', 23, 'prods/sla_mercedes800.jpg', '2014-11-21 19:23:10', '    Mercedes 800 is one of the fastes cars arround here \r\nit can move atleast the distance of 300KM per HOUR \r\nnow thats a whole lots of speed you konw that right? okay lets talk about my own car you it has a wanraty of ONE years plus you can return and get a new one if damaged or in need of repair ', 11),
('Cars', 'Toyota', 'Rolls Royce 1', 2014, 340000, 'Broun', 20, 'prods/rolls_royce_1.jpg', '2014-11-21 19:25:30', '    Rolls Royce 1 is one of the fastes cars arround here \r\nit can move atleast the distance of 300KM per HOUR \r\nnow thats a whole lots of speed you konw that right? okay lets talk about my own car you it has a wanraty of ONE years plus you can return and get a new one if damaged or in need of repair ', 12);
