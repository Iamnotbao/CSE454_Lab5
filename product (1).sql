-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 04:19 PM
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
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `_id` int(10) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand` int(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `importing_date` date NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`_id`, `product_code`, `product_name`, `brand`, `quantity`, `importing_date`, `image_url`) VALUES
(2, 'X001', 'Iphone', 0, 124, '0000-00-00', 'url'),
(3, 'X002', 'Xiaomi 13', 0, 124, '0000-00-00', 'url'),
(4, 'X003', 'B68', 0, 12, '2024-02-02', 'Bphone.png'),
(6, 'X005', 'Nokia 1800', 0, 155, '0000-00-00', 'https://th.bing.com/th/id/R.d76c4a0def85ff91854f77a71d0d4eac?rik=Dh9JIDrrAKL%2bgQ&riu=http%3a%2f%2f4.bp.blogspot.com%2f_eMfWf40ggag%2fTEMkwiCsBfI%2fAAAAAAAADHI%2ftOXwFtqtrns%2fs400%2fNokia_1800.png&ehk=y6%2fHUBxYJhvxx1IQhw9WSDZ3PXaf5HOvcWJEGpfhnVM%3d&risl'),
(7, 'X006', 'Lumia ', 0, 15, '0000-00-00', 'https://th.bing.com/th/id/R.6dcfc851e3e99ea42c6af787972b698a?rik=NgKUxb5wumNJGQ&pid=ImgRaw&r=0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
