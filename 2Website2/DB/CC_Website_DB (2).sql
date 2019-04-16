-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 08:25 PM
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
  `s_no` bigint(20) NOT NULL,
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
(7, 'Java Classes'),
(8, 'Git Classes');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `s_no` int(11) NOT NULL,
  `comment` text NOT NULL,
  `p_s_no` int(11) NOT NULL,
  `u_id_no` int(11) NOT NULL,
  `Title` text NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `image_name` varchar(999) DEFAULT NULL,
  `image_path` varchar(999) DEFAULT NULL,
  `Category` varchar(100) NOT NULL,
  `Schedule` tinyint(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`s_no`, `admin_name`, `Title`, `Label`, `content`, `image_name`, `image_path`, `Category`, `Schedule`, `created`, `updated`) VALUES
(1, 'Ankit@mnnit.com', 'Machine Learning Content ', 'ml-content-resources', 'Hi,\r\n\r\nAs per your request to introduce machine learning libraries and sample implementations, we have created introductory Colab notebooks for python libraries such as NumPy, Pandas, Matplotlib, and an object classification demonstration (a basic computer vision task).\r\n\r\nWe have been preparing these notebooks for the last 2 months and would like you to take them as seriously as you would take a CC class.\r\n\r\nHere is the URL to the notebooks: https://github.com/â€¦/master/MachineLâ€¦/2019_04_11_ML3_content\r\n\r\nPrerequisites: python3\r\nSuggested sequence:\r\n1. NumPy\r\n2. Matplotlib\r\n3. Pandas\r\n4. Object classification', NULL, NULL, 'Competitive Coding', 1, '2019-04-13 18:17:24', '2019-04-13 23:51:06'),
(2, 'Ankit@mnnit.com', 'WoC', 'dev-jam-2019', 'Hi Everyone,\r\nWe hope you are almost done with your Web projects.Those who have completed their projects, can submit them. Following are instructions to submit the projects:\r\n1) Put your project to GitHub.\r\n2) Create ð©ð«ð¨ð©ðžð« ð‘ðžðšðð¦ðž ð…ð¢ð¥ðž, which tells various requirements and versions of the external libraries used (if any), along with the instructions to run your project.\r\n3) Mail the link of your repo to following email address:\r\n\r\nwdcmnnit@gmail.com\r\n\r\n4) Subject should be: <team name>_<Year>\r\n5) Also give all the member\'s info and their role in project in the mail.\r\n\r\nPS: The last date for submission is ðŸðŸ‘ð­ð¡ ð€ð©ð«ð¢ð¥ ðŸðŸŽðŸðŸ— (ð’ðšð­ð®ð«ððšð²) ðŸðŸ:ðŸ“ðŸ— ððŒ\r\n\r\nAfter that, we will shortly start interview process of shortlisted teams.\r\n\r\nTill Then,\r\nHappy Developing ðŸ™‚', NULL, NULL, 'Competitive Coding', 1, '2019-04-13 18:19:54', '2019-04-13 23:52:03'),
(3, 'Ankit@mnnit.com', 'Algorithm Class', 'cc-classes', 'Hi All,\r\n\r\nNext class of Computer Club is scheduled as follows:\r\n\r\nDate - 12 April 2019\r\nTime - 6:00 PM\r\nVenue - NLH-1\r\nIntended Audience - B.Tech 2nd year, MCA 1st year\r\n\r\nTopics to be discussed -\r\n\r\nString Algorithms:\r\n- String Hashing\r\n- KMP\r\n- Z Algorithm\r\n\r\nAnyone else interested in this topic are welcomed :)\r\n\r\nHappy Coding!', NULL, NULL, 'Competitive Coding', 1, '2019-04-13 18:20:37', NULL),
(4, 'Ankit@mnnit.com', 'One More Post', 'This is it', 'New Post', NULL, NULL, 'Competitive Coding', 1, '2019-04-15 16:06:59', NULL),
(5, 'Ankit@mnnit.com', 'A newer Post', 'This is the final one', 'Yo yes yaah. geez', NULL, NULL, 'Competitive Coding', 1, '2019-04-15 16:11:41', '2019-04-15 21:42:19'),
(6, 'Ankit@mnnit.com', 'Another Post Ankit', 'this is an important post', 'This is it.Google LLC[5] is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware. It is considered one of the Big Four technology companies, alongside Amazon, Apple and Facebook.[6][7]\r\n\r\nGoogle was founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University in California. Together they own about 14 percent of its shares and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a privately held company on September 4, 1998. An initial public offering (IPO) took place on August 19, 2004, and Google moved to its headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google is Alphabet\'s leading subsidiary and will continue to be the umbrella company for Alphabet\'s Internet interests. Sundar Pichai was appointed CEO of Google, replacing Larry Page who became the CEO of Alphabet.\r\n\r\nThe company\'s rapid growth since incorporation has triggered a chain of products, acquisitions, and partnerships beyond Google\'s core search engine (Google Search). It offers services designed for work and productivity (Google Docs, Google Sheets, and Google Slides), email (Gmail/Inbox), scheduling and time management (Google Calendar), cloud storage (Google Drive), instant messaging and video chat (Google Allo, Duo, Hangouts), language translation (Google Translate), mapping and navigation (Google Maps, Waze, Google Earth, Street View), video sharing (YouTube), note-taking (Google Keep), and photo organizing and editing (Google Photos). The company leads the development of the Android mobile operating system, the Google Chrome web browser, and Chrome OS, a lightweight operating system based on the Chrome browser. Google has moved increasingly into hardware; from 2010 to 2015, it partnered with major electronics manufacturers in the production of its Nexus devices, and it released multiple hardware products in October 2016, including the Google Pixel smartphone, Google Home smart speaker, Google Wifi mesh wireless router, and Google Daydream virtual reality headset. Google has also experimented with becoming an Internet carrier (Google Fiber, Project Fi, and Google Station).[8]\r\n\r\nGoogle.com is the most visited website in the world.[9] Several other Google services also figure in the top 100 most visited websites, including YouTube and Blogger. Google is the most valuable brand in the world as of 2017,[10] but has received significant criticism involving issues such as privacy concerns, tax avoidance, antitrust, censorship, and search neutrality. Google\'s mission statement is \"to organize the world\'s information and make it universally accessible and useful\". The companies unofficial slogan \"Don\'t be evil\" was removed from the company\'s code of conduct around May 2018', 'CalculatorScreenshot.png', '/xampp/htdocs/2Website2/admin/include/uploads/CalculatorScreenshot.png', 'Competitive Coding', 1, '2019-04-15 20:44:48', '2019-04-16 02:22:24'),
(7, 'Ankit@mnnit.com', 'Hello ios user i am here you know why', 'world', '                    iOS 12.0.1\r\nText messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile devices, desktops/laptops, or other type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.\r\n\r\nThe term originally referred to messages sent using the Short Message Service (SMS). It has grown beyond alphanumeric text to include multimedia messages (known as MMS) containing digital images, videos, and sound content, as well as ideograms known as emoji (happy faces, sad faces, and other icons).\r\n\r\nAs of 2017, text messages are used by youth and adults for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). Like e-mail and voicemail, and unlike calls (in which the caller hopes to speak directly with the recipient), texting does not require the caller and recipient to both be free at the same moment; this permits communication even between busy individuals. Text messages can also be used to interact with automated systems, for example, to order products or services from e-commerce websites, or to participate in online contests. Advertisers and service providers use direct text marketing to send messages to mobile users about promotions, payment due dates, and other notifications instead of using postal mail, email, or voicemail.                                        ', 'Screenshot (5).png', '/xampp/htdocs/2Website2/admin/include/uploads/Screenshot (5).png', 'Competitive Coding', 1, '2019-04-15 22:33:16', '2019-04-16 04:22:16'),
(8, 'Ankit@mnnit.com', 'End Term Evaluation', 'DevJam', 'End Term Evaluation is scheduled on 17th April', '1503636333cover.jpg', '/xampp/htdocs/2Website2/admin/include/uploads/1503636333cover.jpg', 'Weekend Of Code Event', 1, '2019-04-16 02:59:34', '2019-04-16 08:29:34'),
(9, 'Ankit@mnnit.com', 'Another Post', 'Jingle', 'hgkkj', 'Screenshot (1).png', '/xampp/htdocs/2Website2/admin/include/uploads/Screenshot (1).png', 'Weekend Of Code Event', 1, '2019-04-16 03:05:25', '2019-04-16 08:35:25'),
(10, 'Ankit@mnnit.com', 'Hello', 'How ', 'Ankit this side\r\n', 'Screenshot (3).png', '/xampp/htdocs/2Website2/admin/include/uploads/Screenshot (3).png', 'Weekend Of Code Event', 1, '2019-04-16 03:37:57', '2019-04-16 09:07:57'),
(11, 'Ankit@mnnit.com', 'So ', 'This ', 'is it', 'Screenshot (9).png', '/xampp/htdocs/2Website2/admin/include/uploads/Screenshot (9).png', 'Weekend Of Code Event', 1, '2019-04-16 03:41:37', '2019-04-16 09:11:37'),
(12, 'Ankit@mnnit.com', 'For the End Sem is here and there.', 'MNNIT is here ', '                                        end sem is coming            thor                             ', 'Screenshot (10).png', '/xampp/htdocs/2Website2/admin/include/uploads/Screenshot (10).png', 'Competitive Coding', 0, '2019-04-16 05:31:41', '2019-04-16 23:51:26'),
(13, 'Ankit@mnnit.com', 'Evaluation Dev-Jam WOC', 'end-term', '                    Bonjour Developers,\r\n\r\nWe were highly impressed by the efforts put in by our freshers into all the projects. However, as all the competitions go, we need to embrace rejection as a part of it. The efforts you all put in will help you grow.\r\n\r\nHere are the shortlisted teams for the final evaluation: https://bit.ly/2Dfv0qp\r\n\r\nAs we are finally moving towards the end of DevJam, WoC-2019. Here is the schedule:\r\n\r\nFinal Submission:\r\nDate: April 16th, 2019\r\nTime: till 10:00 PM\r\nUpload your project in a zip file at https://woc2019-devjam.hackerearth.com/\r\n\r\nFinal Evaluation:\r\nDate: April 17th, 2019\r\nTimings: 9:30 AM - 12:00 PM\r\nVenue: NLHC 2\r\n\r\nPresentation Round (of top teams shortlisted in the final round):\r\nDate: April 17th, 2019\r\nTimings: 4:00 PM - 6:00 PM\r\nVenue: GS8\r\n\r\nHere are a few important instructions which all teams selected for final evaluation need to follow:\r\n\r\n- You need to prepare a 5 to 6 slide presentation, which you may need to present if you are selected for the presentation round.\r\n- Make a repository on GitHub and push your project there. Remember DO NOT upload zip files in your GitHub repository.\r\n\r\nPS: Even if your project is not fully completed do come for the final evaluation, you never know when the odds are in thy favour.\r\n\r\nHapping Developing.\r\n                    ', 'safe_image.png', '/xampp/htdocs/2Website2/admin/include/uploads/safe_image.png', 'Weekend Of Code Event', 0, '2019-04-16 18:24:33', '2019-04-16 23:54:51');

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
(8, 'Ankit', 'Sangwan', 'ankit.sangwan1999', 'Ankit.sangwan1999@gmail.com', '$2y$10$PwNPRwYuBVNdysVPKJM/We7ch1X0dVwaVYVHMPDO/eEffVYNEVlT.'),
(9, 'Sandeep', 'Sangwan', 'sandeep', 'sandeep@gmail.com', '$2y$10$D9OQUthT8kLFlw.Zp/dS0uY0dpoc0zq5s9ocPtpzXfDLWHoEim5jO'),
(12, 'Thor', 'Odinsondjk', 'soihd', 'sandeep@gmail.com', '$2y$10$ImZIaPrs7NjY9K2sQt6fN.JlgmYBny5GoZEEbWmnulkuxrY0LFNq2'),
(13, 'Anki', 'Drive', 'ankidrive', 'godofthunder@gmail.com', '$2y$10$EfNxjWv7Me0mQsKNe0TIiuRnRgH7IJKVAywUdlm7Y2tziMNxHPrYW'),
(14, 'ank', 'san', 'ankitsngwanis ', 'godofthunder@gmail.com', '$2y$10$zzaPYu7fKMME0Hpybk6ZNOjtyFBCz2ILqS0w9hh2KmVe0n8e42fLy'),
(15, 'Thanos', 'isa', 'naughtyboy', 'thanos@gmail.com', '$2y$10$MxZbHR2iwqBBdgLFirzkW.mNq2MJAa66bTSaXfUbJ.jHrFGnJeQza'),
(16, 'Shubhi', 'Verma', 'vshubhi612', 'shubhi@mail.com', '$2y$10$KFZkT7Ga4qVvPw5AV.mFfOz/9fITXp25IMBaxz15zMB1rksXx/Mta'),
(17, 'Kshitiz', 'Srivastava', 'mnnitksh', 'ksh1998@gmail.com', '$2y$10$ZWstJyQ8pxndqfS788iXW.bQ3veCYexNoWG3np9qT4hzmA3O2wB.e'),
(18, 'Ankit', 'Sangwan', 'ankit.sangwan111213', 'godofthunder@gmail.com', '$2y$10$P9V4pCBHzafVcgjJ.a8Vz.3r74iDNXjmdoKmoLvN/YwPYpxBOvY..');

