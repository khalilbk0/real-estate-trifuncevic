-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20220501.56bbdb7fd7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2023 at 12:17 AM
-- Server version: 8.0.12
-- PHP Version: 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `squarefeet` varchar(11) DEFAULT NULL,
  `stage` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL,
  `structure` json DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `other_images` json DEFAULT NULL,
  `is_completed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`id`, `building_id`, `address`, `description`, `squarefeet`, `stage`, `mark`, `structure`, `main_image`, `other_images`, `is_completed`) VALUES
(1, 1, 'testing appartment', '', 'test', 'test', 'test', '[{\"icon\": \"uploads/64276bb4c8c6f.jpg\", \"value\": \"123\"}, {\"icon\": \"uploads/64276bb4c8d55.jpg\", \"value\": \"fff\"}]', 'uploads/64276bb4c8e0c.jpg', '[\"uploads/64276c5f67ce6.jpg\"]', 0),
(2, 1, 'test', '', 'test', 'testse', '12312 ff', '[{\"icon\": \"uploads/64276ca5a4178.jpg\", \"value\": \"123123\"}]', 'uploads/64276ca5a4253.jpg', '[\"uploads/64276cc70fcf1.png\"]', 0),
(3, 3, 'testing appartment', '', 'test', 'test', 'test', '[{\"icon\": \"uploads/64276d364dbc3.jpg\", \"value\": \"123123\"}]', 'uploads/64276d364dc8e.png', '[\"uploads/64276d3bc2a2e.jpg\"]', 0),
(4, 3, 'testing appartment', '', 'test', 'test', 'test', '[{\"icon\": \"uploads/64276d4ca70f7.jpg\", \"value\": \"123123\"}]', 'uploads/64276d4ca73a5.png', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `buildingName` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` text,
  `video_link` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`id`, `buildingName`, `address`, `description`, `video_link`, `img`, `is_completed`) VALUES
(1, 'test', 'test', 'test', 'test', 'uploads/64276a917b675a.jpg', 1),
(2, 'test', 'test', 'test', 'test', 'uploads/64276aa1c4f57a.jpg', 0),
(3, 'test 3', 'test 2', 'test ', 'test', 'uploads/64276d02121b0Screen Shot 2023-03-27 at 1.24.04 PM.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `squarefeet` varchar(11) DEFAULT NULL,
  `stage` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL,
  `structure` varchar(255) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `other_images` json DEFAULT NULL,
  `is_completed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `address`, `description`, `squarefeet`, `stage`, `mark`, `structure`, `main_image`, `other_images`, `is_completed`) VALUES
(1, 'test office', 'test', 'test', 'test', 'test', '[{\"value\":\"123123\",\"icon\":\"uploads/6427760700b4e.jpg\"}]', 'uploads/6427760700c08.jpg', NULL, 0),
(2, 'test office', 'test', 'test', 'test', 'test', '[{\"value\":\"123123\",\"icon\":\"uploads/6427761331eee.jpg\"}]', 'uploads/6427761331fc1.jpg', NULL, 1),
(3, 'test office', 'test', 'test', 'test', 'test 123', '[{\"value\":\"test\",\"icon\":\"uploads/64277791e494a.jpg\"}]', 'uploads/64277791e4a38.png', 'false', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
