-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 04:18 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_register` datetime NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`_id`, `email`, `password`, `full_name`, `phone_number`, `address`, `date_of_register`, `type`, `status`) VALUES
(3, 'khacduy@gmail.com', 'duy123', ' duy', '0909130134', 'Vung Tau ', '2024-11-13 00:00:00', 'author', 'disabled'),
(4, 'ohshit30102015@gmail.com', 'lethebao', ' bao', '0998944114', 'binh duong ', '2024-11-13 00:00:00', 'admin', 'active'),
(5, 'nam@gmail.com', 'nam', ' nam', '0998944114', 'America ', '2024-11-13 00:00:00', 'author', 'disabled'),
(7, 'Quang@123', 'Quang123', ' Quang', '0329413130', 'B12/30, Bình Thuận 2, Thuận Giao, Thuận An, Bình Dương ', '2024-11-14 00:00:00', 'admin', 'disabled'),
(9, 'hoang123@gmail.com', '$2y$11$cCDufIuJHJxNL8Om2de.lehIm0OVfj9zEooLwyOG5NqkwDuP4quBS', ' Hoang', '0329413130', 'B12/30, Bình Thuận 2, Thuận Giao, Thuận An, Bình Dương ', '2024-11-14 00:00:00', 'admin', 'active'),
(10, 'admin@gmail.com', '$2y$11$BFlEJbr5V6M3NGXooKEVFe0JbyYIqIDDlX6f/00gcenJw/57M6iNO', ' admin', '0329413130', 'B12/30, Bình Thuận 2, Thuận Giao, Thuận An, Bình Dương ', '2024-11-14 00:00:00', 'admin', 'active'),
(11, 'my@gmail.com', '$2y$11$zcQd/2XRUvijjiaUYppsG.vjqQ3GTRrSgubCpq/hjBN7teGFe3/s2', ' my', '123456789', 'B12/30, Bình Thuận 2, Thuận Giao, Thuận An, Bình Dương ', '2024-11-14 00:00:00', 'author', 'disabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
