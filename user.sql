-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 07:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodtbl`
--

CREATE TABLE `foodtbl` (
  `food_id` int(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `foodimage` varchar(255) NOT NULL,
  `foodquantity` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodtbl`
--

INSERT INTO `foodtbl` (`food_id`, `foodname`, `foodimage`, `foodquantity`, `description`, `price`) VALUES
(8, 'tacos', '1604601380.jpg', 4, 'Do you like tacos?', 400),
(9, 'Shawarma', '1604601919.jpg', 6, 'Have a taste of shawarma', 250),
(10, 'Soda', '1604644343.jpg', 10, 'Stay refreshed with cocacola', 100);

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE `ordertbl` (
  `orderid` int(255) NOT NULL,
  `foodid` int(255) NOT NULL,
  `customerid` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `totalcharges` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertbl`
--

INSERT INTO `ordertbl` (`orderid`, `foodid`, `customerid`, `amount`, `totalcharges`) VALUES
(9, 8, 19, 3, 1200),
(10, 9, 22, 3, 750),
(23, 9, 20, 3, 750),
(24, 8, 19, 3, 1200),
(25, 10, 20, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address_city` varchar(50) NOT NULL,
  `profile_photo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`id`, `fullname`, `email`, `address_city`, `profile_photo`, `password`) VALUES
(19, 'John Munene', 'john.ndwiga@strathmore.edu', 'Buruburu', '1604488361.jpg', 'Culture23'),
(20, 'Kelvin Gitonga', 'tosh@gmail.com', 'gardenestate', '1604510318.jpg', 'tosh'),
(21, 'Marion Maina', 'marionmaina@gmail.com', 'gardenestate', '1604523948.jpg', 'marion'),
(22, 'Allan Mwangi', 'allan@gmail.com', 'LA', '1604556110.jpg', 'mwangi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodtbl`
--
ALTER TABLE `foodtbl`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `ordertbl`
--
ALTER TABLE `ordertbl`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `foodid` (`foodid`),
  ADD KEY `ordertbl_ibfk_1` (`customerid`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodtbl`
--
ALTER TABLE `foodtbl`
  MODIFY `food_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ordertbl`
--
ALTER TABLE `ordertbl`
  MODIFY `orderid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
