-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 02:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teambam`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `h_id` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `id` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `increment` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`id`, `start`, `end`, `increment`, `desc`) VALUES
(1, 1000, 17, 1, 'PROD');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `category_id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category`) VALUES
(1, 'for sugarcane'),
(2, 'for rice'),
(3, 'for vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `C_ID` int(50) NOT NULL,
  `C_FNAME` varchar(50) NOT NULL,
  `C_LNAME` varchar(50) NOT NULL,
  `C_AGE` int(2) NOT NULL,
  `C_ADDRESS` text NOT NULL,
  `C_PNUMBER` varchar(50) NOT NULL,
  `C_GENDER` varchar(50) NOT NULL,
  `C_EMAILADD` varchar(50) NOT NULL,
  `ZIPCODE` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`C_ID`, `C_FNAME`, `C_LNAME`, `C_AGE`, `C_ADDRESS`, `C_PNUMBER`, `C_GENDER`, `C_EMAILADD`, `ZIPCODE`, `username`, `password`) VALUES
(1, 'Joken', 'Villanueva', 30, 'Enclaro, Binalbagan', '09096798565', 'Male', 'Joken@yahoo.com', '6100', 'j', '$2y$10$0COwfAt8Yy6JTR2omeq5sOfdaKrFtVzh8C3a5WbP8intcwDG5H.Xm'),
(2, 'gladez', 'Jimenez', 23, 'Brgy.9 Isabela', '09096787453', 'Female', 'glad@yahoo.com', '6100', 'gladez', '$2y$10$sZU0lDPm3UdWQz.8lPhuQexh.uW3Dt0D.i8SeHRTD2cuzn4egCpfG'),
(3, 'Lenny', 'Jane', 23, 'Brgy.Santol Binalbagan', '09097865342', 'Female', 'Lenny@yahoo.com', '6100', 'Lenny', '$2y$10$nAIowngDF/uUOWi5G2FCru4RsbVAeliVqYLUIQ9E3Y2h.hEO1dt3u');

-- --------------------------------------------------------

--
-- Table structure for table `tbldelivery`
--

CREATE TABLE `tbldelivery` (
  `D_ID` int(50) NOT NULL,
  `C_ID` int(50) NOT NULL,
  `EMP_ID` int(50) NOT NULL,
  `C_ADDRESS` text NOT NULL,
  `C_PNUMBER` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `emp_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `position` varchar(50) NOT NULL,
  `hire_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `fname`, `lname`, `contact`, `email`, `address`, `gender`, `age`, `position`, `hire_date`) VALUES
(1, 'Caren', 'Bautista', '09098591074', 'caren@yahoo.com', 'Kabankalan', 'Female', 23, 'Manager', '2019-11-30'),
(2, 'Jahzel', 'Alarcon', '09509827365', 'jahiam07@gmail.com', 'Isabela', 'Female', 22, 'Manager', '2019-12-01'),
(3, 'Ryan', 'Mana-ay', '09786534342', 'Ryan@yahoo.com', 'Himamaylan ', 'Male', 21, 'Supervisor', '2019-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE `tblinventory` (
  `transac_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `date_in` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(20) NOT NULL,
  `profit` int(22) NOT NULL,
  `date_in` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_code` varchar(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`product_id`, `product_name`, `quantity`, `price`, `profit`, `date_in`, `category_id`, `supplier_id`, `user_id`, `product_code`, `status`) VALUES
(1, 'Amigo(14-14-14)', 100339, 1800, 20000, '2019-11-21', 1, 2, 1, '1009', 'Available'),
(2, 'Amigo(21-0-0-24)', 33, 1500, 1800, '2019-11-21', 2, 2, 1, '1010', 'Available'),
(3, 'Atlas(2100)', 15, 1500, 1800, '2019-11-21', 1, 3, 1, '1011', 'Available'),
(4, 'Harvester(14-14-11s)', 10, 1800, 2000, '2019-11-21', 1, 1, 1, '1012', 'Available'),
(5, 'Harvester(16-20)', 50, 1300, 1500, '2019-11-21', 1, 1, 1, '1013', 'Available'),
(6, 'Amigo(14-14-14)', 99, 1000, 1300, '2019-11-21', 3, 2, 1, '1014', 'Available'),
(7, 'Amigo(14-14-14)', 12, 125, 5, '2019-11-22', 2, 2, 2, '1015', 'Available'),
(8, '	Amigo(14-14-14)', 45, 45, 5555, '2019-11-28', 1, 1, 2, '1016', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`supplier_id`, `supplier_name`, `contact`, `email`, `address`) VALUES
(1, 'Harvester', '9095643236', 'Harvester@yahoo.com', 'Brgy.Sum-ag, Bacolod City'),
(2, 'Amigo', '9786534213', 'Amigo@yahoo.com', 'Bgry.Singkang Bacolod City'),
(3, 'Atlas', '9096547321', 'Atlas@yahoo.com', 'Brgy.Poblacion, Bacolod City');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransac`
--

