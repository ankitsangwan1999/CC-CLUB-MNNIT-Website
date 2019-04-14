-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 07:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--
CREATE DATABASE IF NOT EXISTS `login_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Serial No.` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Serial No.`, `admin_name`, `admin_password`) VALUES
(1, 'Ankit@mnnit.com', '$2y$10$qzvtzph30X5Ns.5hVeJjxunyaLdMBDJ9nzeSoFJfESK2xppEGeiCa');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `s_no` bigint(20) UNSIGNED NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`s_no`, `Category`) VALUES
(1, 'Competitive Coding'),
(2, 'Machine Learning'),
(3, 'Web development'),
(4, 'IOT'),
(5, 'Web-Dev with Django'),
(6, 'Weekend Of Code Event'),
(7, 'Jave Classes');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `s_no` int(11) NOT NULL,
  `admin_name` varchar(256) NOT NULL,
  `Title` text NOT NULL,
  `Label` varchar(200) NOT NULL,
  `content` text,
  `Category` varchar(100) NOT NULL,
  `Schedule` tinyint(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`s_no`, `admin_name`, `Title`, `Label`, `content`, `Category`, `Schedule`, `created`, `updated`) VALUES
(1, 'Ankit@mnnit.com', 'Machine Learning Content ', 'ml-content-resources', 'Hi,\r\n\r\nAs per your request to introduce machine learning libraries and sample implementations, we have created introductory Colab notebooks for python libraries such as NumPy, Pandas, Matplotlib, and an object classification demonstration (a basic computer vision task).\r\n\r\nWe have been preparing these notebooks for the last 2 months and would like you to take them as seriously as you would take a CC class.\r\n\r\nHere is the URL to the notebooks: https://github.com/â€¦/master/MachineLâ€¦/2019_04_11_ML3_content\r\n\r\nPrerequisites: python3\r\nSuggested sequence:\r\n1. NumPy\r\n2. Matplotlib\r\n3. Pandas\r\n4. Object classification', 'Competitive Coding', 1, '2019-04-13 18:17:24', '2019-04-13 23:51:06'),
(2, 'Ankit@mnnit.com', 'WoC', 'dev-jam-2019', 'Hi Everyone,\r\nWe hope you are almost done with your Web projects.Those who have completed their projects, can submit them. Following are instructions to submit the projects:\r\n1) Put your project to GitHub.\r\n2) Create ð©ð«ð¨ð©ðžð« ð‘ðžðšðð¦ðž ð…ð¢ð¥ðž, which tells various requirements and versions of the external libraries used (if any), along with the instructions to run your project.\r\n3) Mail the link of your repo to following email address:\r\n\r\nwdcmnnit@gmail.com\r\n\r\n4) Subject should be: <team name>_<Year>\r\n5) Also give all the member\'s info and their role in project in the mail.\r\n\r\nPS: The last date for submission is ðŸðŸ‘ð­ð¡ ð€ð©ð«ð¢ð¥ ðŸðŸŽðŸðŸ— (ð’ðšð­ð®ð«ððšð²) ðŸðŸ:ðŸ“ðŸ— ððŒ\r\n\r\nAfter that, we will shortly start interview process of shortlisted teams.\r\n\r\nTill Then,\r\nHappy Developing ðŸ™‚', 'Competitive Coding', 1, '2019-04-13 18:19:54', '2019-04-13 23:52:03'),
(3, 'Ankit@mnnit.com', 'Algorithm Class', 'cc-classes', 'Hi All,\r\n\r\nNext class of Computer Club is scheduled as follows:\r\n\r\nDate - 12 April 2019\r\nTime - 6:00 PM\r\nVenue - NLH-1\r\nIntended Audience - B.Tech 2nd year, MCA 1st year\r\n\r\nTopics to be discussed -\r\n\r\nString Algorithms:\r\n- String Hashing\r\n- KMP\r\n- Z Algorithm\r\n\r\nAnyone else interested in this topic are welcomed :)\r\n\r\nHappy Coding!', 'Competitive Coding', 1, '2019-04-13 18:20:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(20) NOT NULL,
  `user_last` varchar(20) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_name`, `user_email`, `Password`) VALUES
(1, 'Thor', 'Odinson', 'pointbreak', 'godofthunder@gmail.com', '$2y$10$CKltN8TYcVn3gd6qS0KfFeE4Zq8FtzmOS1SWFNTjQ.Gp97gpwHJfa'),
(2, 'Tony', 'Stark', 'playboy', 'iron_man@gmail.com', '$2y$10$72b7m7RflOcRF7hjMvqxbOc/7WEBqovPt8zgM92jLjcYjmBra9HtC'),
(3, 'Loki', 'Odinson', 'mischief', 'lokiwillbeback@gmail.com', '$2y$10$Cz1HeQ4p2/wReQ045C1zu.gO4xwFLTz/cw9vT.7vQJkZJkcfSbvyS'),
(4, 'Rishabh', 'Kalyani', 'aarkay', 'rishabhkalyani360@gmail.com', '$2y$10$qzvtzph30X5Ns.5hVeJjxunyaLdMBDJ9nzeSoFJfESK2xppEGeiCa'),
(5, 'ksh', 'sri', 'pirate', 'kash@gmail.com', '$2y$10$Ey2Jncke3jzcWIARBTH/G.NaOkj1kGjohOzxe6swTRn1DbY9drRAu'),
(6, 'Kshitiz', 'Srivastava', 'pirate_ksh', 'ksh1998@gmail.com', '$2y$10$HZO77MSz8i5cIGl3QE.0sukEWWgynuIY8U0TmoLzuIgFIPeTVta7W'),
(7, 'Manish', 'Sangwan', 'imanish1993', 'manish@gmail.com', '$2y$10$MKEuxFM6iurbecdZdFXbmufIbiqP.Hy/wD2oFhp.avrRNchicIlVC'),
(8, 'Ankit', 'Sangwan', 'ankit.sangwan1999', 'Ankit.sangwan1999@gmail.com', '$2y$10$PwNPRwYuBVNdysVPKJM/We7ch1X0dVwaVYVHMPDO/eEffVYNEVlT.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Serial No.`),
  ADD UNIQUE KEY `Serial No.` (`Serial No.`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `S.No.` (`s_no`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Serial No.` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `s_no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