-- --------------------------------------------------------

--
-- Table structure for table `users_interest`
--

CREATE TABLE `users_interest` (
  `ser_no` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_interest`
--

INSERT INTO `users_interest` (`ser_no`, `user_name`, `Category`) VALUES
(1, 'ankitsngwanis ', 'Competitive Coding'),
(2, 'ankitsngwanis ', 'Machine Learning'),
(3, 'ankitsngwanis ', 'Web development'),
(4, 'naughtyboy', 'Competitive Coding'),
(5, 'naughtyboy', 'Git Classes'),
(6, 'vshubhi612', 'Competitive Coding'),
(7, 'vshubhi612', 'Web development'),
(8, 'vshubhi612', 'Web-Dev with Django'),
(9, 'mnnitksh', 'Web development'),
(10, 'mnnitksh', 'Weekend Of Code Event'),
(11, 'ankit.sangwan111213', 'Competitive Coding'),
(12, 'ankit.sangwan111213', 'Machine Learning'),
(13, 'ankit.sangwan111213', 'Web development'),
(14, 'ankit.sangwan111213', 'IOT'),
(15, 'ankit.sangwan111213', 'Weekend Of Code Event'),
(16, 'ankit.sangwan111213', 'Git Classes');

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
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `S.No.` (`s_no`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`s_no`),
  ADD KEY `p_s_no` (`p_s_no`),
  ADD KEY `u_id_no` (`u_id_no`);

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
-- Indexes for table `users_interest`
--
ALTER TABLE `users_interest`
  ADD PRIMARY KEY (`ser_no`);

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
  MODIFY `s_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users_interest`
--
ALTER TABLE `users_interest`
  MODIFY `ser_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`p_s_no`) REFERENCES `posts` (`s_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`u_id_no`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
