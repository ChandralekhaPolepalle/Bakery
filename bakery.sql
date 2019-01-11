-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 04:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `bakery`
--

CREATE TABLE `bakery` (
  `Fullname` varchar(30) NOT NULL,
  `Itemname` varchar(30) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Phno` bigint(20) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bakery`
--

INSERT INTO `bakery` (`Fullname`, `Itemname`, `Quantity`, `Phno`, `Email`) VALUES
('Chandralekha', '', 2, 2147483647, 'pchandralekha99@gmail.com'),
('Chandhu', '2', 4, 2147483647, 'pchandralekha99@gmail.com'),
('GOd', 'Caramel Apple', 4, 2147483647, 'pchandralekha99@gmail.com'),
('God', 'Caramel Treat', 2, 2147483647, 'pchandralekha99@gmail.com'),
('Godpls', 'Caramel Treat', 5, 9965237558, 'pchandralekha99@gmail.com'),
('c', 'Haloween Cup cake', 3, 34567890, 'psreelekha96@gmail.com'),
('Srilekha', 'Choco chip Cupcake', 4, 8148242819, 'pchandralekha99@gmail.com'),
('Srilekha', 'Black Forest', 3, 8148242819, 'pchandralekha99@gmail.com'),
('', 'Select what you wish to eat', 0, 0, 'pchandralekha99@gmail.com'),
('dhoni', 'Black Forest', 4, 9965237558, 'pchandralekha99@gmail.com'),
('Srilekha', 'Vanilla Cupcake', 5, 8148242819, 'pchandralekha99@gmail.com'),
('Srilekha', 'Choco chip Cupcake', 4, 8148242819, 'pchandralekha99@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
