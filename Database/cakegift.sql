-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2017 at 05:28 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakegift`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincake`
--

CREATE TABLE IF NOT EXISTS `admincake` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `price1` varchar(90) NOT NULL,
  `price2` varchar(90) NOT NULL,
  `availability` varchar(90) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `admincake`
--

INSERT INTO `admincake` (`cid`, `price1`, `price2`, `availability`, `name`) VALUES
(5, '70', '120', 'No', 'Blackforest'),
(6, '60', '120', 'yes', 'Buttercotch'),
(7, '60', '120', 'yes', 'Choclate'),
(8, '60', '120', 'yes', 'Strawberry'),
(9, '60', '120', 'yes', 'Vanilla bean'),
(10, '60', '120', 'yes', 'Ice cake'),
(11, '60', '120', 'yes', 'Bluebarry'),
(12, '60', '120', 'yes', 'Jeli'),
(13, '60', '120', 'yes', 'Raspberry'),
(14, '60', '120', 'yes', 'Pineapple');

-- --------------------------------------------------------

--
-- Table structure for table `admingift`
--

CREATE TABLE IF NOT EXISTS `admingift` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `price1` varchar(90) NOT NULL,
  `price2` varchar(80) NOT NULL,
  `availability` varchar(40) NOT NULL,
  `name` varchar(90) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admingift`
--

INSERT INTO `admingift` (`gid`, `price1`, `price2`, `availability`, `name`) VALUES
(1, '100', '200', 'Yes', 'Motichur Ladoo'),
(2, '150', '300', 'Yes', 'Milk Peda'),
(3, '130', '260', 'Yes', 'Kesar Peda'),
(4, '120', '240', 'Yes', 'Wedding Delights'),
(5, '110', '220', 'Yes', 'Mix'),
(6, '400', '800', 'Yes', 'Dry Fruits'),
(7, '80', '160', 'Yes', 'Sonpapdi');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE IF NOT EXISTS `cake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name3` varchar(90) NOT NULL,
  `name4` varchar(90) NOT NULL,
  `emailcake` varchar(100) NOT NULL,
  `cmno` varchar(90) NOT NULL,
  `shape` varchar(100) NOT NULL,
  `flavor` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `cno` varchar(90) NOT NULL,
  `pname` varchar(98) NOT NULL,
  `Addresscake` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id`, `name3`, `name4`, `emailcake`, `cmno`, `shape`, `flavor`, `size`, `cno`, `pname`, `Addresscake`) VALUES
(1, 'Atul', 'Jadhav', 'atuljadhavbcs@gmail.com', '9689671427', 'Love', 'Choclate', 'Love', '1', 'Akshay', 'Nagar Road kuldeep Banglow,455'),
(13, 'Atul', 'Jadhav', 'ravi555@gmail.com', '9689671427', 'Love', 'Raspberry', 'Love', '1', 'Akshay', 'Bus stand near union bank');

-- --------------------------------------------------------

--
-- Table structure for table `distributer`
--

CREATE TABLE IF NOT EXISTS `distributer` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `Dname` varchar(50) NOT NULL,
  `Mno` varchar(10) NOT NULL,
  `email` varchar(90) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `address` varchar(90) NOT NULL,
  `salary` varchar(100) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `distributer`
--

INSERT INTO `distributer` (`Did`, `Dname`, `Mno`, `email`, `qualification`, `address`, `salary`) VALUES
(2, 'Vijay despande', '9552727741', 'vijay2020@gmail.com', 'H.S.C', 'Near LIC Bank, Karmala', '12000'),
(3, 'Rahul Jaykar', '9112738981', 'rj2050@gmail.com', 'S.S.C', 'Bipass Road, Karmala', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(90) NOT NULL,
  `Lname` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `message` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Fname`, `Lname`, `email`, `message`) VALUES
(23, 'Atul', 'jadhav', 'akshayjadhavbcs', 'very nice to design and very friendly to users'),
(24, 'Atul', 'jadhav', 'akshayjadhavbcs', 'very nice to design and very friendly to users'),
(25, 'Atul', 'jadhav', 'akshayjadhavbcs', 'very nice to design and very friendly to users'),
(26, 'Atul', 'jadhav', 'akshayjadhavbcs', 'very nice to design and very friendly to users'),
(31, 'Akshay', 'jadhav', 'atuljadhavbcs', 'hi'),
(34, 'Akshay', 'Bhosle', 'atuljadhavbcs@gmail.com', 'hi'),
(35, 'Akshay', 'Bhosle', 'atuljadhavbcs@gmail.com', 'hi'),
(36, 'Akshay', 'jadhav', 'chintu.5@gmail.com', 'hi'),
(37, 'Akshay', 'jadhav', 'chintu.5@gmail.com', 'hi'),
(38, 'Akshay', 'Deshmukh', 'chintu.5@gmail.com', 'hi'),
(39, 'Akshay', 'Deshmukh', 'chintu.5@gmail.com', 'hi'),
(40, 'Akshay', 'jadhav', 'atuljadhavbcs@gmail.com', 'hi'),
(41, 'Akshay', 'jadhav', 'atuljadhavbcs@gmail.com', 'hi'),
(44, 'Akshay', 'Kumbhar', 'atuljadhavbcs@gmail.com', 'hi'),
(45, 'Anushka', 'Bhosle', 'chintu.5@gmail.com', 'hi'),
(46, 'Akshay', 'Bhosle', 'atuljadhavbcs@gmail.com', 'hi'),
(47, 'Akshay', 'Bhosle', 'atuljadhavbcs@gmail.com', 'hi'),
(48, 'Anushka', 'Bhosle', 'atuljadhavbcs@gmail.com', 'hi'),
(49, 'Anushka', 'Bhosle', 'atuljadhavbcs@gmail.com', 'hi'),
(50, 'Anushka', 'Kumbhar', 'akshayjadhavbcs@gmail.com', 'n'),
(51, 'chintu', 'gangarde', 'atuljadhavbcs@gmail.com', 'hi'),
(53, 'chintu', ' cfgv', 'atuljadhavbcs@gmail.com', 'hi'),
(54, 'chintu', 'gangarde', 'chintu.4@gmail.com', 'nice'),
(56, 'chintu', 'gangarde', ' cvgb', 'hi'),
(59, 'Akshay', 'jadhav', 'avi@gmail.com', 'hi'),
(60, 'chintu', 'gangarde', ' cvgb', 'nice'),
(61, 'chintu', 'gangarde', ' cvgb', 'nice'),
(62, 'Atul', 'jadhav', 'atuljadhavbcs@gmail.com', 'What is the head office address\r\n'),
(65, 'Anil', 'Burte', 'anilburte.20@gmail.com', 'nice to but cover all karmala area plz...');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE IF NOT EXISTS `gift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name1` varchar(90) NOT NULL,
  `name2` varchar(90) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `Package` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `name1`, `name2`, `email`, `mno`, `Package`, `Type`, `Address`) VALUES
(1, 'Atul', 'jadhav', 'atuljadhavbcs@gmail.com', '9689671427', '1 kg', 'Motichur ladoo', 'At/Post: karmala pune road AJ House');

-- --------------------------------------------------------

--
-- Table structure for table `ureg`
--

CREATE TABLE IF NOT EXISTS `ureg` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(80) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ureg`
--

INSERT INTO `ureg` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(1, '1', 'Atul', 'Atul', 'karmala', 'karmala', '9689671427', 'atuljadhavbcs@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(40) NOT NULL,
  `pswd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `pswd`) VALUES
('Atul', 'Atul');
