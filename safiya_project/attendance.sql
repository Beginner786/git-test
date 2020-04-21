-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 04:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('Admin', 'admin@admin.admin', 'admin_12345');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sem` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `present stds` text NOT NULL,
  `by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sem`, `date`, `present stds`, `by`) VALUES
(1, '2019-10-16 17:00:08', '134894,7364ev,8uijk', 'goverdan'),
(5, '2019-10-16 17:04:01', '18uhnds', 'bharath'),
(1, '2019-10-16 17:06:09', '134894,76hgewjh,8uijk', 'bharath'),
(1, '2019-10-18 10:34:06', '7364ev,76hgewjh', 'bharath'),
(1, '2019-10-21 06:18:10', '76hgewjh', 'bharath');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `inchargeof` varchar(20) NOT NULL,
  `college` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `inchargeof`, `college`, `phoneno`, `mailid`, `address`, `password`) VALUES
(1, 'Goverdan', '3rd year 1st shift ', 'Government polytechnic Masabta', 9999999999, 'gv@gmail.com', 'hyderabad', 'goverdan123'),
(2, 'Bharath', '3rd year 2nd shift ', 'Government polytechnic Masabta', 1234567890, 'bharath@gmail.com', 'hyderguda, hyderabad', 'bharath123'),
(3, 'Radhakrishna', '2nd year 1st shift', 'Government polytechnic Masabta', 1234056789, 'radhakrishna@gmail.com', 'hyderabad', 'rdk@gmail.com'),
(4, 'Suresh', '2nd year 2nd shift', 'Government polytechnic Masabta', 9654532487, 'suresh@gmail.com', 'hyderabad', 'msuresh@1234'),
(5, 'Bhargavi', '1st year 1st shift ', 'Government polytechnic Masabta', 6307664235, 'bhargavi@gmail.com', 'uppal', 'bhg123'),
(6, 'Riyaz', '1st year 2nd shift ', 'Government polytechnic Masabta', 7045368576, 'riyaz@gmail.com', 'hyderabad', 'mdriyaz786');

-- --------------------------------------------------------

--
-- Table structure for table `fac_notice`
--

CREATE TABLE `fac_notice` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `notid` varchar(10) NOT NULL,
  `sem` varchar(15) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_notice`
--

INSERT INTO `fac_notice` (`time`, `notid`, `sem`, `title`, `description`, `by`) VALUES
('2019-10-16 02:47:47', 'chk49', 'hjs', 'jdhsjk', 'djkshdjks dsidu siadu', ''),
('2019-10-16 02:53:27', 'chk81', 'hd', 'sdnhsj', 'jdhnsidnu duewui', 'suresh'),
('0000-00-00 00:00:00', 'jioxd', 'sodssh', 'dsafoi', 'dsajoidj\r\ndnasj', 'radhakrishna'),
('0000-00-00 00:00:00', 'jkdhsxk', ' dxa', 'hosxhksj', 'hiuhdsas\r\ndcejdkfj\r\nw23w7e8duhxj', ''),
('2019-10-16 02:39:38', 'n03', 'jdhs', 'dsjhdjk', 'bdgasdhusadh dsauidusi', ''),
('0000-00-00 00:00:00', 'nc01', 'all', 'Check', 'kfdjsaokjfl;f\r\nfwmfjhwejkdn\r\n3u28973908\r\nfaddfhdejkfnkl\r\nfssjjdgidh\r\ndasjdjknd\r\ndhausdhjka\r\n', 'radhakrishna'),
('0000-00-00 00:00:00', 'nc03', 'js', 'hjks', 'dwskdk iudux uhs', 'goverdan');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `name` varchar(15) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `ssem` varchar(1) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`name`, `pin`, `ssem`, `phno`, `email`, `pwd`) VALUES
('p', '76hgewjh', '1', 1, '1', 'a'),
('parent', '134894', '1', 1234567890, 'baap@baap.baap', 'a'),
('pqr', '18uhnds', '5', 2347618933, 'pqr@pqr.abc', 'dijol');

-- --------------------------------------------------------

--
-- Table structure for table `prtfdbk`
--

