-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 05:02 AM
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
(1, 8, 'AGG 50J30-WPC Hollow Joist(2.9m)', '<p>One of the accessories in making your desired WPC Experience.</p>\r\n', 'agg-50j30-wpc-hollow-joist-2-9m', 525, 'agg-50j30.jpg', '2021-07-02', 4),
(2, 7, 'AGG 138H22-WPC Co-Extrusion Deep Wood Grain Hallow Decking', '<p><strong>138mm </strong><em>width </em>x <strong>22mm </strong><em>thickness</em>, the <em>length </em>is <strong>2.2m</strong></p>\r\n\r\n<p><strong><em>Dimension:</em>&nbsp;2200mm x 138 mm x 22mm</strong></p>\r\n\r\n<p>One side deep wood grain and the other is side plain flat (No brushed).</p>\r\n\r\n<p>Available Colors:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Teak</li>\r\n	<li>Wallnut</li>\r\n</ul>\r\n', 'agg-138h22-wpc-co-extrusion-deep-wood-grain-hallow-decking', 1225, 'agg-138h22_1623491517.jpg', '2021-07-02', 1),
(4, 7, 'AGG 150H25A-5 Groove Hallow Decking', '<p><strong>150mm</strong> <em>width </em>x <strong>24mm</strong> <em>thickness</em>, the <em>length </em>is <strong>2.2m</strong></p>\r\n\r\n<p><strong><em>Dimention</em>:&nbsp;2200mm x 150&nbsp;mm x 25mm</strong></p>\r\n\r\n<p>5 groove lined&nbsp;top surface&nbsp;and narrow groove lined bottom surface</p>\r\n\r\n<p>Available Colors:&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Teak</strong></li>\r\n</ul>\r\n\r\n<p><strong>Sketch Dimension:&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"../products/images/dimensions/150H25A.png\" style=\"height:109px; width:367px\" /></p>\r\n', 'agg-150h25a-5-groove-hallow-decking', 920, 'agg-150h25a.jpg', '2021-07-02', 8),
(5, 7, 'AGG 160H25-7 Groove Hallow Decking', '<p><strong>160mm </strong><em>width </em>x <strong>25mm </strong><em>thickness</em>, the <em>length </em>is <strong>2.2m</strong></p>\r\n\r\n<p><strong><em>Dimention:</em></strong><strong>&nbsp;2200mm x 138 mm x 22mm</strong></p>\r\n\r\n<p>One side deep wood grain and the other is side plain flat (No brushed).</p>\r\n\r\n<p>Available Colors:&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Teak</strong></li>\r\n	<li><strong>Wallnut</strong></li>\r\n</ul>\r\n', 'agg-160h25-7-groove-hallow-decking', 920, 'agg-160h25.jpg', '2021-06-24', 8),
(6, 6, 'AGG 164W13-Solid Haspe Grain B Cladding', '<p>Cladding Panel</p>\r\n', 'agg-164w13-solid-haspe-grain-b-cladding', 885, 'agg-164w13.jpg', '2021-06-27', 4),
(7, 6, 'AGG 174W21-Hallow Wall Cladding', '<p>Cladding Panel</p>\r\n', 'agg-174w21-hallow-wall-cladding', 795, 'agg-174w21.jpg', '2021-06-24', 12),
(8, 6, 'AGG C219W26-Corrugated/Fluted Cladding', '<p>Cladding Panel</p>\r\n', 'agg-c219w26-corrugated-fluted-cladding', 1485, 'agg-c219w26.jpg', '2021-07-02', 2),
(9, 8, 'AGG A01-WPC Edge Cover Angle/Endcap (2.9m)', '<p>Panel Accessories</p>\r\n', 'agg-a01-wpc-edge-cover-angle-endcap-2-9m', 445, 'agg-a01.jpg', '0000-00-00', 0),
(10, 8, 'AGG C01-Decking Plastic Mounting Clip', '<p>Panel Accessories</p>\r\n', 'agg-c01-decking-plastic-mounting-clip', 20, 'agg-co1.jpg', '2021-06-24', 8),
(11, 8, 'AGG C02-Decking Stainless Steel Mounting Clip', '<p>Panel Accessories</p>\r\n', 'agg-c02-decking-stainless-steel-mounting-clip', 30, 'agg-co2.jpg', '2021-06-27', 1),
(12, 8, 'AGG C03-Stainless Steel Start Clip', '<p>Panel Accessories</p>\r\n', 'agg-c03-stainless-steel-start-clip', 30, 'agg-co3.jpg', '2021-06-24', 2),
(13, 8, 'AGG C04-Decking Stainless Steel Mounting Clips', '<p>Panel Accessories</p>\r\n', 'agg-c04-decking-stainless-steel-mounting-clips', 45, 'agg-co4.jpg', '2021-06-30', 3),
(14, 8, 'AGG C05-Stainless Steel Screw', '<p>Panel Accessories</p>\r\n', 'agg-c05-stainless-steel-screw', 5, 'agg-co5.jpg', '0000-00-00', 0),
(15, 8, 'AGG C06-Stainless Steel Expansion Screw & Plastic Pipe', '<p>Use for fixing joist on the concrete ground.</p>\r\n\r\n<p>Made of:&nbsp;Stainless Steel Grade 304 Material &amp; Pe</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'agg-c06-stainless-steel-expansion-screw-plastic-pipe', 8, 'agg-co6.jpg', '2021-06-26', 1),
(16, 8, 'AGG 50J30-WPC Hollow Joist(2.2m)', '', 'agg-50j30-wpc-hollow-joist-2-2m', 375, 'agg-50j30-wpc-hollow-joist-2-2.jpg', '0000-00-00', 0),
(17, 8, 'AGG A01-WPC Edge Cover Angle/Endcap (2.2m)', '', 'agg-a01-wpc-edge-cover-angle-endcap-2-2m', 335, 'agg-a01-wpc-edge-cover-angle-endcap-2-2m_1624882711.jpg', '2021-06-28', 1);

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
(1, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Janzen', 'Go', '', '', 'Joji-0.jpg', 1, '', '', '2021-07-02');

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(2, 'janzen@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Janzen', 'Go', '', '', 'janzen_profile.jpg', 1, '', '', '2021-07-02');

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(3, 'arnel@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Arnel', 'Go', '', '', 'Joji-0.jpg', 1, '', '', '2021-07-02');

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(4, 'dimple@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Dimple', 'Fev', '', '', 'Joji-0.jpg', 1, '', '', '2021-07-02');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
