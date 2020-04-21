-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 05:32 PM
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
(1, 'class', 'media/gallery/5bb8de44f2e4d.jpg', '2018-10-06 16:09:40', 1, 2),
(2, 'DCME Block', 'media/gallery/5bb8de617aa8f.jpg', '2018-10-06 16:10:09', 1, 2),
(3, 'sportsmeet', 'media/gallery/5bb8de7f45428.jpg', '2018-10-06 16:10:39', 1, 2),
(4, 'Freshes group', 'media/gallery/5bbae55ca7c78.jpg', '2018-10-08 05:04:28', 1, 2),
(5, 'bus', 'media/gallery/5bceb4ed29824.jpg', '2018-10-23 05:43:09', 33, 2),
(6, 'train', 'media/gallery/5bceb50fb967d.jpg', '2018-10-23 05:43:43', 33, 2),
(7, 'chocolate', 'media/gallery/5bceb52bce4d7.jpg', '2018-10-23 05:44:11', 33, 2);

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
(5, 'digimon', 'media/news/5ba0a0b6beec8.jpg', 'this is a very rare digimon\r\n', 0, '2018-09-18 06:52:38', 1),
(6, 'freshers and farewell pictures are out', 'media/news/5ba0a88a9b205.jpg', 'if you want to get the freshers and farewell for cme pictures and videos you can get it from murali nayak dcme v sem shift 2\r\n', 0, '2018-09-18 07:26:02', 1),
(7, 'pokemon', 'media/news/5ba0a91083880.jpg', 'a new pokemon was discovered in melemele island of aloha region', 0, '2018-09-18 07:28:16', 1),
(8, 'test', 'media/news/5ba3fa8a8da09.jpg', 'slfksdjfl', 0, '2018-09-20 19:52:42', 1),
(9, 'PROJECT', 'media/news/5ba3fe46df2a9.jpg', 'jhsdhsjhf', 0, '2018-09-20 20:08:38', 1),
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
(1, 'Vighnesh', 'Ghantasala', 16001, 'CM', 222, 'vignesh.ghantasala@gmail.com', 'a5312fd5717d3e2fd419132e3c3ac51b', 'm', '1234567890', 'alumni/media/users/5b9c089788484.jpg', 'alumni/media/users/memo/5b9c089787c42.jpg', 2, 2, 0, '2018-09-14 19:14:31', 0, '2018-10-08 10:19:21'),
(2, 'shaik shoaib', 'akther', 16001, 'CM', 250, 'shoaibakther49@gmail.com', 'fec73abb849f950584b77beb682286db', 'm', '6281123878', 'alumni/media/users/5b9ca2d9d6c53.jpg', 'alumni/media/users/memo/5b9ca2d9d6628.jpg', 2, 1, 0, '2018-09-15 06:12:41', 0, '2018-10-06 20:06:24'),
(4, 'sai teja', 'katakam', 16001, 'CM', 24, 'kss@gmail.com', '96072ac037cbf6c5a0829593b6a5122f', 'm', '9885063848', 'alumni/media/users/5b9cd2d5e8083.png', 'alumni/media/users/memo/5b9cd2d5e30a1.jpg', 1, 1, 0, '2018-09-15 09:37:25', 0, '2018-10-22 19:44:45'),
(6, 'yerragunta', 'sandeep', 16001, 'CM', 260, 'sandeep123@gmail.com', 'iamsandeep', 'm', '8121652170', 'alumni/media/users/5ba08761d9a62.jpeg', 'alumni/media/users/memo/5ba08761b9da2.jpg', 1, 1, 0, '2018-09-18 05:04:33', 0, '2018-09-24 22:25:57'),
(7, 'mohammed mumtaz', 'ahmed ali(bhai)', 16001, 'CM', 241, 'ma9250087@gmail.com', 'alialiali', 'm', '7095250543', 'alumni/media/users/5ba0bce352b58.jpg', 'alumni/media/users/memo/5ba0bce34d832.jpg', 1, 1, 0, '2018-09-18 08:52:51', 0, '2018-09-24 22:26:04'),
(8, 'succa', 'eshwanth kumar', 16001, 'CM', 251, 's.eshwanthkumar@gmail.com', 'Chintu@143', 'm', '7995244391', 'alumni/media/users/5ba0c23df2ef4.jpg', 'alumni/media/users/memo/5ba0c23df2321.jpg', 1, 1, 0, '2018-09-18 09:15:41', 0, '2018-09-24 22:26:09'),
(9, 'murali', 'nayak', 16001, 'CM', 217, 'muralinayak8465@gmail.com', '8465855805', 'm', '8465855805', 'alumni/media/users/5ba0c43e7aa2f.jpg', 'alumni/media/users/memo/5ba0c43e7977a.jpg', 2, 1, 0, '2018-09-18 09:24:14', 0, '2018-09-24 22:26:13'),
(10, 'pavan', 'kumar', 16001, 'CM', 210, 'pavankumar210a81@gmail.com', '123456789', 'm', '9652091453', 'alumni/media/users/5ba340ad71dd7.jpg', 'alumni/media/users/memo/5ba340ad71494.jpg', 2, 1, 0, '2018-09-20 06:39:41', 0, '2018-09-24 22:26:19'),
(11, 'M', 'Suresh', 0, '0', 0, 'sureshmamidisetti@gmail.com', 'sureshmamidisetti@gmail.com', 'm', '0', 'alumni/media/users/scan0002.jpg', '0', 1, 2, 0, '2018-09-24 15:39:44', 0, '2018-10-22 19:56:23'),
(12, 'J Goverdhan\r\n', ' Reddy', 0, '0', 0, 'jgreddymtech@gmail.com', 'jgreddymtech@gmail.com', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:43:42', 0, '2018-10-22 19:56:29'),
(13, 'Samel ', 'Mathari', 0, '0', 0, 'samuel9859@gmail.com', 'samuel9859@gmail.com', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:43:42', 0, '2018-10-22 19:56:32'),
(14, 'B Radha ', 'Krishna', 0, '0', 0, 'radhakrishna1836@gmail.com', 'radhakrishna@1836@gmail.com\r\n', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:47:02', 0, '2018-10-22 19:56:36'),
(15, 'Khaja', 'Habeebuddin', 0, '0', 0, 'khajahabeebuddin1@yahoo.com', 'khajahabeebuddin1@yahoo.com', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:47:02', 0, '2018-10-22 19:56:38'),
(16, 'MD', 'Riaz', 0, '0', 0, 'mriaz2k8@gmail.com', 'mriaz2k8@gmail.com', 'm', '0', '0', '0', 1, 2, 0, '2018-09-24 15:58:39', 0, '2018-10-22 19:56:44'),
(19, 'Rock', 'Jhonson ', 5, 'A', 6, 'speedstar123456789@yahoo.com', 'Quartz16', 'm', '8801029000', 'alumni/media/users/5bb2589acf5e9.png', 'alumni/media/users/memo/5bb2589acf39f.png', 1, 1, 0, '2018-10-01 17:25:46', 0, '2018-10-22 19:57:58'),
(27, '!@#$%^&amp;*()_+-=&lt;&gt;\'&quot;&quot;', '&lt;&gt;?:&quot;{}|\\', 0, 'M', 0, 'vohaxuvixi@xgmailoo.com', 'a693f03ac7d8e59c6387575908fe0fad', 'm', 'vohaxuvixi@xgmailoo.com', 'alumni/media/users/5bb796df51d36.jpg', 'alumni/media/users/memo/5bb796df51ab8.jpg', 1, 1, 0, '2018-10-05 16:52:47', 0, '2018-10-22 19:57:49'),
(31, 'K!@#$%^&amp;*?~|â‚¹_-+&times;(=&divide;)&quot;\':;/{}`&radic;', '&pound;&cent;&euro;&yen;&iexcl;&iquest;[&bull;âˆ†&pi;&trade;]â„…&para;â™‚â™€ã€&deg;â„ƒ&reg;&copy;ã€‘\\â—†â—&lt;&gt;', 1234, 'CM', 2147483647, 'pkris2896@gmail.com', 'd4a3cf4b00546fa545e1db014827c4cb', 'm', '9876543210', 'alumni/media/users/5bb7a4e57198e.jpg', 'alumni/media/users/memo/5bb7a4e571207.jpg', 1, 1, 0, '2018-10-05 17:52:37', 0, '2018-10-22 19:57:44'),
(32, 'harsha', 'spy', 16001, 'CM', 215, 'harshaspy012@gmail.com', 'e8db4c715d99891c33306f93ae49fb26', 'm', '9959946481', 'alumni/media/users/5bcca04bb3df4.jpg', 'alumni/media/users/memo/5bcca04bb0398.jpg', 2, 1, 0, '2018-10-21 15:50:35', 0, '2018-10-22 19:57:38'),
(33, 'Mohammed Abdul', 'Yousuf Baig', 16001, 'CM', 239, 'yousufbaig2001@hotmail.com', '7722efb07fec4b2f91a33c1c89d1e6dc', 'm', '9989090709', 'alumni/media/users/5bceaee20deac.jpg', 'alumni/media/users/memo/5bceaee209065.jpg', 2, 2, 0, '2018-10-23 05:17:22', 0, '2018-10-23 10:47:44'),
(34, 'Mohammed Abdul', 'Yousuf Baig', 16001, 'CM', 239, 'yousufbaig2001@gmail.com', '7722efb07fec4b2f91a33c1c89d1e6dc', 'm', '9989090709', 'alumni/media/users/5bceb24346df3.jpg', 'alumni/media/users/memo/5bceb24337146.jpg', 2, 1, 0, '2018-10-23 05:31:47', 0, '0000-00-00 00:00:00'),
(35, 'chandu', 'chandu', 16001, 'CM', 261, 'chandu@gmail.com', '459da3e673156212ea8df1ffaa4ffa9d', 'm', '9912659336', 'alumni/media/users/5c14f00019583.jpg', 'alumni/media/users/memo/5c14f0000754d.jpg', 2, 1, 0, '2018-12-15 12:13:52', 0, '0000-00-00 00:00:00'),
(36, 'testingatNGIT', 'NGIT', 16001, 'CM', 239, 'dfhgjk@gjhk.com', '9f5439e020df1d8c94ad70f153965e27', 'm', '1234567890', 'alumni/media/users/5d568605f3bf1.jpg', 'alumni/media/users/memo/5d568605e136b.png', 2, 1, 0, '2019-08-16 10:31:34', 0, '0000-00-00 00:00:00');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
