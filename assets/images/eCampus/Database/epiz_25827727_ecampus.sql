-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql311.epizy.com
-- Generation Time: Jun 24, 2020 at 02:11 AM
-- Server version: 5.6.47-87.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25827727_ecampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `uname` int(6) NOT NULL,
  `password` varchar(13) NOT NULL,
  `post` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `uname`, `password`, `post`, `name`) VALUES
(1, 175129, '175129@gpn', 'H.O.D', 'Y.B. Sanap'),
(2, 175162, '175162@gpn', 'principal', 'D.P. Nathe');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `sender` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `file_name`, `uploaded_on`, `status`, `sender`) VALUES
(1, 'Vacation', 'Tomorrow is vacation.', 'IMG-20200524-WA0038.jpg', '2020-05-24 13:23:34', '1', '175129'),
(2, 'PT marks', 'Check java PT1 marks', 'IMG-20200620-WA0059.jpg', '2020-06-21 04:19:22', '1', '175162');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `message`, `ip`, `date`) VALUES
(1, 'Gayatri', 'Hii utkarsha', '157.33.136.190', '2020-05-24 13:25:12'),
(2, 'Gayatri', 'Hii utu', '157.33.136.190', '2020-05-24 13:25:43'),
(3, 'Gayatri', 'Helllo', '157.33.136.190', '2020-05-24 13:40:11'),
(4, 'Gayatri', 'Hii gayu', '157.33.136.190', '2020-05-24 13:46:13'),
(5, 'Gayatri', 'How are you sir', '157.33.136.190', '2020-05-24 13:49:01'),
(6, 'Advik', 'hii', '157.47.28.239', '2020-06-02 11:06:11'),
(7, 'Ram', 'Hi', '106.193.250.111', '2020-06-10 11:12:05'),
(8, 'Ram', 'Are website ekdm khatarnak ahe', '106.193.250.111', '2020-06-10 11:12:23'),
(9, 'Utkarsha', 'Hi everyone', '106.220.196.228', '2020-06-21 04:21:29'),
(10, 'Utkarsha', 'Hi', '106.220.196.228', '2020-06-21 04:21:44'),
(11, 'Utkarsha', 'Hello', '106.220.196.228', '2020-06-21 04:21:53'),
(12, 'Gayatri', 'Hello', '106.220.196.228', '2020-06-21 04:22:22'),
(13, 'Gayatri', 'What about our project', '106.220.196.228', '2020-06-21 04:22:39'),
(14, 'Utkarsha', 'Almost done', '106.220.196.228', '2020-06-21 04:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `hash` varchar(32) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`hash`, `ip`, `last_update`) VALUES
('5b25b19e5d17b283e16de5114195c64c', '106.220.196.228', '2020-06-21 04:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `userid` int(11) NOT NULL,
  `staffname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`userid`, `staffname`, `username`, `password`) VALUES
(1, 'Vishal khatale', '185102', 'Vishal@123');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` int(6) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `post` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`id`, `fname`, `lname`, `uname`, `password`, `mobileno`, `post`) VALUES
(7, 'Aarti', 'Khule', 175130, '$2y$04$CrPx6q/swkeR15O62MvwP.hajhO0qlc9S5GW0W1Dpqoarqge/WTQC', 1234567890, 'Student'),
(6, 'Samadhan', 'Erande', 175144, '$2y$04$6Sc2q7nze4Fo2smKDyF.Ru4D.9PnQFXPRMRpApk4l0V5AMWKjk98W', 2147483647, 'Student'),
(5, 'Utkarsha', 'Erande', 175122, '$2y$04$qw7onUE./A8yRZorL4x/PeaYdbI8OygtvpwTxBaJAxU6H3OcD9nD2', 2147483647, 'Student'),
(9, 'Ram ', 'Patil', 123456, '$2y$04$ohZFLdKk7NS/Lyw9mLEX6.k3mZht/JzuMUhybXD0syO4BmKu9aB9m', 2147483647, 'Student'),
(10, 'Anvit', 'Wale', 195101, '$2y$04$3sxN95FYZ99Xz7YqCf6yQ.yahnzlk99c55F3ELYLV1OC0dZqkhzyy', 2147483647, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`hash`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