CREATE TABLE `prtfdbk` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prtfdbk`
--

INSERT INTO `prtfdbk` (`time`, `type`, `subject`, `description`) VALUES
('2019-10-14 16:42:25', 'fjjoes', 'dsksljlfds\r\n', 'gifgp\r\nsjfje\r\nrjjfkejfkdjgkufi348re09fiovjk \r\ndx '),
('2019-10-14 16:42:52', 'kjejfeor', 'hdjomeeusm', 'jsnkmdinkoiurew\r\njdsfeol\r\nfnjuf98ewiujdkcm ,'),
('2019-10-14 16:44:48', 'dojo', 'sdfghjkl', 'plpkjohigfudzrexcwvbnm,\r\nfjghiunmrewijkm, '),
('2019-10-16 02:33:57', 'complain', 'idhs', 'c ckjj hdsjh '),
('2019-10-16 02:34:34', 'complain', 'idhs', 'c ckjj hdsjh '),
('2019-10-16 02:34:48', 'complain', 'fhsdskj', 'djssnhfddh jkf 437847 dh'),
('2019-10-16 02:34:48', 'complain', 'fhsdskj', 'djssnhfddh jkf 437847 dh'),
('2019-10-16 02:35:38', 'proud', 'jdhs', 'ufdns'),
('2019-10-16 02:37:18', 'complain', 'jdshnkj', 'foednos'),
('2019-10-16 03:05:19', 'complain', 'gjh', 'dhskjdhsjk'),
('2019-10-16 06:24:36', 'complain', 'baigan', 'his is a baigan. qweruiop\r\nasdfghjkl;\r\nzxcvbnm,\r\n\r\n\r\nasdfghjkl;\r\ncvbnm,\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(15) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `branch-shift` varchar(9) NOT NULL,
  `sem` int(1) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `pin`, `parentname`, `branch-shift`, `sem`, `college`, `phno`, `mailid`, `password`, `address`) VALUES
('xzabc', '134894', 'abced', 'cme-01', 1, 'djhsk', 7865349820, 'jshdk@fkjd.cjdi', 'dbjsdhj', 'djshdj dsgd dhsk'),
('hdm', '7364ev', 'ufhrj', 'h-5', 1, 'fhg', 3456123456, 'abc@abc.abc', 'fgjhxgf', 'gfpooilukjhgf'),
('jdfhk', '76hgewjh', 'jfekdfjl', 'lk-9', 1, 'kdjslk', 6372687365, 'hdjk@jfk.jhfk', 'ghjjh', 'fghfh'),
('kjv', '8uijk', 'rjkle', 'hkj-87', 1, 'jflkdm', 6745398765, 'kje@jdk.ikj', 'jdkljfee', 'jhrkewjdr');

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `name` varchar(15) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `branch-shift` varchar(9) NOT NULL,
  `sem` int(1) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student3`
--

CREATE TABLE `student3` (
  `name` varchar(15) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `branch-shift` varchar(9) NOT NULL,
  `sem` int(1) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student4`
--

CREATE TABLE `student4` (
  `name` varchar(15) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `branch-shift` varchar(9) NOT NULL,
  `sem` int(1) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student5`
--

CREATE TABLE `student5` (
  `name` varchar(15) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `branch-shift` varchar(9) NOT NULL,
  `sem` int(1) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student5`
--

INSERT INTO `student5` (`name`, `pin`, `parentname`, `branch-shift`, `sem`, `college`, `phno`, `mailid`, `password`, `address`) VALUES
('abc', '18uhnds', 'abc', 'abc-2', 5, 'abc', 1234567890, 'abc@abc.abc', 'abcabcabcabc', 'abcabcabcabcabcabcabc');

-- --------------------------------------------------------

--
-- Table structure for table `student6`
--

CREATE TABLE `student6` (
  `name` varchar(15) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `branch-shift` varchar(9) NOT NULL,
  `sem` int(1) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `mailid` (`mailid`);

--
-- Indexes for table `fac_notice`
--
ALTER TABLE `fac_notice`
  ADD UNIQUE KEY `notid` (`notid`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`pin`);

--
-- Indexes for table `student2`
--
ALTER TABLE `student2`
  ADD UNIQUE KEY `pin` (`pin`);

--
-- Indexes for table `student3`
--
ALTER TABLE `student3`
  ADD UNIQUE KEY `pin` (`pin`);

--
-- Indexes for table `student4`
--
ALTER TABLE `student4`
  ADD UNIQUE KEY `pin` (`pin`);

--
-- Indexes for table `student5`
--
ALTER TABLE `student5`
  ADD UNIQUE KEY `pin` (`pin`);

--
-- Indexes for table `student6`
--
ALTER TABLE `student6`
  ADD UNIQUE KEY `pin` (`pin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
