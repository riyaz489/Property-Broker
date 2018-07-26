-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 03:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bedroom` varchar(11) NOT NULL,
  `area` varchar(11) NOT NULL,
  `price` int(20) NOT NULL,
  `picture` varchar(40) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `sphone` varchar(25) NOT NULL,
  `rent` varchar(25) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `location`, `city`, `type`, `bedroom`, `area`, `price`, `picture`, `sname`, `sphone`, `rent`, `name`) VALUES
(1, 'Uttarakhand', 'Haridwar', 'Apartment', 'two', '120', 50000, 'i1.jpg', 'Riyaz', '8765434567', 'sell', '2737 Holt Ave Sanger, 93657'),
(2, 'Uttarakhand', 'dehradun', 'Apartment', 'two', '2000', 50000, 'i2.jpg', 'Riyaz', '8765434567', 'sell', '2737 Holt Ave Sanger, 93657'),
(3, 'Delhi', 'Okhla', 'Apartment', 'one', '120', 50000, 'i3.jpg', 'Riyaz', '8765434567', 'sell', '2737 Holt Ave Sanger, 93657'),
(4, 'Delhi', 'Okhla', 'Apartment', 'two', '120', 50000, 'i2.jpg', 'Riyaz', '12343678654', 'sell', '2737 Holt Ave Sanger, 93657'),
(5, 'Delhi', 'Okhla', 'Apartment', 'two', '120', 50000, 'i2.jpg', 'Riyaz', '12343678654', 'sell', '2737 Holt Ave Sanger, 93657'),
(6, 'Delhi', 'Okhla', 'Apartment', 'two', '120', 50000, 'i2.jpg', 'Riyaz', '12343678654', 'sell', '2737 Holt Ave Sanger, 93657'),
(7, 'Delhi', 'Okhla', 'Apartment', 'two', '120', 50000, 'i2.jpg', 'Riyaz', '12343678654', 'sell', '2737 Holt Ave Sanger, 93657'),
(8, 'Delhi', 'Okhla', 'Apartment', 'two', '120', 50000, 'i2.jpg', 'Riyaz', '12343678654', 'sell', '2737 Holt Ave Sanger, 93657'),
(9, 'Delhi', 'Okhla', 'Apartment', 'two', '120', 50000, 'i2.jpg', 'Riyaz', '12343678654', 'sell', '2737 Holt Ave Sanger, 93657');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
