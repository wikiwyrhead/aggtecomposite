-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 09:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 9, 1, 4),
(3, 9, 4, 6),
(4, 9, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(5, 'Products', 'products'),
(6, 'Cladding', 'cladding'),
(7, 'Decking', 'decking'),
(8, 'Accessories', 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(1, 8, 'AGG-50J30', '<p>One of the accessories in making your desired WPC Experience.</p>\r\n', 'agg-50j30', 599.99, 'agg-50j30.jpg', '2021-06-12', 2),
(2, 7, 'AGG-138H22', '<p>Decking Panel</p>\r\n', 'agg-138h22', 749.99, 'agg-138h22_1623491517.jpg', '2021-06-12', 1),
(3, 7, 'AGG-138H23', '<p>Decking Panel</p>\r\n', 'agg-138h23', 749.99, 'agg-138h23.jpg', '0000-00-00', 0),
(4, 7, 'AGG-150H25A', '<p>Decking Panel</p>\r\n', 'agg-150h25a', 749.99, 'agg-150h25a.jpg', '0000-00-00', 0),
(5, 7, 'AGG-160H25', '<p>Decking Panel</p>\r\n', 'agg-160h25', 749.99, 'agg-160h25.jpg', '0000-00-00', 0),
(6, 6, 'AGG-164W13', '<p>Cladding Panel</p>\r\n', 'agg-164w13', 749.99, 'agg-164w13.jpg', '0000-00-00', 0),
(7, 6, 'AGG-174W21', '<p>Cladding Panel</p>\r\n', 'agg-174w21', 749.99, 'agg-174w21.jpg', '0000-00-00', 0),
(8, 6, 'AGG-C219W26', '<p>Cladding Panel</p>\r\n', 'agg-c219w26', 749.99, 'agg-c219w26.jpg', '0000-00-00', 0),
(9, 8, 'AGG-A01', '<p>Panel Accessories</p>\r\n', 'agg-a01', 599.99, 'agg-a01.jpg', '0000-00-00', 0),
(10, 8, 'AGG-CO1', '<p>Panel Accessories</p>\r\n', 'agg-co1', 449.99, 'agg-co1.jpg', '0000-00-00', 0),
(11, 8, 'AGG-CO2', '<p>Panel Accessories</p>\r\n', 'agg-co2', 449.99, 'agg-co2.jpg', '0000-00-00', 0),
(12, 8, 'AGG-CO3', '<p>Panel Accessories</p>\r\n', 'agg-co3', 449.99, 'agg-co3.jpg', '0000-00-00', 0),
(13, 8, 'AGG-CO4', '<p>Panel Accessories</p>\r\n', 'agg-co4', 449.99, 'agg-co4.jpg', '0000-00-00', 0),
(14, 8, 'AGG-CO5', '<p>Panel Accessories</p>\r\n', 'agg-co5', 449.99, 'agg-co5.jpg', '0000-00-00', 0),
(15, 8, 'AGG-CO6', '<p>Panel Accessories</p>\r\n', 'agg-co6', 449.99, 'agg-co6.jpg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2018-05-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Janzen', 'Go', '', '', 'Joji-0.jpg', 1, '', '', '2018-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
