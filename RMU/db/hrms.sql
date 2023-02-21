-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 07:11 AM
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
-- Database: `hrms`
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
(253, '77777777', '77777777', 'ga ga', '+848484999495', 'qoqooqo', '77777272', 'void', 1, 1676889141),
(252, 'jjjj', '9999999999j', 'v mn', '+000000000000', '999999999999999', '99999999', 'void', 1, 1676888527),
(250, '777777', '77777777', 'hh hh', '+999999999999', 'kakka', '75757577', 'void', 1, 1676888237),
(251, 'none', '99JKKKKKKK', 'John Masauko', '+009999999999', 'Hello', '99999999', 'void', 1, 1676888408),
(249, '88888', '8888888', 'ha ha', '+000000000000', 'jajja', '58588558', 'void', 1, 1676884715);

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
(447, '2023-02-20 13:34:57', 'Delete Item returned information', 'Admin', ' '),
(446, '2023-02-20 12:22:26', 'Delete Item returned information', 'Admin', ' '),
(445, '2023-02-20 12:20:33', 'Delete Item returned information', 'Admin', ' '),
(444, '2023-02-20 12:18:13', 'Delete Item returned information', 'Admin', ' '),
(443, '2023-02-20 12:14:58', 'Delete Item returned information', 'Admin', ' '),
(442, '2023-02-20 12:14:44', 'Delete Item returned information', 'Admin', ' '),
(441, '2023-02-20 12:13:22', 'Delete Item returned information', 'Admin', ' '),
(440, '2023-02-20 11:16:13', 'Delete Employee', 'Admin', ' '),
(439, '2023-02-20 11:09:13', 'Delete Employee', 'Admin', ' '),
(438, '2023-02-20 10:35:17', 'Login', 'Admin', 'admin '),
(437, '2023-02-20 10:35:09', 'Logout', 'Admin', ' '),
(436, '2023-02-20 10:35:04', 'Login', 'Admin', 'admin '),
(435, '2023-02-20 10:34:57', 'Logout', 'Admin', ' '),
(434, '2023-02-20 10:34:50', 'Login', 'Admin', 'admin '),
(433, '2023-02-17 11:53:39', 'Login', 'Admin', 'admin '),
(432, '2023-02-17 11:53:33', 'Logout', 'Admin', ' '),
(431, '2023-02-17 11:52:18', 'Login', 'Admin', ' '),
(430, '2023-02-17 11:52:04', 'Logout', 'Admin', ' '),
(429, '2023-02-17 11:50:38', 'Login', 'Admin', ' '),
(428, '2023-02-16 19:33:30', 'Logout', 'Admin', ' '),
(427, '2023-02-16 16:32:53', 'Login', 'Admin', ' '),
(426, '2023-02-16 16:32:48', 'Logout', 'User', ' '),
(425, '2023-02-16 16:11:13', 'Login', 'User', 'Paul Lufeyo'),
(424, '2023-02-16 16:11:05', 'Logout', 'User', 'user user'),
(423, '2023-02-16 16:06:24', 'Login', 'User', 'user user'),
(422, '2023-02-16 16:06:18', 'Logout', 'Admin', 'Vincent Saiwa'),
(421, '2023-02-16 15:18:11', 'Login', 'Admin', 'Vincent Saiwa'),
(420, '2023-02-16 15:18:01', 'Logout', 'Admin', 'admin admin'),
(419, '2023-02-16 14:54:55', 'Login', 'Admin', 'admin admin'),
(418, '2023-02-16 14:54:49', 'Logout', 'User', 'user user'),
(417, '2023-02-16 14:54:42', 'Login', 'User', 'user user'),
(416, '2023-02-16 14:54:37', 'Logout', 'Admin', 'admin admin'),
(415, '2023-02-16 14:50:37', 'Login', 'Admin', 'admin admin'),
(414, '2023-02-16 14:50:31', 'Logout', 'User', 'user user'),
(413, '2023-02-16 14:31:10', 'Login', 'User', 'user user'),
(412, '2023-02-16 14:20:30', 'Logout', 'User', 'user user'),
(411, '2023-02-16 14:20:04', 'Login', 'User', 'user user'),
(410, '2023-02-16 14:19:55', 'Logout', 'Admin', 'admin admin'),
(409, '2023-02-16 14:08:30', 'Delete Employee', 'Admin', ' '),
(408, '2023-02-16 14:08:27', 'Delete Employee', 'Admin', ' '),
(407, '2023-02-16 14:08:25', 'Delete Employee', 'Admin', ' '),
(406, '2023-02-16 14:08:23', 'Delete Employee', 'Admin', ' '),
(404, '2023-02-16 14:08:18', 'Delete Employee', 'Admin', ' '),
(405, '2023-02-16 14:08:20', 'Delete Employee', 'Admin', ' '),
(403, '2023-02-16 14:08:16', 'Delete Employee', 'Admin', ' '),
(402, '2023-02-16 14:08:13', 'Delete Employee', 'Admin', ' '),
(401, '2023-02-16 14:08:11', 'Delete Employee', 'Admin', ' '),
(400, '2023-02-16 12:30:37', 'Login', 'Admin', 'admin admin'),
(399, '2023-02-16 12:18:43', 'Delete Employee', 'Admin', ' '),
(398, '2023-02-16 12:18:40', 'Delete Employee', 'Admin', ' '),
(397, '2023-02-16 12:18:38', 'Delete Employee', 'Admin', ' '),
(396, '2023-02-16 12:18:35', 'Delete Employee', 'Admin', ' '),
(395, '2023-02-16 12:18:31', 'Delete Employee', 'Admin', ' '),
(394, '2023-02-16 12:18:28', 'Delete Employee', 'Admin', ' '),
(393, '2023-02-16 12:18:23', 'Delete Employee', 'Admin', ' '),
(392, '2023-02-16 12:18:21', 'Delete Employee', 'Admin', ' '),
(391, '2023-02-16 12:18:19', 'Delete Employee', 'Admin', ' '),
(389, '2023-02-16 11:34:20', 'Login', 'User', 'user user'),
(390, '2023-02-16 12:12:20', 'Login', 'Admin', 'admin admin'),
(388, '2023-02-16 11:34:15', 'Logout', 'Admin', 'admin admin'),
(387, '2023-02-16 11:33:51', 'Login', 'Admin', 'admin admin'),
(386, '2023-02-16 11:27:12', 'Login', 'Admin', 'admin admin'),
(385, '2023-02-16 11:03:54', 'Logout', 'Admin', 'admin admin'),
(384, '2023-02-16 10:58:48', 'Delete Employee', 'Admin', ' '),
(383, '2023-02-16 10:58:26', 'Delete Employee', 'Admin', ' '),
(381, '2023-02-16 10:58:20', 'Delete Employee', 'Admin', ' '),
(382, '2023-02-16 10:58:24', 'Delete Employee', 'Admin', ' '),
(380, '2023-02-16 10:58:17', 'Delete Employee', 'Admin', ' '),
(378, '2023-02-16 10:58:12', 'Delete Employee', 'Admin', ' '),
(379, '2023-02-16 10:58:15', 'Delete Employee', 'Admin', ' '),
(377, '2023-02-16 10:58:06', 'Delete Employee', 'Admin', ' '),
(375, '2023-02-16 10:58:01', 'Delete Employee', 'Admin', ' '),
(376, '2023-02-16 10:58:04', 'Delete Employee', 'Admin', ' '),
(374, '2023-02-16 10:57:58', 'Delete Employee', 'Admin', ' '),
(373, '2023-02-16 10:57:52', 'Delete Employee', 'Admin', ' '),
(371, '2023-02-16 10:56:55', 'Logout', 'User', 'user user'),
(372, '2023-02-16 10:57:04', 'Login', 'Admin', 'admin admin'),
(370, '2023-02-16 10:25:24', 'Login', 'User', 'user user'),
(369, '2023-02-16 10:25:16', 'Logout', 'Admin', 'admin admin'),
(368, '2023-02-16 09:57:13', 'Login', 'Admin', 'admin admin'),
(366, '2023-02-16 09:26:54', 'Login', 'User', 'user user'),
(367, '2023-02-16 09:57:01', 'Logout', 'User', 'user user'),
(364, '2023-02-16 09:22:45', 'Delete Employee', 'Admin', ' '),
(365, '2023-02-16 09:26:47', 'Logout', 'Admin', 'admin admin'),
(363, '2023-02-16 09:21:16', 'Login', 'Admin', 'admin admin'),
(361, '2023-02-16 09:15:37', 'Login', 'Admin', 'admin admin'),
(362, '2023-02-16 09:21:11', 'Logout', 'Admin', 'admin admin'),
(359, '2023-02-15 15:50:13', 'Logout', 'Admin', 'admin admin'),
(360, '2023-02-15 15:50:48', 'Login', 'User', 'user user'),
(358, '2023-02-15 15:48:40', 'Login', 'Admin', 'admin admin'),
(357, '2023-02-15 15:48:34', 'Logout', 'User', 'user user'),
(356, '2023-02-15 15:48:29', 'Login', 'User', 'user user'),
(355, '2023-02-15 15:44:03', 'Logout', 'User', 'user user'),
(354, '2023-02-15 15:09:47', 'Login', 'User', 'user user'),
(352, '2023-02-15 15:08:05', 'Logout', 'User', 'user user'),
(353, '2023-02-15 15:08:11', 'Login', 'User', 'user user'),
(351, '2023-02-15 15:05:32', 'Login', 'User', 'user user'),
(350, '2023-02-15 15:05:24', 'Logout', '', ' ');

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
  `date_returned` varchar(233) NOT NULL,
  `returned` varchar(233) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `index_no` int(34) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `User_Type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `index_no`, `UserName`, `Password`, `fullname`, `User_Type`) VALUES
(1, 95959595, 'admin', 'admin', 'admin', 'Admin'),
(4, 96464, 'user', 'user', 'user', 'User'),
(15, 98877777, 'paul', 'paulsaiwa', 'Paul', 'User'),
(14, 9999999, 'saiwav', 'saiwavincent', 'Vincent', 'Admin');

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
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;

--
-- AUTO_INCREMENT for table `returned_by`
--
ALTER TABLE `returned_by`
  MODIFY `returned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
