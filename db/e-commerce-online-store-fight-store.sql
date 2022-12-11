-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 06:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce-online-store-fight-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(44, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Adidas', 'Hybrid 25 Boxing Gloves - Red - 14 oz', 489.00, './static/assets/images/1.png', NULL),
(2, 'RDX', 'Boxing Gloves White and Red', 1159.00, './static/assets/images/2.png 	', NULL),
(3, 'Everlast', 'MMA Grappling Training Gloves - S/M', 449.00, './static/assets/images/3.png', NULL),
(4, 'Everlast', '1910 Fight Gloves – Gun Metal – 8oz', 1999.00, './static/assets/images/4.png 	', NULL),
(5, 'Everlast', 'Everlast Pro Style Training Gloves - 8oz Pink', 439.00, './static/assets/images/5.png 	', NULL),
(6, 'Everlast', 'Pro Style Elite Training Gloves - 14oz Gold', 679.00, './static/assets/images/6.png 	', NULL),
(7, 'Ronex', 'Gold boxing gloves', 395.00, './static/assets/images/7.png ', NULL),
(8, 'Adidas', 'Hybrid50 Black/Red Boxing Glove', 519.00, './static/assets/images/8.png ', NULL),
(9, 'Adidas', 'Hybrid 50 Blk/Wh Boxing Glove', 569.00, './static/assets/images/9.png ', NULL),
(10, 'Everlast', 'Pro Style Elite Training Gloves - White - 12oz', 749.00, './static/assets/images/10.png ', NULL),
(11, 'Everlast', 'Everlast Vintage 1910 Heavy Bag Gloves', 439.00, './static/assets/images/11.png ', NULL),
(12, 'RDX', 'Boxing Gloves Black/Gold', 1159.00, './static/assets/images/12.png ', NULL),
(13, 'Venum', 'Impact Boxing Gloves Gold/Black', 1399.00, './static/assets/images/13.png ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `user_email` int(11) NOT NULL,
  `user_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`, `user_email`, `user_password`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17', 0, 0),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
