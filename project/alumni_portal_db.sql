-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 11:50 AM
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
-- Database: `alum`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(1) NOT NULL,
  `firstname` varchar(36) NOT NULL,
  `lastname` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL,
  `contact` int(15) NOT NULL,
  `roleid` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `roleid`, `status`) VALUES
(1, 'vighnesh', 'ghantasala', 'vignesh.ghantasala@gmail.com', 'test123', 123456789, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `UploadedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UploadedBy` int(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `UploadedOn`, `UploadedBy`, `status`) VALUES
(4, 'Freshes group', 'media/gallery/5bbae55ca7c78.jpg', '2018-10-08 05:04:28', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `news_desc` text NOT NULL,
  `createdBy` int(255) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `image`, `news_desc`, `createdBy`, `CreatedOn`, `status`) VALUES
(8, 'test', 'media/news/5ba3fa8a8da09.jpg', 'slfksdjfl', 0, '2018-09-20 19:52:42', 1),
(10, 'Diploma in Computers (DCME)', 'media/news/5ba3ffb36891e.jpg', 'BLOCK OF DIPLOMA IN COMPUTERS', 12, '2018-09-20 20:14:43', 1),
(11, 'Signiture Day', 'media/news/5bbae3635d079.jpg', '--All students of DCME v sem Have decided to celebrate Signature day on 08-10-2018 Monday the last working day of v sem .All students were Requested to Bring a white shirt TO get signatures of their friends As a memorial gift.', 1, '2018-10-08 04:56:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(255) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `createdBy` int(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `createdBy`, `createdOn`) VALUES
(1, 'alumni', 0, '2018-08-30 16:20:45'),
(2, 'faculty', 0, '2018-08-30 16:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(255) NOT NULL,
  `status_name` varchar(200) NOT NULL,
  `createdBy` int(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`, `createdBy`, `createdOn`) VALUES
(1, 'deActive', 1, '2018-08-30 14:57:27'),
(2, 'activated', 0, '2018-08-30 16:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `pin_year` int(255) NOT NULL,
  `pin_branch` varchar(255) NOT NULL,
  `pin_num` int(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `memo` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `createdBy` int(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedBy` int(255) NOT NULL,
  `modfiedOn` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `pin_year`, `pin_branch`, `pin_num`, `user_email`, `password`, `user_gender`, `user_phone`, `avatar`, `memo`, `status`, `role_id`, `createdBy`, `createdOn`, `modifiedBy`, `modfiedOn`) VALUES
(1, 'Vighnesh', 'Ghantasala', 16001, 'CM', 222, 'vignesh.ghantasala@gmail.com', 'a5312fd5717d3e2fd419132e3c3ac51b', 'm', '1234567890', 'alumni/media/users/5bcca04bb3df4.jpg', 'alumni/media/users/memo/5b9c089787c42.jpg', 2, 1, 0, '2018-09-14 19:14:31', 0, '2018-10-28 15:45:22'),
(2, 'shaik shoaib', 'akther', 16001, 'CM', 250, 'shoaibakther49@gmail.com', 'fec73abb849f950584b77beb682286db', 'm', '6281123878', 'alumni/media/users/IMG_9364.JPG', 'alumni/media/users/memo/5b9ca2d9d6628.jpg', 2, 1, 0, '2018-09-15 06:12:41', 0, '2018-10-28 15:35:28'),
(9, 'murali', 'nayak', 16001, 'CM', 217, 'muralinayak8465@gmail.com', '7c51da41e09017e3d1926c3d35aa2a49', 'm', '8465855805', 'alumni/media/users/5ba0c43e7aa2f.jpg', 'alumni/media/users/memo/5ba0c43e7977a.jpg', 2, 1, 0, '2018-09-18 09:24:14', 0, '2018-10-23 11:59:19'),
(10, 'pavan', 'kumar', 16001, 'CM', 210, 'pavankumar210a81@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'm', '9652091453', 'alumni/media/users/5ba340ad71dd7.jpg', 'alumni/media/users/memo/5ba340ad71494.jpg', 2, 1, 0, '2018-09-20 06:39:41', 0, '2018-10-28 15:35:39'),
(11, 'M', 'Suresh', 0, '0', 0, 'sureshmamidisetti@gmail.com', 'd1d63f03d02b225cb2bf1fdabc23a543', 'm', '0', 'alumni/media/users/scan0002.jpg', '0', 1, 2, 0, '2018-09-24 15:39:44', 0, '2018-10-28 15:32:43'),
(12, 'J Goverdhan\r\n', ' Reddy', 0, '0', 0, 'jgreddymtech@gmail.com', 'e8148bc20784b933243ea07bbe82cc90', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:43:42', 0, '2018-10-28 15:33:00'),
(13, 'Samel ', 'Mathari', 0, '0', 0, 'samuel9859@gmail.com', 'da0968063ddcbe31c2ee9a07a5e783d2', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:43:42', 0, '2018-10-28 15:33:13'),
(14, 'B Radha ', 'Krishna', 0, '0', 0, 'radhakrishna1836@gmail.com', 'c2fe6d790b1e2157f09814e56d879714\r\n', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:47:02', 0, '2018-10-28 15:33:39'),
(15, 'Khaja', 'Habeebuddin', 0, '0', 0, 'khajahabeebuddin1@yahoo.com', 'fb195ed6b55b41690ccab1786e37049c', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:47:02', 0, '2018-10-28 15:33:57'),
(16, 'MD', 'Riaz', 0, '0', 0, 'mriaz2k8@gmail.com', '5ca48d3e16ca12706302dafa2ba72a2a', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:58:39', 0, '2018-10-28 15:34:26'),
(34, 'Mohammed Abdul', 'Yousuf Baig', 16001, 'CM', 239, 'yousufbaig2001@gmail.com', '7722efb07fec4b2f91a33c1c89d1e6dc', 'm', '9989090709', 'alumni/media/users/5bceaee20deac.jpg', 'alumni/media/users/memo/5bceb449c92fa.jpg', 2, 1, 0, '2018-10-23 05:40:25', 0, '2018-10-28 15:54:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
