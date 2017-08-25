-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2014 at 04:17 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parakram`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(11) NOT NULL,
  `college name` varchar(45) NOT NULL,
  `sports` varchar(45) NOT NULL,
  `leader name` varchar(45) NOT NULL,
  `leader contact number` int(10) NOT NULL,
  `leader email id` varchar(100) NOT NULL,
  `payment method` varchar(10) NOT NULL,
  `mem1n` varchar(45) NOT NULL,
  `mem1d` varchar(45) NOT NULL,
  `mem1en` varchar(45) NOT NULL,
  `mem2n` varchar(45) NOT NULL,
  `mem2d` varchar(45) NOT NULL,
  `mem2en` varchar(45) NOT NULL,
  `mem3n` varchar(45) NOT NULL,
  `mem3d` varchar(45) NOT NULL,
  `mem3en` varchar(45) NOT NULL,
  `mem4n` varchar(45) NOT NULL,
  `mem4d` varchar(45) NOT NULL,
  `mem4en` varchar(45) NOT NULL,
  `mem5n` varchar(45) NOT NULL,
  `mem5d` varchar(45) NOT NULL,
  `mem5en` varchar(45) NOT NULL,
  `mem6n` varchar(45) NOT NULL,
  `mem6d` varchar(45) NOT NULL,
  `mem6en` varchar(45) NOT NULL,
  `mem7n` varchar(45) NOT NULL,
  `mem7d` varchar(45) NOT NULL,
  `mem7en` varchar(45) NOT NULL,
  `mem8n` varchar(45) NOT NULL,
  `mem8d` varchar(45) NOT NULL,
  `mem8en` varchar(45) NOT NULL,
  `mem9n` varchar(45) NOT NULL,
  `mem9d` varchar(45) NOT NULL,
  `mem9en` varchar(45) NOT NULL,
  `mem10n` varchar(45) NOT NULL,
  `mem10d` varchar(45) NOT NULL,
  `mem10en` varchar(45) NOT NULL,
  `mem11n` varchar(45) NOT NULL,
  `mem11d` varchar(45) NOT NULL,
  `mem11en` varchar(45) NOT NULL,
  `mem12n` varchar(45) NOT NULL,
  `mem12d` varchar(45) NOT NULL,
  `mem12en` varchar(45) NOT NULL,
  `mem13n` varchar(45) NOT NULL,
  `mem13d` varchar(45) NOT NULL,
  `mem13en` varchar(45) NOT NULL,
  `mem14n` varchar(45) NOT NULL,
  `mem14d` varchar(45) NOT NULL,
  `mem14en` varchar(45) NOT NULL,
  `mem15n` varchar(45) NOT NULL,
  `mem15d` varchar(45) NOT NULL,
  `mem15en` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
