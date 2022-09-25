-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 01:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fashionlib`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `Delivery_ID` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Zone` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City_or_Town` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Cpno` int(11) NOT NULL,
  `Telno` int(11) NOT NULL,
  `Delivery_Status` enum('pending','delivered') NOT NULL,
  `Order_Date` varchar(50) NOT NULL,
  `Delivery_Date` varchar(50) NOT NULL,
  PRIMARY KEY (`Delivery_ID`),
  KEY `User_ID` (`User_ID`),
  KEY `temp_id` (`temp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`Delivery_ID`, `temp_id`, `User_ID`, `Zone`, `Street`, `Barangay`, `City_or_Town`, `Province`, `Cpno`, `Telno`, `Delivery_Status`, `Order_Date`, `Delivery_Date`) VALUES
(15, 0, 18, '2', '083', 'Nabua', 'Dolorosa', '', 2147483647, 0, 'delivered', '2015/10/04', '2015/10/04'),
(16, 0, 18, '2', '083', 'Nabua', 'Dolorosa', '', 2147483647, 0, 'pending', '2015/10/04', ''),
(17, 0, 15, '2', '083', 'Nabua', 'Dolorosa', '', 0, 0, 'pending', '2015/10/04', ''),
(18, 0, 20, '4', '182', 'Nabua', 'Sta. Cruz', 'Camarines Sur', 890000, 0, 'pending', '2015/10/06', ''),
(19, 0, 20, '4', '182', 'Nabua', 'Sta. Cruz', 'Camarines Sur', 890000, 0, 'pending', '2015/10/06', ''),
(20, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'cam sur', 2147483647, 0, 'pending', '2015/10/06', ''),
(21, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'cam sur', 2147483647, 0, 'pending', '2015/10/06', ''),
(22, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'grace', 2147483647, 0, 'pending', '2015/10/06', ''),
(23, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'ff', 2147483647, 0, 'pending', '2015/10/06', ''),
(24, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'dsf', 2147483647, 0, 'pending', '2015/10/06', ''),
(25, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'hh', 2147483647, 0, 'pending', '2015/10/06', ''),
(26, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'wdw', 2147483647, 0, 'pending', '2015/10/06', ''),
(27, 0, 18, '2', '083', 'Nabua', 'Dolorosa', 'ee', 2147483647, 0, 'pending', '2015/10/06', ''),
(28, 0, 19, '67', 'tt', 'kk', 'uu', 'kk', 555, 66, 'pending', '2015/10/06', ''),
(29, 0, 19, '67', 'tt', 'kk', 'uu', 'kk', 555, 66, 'pending', '2015/10/06', ''),
(30, 0, 21, '222', 'mm', 'mm', 'mm', 'm', 0, 0, 'pending', '2015/10/06', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `user_id` int(11) NOT NULL,
  `feedback` longtext NOT NULL,
  `date` date NOT NULL,
  KEY `User_ID` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `measurement`
--

CREATE TABLE IF NOT EXISTS `measurement` (
  `User_ID` int(11) NOT NULL,
  `customization_no` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `bust` decimal(4,2) NOT NULL,
  `waistline` decimal(4,2) NOT NULL,
  `hips` decimal(4,2) NOT NULL,
  `figure` decimal(4,2) NOT NULL,
  `shoulder` decimal(4,2) NOT NULL,
  `armlength` decimal(4,2) NOT NULL,
  `skirtlength` decimal(4,2) NOT NULL,
  `description` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `color` varchar(45) NOT NULL,
  `image_path` varchar(45) NOT NULL,
  PRIMARY KEY (`customization_no`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `measurement`
--

INSERT INTO `measurement` (`User_ID`, `customization_no`, `date`, `type`, `bust`, `waistline`, `hips`, `figure`, `shoulder`, `armlength`, `skirtlength`, `description`, `gender`, `color`, `image_path`) VALUES
(0, 10, '2015-10-01', 'Cocktail', 25.00, 23.00, 28.00, 20.00, 20.00, 23.00, 45.00, '', 'Female', 'Pink', 'image/FLR-PF5018_caribbeanblue_MannequinFront'),
(0, 11, '2015-10-04', 'Long Gown', 13.00, 22.00, 5.00, 8.00, 13.00, 99.99, 88.00, '', 'Female', 'res', 'image/11990589_1095952730433428_7502897634615'),
(0, 12, '2015-10-04', 'Long Gown', 67.00, 44.00, 88.00, 66.00, 44.00, 43.00, 33.00, '', 'Female', '', 'image/11990589_1095952730433428_7502897634615'),
(0, 13, '2015-10-05', 'Long Gown', 67.00, 67.00, 66.00, 66.00, 99.99, 99.00, 9.00, 'yu', 'Female', 'uuu', 'image/11990589_1095952730433428_7502897634615'),
(0, 14, '2015-10-05', 'Long Gown', 17.00, 15.00, 9.00, 11.00, 13.00, 20.00, 8.00, '', 'Female', 'red', 'image/11990589_1095952730433428_7502897634615'),
(0, 15, '2015-10-05', 'Long Gown', 78.00, 99.99, 99.99, 77.00, 66.00, 66.00, 66.00, '', 'Female', '', 'image/11990589_1095952730433428_7502897634615'),
(0, 16, '2015-10-05', 'Long Gown', 8.00, 34.00, 78.00, 64.00, 34.00, 23.00, 22.00, '', 'Female', '', 'image/de.jpg'),
(0, 17, '2015-10-05', 'Long Gown', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 'Female', '', 'image/polly2.jpg'),
(0, 18, '2015-10-06', 'Long Gown', 14.00, 55.00, 56.00, 55.00, 55.00, 55.00, 55.00, '', 'Female', '', 'image/11990589_1095952730433428_7502897634615'),
(0, 19, '2015-10-06', 'Long Gown', 67.00, 5.00, 66.00, 99.99, 55.00, 55.00, 55.00, '', 'Female', '', 'image/11990589_1095952730433428_7502897634615');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `color_desc` varchar(100) NOT NULL,
  `color` varchar(19) NOT NULL,
  `size` varchar(10) NOT NULL,
  `type` varchar(45) NOT NULL,
  `image_path` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `available` int(11) NOT NULL,
  `New_Delivered_Stocks` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122260 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`date`, `id`, `product_code`, `product_name`, `product_desc`, `color_desc`, `color`, `size`, `type`, `image_path`, `price`, `available`, `New_Delivered_Stocks`) VALUES
('2015-10-05', 122241, 'PL0001', '', 'Silver top laced and blue skirt cocktail', 'Silver and Blue', 'Blue', '25-28', 'Cocktail', 'image/1.jpg', 1000.00, 0, 0),
('2015-10-05', 122242, 'PL0002', '', 'Long sleeveless red gown', 'Red', 'Red', '23-25', 'Gowns', 'image/1b.jpg', 2500.00, 0, 0),
('2015-10-05', 122244, 'PL0003', '', 'Beaded Red Cocktail Dress', 'Red', 'Red', '23-25', 'Cocktail', 'image/2.jpg', 1500.00, 0, 0),
('2015-10-05', 122246, 'PL0004', '', 'Light Blue Cocktail Dress with Royal Blue accent', 'Blue', 'Blue', '25-29', 'Cocktail', 'image/3.jpg', 500.00, 0, 0),
('2015-10-05', 122247, 'PL0005', '', 'Black laced top with yellow balloon skirt', 'Black and Yellow', 'Black', '24-25', 'Cocktail', 'image/4.jpg', 1500.00, 0, 0),
('2015-10-05', 122249, 'PL0006', '', 'Short sleeved Cocktail Dress', 'Pink', 'Pink', '24-29', 'Cocktail', 'image/5.jpg', 500.00, 0, 0),
('2015-10-05', 122250, 'PL0007', '', 'Triple layered white long gown', 'White', 'White', '22-26', 'Gowns', 'image/6.jpg', 2500.00, 0, 0),
('2015-10-05', 122252, 'PL0008', '', '', 'Green', 'Green', '24-29', 'Cocktail', 'image/7.jpg', 500.00, 0, 0),
('2015-10-05', 122253, 'PL0009', '', '', 'Orange', 'Orange', '24-28', 'Gowns', 'image/2a.jpg', 1500.00, 0, 0),
('2015-10-05', 122254, 'PL0010', '', '', 'Black', 'Black', '25-30', 'Gowns', 'image/3a.jpg', 1500.00, 0, 0),
('2015-10-05', 122255, 'PL0011', '', '', 'White with Silver', 'White', '24-27', 'Gowns', 'image/4a.jpg', 1500.00, 0, 0),
('2015-10-05', 122256, 'PL0012', '', '', 'Light Brown', 'Light Brown', '25-29', 'Gowns', 'image/6a.jpg', 1500.00, 0, 0),
('2015-10-05', 122257, 'PL0013', '', '', 'Orange with Beads', 'Orange', '24-28', 'Gowns', 'image/7a.jpg', 2500.00, 0, 0),
('2015-10-06', 122259, 'pl00000000000', 'OJSAIODJO', 'JNJIBNK', 'INBUJBNIUN', 'IJNIJNIU', 'NIJNKIJN', 'Gowns', 'image/1a.jpg', 0.00, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `Product_No` int(11) NOT NULL,
  PRIMARY KEY (`Product_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `Sales_No` int(11) NOT NULL AUTO_INCREMENT,
  `Product_No` int(11) NOT NULL,
  `Sold_Stocks` int(11) NOT NULL,
  `Total_Sales` decimal(20,2) NOT NULL,
  `Date` varchar(50) NOT NULL,
  PRIMARY KEY (`Sales_No`),
  KEY `Product_No` (`Product_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stocks_inventory`
--

CREATE TABLE IF NOT EXISTS `stocks_inventory` (
  `Stock_No` int(11) NOT NULL AUTO_INCREMENT,
  `Product_ID` int(11) NOT NULL,
  `Product_No` int(11) NOT NULL,
  `Stocks_on_Hand` int(11) NOT NULL,
  `New_Delivered_Stocks` int(11) NOT NULL,
  `Price` decimal(20,2) NOT NULL,
  `Stock_Delivery_Date` date NOT NULL,
  `Inventory_Date` varchar(50) NOT NULL,
  PRIMARY KEY (`Stock_No`),
  KEY `id` (`Product_No`),
  KEY `Product_ID` (`Product_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_code` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `image_path` varchar(60) NOT NULL,
  PRIMARY KEY (`temp_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`temp_id`, `user_id`, `prod_id`, `prod_code`, `description`, `price`, `quantity`, `total_price`, `image_path`) VALUES
(18, 0, 122252, '', '', 500, 1, 500, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Lastname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Zone` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City_Or_Town` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Cpno` varchar(50) NOT NULL,
  `Telno` int(11) NOT NULL,
  `User_Type` enum('admin','customer') NOT NULL,
  `Sign_Up_Date` varchar(45) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`User_ID`, `Lastname`, `Firstname`, `Username`, `Password`, `Zone`, `Street`, `Barangay`, `City_Or_Town`, `Province`, `Cpno`, `Telno`, `User_Type`, `Sign_Up_Date`) VALUES
(1, '', '', 'admin', '4f5cec75c744bd39b5126debbb7cffb8', '', '', '', '', '', '', 0, 'admin', '2015-09-27'),
(15, 'Rian', 'Mary Grace', 'admin', '1705d7b62d15d4392caf82ab3c66de34', '2', '083', 'Dolorosa', 'Nabua', '', '09488617432', 0, 'customer', '2015-10-04'),
(16, 'Rian', 'Mary Grace', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '2', '45', 'gg', 'nabua', 'Camarines Sur', '09488617432', 0, 'admin', '2015-10-04'),
(17, 'uggsdfds`', 'jjjj', 'chanyeol', 'fb45615cea1183af03479d88ad4da5cd', '77', '77', 'uu', 'uu', '', '999', 0, 'customer', '2015-10-04'),
(18, 'Rian', 'Mary Grace', 'gigi', '1705d7b62d15d4392caf82ab3c66de34', '2', '083', 'Dolorosa', 'Nabua', '', '09488617432', 0, 'customer', '2015-10-04'),
(19, 'Castor', 'Jessa', 'jessa', '202cb962ac59075b964b07152d234b70', '67', 'tt', 'uu', 'kk', 'kk', '555', 66, 'customer', '2015/10/06'),
(20, 'Park', 'Grace', 'park', '827ccb0eea8a706c4c34a16891f84e7b', '4', '182', 'Sta. Cruz', 'Nabua', 'Camarines Sur', '890000', 0, 'customer', '2015/10/06'),
(21, 'Lipata', 'Jocelyn', 'jocelyn', 'e03336a89b31b3330fb1854ede64f087', '222', 'mm', 'mm', 'mm', 'm', '00', 0, 'customer', '2015/10/06');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_logs`
--

CREATE TABLE IF NOT EXISTS `user_login_logs` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  `Login_Date_Time` varchar(50) NOT NULL,
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login_logs`
--

INSERT INTO `user_login_logs` (`User_ID`, `Username`, `User_Type`, `Login_Date_Time`) VALUES
(17, 'chanyeol', 'customer', '2015/10/04'),
(17, 'chanyeol', 'customer', '2015/10/04'),
(18, 'gigi', 'customer', '2015/10/04'),
(18, 'gigi', 'customer', '2015/10/04'),
(15, 'admin', 'customer', '2015/10/04'),
(15, 'admin', 'customer', '2015/10/04'),
(15, 'admin', 'customer', '2015/10/04'),
(15, 'admin', 'customer', '2015/10/04'),
(18, 'gigi', 'customer', '2015/10/04'),
(15, 'admin', 'customer', '2015/10/04'),
(18, 'gigi', 'customer', '2015/10/04'),
(18, 'gigi', 'customer', '2015/10/04'),
(18, 'gigi', 'customer', '2015/10/04'),
(15, 'admin', 'customer', '2015/10/04'),
(18, 'gigi', 'customer', '2015/10/05'),
(15, 'admin', 'customer', '2015/10/05'),
(18, 'gigi', 'customer', '2015/10/05'),
(15, 'admin', 'customer', '2015/10/05'),
(18, 'gigi', 'customer', '2015/10/05'),
(15, '', 'customer', '2015/10/05'),
(18, 'gigi', 'customer', '2015/10/05'),
(18, '', 'customer', '2015/10/05'),
(15, '', 'customer', '2015/10/05'),
(18, 'gigi', 'customer', '2015/10/05'),
(15, '', 'customer', '2015/10/05'),
(18, 'gigi', 'customer', '2015/10/06'),
(18, 'gigi', 'customer', '2015/10/06'),
(18, 'gigi', 'customer', '2015/10/06'),
(18, 'gigi', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(18, 'gigi', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(19, 'jessa', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(19, 'jessa', 'customer', '2015/10/06'),
(20, 'park', 'customer', '2015/10/06'),
(18, 'gigi', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(18, 'gigi', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(18, 'gigi', 'customer', '2015/10/06'),
(19, 'jessa', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(19, 'jessa', 'customer', '2015/10/06'),
(21, 'jocelyn', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(21, 'jocelyn', 'customer', '2015/10/06'),
(21, 'jocelyn', 'customer', '2015/10/06'),
(15, 'admin', 'customer', '2015/10/06'),
(21, 'jocelyn', 'customer', '2015/10/06');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`Product_No`) REFERENCES `product_info` (`Product_No`);

--
-- Constraints for table `stocks_inventory`
--
ALTER TABLE `stocks_inventory`
  ADD CONSTRAINT `stocks_inventory_ibfk_3` FOREIGN KEY (`Stock_No`) REFERENCES `user_account` (`User_ID`),
  ADD CONSTRAINT `stocks_inventory_ibfk_4` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stocks_inventory_ibfk_5` FOREIGN KEY (`Product_No`) REFERENCES `product_info` (`Product_No`);

--
-- Constraints for table `user_login_logs`
--
ALTER TABLE `user_login_logs`
  ADD CONSTRAINT `user_login_logs_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
