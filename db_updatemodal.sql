-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 07:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_updatemodal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_updatemodal`
--

CREATE TABLE `tb_updatemodal` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blength` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `recived` varchar(255) NOT NULL,
  `pending` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_updatemodal`
--

INSERT INTO `tb_updatemodal` (`id`, `name`, `contact`, `email`, `blength`, `qty`, `amount`, `comment`, `date`, `recived`, `pending`) VALUES
(10, 'jay', '0123456789', 'jay@gmail.com', '10feet', '100', '1500', 'ok', '2020-11-07', '', ''),
(11, 'meet', '7896541230', 'meet@gmail.com', '15feet', '50', '4500', 'thank you', '2020-11-07', '', ''),
(12, 'jeni', '4569871230', 'jeni@gmail.com', '5feet', '20', '1200', 'nyc', '2020-11-07', '', ''),
(13, 'demo', '1234569988', 'demo@gmail.com', '12 feet', '10', '2000', 'ok', '2020-11-07', '', ''),
(15, 'mj', '5555555555', 'mj@gmail.com', '12 feet', '15', '5000', 'ok', '0000-00-00', '', ''),
(16, 'test', '1111111111', 'test@gmail.com', '11 feet', '14', '1560', 'ddd', '2020-11-10', '', ''),
(17, 'a', '2222222222', '1@q.in', '12', '12', '21213323', 'ss', '2020-11-14', '', ''),
(18, 'www', '121212121', 'q@w.in', '1-feet', '1', '1111', 'asasasa', '2020-11-14', '', ''),
(19, 'extra', '3333333333', 'w@w.in', '4-feet', '23', '21313', 'dsdsdd', '2020-11-14', '', ''),
(20, 'new', '2222222222', 'new@gmail.com', '14.3-feet', '15', '12000', 'oooo', '2020-11-17', '', ''),
(21, 'jon', '1111111111', 'jon@gmail.com', '14.9-feet', '20', '25000', 'ok', '2020-11-17', '', ''),
(22, 'remo', '6464666666', 'remo@gmail.com', '14.5-feet', '10', '15000', 'thnak you', '2020-11-17', '', ''),
(23, 'dhoni', '7777777777', 'dhoi@gail.com', '11.4-feet', '15', '25000', 'ok', '2020-11-17', '', ''),
(24, 'mahi', '2525252525', 'mahi@gmail.com', '18.5-feet', '23', '20000', 'dd', '0000-00-00', '', ''),
(25, 'ggsg', '3333333333', 'w@gmail.com', '19.5-feet', '2', '1000', 'f', '17-11-2020', '', ''),
(26, 'leo', '0999999999', 'leo@gmail.com', '17.4-feet', '500', '255000', 'f', ' 17-Tuesday-Nov', '', ''),
(27, 'alexa', '1020201515', 'alexa@gmail.com', '15.7-feet', '400', '325000', 'ddd', ' 17-Nov-2020', '', ''),
(28, 'hy', '5505050250', 'hy@hy.in', '17.7-feet', '25', '2500', 'd', ' 17-Nov-2020', '', ''),
(29, 'wwwwdsxzx', '1111111111', 'ddd@ww.in', '16.6-feet', '33', '2332', 'sdsd', ' 17-Nov-2020', '', ''),
(31, 'nobita', '7845357545', 'nob@gmail.com', '16.7-feet', '15', '1604', 'jdf', ' 18-Nov-2020', '', ''),
(32, 'rrrr', '1010101011', 'r@r.in', '16.10-feet', '20', '18407', 'hdffd', ' 18-Nov-2020', '', ''),
(33, 'ho', '0000000000', 'ho@g.in', '9.4-feet', '2', '200', 'cxcxcf', ' 18-Nov-2020', '', ''),
(34, 'unknown', '5475457745', 'unknown@gmail.com', '9.2-feet', '20', '2000', 'ok', ' 18-Nov-2020', '', ''),
(35, 'raja', '2323232323', 'raja@gmail.com', '16.5-feet', '1000', '12000', 'ddd', '18-Nov-2020', '2000', '10000'),
(36, 'pops', '1245697888', 'pops@gmail.com', '17.8-feet', '20', '15000', 'dd', '18-Nov-2020', '3000', '12000'),
(37, 'omakr', '3231557899', 'omkar@gmail.com', '17.5-feet', '1500', '35000', 'dsdshdhd', '18-Nov-2020', '8000', '27000'),
(40, 'other', '4566666666', 'other@gmail.com', '15.7-feet', '25', '100', 'ff', '18-Nov-2020', '80', '20'),
(41, 'ajit', '3202020202', 'ajit@gmail.com', '14.9-feet', '50', '15000', 'k', '19-Nov-2020', '7000', '8000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_updatemodal`
--
ALTER TABLE `tb_updatemodal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_updatemodal`
--
ALTER TABLE `tb_updatemodal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
