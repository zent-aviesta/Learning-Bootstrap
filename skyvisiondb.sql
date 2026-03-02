-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2026 at 09:54 AM
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
-- Database: `skyvisiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircrafts`
--

CREATE TABLE `aircrafts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `model_name` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `label_1` varchar(50) DEFAULT 'Seating',
  `spec_1` varchar(100) DEFAULT NULL,
  `label_2` varchar(50) DEFAULT 'Range',
  `spec_2` varchar(100) DEFAULT NULL,
  `label_3` varchar(50) DEFAULT 'Cruise',
  `spec_3` varchar(100) DEFAULT NULL,
  `units_produced` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aircrafts`
--

INSERT INTO `aircrafts` (`id`, `category_id`, `model_name`, `image`, `label_1`, `spec_1`, `label_2`, `spec_2`, `label_3`, `spec_3`, `units_produced`) VALUES
(1, 1, 'Airbus A320neo', 'assets/img/airbus_a320.jpg', 'Seating', '~150-180', 'Range', '~6,300 km', 'Cruise', '~828 km/h', 75),
(2, 1, 'Airbus A330-900', 'assets/img/airbus_a330.jpg', 'Seating', '~250-300', 'Range', '~13,430 km', 'Cruise', '~871 km/h', 60),
(3, 1, 'Airbus A380', 'assets/img/airbus_a380.jpg', 'Seating', 'up to 853', 'Range', '~15,200 km', 'Cruise', '~903 km/h', 45),
(4, 2, 'MiG-35', 'assets/img/mig35.jpg', 'Role', 'Multirole fighter', 'Range', '~1,000 km', 'Top speed', '~2,400 km/h', 50),
(5, 2, 'Su-57', 'assets/img/su57.jpg', 'Role', '5th-gen multirole', 'Range', '~3,500 km', 'Top speed', '~2,200 km/h', 55),
(6, 2, 'F-22 Raptor', 'assets/img/f22.jpg', 'Role', 'Air superiority', 'Range', '~2,960 km', 'Top speed', '~2,400 km/h', 48),
(7, 3, 'AH-64 Apache', 'assets/img/apache.jpg', 'Role', 'Attack helicopter', 'Range', '~476 km', 'Max speed', '~293 km/h', 40),
(8, 3, 'Mi-28', 'assets/img/mi28.jpg', 'Role', 'Attack helicopter', 'Range', '~460 km', 'Max speed', '~300 km/h', 35),
(9, 3, 'Eurocopter Tiger', 'assets/img/tiger.jpg', 'Role', 'Multi-role attack', 'Range', '~800 km', 'Max speed', '~290 km/h', 30);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `logo`, `description`) VALUES
(1, 'AIRBUS', 'assets/img/airbus.png', 'Large commercial airliners with premium configurations and proven performance.'),
(2, 'JETS', 'assets/img/jet.png', 'High-performance combat and multirole fighters designed for air superiority.'),
(3, 'HELICOPTERS', 'assets/img/helicopter.png', 'Attack and utility rotary-wing aircraft built for close air support.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Budi Santoso', 'budi@example.com', 'Halo, saya ingin menanyakan harga Airbus A320neo.', '2026-03-02 08:42:40'),
(2, 'Siti Aminah', 'siti@example.com', 'Apakah ada katalog untuk rotary-wing helicopters?', '2026-03-02 08:43:14'),
(3, 'John Kaisen', 'jujutsu@example.com', 'Interesting statistics on your website!', '2026-03-02 08:44:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircrafts`
--
ALTER TABLE `aircrafts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aircrafts`
--
ALTER TABLE `aircrafts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aircrafts`
--
ALTER TABLE `aircrafts`
  ADD CONSTRAINT `aircrafts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
