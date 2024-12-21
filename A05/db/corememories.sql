-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 11:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'music1.jpg', 'This island highlights the importance of love for animals, featuring stories and activities that foster compassion.', '#ffb5db'),
(2, 1, 'music2.jpg', 'This island highlights the importance of love for animals, featuring stories and activities that foster compassion.', '#664229'),
(3, 1, 'music3.png', '1', '#664229'),
(4, 1, 'music4.jpg', '1', NULL),
(5, 1, 'music5.jpg', '1', '1'),
(6, 1, 'music6.jpg', '1', '1'),
(7, 1, 'music7.jpg', '1', '1'),
(8, 1, 'music8.jpg', '1', '1'),
(9, 1, 'music9.jpg', '1', '1'),
(10, 2, 'pet1.jpg', 'this is zagu', '1'),
(11, 2, 'pet2.jpg', 'this is zagu', '1'),
(12, 2, 'pet3.jpg', 'this is zagu', '1'),
(13, 2, 'pet4.jpg', 'this is zagu', '1'),
(14, 2, 'pet5.jpg', 'this is zagu', '1'),
(15, 2, 'pet6.jpg', 'this is zagu', '1'),
(16, 2, 'pet7.jpg', 'this is zagu', '1'),
(17, 2, 'pet8.jpg', 'this is zagu', '1'),
(18, 2, 'pet9.jpg', 'this is zagu', '1'),
(19, 3, 'food1.jpg', 'yummy', '2'),
(20, 3, 'food2.jpg', 'yummy', '2'),
(21, 3, 'food3.jpg', 'yummy', '2'),
(22, 3, 'food4.jpg', 'yummy', '2'),
(23, 3, 'food5.jpg', 'yummy', '2'),
(24, 3, 'food6.jpg', 'yummy', '2'),
(25, 3, 'food7.jpg', 'yummy', '2'),
(26, 3, 'food8.jpg', 'yummy', '2'),
(27, 3, 'food9.jpg', 'yummy', '2'),
(28, 4, 'makeup1.jpg', 'cutie', '3'),
(29, 4, 'makeup2.jpg', 'cutie', '3'),
(30, 4, 'makeup3.jpg', 'cutie', '3'),
(31, 4, 'makeup4.jpg', 'cutie', '3'),
(32, 4, 'makeup5.jpg', 'cutie', '3'),
(33, 4, 'makeup6.jpg', 'cutie', '3'),
(34, 4, 'makeup7.jpg', 'cutie', '3'),
(35, 4, 'makeup8.jpg', 'cutie', '3'),
(36, 4, 'makeup9.jpg', 'cutie', '3');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Pop island', 'A vibrant island where melodies, beats, and rhythms come alive.', 'Pop Island is a vibrant and lively place that captures the essence of pop music and everything adorable. I love pop music because it\'s upbeat, catchy, and fills me with energy. The melodies are infectious, and the lyrics often tell stories of love, dreams, and self-expression. Cute music, with its playful tones and cheerful vibes, is my go-to when I want to feel lighthearted and happy.\n\n', '#ffb5db', 'island1.png', 'active'),
(2, 'Pet island', ' A whimsical paradise filled with adorable pets of every kind.', 'Pet Island is a heartwarming haven for all things furry, fluffy, and lovable. I love my pet, Zagu, with all my heart. Zagu is not just a pet but a loyal companion who brings endless joy and comfort to my life. From playful moments to quiet snuggles, every day with Zagu is filled with love and happiness.', '#664229\n', 'island2.png', 'active'),
(3, 'Food Island', 'A delicious paradise where every corner celebrates the art and joy of food. ', 'Food Island is a delightful paradise for food lovers, where every dish tells a story and every meal is a celebration. I love Filipino food because of its rich flavors, unique combinations, and the way it brings people together. From savory adobo to hearty sinigang, and sweet leche flan, each dish reflects the vibrant culture and traditions of the Philippines.', '#b39cd0', 'island3.png', 'active'),
(4, 'Makeup island', 'A vibrant paradise where creativity meets self-expression.', 'Makeup Island is a dazzling and inspiring place where creativity and self-expression shine. I love doing my makeup because it feels like my passion—an art form that allows me to transform, enhance, and express myself. From experimenting with vibrant eyeshadow palettes to perfecting the subtle glow of a natural look, every brushstroke feels like a step into a world of endless possibilities.', '#ffa3b6', 'island4.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
