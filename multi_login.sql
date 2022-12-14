-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 08:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `id` int(8) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT current_timestamp(),
  `end_date` datetime DEFAULT current_timestamp(),
  `device_type` varchar(150) NOT NULL,
  `device_model` varchar(150) NOT NULL,
  `serial_no` varchar(150) NOT NULL,
  `issue_class` varchar(255) NOT NULL,
  `solution` int(150) NOT NULL,
  `repair_status` varchar(150) NOT NULL,
  `client_contact` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`id`, `start_date`, `end_date`, `device_type`, `device_model`, `serial_no`, `issue_class`, `solution`, `repair_status`, `client_contact`) VALUES
(1, '2022-06-23 08:22:16', '2022-08-23 22:22:16', 'Phone', 'TECNO camon 18', 'THEY67DHYE', 'Hardware', 30, 'In Progress', '07688986'),
(2, '2022-06-23 08:22:45', '2022-06-23 08:22:45', 'Laptop', 'Dell Latitude 327', 'DER675HUSM', 'Software', 12, 'In Progress', '07688986'),
(3, '2022-06-23 08:26:14', '2022-06-23 08:26:14', 'Computer Part', 'Hp Monitor', 'DKFUIMDKS68D', 'Hardware', 30, 'In Progress', '07688986'),
(6, '2022-06-23 15:07:42', '2022-06-23 15:07:42', 'Phone', 'Samsung s7 edge', 'DER675HUSM', 'Hardware', 12, 'In Progress', '07688986'),
(7, '2022-06-23 15:09:02', '2022-06-23 15:09:02', 'Phone', 'Samsung s7 Edge', 'Hardware', '', 0, 'completed', '07688986'),
(8, '2022-06-23 15:15:06', '2022-06-23 15:15:06', 'Phone', 'Samsung s7 Edge', 'Hardware', '', 0, 'in_progress', '07688986'),
(9, '2022-07-04 19:20:40', '2022-07-04 19:20:40', 'Laptop', 'Dell Latitude', 'HTGFMI5748', 'Software', 30, 'In Progress', '07688986'),
(10, '2022-07-04 19:22:11', '2022-07-04 19:22:11', 'Phone', 'Samsung s7 Edge', 'Hardware', '', 0, 'completed', '0745678744');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Empire', 'empirep8@gmail.com', 'admin', 'f73976437ad7116d21c37162d6e554b1'),
(2, 'fred', 'Freddiehricky@gmail.com', 'user', '934965dee8c86cba6e2d09126fa8022c'),
(6, 'empire', 'empirep8@gmail.com', 'user', 'f73976437ad7116d21c37162d6e554b1'),
(7, 'Lucy', 'wanjalucy265@gmail.com', 'user', 'f73976437ad7116d21c37162d6e554b1'),
(8, 'Purity', 'purity@gmail.com', 'user', '5c1a4fa2fad895c0fc1f02b6e3db9b78');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
