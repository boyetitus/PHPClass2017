
-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 12:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpclasswinter2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `firstname`, `lastname`, `dob`, `height`) VALUES
(4, 'Vin', 'Diesel', '1967-07-18', '6''4"'),
(5, 'Michiel', 'Huisman', '1981-07-18', '6''0"'),
(6, 'John', 'Cena', '1977-04-23', '6''1"'),
(7, 'Louis', 'Theroux', '1970-05-20', '6''2"'),
(8, 'Octavia ', 'Spencer', '1970-05-25', '5''2"'),
(9, 'Samuel', 'Stewart', '1981-09-12', '7''1"'),
(10, 'Rosetta', 'Stewart', '1990-02-01', '5''3"'),
(11, 'Rosetta', 'Stewart', '1987-02-12', '5''6"'),
(12, 'John', 'Harries', '2012-12-12', '4''6"'),
(13, 'Alvin', 'Barchue', '1990-09-12', '5''0"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
