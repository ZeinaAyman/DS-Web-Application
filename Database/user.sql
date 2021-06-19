-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 02:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Type` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Password`, `Type`, `picture`) VALUES
(2, 'shamss', 'shamsabdelhamid2000@gmail.com', '123', 2, ''),
(3, 'sara abdelfatah', 'spicyshams@hotmail.com', '123', 3, ''),
(4, 'nada', 'sara5@miuegypt.edu.eg', '123', 2, ''),
(5, 'aya el sayes', 'ayaelsayes@gmail.com', '123', 2, ''),
(6, 'abdallah ashraf', 'abdallahsadek03@gmail.com', '123', 2, ''),
(7, 'admin', 'admin@gmail.com', '123', 1, ''),
(8, 'basmala', 'basmala@gmail.com', '123', 2, ''),
(9, 'abdo', 'abdo@gmail.com', '123', 2, ''),
(10, 'basmala', 'basmala@gmail.com', '123', 2, ''),
(11, 'man', 'manager@gmail', '123', 3, ''),
(12, 'adham', 'adham@gmail.com', '123', 2, ''),
(13, 'adham', 'adham@gmail.com', '123', 2, ''),
(14, 'adham', 'adham@gmail.com', '123', 2, 'andre-benz-sLokLIacItI-unsplash.jpg'),
(15, 'zeina', 'zeina@gmail.com', '123', 2, 'client.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
