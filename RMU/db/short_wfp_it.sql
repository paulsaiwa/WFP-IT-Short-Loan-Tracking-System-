-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 11:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `short_wfp_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `index_No` varchar(50) NOT NULL,
  `serial_no` varchar(34) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `tagNo` varchar(100) NOT NULL,
  `returned_by` varchar(100) NOT NULL,
  `admin_id` int(244) NOT NULL,
  `date_posted` int(244) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `index_No`, `serial_no`, `fname`, `phone`, `item_description`, `tagNo`, `returned_by`, `admin_id`, `date_posted`) VALUES
(277, '6666444444', 'nk000000', 'to to', '+0888888888', 'xx', '88888866', 'void', 25, 1677991412),
(278, '0499499494', 'HU76UJ98', 'Chisomo Phiri', '+0888888888', 'Skala for Men', '73773337', 'void', 35, 1678012549);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `data` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `action`, `user`, `data`) VALUES
(605, '2023-03-05 12:37:55', 'Login', 'Admin', 'Vincent saiwa'),
(604, '2023-03-05 12:37:00', 'Logout', 'Admin', 'Charles Exton'),
(603, '2023-03-05 12:33:49', 'Login', 'Admin', 'Charles Exton'),
(602, '2023-03-05 12:32:59', 'Login', 'Admin', 'Default User'),
(601, '2023-03-05 12:29:38', 'Logout', 'Admin', 'Vincent saiwa'),
(600, '2023-03-05 12:25:32', 'Login', 'Admin', 'Vincent saiwa'),
(599, '2023-03-05 12:25:10', 'Logout', 'Admin', 'Default User'),
(598, '2023-03-05 11:57:13', 'Login', 'Admin', 'Default User'),
(596, '2023-03-05 10:02:47', 'Login', 'User', 'Charles Exton'),
(597, '2023-03-05 11:57:00', 'Logout', 'User', ' '),
(595, '2023-03-05 09:54:17', 'Login', 'Admin', 'Super Administrator'),
(594, '2023-03-05 09:53:59', 'Logout', 'Admin', 'Vincent saiwa'),
(593, '2023-03-05 09:53:41', 'Login', 'Admin', 'Vincent saiwa'),
(592, '2023-03-05 09:51:48', 'Logout', 'Admin', 'Vincent saiwa'),
(591, '2023-03-05 09:51:24', 'Login', 'Admin', 'Vincent saiwa'),
(590, '2023-03-05 09:40:53', 'Logout', '', ' '),
(589, '2023-03-05 07:21:48', 'Login', 'Admin', 'Vincent saiwa'),
(588, '2023-03-05 07:16:20', 'Logout', 'Admin', ' '),
(587, '2023-03-05 07:14:00', 'Login', 'Admin', 'Super Administrator'),
(586, '2023-03-05 07:13:42', 'Logout', '', ' '),
(585, '2023-03-05 06:56:30', 'Login', 'Admin', 'admin'),
(584, '2023-03-05 06:56:26', 'Logout', 'Admin', ' '),
(583, '2023-03-05 06:38:55', 'Login', 'Admin', 'Vincent saiwa'),
(582, '2023-03-05 06:38:43', 'Logout', 'User', ' '),
(581, '2023-03-05 06:37:15', 'Login', 'User', 'GO GO'),
(579, '2023-03-05 06:30:11', 'Login', 'Admin', 'admin'),
(580, '2023-03-05 06:37:09', 'Logout', 'Admin', ' '),
(577, '2023-03-05 06:29:24', 'Login', 'Admin', 'Vincent saiwa'),
(578, '2023-03-05 06:29:57', 'Logout', 'Admin', ' '),
(575, '2023-03-05 05:55:23', 'Login', 'Admin', 'admin'),
(576, '2023-03-05 06:29:12', 'Logout', 'Admin', ' '),
(574, '2023-03-05 05:55:18', 'Logout', 'User', ' '),
(573, '2023-03-05 05:54:08', 'Login', 'User', 'Jacob Saiwa'),
(571, '2023-03-05 05:51:23', 'Login', 'Admin', 'admin'),
(572, '2023-03-05 05:52:05', 'Logout', 'Admin', ' '),
(569, '2023-03-05 05:48:23', 'Login', 'Admin', 'admin'),
(570, '2023-03-05 05:51:18', 'Logout', 'Admin', ' '),
(568, '2023-03-05 05:48:18', 'Logout', 'User', ' '),
(567, '2023-03-05 05:46:37', 'Login', 'User', 'user'),
(566, '2023-03-05 05:46:33', 'Logout', 'User', ' '),
(565, '2023-03-05 05:44:10', 'Login', 'User', 'user'),
(564, '2023-03-05 05:43:56', 'Logout', 'User', ' '),
(563, '2023-03-05 05:43:08', 'Login', 'User', 'user'),
(562, '2023-03-05 05:43:03', 'Logout', 'Admin', ' '),
(561, '2023-03-05 05:42:59', 'Login', 'Admin', 'admin'),
(560, '2023-03-05 05:42:46', 'Login', 'Admin', 'admin'),
(559, '2023-03-05 05:42:35', 'Login', 'Admin', 'admin'),
(558, '2023-03-05 05:42:10', 'Login', 'Admin', 'admin '),
(557, '2023-03-05 05:42:05', 'Logout', 'Admin', ' '),
(556, '2023-03-05 05:41:49', 'Login', 'Admin', 'admin '),
(555, '2023-03-05 05:41:45', 'Logout', 'User', ' '),
(553, '2023-03-05 05:41:14', 'Login', 'User', 'user'),
(554, '2023-03-05 05:41:41', 'Login', 'User', 'user'),
(552, '2023-03-05 05:36:52', 'Login', 'User', 'user '),
(551, '2023-03-05 05:36:14', 'Logout', 'User', ' '),
(550, '2023-03-05 05:35:12', 'Login', 'User', 'user '),
(549, '2023-03-05 05:35:06', 'Logout', 'User', ' '),
(547, '2023-03-05 05:34:57', 'Logout', 'Admin', ' '),
(548, '2023-03-05 05:35:02', 'Login', 'User', 'user '),
(546, '2023-03-05 05:34:52', 'Login', 'Admin', 'admin '),
(545, '2023-03-05 05:34:46', 'Logout', 'User', ' '),
(544, '2023-03-05 05:34:42', 'Login', 'User', 'user '),
(543, '2023-03-05 05:34:35', 'Logout', 'Admin', ' '),
(542, '2023-03-05 05:33:03', 'Login', 'Admin', ' '),
(541, '2023-03-05 05:32:57', 'Logout', 'Admin', ' '),
(540, '2023-03-03 15:02:49', 'Login', 'Admin', ' '),
(539, '2023-03-03 15:02:24', 'Login', 'User', ' '),
(538, '2023-03-03 15:02:19', 'Logout', 'User', ' '),
(537, '2023-03-03 15:01:54', 'Login', 'User', ' '),
(536, '2023-03-03 15:01:24', 'Login', 'User', ' '),
(535, '2023-03-03 15:00:10', 'Login', 'User', ' '),
(534, '2023-03-03 14:59:25', 'Login', 'User', ' '),
(533, '2023-03-03 14:58:21', 'Login', 'User', ' '),
(530, '2023-03-03 14:55:50', 'Logout', 'Admin', ' '),
(531, '2023-03-03 14:56:01', 'Login', 'User', ' '),
(532, '2023-03-03 14:56:05', 'Logout', 'User', ' '),
(529, '2023-03-03 14:55:45', 'Login', 'Admin', ' '),
(528, '2023-03-03 14:22:47', 'Logout', 'Admin', ' '),
(527, '2023-03-03 14:21:41', 'Login', 'Admin', ' '),
(526, '2023-03-03 14:21:31', 'Logout', 'User', ' '),
(525, '2023-03-03 13:33:24', 'Login', 'User', ' '),
(523, '2023-03-03 13:26:49', 'Logout', 'User', ' '),
(524, '2023-03-03 13:26:56', 'Login', 'Admin', ' '),
(522, '2023-03-03 13:07:48', 'Login', 'User', ' '),
(521, '2023-03-03 06:41:29', 'Login', 'User', ' '),
(520, '2023-03-03 06:41:24', 'Logout', 'User', ' '),
(519, '2023-03-02 22:45:57', 'Login', 'User', ' '),
(517, '2023-03-02 22:45:13', 'Login', 'Admin', ' '),
(518, '2023-03-02 22:45:52', 'Logout', 'Admin', ' '),
(514, '2023-03-02 22:26:09', 'Logout', 'User', ' '),
(515, '2023-03-02 22:26:15', 'Login', 'User', ' '),
(516, '2023-03-02 22:45:02', 'Logout', 'User', ' '),
(513, '2023-03-02 18:40:04', 'Login', 'User', ' '),
(512, '2023-03-02 18:39:59', 'Logout', 'Admin', ' '),
(511, '2023-03-02 18:38:33', 'Login', 'Admin', ' '),
(509, '2023-03-02 18:33:56', 'Login', 'Admin', ' '),
(510, '2023-03-02 18:38:24', 'Logout', 'Admin', ' '),
(507, '2023-03-02 18:29:50', 'Login', 'Admin', ' '),
(508, '2023-03-02 18:33:32', 'Logout', 'Admin', ' '),
(505, '2023-03-02 14:35:29', 'Login', 'User', ' '),
(506, '2023-03-02 18:29:30', 'Logout', 'User', ' '),
(501, '2023-03-01 03:01:54', 'Logout', 'Admin', ' '),
(502, '2023-03-01 03:02:00', 'Login', 'Admin', ' '),
(503, '2023-03-01 03:12:02', 'Logout', '', ' '),
(504, '2023-03-01 03:12:11', 'Login', 'User', ' '),
(498, '2023-03-01 02:33:45', 'Login', 'Admin', 'admin '),
(499, '2023-03-01 02:38:53', 'Logout', 'Admin', ' '),
(500, '2023-03-01 02:39:06', 'Login', 'Admin', 'admin '),
(496, '2023-02-26 16:22:23', 'Login', 'User', 'user '),
(497, '2023-02-26 16:35:13', 'Logout', 'User', ' '),
(494, '2023-02-26 16:20:51', 'Login', 'Admin', 'Vincent '),
(495, '2023-02-26 16:22:18', 'Logout', 'Admin', ' '),
(492, '2023-02-26 16:19:03', 'Login', 'Admin', 'admin '),
(493, '2023-02-26 16:20:40', 'Logout', 'Admin', ' '),
(490, '2023-02-26 16:17:32', 'Login', 'Admin', 'admin '),
(491, '2023-02-26 16:18:53', 'Logout', 'Admin', ' '),
(488, '2023-02-26 16:15:55', 'Login', 'User', 'user '),
(489, '2023-02-26 16:17:23', 'Logout', 'User', ' '),
(485, '2023-02-22 15:51:06', 'Logout', 'Admin', ' '),
(486, '2023-02-22 15:51:14', 'Login', 'User', 'user '),
(487, '2023-02-22 15:51:20', 'Login', 'Admin', 'admin '),
(484, '2023-02-22 15:51:01', 'Login', 'Admin', 'admin '),
(482, '2023-02-22 15:49:30', 'Logout', 'User', ' '),
(483, '2023-02-22 15:50:27', 'Login', 'Admin', 'admin '),
(479, '2023-02-22 15:24:54', 'Logout', 'User', ' '),
(480, '2023-02-22 15:25:26', 'Login', 'Admin', 'admin '),
(481, '2023-02-22 15:26:53', 'Login', 'User', 'user '),
(478, '2023-02-22 15:21:23', 'Login', 'User', 'user '),
(477, '2023-02-22 15:20:30', 'Login', 'User', 'user '),
(476, '2023-02-22 15:20:24', 'Logout', 'User', ' '),
(475, '2023-02-22 15:17:50', 'Login', 'User', 'user '),
(472, '2023-02-22 14:58:44', 'Logout', 'User', ' '),
(473, '2023-02-22 14:58:51', 'Login', 'Admin', 'admin '),
(474, '2023-02-22 15:07:07', 'Delete Item returned information', 'Admin', ' '),
(471, '2023-02-22 14:53:31', 'Login', 'User', 'Paul '),
(470, '2023-02-22 14:53:26', 'Logout', 'Admin', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `returned_by`
--

CREATE TABLE `returned_by` (
  `returned_id` int(11) NOT NULL,
  `item_condition` varchar(34) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `witness_id` varchar(255) NOT NULL,
  `User_id` varchar(3) NOT NULL,
  `date_returned` varchar(233) NOT NULL,
  `returned` varchar(233) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `returned_by`
--

INSERT INTO `returned_by` (`returned_id`, `item_condition`, `comment`, `employeeID`, `witness_id`, `User_id`, `date_returned`, `returned`) VALUES
(89, 'Good', 'bhobho', 278, 'Vincent saiwa', '', '1678012697', 'Item returned'),
(88, 'Good', 'yuo', 277, 'Vincent saiwa', '', '1677991444', 'Item returned');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `index_no` int(34) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `fullname_user` varchar(200) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  `date_registered` varchar(200) NOT NULL,
  `registered_by` varchar(200) NOT NULL,
  `status` varchar(34) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `index_no`, `UserName`, `Password`, `fullname_user`, `User_Type`, `date_registered`, `registered_by`, `status`) VALUES
(33, 63655445, 'vsaiwa@wfp.org', '5e5b7a1af8b279a829ff5223dba6bfce', 'Vincent saiwa', 'Admin', '1678000932', '27', 'Activate'),
(34, 63633553, 'super.admin@wfp.org', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'Super Administrator', 'Admin', '1678000985', '27', 'Activate'),
(35, 99599595, 'charles@wfp.org', '0d42ea2b999f0fcbcdb68cc0cfaf0708', 'Charles Exton', 'Admin', '1678002039', '27', 'Activate'),
(36, 9535353, 'charles@wfp.org', 'a970a7e3b359f88a4732b56050822888', 'Charles Exton', 'User', '1678003309', '34', 'Activate'),
(37, 0, 'default_user@wfp.org', '11af2174d0cd2136f76d6b39b630a2d9', 'Default User', 'Admin', '1678009578', '36', 'Activate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `returned_by`
--
ALTER TABLE `returned_by`
  ADD PRIMARY KEY (`returned_id`),
  ADD UNIQUE KEY `employeeID` (`employeeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `index_no` (`index_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

--
-- AUTO_INCREMENT for table `returned_by`
--
ALTER TABLE `returned_by`
  MODIFY `returned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
