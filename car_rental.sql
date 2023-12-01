-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2023 at 10:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--
CREATE DATABASE IF NOT EXISTS `car_rental` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `car_rental`;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `user_id`, `car_id`, `start_date`, `end_date`, `total_cost`, `created_at`) VALUES
(1, 2, 1, '2023-11-23', '2023-11-29', 300.00, '2023-11-22 14:25:02'),
(2, 2, 1, '2023-11-23', '2023-11-29', 300.00, '2023-11-22 14:26:21'),
(3, 2, 2, '2023-11-24', '2024-01-22', 2655.00, '2023-11-22 14:30:21'),
(4, 7, 6, '2023-11-25', '2023-11-30', 450.00, '2023-11-25 11:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `rental_rate` decimal(8,2) NOT NULL,
  `available` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `brand`, `model`, `year`, `rental_rate`, `available`, `created_at`, `image_url`) VALUES
(1, 'Toyota', 'Camry', 2022, 50.00, 1, '2023-11-21 14:04:31', 'https://imgd.aeplcdn.com/1056x594/n/ixkkpua_1557403.jpg?q=80'),
(2, 'BMW', '640d GT', 2021, 45.00, 1, '2023-11-21 14:04:31', 'https://www.bmw.at/content/dam/bmw/common/all-models/6-series/gran-turismo/2021/navigation/bmw-6-series-gran-turismo-posi-modelfinder.png'),
(3, 'Ford', 'Mustang', 2020, 70.00, 1, '2023-11-21 14:04:31', 'https://www.gpas-cache.ford.com/guid/35b0f34d-0ff8-3e75-b278-3a38cb39a63d.png'),
(4, 'BMW', '530d Touring', 2019, 55.00, 1, '2023-11-21 14:04:31', 'https://www.bmw.co.id/content/dam/bmw/common/all-models/5-series/touring/2021/navigation/2021/bmw-5-series-touring-posi-modelfinder.png'),
(5, 'Nissan', 'Altima', 2022, 48.00, 1, '2023-11-21 14:04:31', 'https://www.bedfordnissan.com/blogs/1502/wp-content/uploads/2020/07/2020_Nissan_Altima_S.png'),
(6, 'BMW', 'X5', 2021, 90.00, 1, '2023-11-21 14:04:31', 'https://imgd.aeplcdn.com/664x374/n/cw/ec/152681/x5-exterior-right-front-three-quarter-5.jpeg?isig=0&q=80'),
(7, 'Mercedes-Benz', 'E-Class', 2020, 85.00, 1, '2023-11-21 14:04:31', 'https://crdms.images.consumerreports.org/c_lfill,w_470,q_auto,f_auto/prod/cars/cr/model-years/16653-2024-mercedes-benz-e-class'),
(8, 'Audi', 'A4', 2019, 75.00, 1, '2023-11-21 14:04:31', 'https://d2ivfcfbdvj3sm.cloudfront.net/7fc965ab77efe6e0fa62e4ca1ea7673bb65b4757031e3d8e88cb10/stills_0640_png/MY2023/51668/51668_st0640_037.png'),
(9, 'Tesla', 'Model 3', 2022, 100.00, 1, '2023-11-21 14:04:31', 'https://static.vibemovesyou.com/media/20230602072051/vibe_image_Tesla_Model3_silber.png'),
(10, 'Hyundai', 'Elantra', 2021, 40.00, 1, '2023-11-21 14:04:31', 'https://imgd.aeplcdn.com/664x374/n/cw/ec/41138/elantra-exterior-right-front-three-quarter-3.jpeg?q=80'),
(11, 'Volkswagen', 'Polo', 2020, 49.99, 1, '2023-11-22 13:16:47', 'https://cdn.nwi-ms.com/media/at/V/comm/V20220099962/model/front.jpg?size=L'),
(12, 'BMW', 'M3', 2021, 50.00, 1, '2023-11-22 19:48:57', 'https://www.bmw.at/content/dam/bmw/common/all-models/m-series/m3-touring/2022/navigation/bmw-m3-competition-touring-modelfinder.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `created_at`, `role`) VALUES
(1, 'patrik94', '$2y$10$nFVBRKjTj7/zXD2WSvYuIOUSfZS3Lsm/cc9Uu.K0bzVmLRoUOoyqy', 'majcher.patrik@gmail.com', '2023-11-21 13:40:03', 'user'),
(2, 'patrik95', '$2y$10$3eMDlto/iHbBXahxG9T.hOnB7TC5RbjhR3Y.s7HtB6EeRYm4N2e/q', 'majcher.patrik@gmail.com', '2023-11-21 13:51:16', 'user'),
(3, 'admin', '$2y$10$qJuTFg3da74OMe84os.7..hP0yL2gfF4iQc9x8i7PSSU8Apai.6cu', 'kmotorkovamartina@gmail.com', '2023-11-21 18:23:53', 'admin'),
(4, 'dominik', '$2y$10$pJN4MJuJH.MSrgvLzUIdNea2OoZwgKMNrAmEsYZw2.45mPq/9tjTK', 'stiho@stiho.com', '2023-11-21 19:21:14', 'user'),
(5, 'renatka', '$2y$10$gfff.b2INJhTaLyGlK36OeB6IKquRHrcUiYeNHIOufkxJ.NIYThp2', 'renatamajcherova@gmail.com', '2023-11-21 19:34:55', 'user'),
(6, 'martinkalaska', '$2y$10$24hUGEEmRRthnxDqQfKUL.PdjwrygqUhtCdS3dBwaAzyb8ZbbIS7W', 'kmotorkovamartina@gmail.com', '2023-11-21 19:47:25', 'user'),
(7, 'karolinka', '$2y$10$vO6GWcjvc9fsMyXph8/xHOSSiwnlYPKyQl4Qj3g4DPK1Z3oV1MrTS', 'karolinka@gmail.com', '2023-11-25 11:37:34', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
