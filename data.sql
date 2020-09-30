-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 05:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodboot`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `resturant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_name`, `user_name`, `quantity`, `resturant_id`) VALUES
(1, '2', '3', 0, 0),
(2, '3', '4', 0, 0),
(3, '4', '4', 0, 0),
(4, '5', '4', 0, 0),
(5, '6', '4', 0, 0),
(6, '7', '4', 0, 0),
(7, '8', '4', 0, 0),
(8, '9', '4', 0, 0),
(9, 'fruits', 'kunal@gmail.com', 10, 2),
(10, 'fruits', 'kunal@gmail.com', 2, 2),
(11, 'fruits', 'kunal@gmail.com', 5, 2),
(12, 'oldjuice', 'kunal@gmail.com', 3, 1),
(13, 'oldjuice', 'kunal@gmail.com', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `resturant_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_type` varchar(10) NOT NULL DEFAULT '3d'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `resturant_id`, `category`, `name`, `price`, `image`, `image_type`) VALUES
(1, 2, 'VEG', 'mango juice', 'rs.200', '3.png', '3d'),
(2, 1, 'VEG', 'blueberry juice', 'rs.200', '1.jpg', '2d'),
(3, 2, 'VEG', 'blueberry', 'rs.200', '1.png', '3d'),
(4, 3, 'VEG', 'pomegranate', 'rs.200', '2.png', '3d'),
(5, 1, 'VEG', 'staberry shake', 'rs.200', '3.png', '3d'),
(6, 2, 'VEG', 'fruits', 'rs.200', '4.png', '3d'),
(7, 3, 'VEG', 'blueberry juice', 'rs.200', '5.png', '3d'),
(9, 2, 'VEG', 'pomogranate', 'rs.200', '7.png', '3d'),
(10, 3, 'NON-VEG', 'mixed juice', 'rs.200', '8.png', '3d'),
(12, 2, 'NON-VEG', 'fruits', 'rs.200', '10.png', '3d'),
(13, 3, 'NON-VEG', 'pomogranate', 'rs.200', '11.png', '3d'),
(15, 2, 'NON-VEG', 'blue berry', 'rs.200', '13.png', '3d'),
(16, 3, 'NON-VEG', 'berries', 'rs.200', '14.png', '3d'),
(18, 2, 'NON-VEG', 'lemon juice', 'rs.200', '16.png', '3d'),
(38, 1, 'Veg', 'oldjuice', '100', 'retro-sun-.jpg', '2d');

-- --------------------------------------------------------

--
-- Table structure for table `resturants`
--

CREATE TABLE `resturants` (
  `resturant_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resturants`
--

INSERT INTO `resturants` (`resturant_id`, `name`, `user_id`, `address`) VALUES
(1, 'kitchens', 1, 'dwarka sec-12'),
(2, 'vegas', 3, 'dwarka sec-18'),
(3, 'city mall', 5, 'dwarka sec-20'),
(4, 'chole bhature', 21, 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `type`, `category`) VALUES
(1, 'ashish', 'ashish@gmail.com', 'ashish', 'owner', 'n'),
(2, 'kunal', 'kunal@gmail.com', 'kunal', 'customer', 'VEG'),
(3, 'ajay', 'ajay@gmail.com', 'ajay', 'owner', 'n'),
(4, 'ankit', 'ankit@gmail.com', 'ankit', 'customer', 'NON-VEG'),
(5, 'abhishek', 'abhishek@gmail.com', 'abhishek', 'owner', 'n'),
(6, 'deepraj', 'deepraj@gmail.com', 'deepraj', 'customer', 'NON-VEG'),
(7, 'ashish', 'ashish@gmail.com', 'ashish', 'owner', 'n'),
(8, 'ashis', 'ashish@gmail.com', 'ashish', 'owner', 'n'),
(9, 'ash', 'ash', 'ash', 'Owner', 'n'),
(10, 'asdf', 'asaddadadsa', 'aafaf', 'customer', 'VEG'),
(11, 'aaaa', 'aaaa', 'aaaaa', 'Owner', 'n'),
(12, 'ajaysheoran', 'ajaysheoran', 'ajay', 'Owner', 'none'),
(13, 'ajaysheoran', 'ajaysheoran', 'ajay', 'Owner', 'none'),
(14, 'ajaysheoran', 'ajaysheoran', 'ajay', 'Owner', 'none'),
(15, 'ajaysheoran', 'ajaysheoran', 'ajay', 'Owner', 'none'),
(16, 'ajaysheoran', 'ajaysheoran', 'ajay', 'Owner', 'none'),
(17, 'deepu', 'deepu', 'deepu', 'Customer', 'none'),
(18, 'dd', 'dd', 'dd', 'Customer', 'NON-VEG'),
(19, 'kk', 'kk', 'kk', 'Owner', 'none'),
(20, 'kk', 'kk', 'kk', 'Owner', 'none'),
(21, 'mm', 'mm', 'mm', 'Owner', 'none'),
(22, 'qw', 'qw', 'qw', 'Customer', 'NON-VEG'),
(23, 'as', 'as', 'as', 'Customer', 'NON-VEG'),
(24, 'er', 'er', 'er', 'Customer', 'NON-VEG'),
(25, 'qa', 'qa', 'qa', 'Customer', 'NON-VEG'),
(26, 'GB', 'GB', 'GB', 'Customer', 'NON-VEG'),
(27, 'Q', 'Q', 'Q', 'Customer', 'NON-VEG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `resturants`
--
ALTER TABLE `resturants`
  ADD PRIMARY KEY (`resturant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `resturants`
--
ALTER TABLE `resturants`
  MODIFY `resturant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
