-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 07:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
-- Table structure for table `new_members`
--

CREATE TABLE `new_members` (
  `member_id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` enum('Male','Female','') NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `profile_pic` varchar(150) NOT NULL,
  `id_pic` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_members`
--

INSERT INTO `new_members` (`member_id`, `f_name`, `m_name`, `l_name`, `email`, `password`, `full_name`, `mobile`, `address`, `country`, `gender`, `qualification`, `profile_pic`, `id_pic`) VALUES
(7, 'WANKHADE', 'AKASHDIP', 'MILIND', 'akashdipwankhade9@gmail.com', 'Admin@123', 'WANKHADE AKASHDIP MILIND', '8888482858', 'At. Post. Siddharth Nagar, Borgaon manju, Dist. Akola', 'India', 'Male', 'PG', 'Allu+Arjun+HD+Wallpapers+1.jpg', 'pm2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_members`
--
ALTER TABLE `new_members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_members`
--
ALTER TABLE `new_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
