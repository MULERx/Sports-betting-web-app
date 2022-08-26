-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 09:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitybet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Admin_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Admin_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin_Name`, `Password`, `First_Name`, `Last_Name`, `Gender`, `Admin_role`) VALUES
(117853, 'xm', '1234567', 'muler', 'cher', 'male', '');

-- --------------------------------------------------------

--
-- Table structure for table `betslip`
--

CREATE TABLE `betslip` (
  `bet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bet_money` int(11) NOT NULL,
  `total_odd` float NOT NULL,
  `vat` float NOT NULL,
  `tax` float NOT NULL,
  `possible_win` float NOT NULL,
  `status` int(11) NOT NULL,
  `bet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `betslip`
--

INSERT INTO `betslip` (`bet_id`, `user_id`, `bet_money`, `total_odd`, `vat`, `tax`, `possible_win`, `status`, `bet_date`) VALUES
(109169, 250136, 100, 10.84, 15, 0, 942.61, 1, '2022-08-09'),
(174868, 250136, 4, 1.23, 0.6, 0, 4.28, 12, '2022-08-11'),
(187520, 171179, 23, 2.34, 3.45, 0, 46.8, 12, '2022-08-11'),
(221615, 171179, 2, 1.23, 0.3, 0, 2.14, 0, '2022-08-09'),
(268979, 250136, 10, 8.01, 1.5, 0, 69.65, 1, '2022-08-09'),
(272257, 171179, 3, 2.34, 0.45, 0, 6.1, 12, '2022-08-11'),
(476306, 250136, 6, 14.67, 0.9, 0, 76.54, 0, '2022-08-09'),
(636320, 250136, 7, 5.31, 1.05, 0, 32.32, 12, '2022-08-11'),
(772856, 171179, 23, 2.34, 3.45, 0, 46.8, 12, '2022-08-11'),
(827363, 250136, 50, 56.18, 7.5, 366.39, 2076.22, 0, '2022-08-09'),
(885464, 250136, 4, 14.67, 0.6, 0, 51.03, 0, '2022-08-09'),
(970092, 250136, 5, 14.67, 0.75, 0, 63.78, 0, '2022-08-09'),
(977845, 171179, 3, 2.34, 0.45, 0, 6.1, 0, '2022-08-09'),
(992788, 171179, 50, 4.03, 7.5, 0, 175.22, 0, '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `phone`, `password`, `DOB`, `user_role`, `randSalt`, `token`, `FirstName`, `LastName`, `balance`) VALUES
(250136, 941731892, '$2y$10$oMLYOoiVH9HNI4WplGOFqeMGef4IRVk9NrDdBwEcbmZa/pOfQQNiq', '2022-06-30', 'user', '', '', '', '', 30),
(391657, 962634742, '$2y$10$I2u0TZhM/zYMbuO9Dn2etOCVlEj8qXBXavGYZJONhieM.2q/00ueW', '2022-06-16', 'user', '', '', '', '', 19),
(751771, 944553419, '$2y$10$tM7J3ER3jJYmRHoUWea6UOMTSbVkv0iEtYY7a3oI3cdbp0m6e98z2', '2022-06-11', 'user', '', '', '', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(250) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, '6te4tcidi6r4nrg1t9fg01bi53', 1657978547),
(2, '95b50tf831c4c1u8fmpu7gmolo', 1657976116),
(3, 'ml0dfkpse6ij57fafvvq94ej2i', 1658047139),
(4, 'e5f4f5s03s11g3l5iqdfbol3bh', 1658066447),
(5, '5m43nkcc38ob8n9hdsgpqdeaa0', 1659035845);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `betslip`
--
ALTER TABLE `betslip`
  ADD PRIMARY KEY (`bet_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
