-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2018 at 09:07 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

--
-- keyword
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `keyword`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `keyword` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`keyword`, `info`) VALUES
('Amox', 'this is a capsule'),
('cetirizine', 'medinfo'),
('ciplox eye drops', 'eye dropsvgjhk;lshj'),
('ciplox oz', 'this is a tablet'),
('Ambcet Cold', 'this is a tablet'),
('dolo', 'this is a tablet');
