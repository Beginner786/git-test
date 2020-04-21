-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 07:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `mddoctor`
--

CREATE TABLE `mddoctor` (
  `NAME` varchar(255) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `QUALIFICATION` varchar(255) NOT NULL,
  `SPECIALISTIN` varchar(255) NOT NULL,
  `EXPERIENCE` varchar(255) NOT NULL,
  `HOSPITAL` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PHNO` varchar(14) NOT NULL,
  `MEDINFOUSERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mddoctor`
--

INSERT INTO `mddoctor` (`NAME`, `ID`, `DOB`, `QUALIFICATION`, `SPECIALISTIN`, `EXPERIENCE`, `HOSPITAL`, `EMAIL`, `PHNO`, `MEDINFOUSERNAME`, `PASSWORD`) VALUES
('Dr.P Taja', '0124', '30051994', 'M.B.B.S;M.Sc(Psych);D.P.M', 'Specialist', '15', 'Nellore', 'srinivasateja@gmail.com', '8500851111', 'Taja', 'Nellore'),
('Dr.Somnath ', '0125', '25051994', 'M.B.B.S', 'Cardiology', '10', 'Gupta', 'SomnathGupta@gmail.com', '875297642', 'Gupta', 'Gupta'),
('Dr.Ariganesh Chandrasegaran', '0126', '25081992', 'M.B.B.S; MD', 'Dermatology', '10', 'Chennai', '.Ariganesh@gmail.com', '8588860079', 'Ariganesh', 'Ariganesh'),
('Dr.Charan Das', '0127', '30051944', 'RPM Haryana', 'Ayurveda', '32', 'Delhi', 'topbestsexologist@gmail.com', '7838193932', 'Charan', 'Charan'),
('Dr.Sandhya', '0128', '14021962', 'M.B.B.S', 'Forensic Pathologist', '20', 'goa', '.Sandhya@gmail.com', '875297640', 'Sandhya', 'Sandhya'),
('Dr.Mohammad Rafi', '0129', '09121990', 'MBBS, ACLS, SCFHS, M.H.Sc', '	:Diabetologist and Interventional Cardiologist', '17', '--', 'MohammadRafi@gmail.com', '8264850725', 'Rafi', 'Rafi'),
('Dr.Shoba', '0131', '--', 'MBBS', 'Gynecologist', '20', '--', 'Shoba@gmail.com', '9787954392', 'Shoba', 'Shoba'),
('Dr.Rajesh Vakkula', '0133', '--', 'MBBS', ':Hand Surgeon', '20', 'VINN', 'Rajesh@gmail.com', '978797642', 'Rajesh ', 'Rajesh '),
('Dr.lily Radrigues', '0135', '06101986', 'MBBS', 'plastic surgeon', '23', 'Suraksha', 'lilyRadrigues@gmail.com', '6827954392', 'lily ', 'lily '),
('Dr.Neekima Reddy', '0138', '28051976', 'MBBS', 'Allergist', '23', '--', 'NeekimaReddy@gmail.com', '7327639392', 'Neekima ', 'Neekima '),
('Dr.Jeevan ', '0139', '24081979', 'MD', 'Hospitalists', '20', 'VANAJA', 'JeevanReddy@gmail.com', '7327639392', 'Jeevan ', 'Jeevan ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mddoctor`
--
ALTER TABLE `mddoctor`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MEDINFOUSERNAME` (`MEDINFOUSERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
