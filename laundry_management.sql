-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 11:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(128) NOT NULL,
  `productname` varchar(128) NOT NULL,
  `Pricepp` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `productname`, `Pricepp`) VALUES
(21, 'Sofa Cover', '20'),
(23, 'Towel (Hand)', '10'),
(24, 'Towel (bath)', '15'),
(25, 'Moshari', '20'),
(26, 'pillow cover', '7'),
(27, 'Matt', '20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(128) NOT NULL,
  `uname` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `productname` varchar(128) NOT NULL,
  `quantity` int(128) NOT NULL,
  `payment` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `uname`, `address`, `productname`, `quantity`, `payment`, `status`) VALUES
(27, 'tom', 'banani', 'Towel (bath)', 14, 'CashOnDelivery', 'Order Placed'),
(28, 'tom', 'chankharpool', 'Sofa Cover', 14, 'BKash', 'Order Placed'),
(29, 'tom', 'banani', 'Towel (Hand)', 7, 'BKash', 'Order Placed'),
(30, 'Mobasser', 'dhanmondi', 'Sofa Cover', 16, 'BKash', 'Order Placed'),
(31, 'Mobasser', 'chankharpool', 'Towel (bath)', 4, 'BKash', 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `email`, `password`, `phone`) VALUES
('2345678', '65@gmail.com', '3456', '13456789p'),
('admin', 'admin@haatprotidin.com', 'admin', '01715888888'),
('akfkjah', 'akjdfh@gmail.com', '1234', '1234455'),
('akku', 'akku@akijbiri.com', '125', '12265656232'),
('Alfred Pennysworth', 'batcaretaker@gmail.com', '1234', '24567890'),
('anas', 'forshachele@gmail.com', 'anas', '69696969696969696969'),
('bnmb', 'bmnfgn@gmail.com', '1234', '263474576'),
('jerry', 'tombae@gmail.com', '1234', '55451584'),
('Kamal', 'kamal@gmail.com', '1234', '89898'),
('kk', 'j@gmail.com', '1234', '01617658439'),
('kkkk', 'kop', '890', '4567890'),
('kol', 'kjk', '9089', '234567890ß'),
('Mobasser', 'onekpariami@mobasser.com', 'maiyabaaj', '123456789'),
('Shohun', 'iamshohun@shohunmail.com', 'Chocolate', '696969696969'),
('tom', 'jerryamarbae@gmail.com', '1234', '065464649');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
