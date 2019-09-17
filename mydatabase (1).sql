-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 12:37 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `address`) VALUES
(1, 'admin@mobiloitte.com', 'Mobiloitte1', '2NFsrhmZXUuym8UG5HtqdJF49yVCmczcxAP'),
(2, 'cpp-laxmikumari@mobiloitte.com', 'abc', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(40) NOT NULL,
  `DomainName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `DomainName`) VALUES
(1, 'c++'),
(2, 'golang'),
(3, 'Blockchain'),
(4, 'r&d'),
(5, 'node'),
(6, '21343'),
(7, 'w'),
(8, 'other'),
(9, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `mydata`
--

CREATE TABLE `mydata` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `domain` varchar(30) DEFAULT NULL,
  `empid` int(40) DEFAULT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mydata`
--

INSERT INTO `mydata` (`id`, `email`, `password`, `address`, `domain`, `empid`, `username`) VALUES
(38, 'cpp-abhishekkumar@mobiloitte.com', 'Mobiloitte1', '2NC6fikZT3vtyQmNmHynuG13gbP6dLXe5AY', 'golang', 352, 'abhishek'),
(41, 'cpp-neeteshgangwar@mobiloitte.com', 'Mobiloitte1', '2Mzp7z7bt1bSms5ziy5r353YQhwAh9yM89w', 'c++', 354, 'neetesh'),
(53, 'cpp-sundaram@mobiloitte.com', 'Mobiloitte1', '2MwYx8HrCDJYhD1pADfW4QRsqJsuBYzDSjk', 'c++', 11357, 'sundaram'),
(55, 'ankit.aggarwal@mobiloitte.com', 'Mobiloitte1', '2NDGU2TJVhuJE1yXrwNjZTHpDadDwnocqxr', 'c++', 11, 'ankitaggarwal'),
(62, 'musicsavesme7@gmail.com', 'Sankalp@123', '2N2zn9PzkVci76Tkwc4N1mppczUhK8Yec9G', 'other', 23, 'sankalpkhandelwal'),
(63, 'cpp-laxmikumari@mobiloitte.com', 'a44c632e60ab46152bdf', '2Mx6HLPqHfZraybHUWUzE6tPEXaBarCcWa8', 'c++', 1234, 'laxmi'),
(64, 'a@g', 'ad', '2N8henhN3saKmXbfdv4nzizpmRRrrfhnA4Q', 'c++', 5, 'a'),
(65, 'an@a', 'vcd', '2MvvQt17KnuMQeigPXWriQh9yaNbZHhiePH', 'c++', 7, 'a'),
(66, '7@12', 'asd', '2Mt1PezdyNkirZvtKDnGaAoAzqo8fpyGCcX', 'c++', 7, 'saa'),
(67, 'asr@ab', 'Mobiloitte1', '2NCQgJZp9ab6Vak9WiBpScvuJ4W6YhuCszU', 'c++', 9, 'asr'),
(68, 'abc@gmail.com', 'abc@abc@abc@', '2Mvdn5ug2iscDLPZTst862RSBPDAs3cB7PZ', 'c++', 0, 'dft');

-- --------------------------------------------------------

--
-- Table structure for table `resetpass`
--

CREATE TABLE `resetpass` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetpass`
--

INSERT INTO `resetpass` (`id`, `email`, `token`) VALUES
(1, 'cpp-laxmikumari@mobiloitte.com', '2147483647'),
(2, 'cpp-laxmikumari@mobiloitte.com', '53'),
(3, 'cpp-laxmikumari@mobiloitte.com', '1'),
(4, 'cpp-laxmikumari@mobiloitte.com', '75255'),
(5, 'cpp-laxmikumari@mobiloitte.com', '488'),
(6, 'cpp-laxmikumari@mobiloitte.com', '372'),
(7, 'cpp-laxmikumari@mobiloitte.com', '0'),
(8, 'cpp-laxmikumari@mobiloitte.com', '3'),
(10, 'cpp-laxmikumari@mobiloitte.com', '70000000');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(30) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `amount` float NOT NULL,
  `receiver` varchar(40) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender`, `amount`, `receiver`, `time`) VALUES
(1, 'ankit', 1, 'laxmi', '2019-06-24 07:05:45'),
(2, 'ankit', 45, 'laxmi', '2019-06-24 11:32:20'),
(3, 'ankit.aggarwal@mobiloitte.com', 23, 'laxmi', '2019-06-24 12:02:21'),
(4, 'ankit.aggarwal@mobiloitte.com', 45, 'laxmi', '2019-06-25 05:28:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mydata`
--
ALTER TABLE `mydata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `resetpass`
--
ALTER TABLE `resetpass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mydata`
--
ALTER TABLE `mydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `resetpass`
--
ALTER TABLE `resetpass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
