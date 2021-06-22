-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 11:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

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
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `OwnerA` tinyint(4) NOT NULL,
  `EditA` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`ID`, `UID`, `PID`, `OwnerA`, `EditA`) VALUES
(6, 15, 62, 1, 1),
(7, 15, 63, 1, 1),
(8, 15, 68, 1, 1),
(9, 15, 69, 1, 1),
(10, 15, 65, 1, 1),
(11, 15, 70, 1, 1),
(12, 15, 64, 1, 1),
(13, 15, 72, 1, 1),
(14, 15, 67, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(22) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`) VALUES
(87, 'Zeina Ayman', 'zeina.ayman@hotmail.com', 1211300998, 'qwe'),
(88, 'Zeina Ayman', 'zeina.ayman@hotmail.com', 1211300998, 'er'),
(89, 'Zeina Ayman', 'zeina.ayman@hotmail.com', 1211300998, 'qwe'),
(94, 'Zeina Ayman', 'zeina.ayman@hotmail.com', 1211300998, 'we'),
(95, 'Zeina Ayman', 'zeina.ayman@hotmail.com', 1211300997, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(1, 'Zeina Ayman', 'zeina.ayman@hotmail.com'),
(2, 'Zeina Ayman', 'auditor@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `ID` int(11) NOT NULL,
  `EID` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`ID`, `EID`, `description`) VALUES
(2, 4, '3 days deduction'),
(4, 7, '4 days reduction'),
(10, 6, '2 days penalty '),
(25, 2, ''),
(26, 2, 'jsj'),
(27, 15, '12 days deduction');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `origin` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `budget` int(11) NOT NULL,
  `Property_Type` varchar(22) NOT NULL,
  `images` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `origin`, `name`, `description`, `budget`, `Property_Type`, `images`, `files`, `status`, `deadline`) VALUES
(62, 15, 'Abu Taleb Villa', 'Land area 650 m\r\nBuildings 850 m\r\nPrivate garage can accommodate 5 cars\r\nRoom and bathroom for security\r\nGarden 240 m', 26000000, '1', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 'Abu Taleb Villa.docx', 'Ongoing', '2021-06-08'),
(63, 15, 'Dar Alqamr - Qairo', 'Iconic Phoenix landmark single-story property with a basement positioned in an Opportunity Zone with high visibility along Grand Avenue.\r\nFeatures a huge pylon sign and ample parking and potential uses include retail, automotive, entertainment, office, assembly, warehouse, and more.', 20000000, '3', 'EygptRestourant2_Scene1.effectsResult.jpg,EygptRestourant2_Scene2.effectsResult.jpg,EygptRestourant2_Scene3.effectsResult.jpg,EygptRestourant2_Scene4.effectsResult.jpg,EygptRestourant2_Scene5.effectsResult.jpg,EygptRestourant2_Scene7.effectsResult.jpg', '', 'Ongoing', '2021-06-02'),
(64, 15, 'Littory Lounge', 'Cherry picked location at the core of New Cairos hottest destinations. Littory Lounge is strategically 5 to 10 minutes away from any end points in New Cairo, Suez road or The Ring Road. Highlighting an all-inclusive retail and administrative building. Littory Lounge is about the ultimate balance off merging lifestyles. Every detail is mastered to fulfill every day needs for both esteemed business entities and retail owners. The five storey building is made to impress.', 24000000, '2', 'photo_2021-03-11_13-54-39.jpg,photo_2021-03-11_13-54-40.jpg,photo_2021-03-11_13-54-41.jpg,photo_2021-03-11_13-54-42.jpg,photo_2021-03-11_13-54-51.jpg', '', 'Ongoing', '2021-06-10'),
(65, 15, 'Khalid Hakami Chalet', 'Close to amenities, restaurants and the beach\r\nTilal North Coast is one of the best North Coast resorts from Roya Group. The Tilal Al Sahel project is located at Kilo 140 on Alexandria and Matrouh Desert Road in the most beautiful areas of Sidi Abdel Rahman Bay, minutes away from Hacienda Bay Village.', 3500000, '1', '1new.jpg,02.jpg,2new.jpg,3new.jpg', '', 'Ongoing', '2021-06-20'),
(67, 15, 'Qairo Apartment ', 'Areas starting from 72 meters, prices starting from 2 M, 5% down payment, Over 8 years. Eco-friendly. Sustainable. Medical Care. Education.', 5900000, '1', '01.effectsResult.bmp,32.jpg,202.bmp,4.jpg', '', 'Ongoing', '2021-06-11'),
(68, 15, 'El Basamy', 'Your place of work should inspire you, which is why we offer a world of choice when it comes to your new office. Choose office space in one of three vibrant and exciting new Cairo offices, or in over 250 global cowering spaces. Equipped with the latest technology, and designed with your success in mind.', 15000000, '3', 'b92bd38a-eb58-4855-b6ff-3422e9e03348.jpg,00f710b1-b308-43ad-a10b-6dbdcbc1ed30.jpg,6c0a4f50-71e9-4559-a97c-296c1a66af5d.jpg,d29e8179-f290-401b-bb0d-bd07c846fc48.jpg,f186c3db-5835-421c-b074-bc09fb0fe11c.jpg', '', 'Ongoing', '2021-06-26'),
(69, 15, 'El Rayah', 'Ground + 20 floors, 91 meters high\r\n- Commercial - Administrative - Medical\r\n- Panorama hanging restaurants on the 20th floor', 18000000, '3', 'IMG-20171117-WA0008.jpg,IMG-20171119-WA0001.jpg,IMG-20171126-WA0016.jpg,IMG-20171126-WA0017.jpg,IMG-20171126-WA0020.jpg', '', 'Ongoing', '2021-06-13'),
(70, 15, 'Khalid Zekri Chalet ', 'It is located at kilo 130 Alex-Matrouh Road, Sidi Abdel Rahman\r\nProject area: 1500 acres\r\nBeach front: 6 km\r\noverlooking the sea\r\nServices :\r\nHotels (5 stars)\r\nSport club, Lagoon area, Market\r\n', 4500000, '1', '01.effectsResult(2).bmp,01.effectsResult.bmp,10.jpg,44.jpg,121.jpg', '', 'Ongoing', '2021-06-05'),
(72, 15, 'Mega Mall', 'Mall Specifications:\r\nLand area: 1200 sq.m.\r\nBuilding area: 460 m.\r\nServices and features\r\nThe Beverly Hills Compound provides entertainment advantages and distinct services to its residents.', 40000000, '2', 'megamall4.jpeg,megamall2.jpeg,megamall3.jpeg,megamall1.jpeg,megamall5.jpeg', '', 'Ongoing', '2021-06-30');

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
(4, 'nada', 'sara5@miuegypt.edu.eg', '123', 2, ''),
(5, 'aya el sayes', 'ayaelsayes@gmail.com', '123', 2, ''),
(6, 'abdallah ashraf', 'abdallahsadek03@gmail.com', '123', 2, ''),
(7, 'admin', 'admin@gmail.com', '123', 1, ''),
(8, 'basmala', 'basmala@gmail.com', '123', 2, ''),
(9, 'abdo', 'abdo@gmail.com', '123', 2, ''),
(10, 'basmala', 'basmala@gmail.com', '123', 2, ''),
(13, 'adham', 'adham@gmail.com', '123', 2, ''),
(14, 'adham', 'adham@gmail.com', '123', 2, 'andre-benz-sLokLIacItI-unsplash.jpg'),
(15, 'zeina', 'zeina@gmail.com', '123', 2, 'profilepic.jpg'),
(32, 'Zeina Ayman', 'zeina.ayman@hotmail.com', 'zeinaS#12', 3, 'profilepic.jpg'),
(33, 'support', 'support@gmail.com', 'Support@123', 4, 'profilepic.jpg'),
(35, 'test', 'test@gmail.com', 'test@AS123', 2, 'aboutus-photo.jpg'),
(36, 'testmanager', 'manager@gmail.com', 'Manager$123', 3, 'profilepic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EID` (`EID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penalty`
--
ALTER TABLE `penalty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `assign_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `assign_ibfk_2` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `penalty`
--
ALTER TABLE `penalty`
  ADD CONSTRAINT `penalty_ibfk_1` FOREIGN KEY (`EID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
