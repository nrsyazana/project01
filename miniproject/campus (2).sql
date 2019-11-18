-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 07:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_advertisement`
--

CREATE TABLE `e_advertisement` (
  `id` int(2) NOT NULL,
  `title` text NOT NULL,
  `message` varchar(200) NOT NULL,
  `day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_advertisement`
--

INSERT INTO `e_advertisement` (`id`, `title`, `message`, `day`) VALUES
(0, 'Tutorial Chapter 1', 'eeee', '1day');

-- --------------------------------------------------------

--
-- Table structure for table `e_advertisement1`
--

CREATE TABLE `e_advertisement1` (
  `id` int(2) NOT NULL,
  `title` text NOT NULL,
  `message` varchar(200) NOT NULL,
  `day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_advertisement1`
--

INSERT INTO `e_advertisement1` (`id`, `title`, `message`, `day`) VALUES
(0, 'OTTO Hard Level', 'iiii', '2day');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `id` int(2) NOT NULL,
  `date` date NOT NULL,
  `total_fee` int(10) NOT NULL,
  `expenses` int(10) NOT NULL,
  `cash` int(10) NOT NULL,
  `finance` int(10) NOT NULL,
  `yearly` int(10) NOT NULL,
  `monthly` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`id`, `date`, `total_fee`, `expenses`, `cash`, `finance`, `yearly`, `monthly`) VALUES
(0, '2018-02-10', 500, 1000, 2000, 1500, 540000, 45000),
(1, '2018-02-10', 500, 1000, 2000, 1500, 540000, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` enum('admin','member') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(1, 'zana', '123', 'admin'),
(2, 'zati', '1234', 'member'),
(3, 'lili', '12345', 'member'),
(4, 'kiki', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `year1` int(2) NOT NULL,
  `fee` int(10) NOT NULL,
  `payment` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  `balance` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `matric` varchar(7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`year1`, `fee`, `payment`, `total`, `status`, `balance`, `name`, `matric`, `date`) VALUES
(2, 10, 100, 20, 2, 80, 'SYAZANA', 'CB16110', '2018-02-10'),
(3, 20, 150, 60, 3, 90, 'SYAZANA', 'CB16113', '0000-00-00'),
(2, 10, 100, 20, 2, 80, 'zati', 'CB16118', '2018-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` varchar(10) NOT NULL,
  `Name` text NOT NULL,
  `Phone_Num` int(15) NOT NULL,
  `Gender` text NOT NULL,
  `Email_Address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(10) NOT NULL,
  `password` varchar(6) NOT NULL,
  `confirm` varchar(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `matric` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `faculty` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `confirm`, `name`, `matric`, `address`, `faculty`, `gender`, `phone`, `email`) VALUES
('', '', '', '', '', 'GAMBANG DAMAI RESIDENT', 'FSKKP', '', '', ''),
('lobby', '123', '123', 'nur syazana', 'CB16110', 'GAMBANG DAMAI RESIDENT', 'FSKKP', 'FEMALE', '1112887871', 'zanot97@yahoo.com.my'),
('zanot97', '123', '123', 'SYAZANA', 'CB16113', 'GAMBANG DAMAI RESIDENT', 'FSKKP', 'FEMALE', '1112887871', 'zanot97@yahoo.com.my'),
('lolo', '123', '123', 'lili', 'CB16117', 'GAMBANG DAMAI RESIDENT', 'FSKKP', 'MALE', '0111288787', 'ammarmustaqim24@yaho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_advertisement`
--
ALTER TABLE `e_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_advertisement1`
--
ALTER TABLE `e_advertisement1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`matric`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`matric`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
