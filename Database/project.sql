-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 07:00 PM
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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `budget` int(11) NOT NULL,
  `Property_Type` varchar(22) NOT NULL,
  `images` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `AssignedDesigners` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `budget`, `Property_Type`, `images`, `files`, `status`, `AssignedDesigners`) VALUES
(62, 'Abu Taleb Villa', 'Land area 650 m\r\nBuildings 850 m\r\nPrivate garage can accommodate 5 cars\r\nRoom and bathroom for security\r\nGarden 240 m', 26000000, '1', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 'Abu Taleb Villa.docx', 'Ongoing', '4'),
(63, 'Dar Alqamr - Qairo', 'Iconic Phoenix landmark single-story property with a basement positioned in an Opportunity Zone with high visibility along Grand Avenue.\r\nFeatures a huge pylon sign and ample parking and potential uses include retail, automotive, entertainment, office, assembly, warehouse, and more.', 20000000, '3', 'EygptRestourant2_Scene1.effectsResult.jpg,EygptRestourant2_Scene2.effectsResult.jpg,EygptRestourant2_Scene3.effectsResult.jpg,EygptRestourant2_Scene4.effectsResult.jpg,EygptRestourant2_Scene5.effectsResult.jpg,EygptRestourant2_Scene7.effectsResult.jpg', '', 'Ongoing', '4'),
(64, 'Littory Lounge', 'Cherry picked location at the core of New Cairos hottest destinations. Littory Lounge is strategically 5 to 10 minutes away from any end points in New Cairo, Suez road or The Ring Road. Highlighting an all-inclusive retail and administrative building. Littory Lounge is about the ultimate balance off merging lifestyles. Every detail is mastered to fulfill every day needs for both esteemed business entities and retail owners. The five storey building is made to impress.', 24000000, '2', 'photo_2021-03-11_13-54-39.jpg,photo_2021-03-11_13-54-40.jpg,photo_2021-03-11_13-54-41.jpg,photo_2021-03-11_13-54-42.jpg,photo_2021-03-11_13-54-51.jpg', '', 'Ongoing', '4'),
(65, 'Khalid Hakami Chalet', 'Close to amenities, restaurants and the beach\r\nTilal North Coast is one of the best North Coast resorts from Roya Group. The Tilal Al Sahel project is located at Kilo 140 on Alexandria and Matrouh Desert Road in the most beautiful areas of Sidi Abdel Rahman Bay, minutes away from Hacienda Bay Village.', 3500000, '1', '1new.jpg,02.jpg,2new.jpg,3new.jpg', '', 'Ongoing', '4'),
(67, 'Qairo Apartment ', 'Areas starting from 72 meters, prices starting from 2 M, 5% down payment, Over 8 years. Eco-friendly. Sustainable. Medical Care. Education.', 5900000, '1', '01.effectsResult.bmp,32.jpg,202.bmp,4.jpg', '', 'Ongoing', '4'),
(68, 'El Basamy', 'Your place of work should inspire you, which is why we offer a world of choice when it comes to your new office. Choose office space in one of three vibrant and exciting new Cairo offices, or in over 250 global cowering spaces. Equipped with the latest technology, and designed with your success in mind.', 15000000, '3', 'b92bd38a-eb58-4855-b6ff-3422e9e03348.jpg,00f710b1-b308-43ad-a10b-6dbdcbc1ed30.jpg,6c0a4f50-71e9-4559-a97c-296c1a66af5d.jpg,d29e8179-f290-401b-bb0d-bd07c846fc48.jpg,f186c3db-5835-421c-b074-bc09fb0fe11c.jpg', '', 'Ongoing', '4'),
(69, 'El Rayah', 'Ground + 20 floors, 91 meters high\r\n- Commercial - Administrative - Medical\r\n- Panorama hanging restaurants on the 20th floor', 18000000, '3', 'IMG-20171117-WA0008.jpg,IMG-20171119-WA0001.jpg,IMG-20171126-WA0016.jpg,IMG-20171126-WA0017.jpg,IMG-20171126-WA0020.jpg', '', 'Ongoing', '4'),
(70, 'Khalid Zekri Chalet ', 'It is located at kilo 130 Alex-Matrouh Road, Sidi Abdel Rahman\r\nProject area: 1500 acres\r\nBeach front: 6 km\r\noverlooking the sea\r\nServices :\r\nHotels (5 stars)\r\nSport club, Lagoon area, Market\r\n', 4500000, '1', '01.effectsResult(2).bmp,01.effectsResult.bmp,10.jpg,44.jpg,121.jpg', '', 'Ongoing', '4'),
(72, 'Mega Mall', 'Mall Specifications:\r\nLand area: 1200 sq.m.\r\nBuilding area: 460 m.\r\nServices and features\r\nThe Beverly Hills Compound provides entertainment advantages and distinct services to its residents.', 40000000, '2', 'megamall4.jpeg,megamall2.jpeg,megamall3.jpeg,megamall1.jpeg,megamall5.jpeg', '', 'Ongoing', '4'),
(77, 'test', 'test', 5999, '1', '1.jpg,aboutus-photo.jpg,building.jpg,building2.jpeg', 'AI project.pdf', 'Ongoing', '15');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
