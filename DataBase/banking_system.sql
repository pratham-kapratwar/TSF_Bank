-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 11:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `c_id` int(3) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_mail` varchar(20) DEFAULT NULL,
  `c_balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_name`, `c_mail`, `c_balance`) VALUES
(101, 'Pratham K.', 'pratham@gmail.com', 6000),
(102, 'Janvi K.', 'janvi@gmail.com', 34000),
(103, 'Sarika K.', 'sarika@gmail.com', 105000),
(104, 'Atharva L.', 'atharva@gmail.com', 110000),
(105, 'Vaishnavi L.', 'vaishnavi@gmail.com', 85000),
(106, 'Abhi k.', 'abhi@gmail.com', 60000),
(107, 'Rutuja K.', 'rutuja@gmail.com', 42000),
(108, 'Abhishek K.', 'abhishek@gmail.com', 4510),
(109, 'Kalyan K.', 'kalyan@gmail.com', 3500),
(110, 'Suvidha K.', 'suvidha@gmail.com', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sr_no` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(10) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sr_no`, `sender`, `receiver`, `balance`, `date_time`) VALUES
(1, 'Pratham K.', 'Janvi K.', 10000, '2021-10-08 22:13:29'),
(2, 'Janvi K.', 'Pratham K.', 5000, '2021-10-08 22:14:03'),
(3, 'Janvi K.', 'Sarika K.', 50000, '2021-10-08 22:14:32'),
(4, 'Pratham K.', 'Atharva L.', 75000, '2021-10-09 14:09:04'),
(5, 'Atharva L.', 'Pratham K.', 10000, '2021-10-09 14:09:31'),
(6, 'Pratham K.', 'Janvi K.', 4000, '2021-10-09 14:15:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_mail` (`c_mail`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sr_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
