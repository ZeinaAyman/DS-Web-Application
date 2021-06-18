-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 08:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `budget` int(11) NOT NULL,
  `images` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `AssignedDesigners` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `budget`, `images`, `files`, `status`, `AssignedDesigners`) VALUES
(53, 'North Costa', 'villa design ', 200000, 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,Top-Interior-Design-Companies-Cairo-Egypt.jpg', 'Test1.pdf,Test2.docx', 'Ongoing', '4'),
(54, 'New Cairo Project', 'Home design ', 30000, 'maxresdefault.jpg,Top-Interior-Design-Companies-Cairo-Egypt.jpg', 'Test1.pdf,Test2.docx', 'Ongoing', '4'),
(56, 'Project 1', 'project 1 description here', 0, 'home-slider-1.jpg,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg', 'home-slider-1.jpg,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg,Test1.pdf,Test2.docx,Test3.docx', 'Ongoing', '4'),
(57, 'Project 1', 'project 1 description here', 0, 'maxresdefault.jpg', 'maxresdefault.jpg,Test2.docx', 'Ongoing', '4'),
(58, 'Project 1', 'project 1 description here', 0, 'home-slider-1.jpg,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg', 'home-slider-1.jpg,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,Test1.pdf,Test3.docx', 'Ongoing', '4'),
(59, 'Project 1', 'project 1 description here', 0, 'home-slider-1.jpg,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg', 'Test1.pdf,Test2.docx,Test3.docx', 'Ongoing', '4'),
(60, 'Project 1', 'project 1 description here', 0, 'Top-Interior-Design-Companies-Cairo-Egypt.jpg', 'Test2.docx', 'Ongoing', '4'),
(61, 'Project 1', 'project 1 description here', 0, 'maxresdefault.jpg,Test2.docx,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg', 'maxresdefault.jpg,Test2.docx,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,Test3.docx', 'Ongoing', '4'),
(62, 'Project 1', 'project 1 description here', 0, 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg', 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg,Test2.docx,Test3.docx', 'Ongoing', '4'),
(63, 'Project 1', 'project 1 description here', 0, 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg', 'Test1.pdf,Test2.docx', 'Ongoing', '4'),
(64, 'Project 1', 'project 1 description here', 0, 'maxresdefault.jpg', 'Test2.docx', 'Ongoing', '4'),
(65, 'Project 1', 'project 1 description here', 0, 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg', 'Test1.pdf,Test2.docx', 'Ongoing', '4'),
(66, 'Project 1', 'project 1 description here', 0, 'maxresdefault.jpg', 'Test1.pdf,Test2.docx', 'Ongoing', '4'),
(67, 'Project 1', 'project 1 description here', 0, 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg', 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg,Test1.pdf,Test2.docx', 'Ongoing', '4'),
(68, 'Project 1', 'project 1 description here', 0, 'home-slider-1.jpg,Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg', 'Test1.pdf,Test2.docx', 'Ongoing', '4'),
(69, 'yatar?', 'mmm', 909090, 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,maxresdefault.jpg,home-slider-1.jpg', 'Test1.pdf,Test2.docx', 'Ongoing', '4'),
(70, 'Project 1', 'project 1 description here', 0, 'Interior-Design-of-Luxury-Modern-Residence-6.1546900319.0638.jpg,home-slider-1.jpg,maxresdefault.jpg,Top-Interior-Design-Companies-Cairo-Egypt.jpg', 'Test1.pdf,Test2.docx,Test3.docx', 'Ongoing', '4'),
(71, 'Ahmed hamdy', 'villa katamaya', 200202020, '2ff4daa71fcbce6596ec218982f51f9f.jpg,home-slider-1.jpg', 'Test1.pdf', 'Ongoing', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
