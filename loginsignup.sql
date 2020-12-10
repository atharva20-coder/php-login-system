-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 10:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsignup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersName` varchar(11) NOT NULL,
  `usersEmail` varchar(11) NOT NULL,
  `usersUid` varchar(11) NOT NULL,
  `usersPwd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Daniel Niel', 'mmtuts@gmai', 'Krossing', '$2y$10$noRN'),
(2, 'Atharva San', 'atharvajosh', 'atharva2520', '$2y$10$4Dj2'),
(3, 'Sandip Josh', 'sandipjoshi', 'sandip', '$2y$10$Yigw'),
(4, 'Jhon Doe', 'doe@gmail.c', 'Doe123', '$2y$10$XwCt'),
(5, 'Akshada jos', 'akshadajosh', 'akshada', '$2y$10$47oM'),
(6, 'Vanita Josh', 'vanitajoshi', 'vanita', '$2y$10$UBZd'),
(7, 'Basse Kross', 'krossing@gm', 'basse', '$2y$10$y.sz'),
(8, 'Elon Musk', 'musk@gmail.', 'musk', '$2y$10$BPzj0wv14C20gZrDXywzReRy6vmvSR7YRRJtFPar91dt4sfRafc0u'),
(9, 'rajesh', 'rajesh@gmai', 'kumar', '$2y$10$ecmbLY8rSe94L9yre7mpueB/AeNDt6031VkFGEEb.s4GOQrm5hFlm'),
(10, 'sameer', 'sameer@gmai', 'sameer', '$2y$10$UP2qArQ2GOqB1WiVThUnb.U2BCiKeASbxdC10WDy6X/dytTRL6yCK'),
(11, 'adarsh', 'vavagbbah@g', 'ADARSHH', '$2y$10$VRyqCvdJKWqPWMXvX94sz.Zr2JnV2CiWAEqgB.kF16DWvlt7CfwYi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
