-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 12:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL,
  `tracking_id` bigint(20) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_contact` varchar(11) NOT NULL,
  `sender_address` varchar(255) NOT NULL,
  `sender_pin` int(11) NOT NULL,
  `sender_city` varchar(50) NOT NULL,
  `sender_country` varchar(50) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_email` varchar(70) NOT NULL,
  `receiver_contact` varchar(11) NOT NULL,
  `receiver_address` varchar(255) NOT NULL,
  `receiver_pin` int(11) NOT NULL,
  `receiver_city` varchar(50) NOT NULL,
  `receiver_country` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `volume` float NOT NULL,
  `basic_price` float NOT NULL,
  `weight_price` float NOT NULL,
  `volume_price` float NOT NULL,
  `total_price` float NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `tracking_id`, `sender_name`, `sender_email`, `sender_contact`, `sender_address`, `sender_pin`, `sender_city`, `sender_country`, `receiver_name`, `receiver_email`, `receiver_contact`, `receiver_address`, `receiver_pin`, `receiver_city`, `receiver_country`, `weight`, `volume`, `basic_price`, `weight_price`, `volume_price`, `total_price`, `status`) VALUES
(2, 1315530948, 'Niranjan', 'niranjany74@gmail.com', '123456789', '6, chick world', 560057, 'delhi', 'India', 'bibek', 'bibek@x.com', '987654321', '4, btm', 560090, 'mumbai', 'nepal', 10, 48, 1500, 1665, 1725, 4890, 'delievered'),
(34, 1006263484, 'Bibek Kumar', 'kumar.bee014@gmail.com', '8892739936', 'india', 250036, 'bangalore', 'india', 'niranjan yadav', 'niranjany74@gmail.com', '2578931025', 'india', 202250, 'kolkata', 'india', 255, 140, 2500, 3600, 3125, 9225, 'pending'),
(48, 1163490796, 'mahendra', 'mahendra@gmail.com', '5487963215', 'nepal', 20052, 'delhi', 'nepal', 'Bibek', 'kumar.bee@gmail.com', '8892739936', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', 560090, 'mumbai', 'india', 200, 270, 1500, 2160, 1875, 5535, 'pending'),
(49, 1128518907, 'adk', 'adk@gmail.com', '255425555', 'nepal', 25425, 'nepal', 'nepal', 'bibek', 'kumar.bee014@gmail.com', '8892739936', 'india', 56465, 'india', 'india', 50, 70, 3000, 3990, 3600, 10590, 'pending'),
(50, 1135642000, 'Ankit', 'kumar.bee014@gmail.com', '5678i9', 'dfghjklfghjk fghjk', 567, 'delhi', 'India', 'ankit', 'ankit.a@a.a', '8892739936', 'dfghjk', 56, 'mumbai', 'India', 60, 2, 1500, 1995, 1500, 4995, 'on_the_way'),
(51, 1041515399, 'deepak', 'deepak@gmail.com', '8892625465', 'india', 560020, 'bangalore', 'india', 'Bibek', 'kumar.bee014@gmail.com', '7086953473', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', 560090, 'kolkata', 'India', 20000, 21, 2500, 3600, 2750, 8850, 'processing'),
(52, 1102478374, 'deepak', 'deepak@gmail.com', '8892625465', '5th cross, Hesaraghatta Main Road, Chikkasandra, Bengaluru,', 560020, 'nepal', 'nepal', 'Bibek', 'kumar.bee014@gmail.com', '7086953473', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', 202250, 'india', 'India', 20000, 100, 3000, 4320, 3600, 10920, 'pending'),
(53, 1267631874, 'jhg', 'jhglkhg@gmail.com', 'kjgjklg', 'gjjkgkj', 0, 'nepal', 'kjgkj', 'gjkg', 'kjgkjg@gmail.com', 'kjgkjg', 'kjgkjg', 0, 'india', 'hgkjg', 50000, 36, 3000, 4320, 3450, 10770, 'pending'),
(54, 1394347127, 'jhg', 'jhglkhg@gmail.com', 'kjgjklg', 'gjjkgkj', 0, 'nepal', 'kjgkj', 'gjkg', 'kjgkjg@gmail.com', 'kjgkjg', 'kjgkjg', 0, 'india', 'hgkjg', 50000, 36, 3000, 4320, 3450, 10770, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(52) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Bibek kumar', 'kumar.bee014@gmail.com', 'nice :)'),
(2, 'mahendra', 'mahendra@gmail.com', 'owsm!!!'),
(4, 'Adk', 'adk@xyz.com', 'owsmm!!!'),
(5, 'Bibek kumar', 'kumar.bee014@gmail.com', 'woooo,............'),
(6, 'Bibek kumar', 'kumar.bee014@gmail.com', 'booo'),
(7, 'Bibek kumar', 'kumar.bee014@gmail.com', 'good :)');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL,
  `source` varchar(52) NOT NULL,
  `destination` varchar(52) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `source`, `destination`, `price`) VALUES
(1, 'delhi', 'mumbai', 1500),
(2, 'bangalore', 'kolkata', 2500),
(4, 'hyderabad', 'chennai', 1000),
(5, 'delhi', 'kolkata', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `id` int(11) NOT NULL,
  `tracking_id` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `carriers` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `tracking_id`, `status`, `carriers`, `location`, `date`, `time`) VALUES
(1, 1315530949, 'processing', 'DHL', 'bangalore', '2017-03-03', '10:20:36'),
(2, 1315530949, 'processing', 'FedEx', 'chennai', '2017-03-04', '10:20:57'),
(3, 1315530948, 'processing', 'FedEx', 'bangalore', '2017-03-16', '04:17:21'),
(4, 1128518907, 'processing', 'FedEx', 'bangalore', '2017-03-17', '03:54:08'),
(5, 1135642000, 'processing', 'Blue_dart', 'mumbai', '2017-04-10', '11:57:59'),
(6, 1041515399, 'processing', 'FedEx', 'bangalore', '2017-03-21', '03:13:05'),
(7, 1102478374, 'processing', 'Blue_dart', 'darjeeling', '2017-03-22', '06:32:14'),
(8, 1315530948, 'delievered', 'DHL', 'darjeeling', '2017-03-23', '03:28:54'),
(9, 1315530948, 'delievered', 'FedEx', 'bangalore', '2017-03-23', '03:35:37'),
(10, 1041515399, 'processing', 'DHL', 'bangalore', '2017-03-23', '03:37:12'),
(11, 1135642000, 'on_the_way', 'FedEx', 'bangalore', '2017-03-23', '04:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(52) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `repassword` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `contact`, `country`, `email`, `password`, `repassword`, `active`, `type`) VALUES
(44, 'Bibek', 'kumar', 2147483647, 'Nepal', 'kumar.bee014@gmail.com', 'kumar', 'bibek', 1, 0),
(45, 'niranjan', 'yadav', 2147483647, 'india', 'niranjany74@gmail.com', 'yadavniru', 'yadavniru', 1, 1),
(47, 'dfgdfgd', 'dfgds', 2147483647, 'dfgdg', 'dfgfdgdfgdgdfgd@gmail.com', 'dfgdfgdf', 'dfgdfgdf', 1, 0),
(52, 'deepak', 'deepak', 2147483647, 'India', 'deepak@gmail.com', 'deepak', 'deepak', 1, 1),
(54, 'hjghj', 'jhgjhg', 798789, 'hgkghk', 'grttre@dghfd.dsgdfg', 'ghfjhghj', 'fxgfxgf', 0, 0),
(60, 'Shiv', 'pandey', 1234567899, 'India', 'shib@gmail.com', 'qwerty', 'qwerty', 0, 0),
(61, 'sibu', 'kumar', 2147483647, 'india', 'sibu@gmail.com', 'sibu', 'sibu', 1, 1),
(63, 'dgdf', 'fdgdfg', 34545435, 'fgdfg', 'ncbc@gmail.com', 'asdf', 'asdf', 0, 0),
(64, 'Bibek', 'kumar', 2147483647, 'India', 'kumar.bee017@gmail.com', 'bibek', 'bibek', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
