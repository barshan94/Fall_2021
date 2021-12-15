-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`name`, `uname`, `age`, `email`, `pass`, `mobile`) VALUES
('bgb', 'bgb1', '21', 'streamingbd51@gmail.com', '123456', '01624811454'),
('Shubrata Das', 'sd1', '23', 'kehot82375@tigasu.com', '123456', '01236547891'),
('vcvcvc', 'ad', '25', 'streamingbd51@gmail.com', '111111', '23456789123'),
('Amit Kumar Saha', 'amitspc', '26', 'amit@gmail.com', '123456789', '01676923286'),
('Barshan', 'asasasas', '16', 'streamingbd51@gmail.com', '123456789', '123654897456'),
('Shubrata Das', 'Doe1236', '19', 'barshan.ghosh2@gmail.com', '12345678', '111111111111111111'),
('Sumon', 'sumon1', '19', 'streamingbd51@gmail.com', '123456', '01589632147'),
('Piyal Debnath Ranok', 'priyal', '21', 'piyaldeb87@gmail.com', '123456', '01856317883'),
('Piyal Debnath Ranok', 'priyal', '21', 'piyaldeb87@gmail.com', '123456', '01856317883'),
('Susmoy Sarkar', 'susmoy', '21', 'sysmoy47@gmail.com', '123456', '01623840311');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
