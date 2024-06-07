-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 05:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@123', '123123', 0),
(2, '', 'admin@321', '123', 1),
(3, 'sameer', 'sameer@123', '123', 0),
(4, 'vonda bell', 'Asad@123', '4321', 0),
(5, 'Dolat Parkash', 'Parkash@321', '123', 0),
(6, 'Dolat Parkash', 'Parkash@321', '123', 0),
(7, 'ARSALAN', 'arsalan@123', '123', 0),
(8, 'ARSALAN', 'arsalan@123', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catogary`
--

CREATE TABLE `catogary` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cat-id` varchar(200) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catogary`
--

INSERT INTO `catogary` (`id`, `name`, `cat-id`, `image`) VALUES
(6, 'bulbs', 'test', '7.jpg'),
(8, 'tv', 'sony', 'fff.jpg'),
(11, 'holder', 'cooling', 'Screenshot (3).png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `weight` int(200) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `c-id` int(200) NOT NULL,
  `STATUS` varchar(255) DEFAULT 'pending',
  `remarks` varchar(255) DEFAULT NULL,
  `testid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `weight`, `productid`, `image`, `c-id`, `STATUS`, `remarks`, `testid`) VALUES
(10, 'bulb', 23, 43243423, 'pre_qualification.jpg', 6, 'Approved', 'pass', NULL),
(11, 'logo', 323, 0, 'Untitled.png', 6, 'Rejected in smoke test', '', NULL),
(12, 'logi', 62, 930674430, '5.jpg', 6, 'Rejected in intail test', '', NULL),
(13, 'project', 514, 2147483647, '2.jpg', 6, 'Rejected in smoke test', 'reject', NULL),
(14, 'mobile', 123, 2147483647, 'hometoo.jpg', 8, 'Rejected in smoke test', 'reject', NULL),
(15, 'fan', 20, 2147483647, 'Screenshot (5).png', 11, 'Rejected in smoke test', 'reject', NULL);

--
-- Triggers `products`
--
DELIMITER $$
CREATE TRIGGER `before_insert_product` BEFORE INSERT ON `products` FOR EACH ROW SET NEW.productid = LPAD(FLOOR(RAND() * 9999999999), 10, '0') + 0
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catogary`
--
ALTER TABLE `catogary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c-id` (`c-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `catogary`
--
ALTER TABLE `catogary`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`c-id`) REFERENCES `catogary` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
