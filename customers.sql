-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 10:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `termproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `csurname` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `ssn` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `cname`, `csurname`, `age`, `telephone`, `mail`, `gender`, `ssn`) VALUES
(4, 'sadi', 'gulbey', 24, '544 544 1333', 'sadi@gmail.com', 'Male', '12353243567'),
(5, 'atakan', 'yilmaz', 22, '532 509 0276', 'atakan@gmail.com', 'Male', '12398490234'),
(6, 'serra', 'akar', 23, '503 323 3493', 'serra@gmail.com', 'Female', '12301293'),
(7, 'ali', 'parlakci', 23, '342 234 2422', 'ali@test.com', 'Male', '1234435321'),
(8, 'rana', 'islek', 18, '567 432 4563', 'rana@mail.co', 'Female', '1234567898'),
(9, 'irem', 'erdogan', 32, '543 334 7654', 'irem@mail.co', 'Female', '12345678'),
(10, 'akif atakan', 'yilmaz', 12, '532 123 4567', 'atakan@test.co', 'Male', '90234829034');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `ssn` (`ssn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