CREATE TABLE `tbltransac` (
  `transac_id` int(11) NOT NULL,
  `transac_code` int(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransac`
--

INSERT INTO `tbltransac` (`transac_id`, `transac_code`, `date`, `customer_id`, `product_code`, `qty`, `price`, `total`) VALUES
(31, 1554235838, '2019-04-03', 39, '100', 1, 350, 350),
(32, 1554235838, '2019-04-03', 39, '1002', 1, 400, 400),
(33, 1554251111, '2019-04-03', 39, '100', 1, 350, 350),
(34, 1572074522, '2019-10-26', 42, '1001', 5, 400, 2000),
(35, 1572074522, '2019-10-26', 42, '100', 3, 350, 1050),
(36, 1572075891, '2019-10-26', 42, '1003', 20, 300, 6000),
(37, 1572356267, '2019-10-29', 42, '1001', 3, 400, 1200),
(38, 1572356267, '2019-10-29', 42, '1005', 16, 300, 4800),
(39, 1572850714, '2019-11-04', 42, '100', 1, 1500, 1500),
(40, 1572850714, '2019-11-04', 42, '1001', 1, 1500, 1500),
(41, 1573016058, '2019-11-06', 42, '100', 15, 1500, 22500),
(42, 1573057409, '2019-11-07', 46, '1001', 7, 1500, 10500),
(43, 1573110712, '2019-11-07', 46, '1001', 1, 1500, 1500),
(44, 1573788177, '2019-11-15', 46, '1001', 1, 1500, 1500),
(45, 1573788177, '2019-11-15', 46, '1002', 1, 1500, 1500),
(46, 1573993061, '2019-11-17', 0, '1004', 1, 1000, 1000),
(47, 1573993148, '2019-11-17', 30, '1004', 1, 1000, 1000),
(48, 1573993179, '2019-11-17', 30, '1004', 1, 1000, 1000),
(49, 1573993307, '2019-11-17', 30, '1004', 1, 1000, 1000),
(50, 1573993636, '2019-11-17', 30, '1004', 2, 1000, 2000),
(51, 1574060123, '2019-11-18', 30, '1004', 10, 1000, 10000),
(52, 1574302308, '2019-11-21', 2, '1010', 1, 1500, 1500),
(53, 1574306845, '2019-11-21', 2, '1010', 1, 1500, 1500),
(54, 1574306845, '2019-11-21', 2, '1009', 1, 1800, 1800),
(55, 1574329865, '2019-11-21', 3, '1009', 1, 1800, 1800),
(56, 1574330004, '2019-11-21', 3, '1011', 1, 1500, 1500),
(57, 1574331170, '2019-11-21', 4, '1010', 1, 1500, 1500),
(58, 1574408390, '2019-11-22', 2, '1009', 6, 1800, 10800),
(59, 1574408390, '2019-11-22', 2, '1010', 20, 1500, 30000),
(60, 1574408390, '2019-11-22', 2, '1011', 20, 1500, 30000),
(61, 1574408390, '2019-11-22', 2, '1014', 20, 1000, 20000),
(62, 1574408442, '2019-11-22', 2, '1014', 20, 1000, 20000),
(63, 1574602908, '2019-11-24', 1, '1014', 1, 1000, 1000),
(64, 1574732852, '2019-11-26', 1, '1009', 1, 1800, 1800),
(65, 1574836996, '2019-11-27', 1, '1009', 1, 1800, 1800),
(66, 1574841234, '2019-11-27', 1, '1009', 1, 1800, 1800),
(67, 1574841234, '2019-11-27', 1, '1014', 20, 1000, 20000),
(68, 1574844266, '2019-11-27', 1, '1010', 1, 1500, 1500),
(69, 1574872971, '2019-11-28', 1, '1011', 5, 1500, 7500),
(70, 1574872971, '2019-11-28', 1, '1010', 50, 1500, 75000),
(71, 1575428004, '2019-12-04', 1, '1010', 25, 1500, 37500),
(72, 1575428004, '2019-12-04', 1, '1011', 40, 1500, 60000),
(73, 1575428113, '2019-12-04', 2, '1010', 30, 1500, 45000),
(74, 1575428113, '2019-12-04', 2, '1011', 30, 1500, 45000),
(75, 1575428238, '2019-12-04', 3, '1012', 45, 1800, 81000),
(76, 1575428238, '2019-12-04', 3, '1010', 40, 1500, 60000),
(77, 1575872572, '2019-12-09', 1, '1011', 14, 1500, 21000),
(78, 1575873091, '2019-12-09', 1, '1011', 15, 1500, 22500),
(79, 1576051349, '2019-12-11', 1, '1010', 1, 1500, 1500),
(80, 1576051349, '2019-12-11', 1, '1014', 1, 1000, 1000),
(81, 1576051349, '2019-12-11', 1, '1012', 5, 1800, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransacdetail`
--

CREATE TABLE `tbltransacdetail` (
  `detail_id` int(11) NOT NULL,
  `transac_code` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `deliveryfee` int(11) NOT NULL,
  `pay_met` varchar(30) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `delivery_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransacdetail`
--

INSERT INTO `tbltransacdetail` (`detail_id`, `transac_code`, `date`, `customer_id`, `deliveryfee`, `pay_met`, `totalprice`, `status`, `remarks`, `delivery_date`) VALUES
(1, 1575428004, '2019-12-04 00:00:00.000000', 1, 150, '', 97650, 'Confirmed', 'Your order has been confirmed!', '2019-12-10 00:00:00.000000'),
(2, 1575428113, '2019-12-04 00:00:00.000000', 2, 150, '', 90150, 'Confirmed', 'Your order has been confirmed!', '2019-12-16 00:00:00.000000'),
(3, 1575428238, '2019-12-04 00:00:00.000000', 3, 150, '', 141150, 'Confirmed', 'Your order has been confirmed!', '2019-12-20 00:00:00.000000'),
(4, 1575872572, '2019-12-09 00:00:00.000000', 1, 150, '', 21150, 'Pending', '', '2019-12-10 00:00:00.000000'),
(5, 1575873091, '2019-12-09 00:00:00.000000', 1, 150, '', 22650, 'Pending', '', '2019-12-10 00:00:00.000000'),
(6, 1576051349, '2019-12-11 00:00:00.000000', 1, 150, '', 11650, 'Pending', '', '2019-06-20 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`user_id`, `fname`, `lname`, `email`, `contact`, `address`, `position`, `username`, `pass`) VALUES
(1, 'jahzel', 'Alarcon', 'jahzel@yahoo.com', 0, '', 'Admin', 'jahzel', '$2y$10$pKOAFaZ1jmmwWGQUJfZTdO3avJ3Es6/.n6TB8qVYAo9rn1Oh6Ic8i'),
(2, 'Caren', 'Bautista', 'caren@yahoo.com', 0, '', 'Admin', 'admin', '$2y$10$ds1gqSSjIHq/I7c.Ly/w9eF.OPgcXyeG09wL71loBGy0qLkNzUZlS'),
(3, 'Ryan', 'Manaay', 'Ryan@yahoo.com', 0, '', 'Admin', 'Ryan', '$2y$10$l1RFNm9UyBe7o1JyO7OxfONOK1WMjbIXyd7k3PPZ1kE7/Hg0U.ysu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_tblproducts_tblsupplier` (`supplier_id`,`user_id`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tbltransac`
--
ALTER TABLE `tbltransac`
  ADD PRIMARY KEY (`transac_id`),
  ADD KEY `FK_tbltransac_details_tblcustomer` (`customer_id`);

--
-- Indexes for table `tbltransacdetail`
--
ALTER TABLE `tbltransacdetail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `h_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `C_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  MODIFY `D_ID` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbltransac`
--
ALTER TABLE `tbltransac`
  MODIFY `transac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `tbltransacdetail`
--
ALTER TABLE `tbltransacdetail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
