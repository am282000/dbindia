-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2020 at 07:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15395996_dbindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `balance` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`, `image`) VALUES
(1, 'Ashish Madaan', 'ashishmadaan@gmail.com', 20467, 'ashishmadaan.jpg'),
(2, 'Riya Chawla', 'riyachawla@gmail.com', 14000, 'riyachawla.jpeg'),
(3, 'Kanchan', 'kanchansharma@gmail.com', 13000, 'kanchansharma.jpeg'),
(4, 'Sahil Roy', 'sahilroy@gmail.com', 10000, 'sahilroy.jpeg'),
(5, 'Rupali', 'rupalidesicrew@gmail.com', 14000, 'rupali.jpeg'),
(6, 'Jatin Chhachhia', 'jatinchhachhia@gmail.com', 4400, 'jatin.jpeg'),
(7, 'Prachi', 'prachiarora@gmail.com', 20000, 'prachi.jpg'),
(8, 'Leeza Galhotra', 'leezagalhotra@gmail.com', 20000, 'leeza.jpg'),
(9, 'Sarthak Gupta', 'sarthakgupta@gmail.com', 20990, 'sarthak.jpeg'),
(10, 'Ankur Bharadwaj', 'ankurbharadwaj@gmail.com', 11000, 'ankur.jpeg'),
(11, 'Praveen', 'praveen@gmail.com', 7600, 'praveen.jpeg'),
(12, 'Ruchi Kumari', 'ruchikumari@gmail.com', 9310, 'ruchi.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transfer_date` text NOT NULL,
  `from_acc` int(11) NOT NULL,
  `from_acc_name` text NOT NULL,
  `to_acc` int(11) NOT NULL,
  `transfer_amt` int(11) NOT NULL,
  `transfer_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`transfer_date`, `from_acc`, `from_acc_name`, `to_acc`, `transfer_amt`, `transfer_msg`) VALUES
('13-11-2020 17:03:29 pm', 1, 'Ashish Madaan', 2, 100, 'aish kr'),
('13-11-2020 17:04:35 pm', 1, 'Ashish Madaan', 2, 100, 'aish kr'),
('13-11-2020 17:48:46 pm', 1, 'Ashish Madaan', 2, 100, 'aish kr'),
('13-11-2020 18:48:32 pm', 1, 'Ashish Madaan', 3, 100, 'aish kr'),
('13-11-2020 18:51:38 pm', 1, 'Ashish Madaan', 3, 100, 'aish kr'),
('13-11-2020 18:52:16 pm', 1, 'Ashish Madaan', 6, 200, ''),
('13-11-2020 18:20:20 pm', 1, 'Ashish Madaan', 3, 100, ''),
('13-11-2020 18:47:16 pm', 1, 'Ashish Madaan', 7, 20, ''),
('13-11-2020 19:06:53 pm', 7, 'Prachi', 1, 12, 'aise hiiiiiiii.......... muahhhhhhhhhh'),
('13-11-2020 19:52:31 pm', 3, 'Kanchan', 1, 200, ''),
('13-11-2020 19:54:23 pm', 9, 'Sarthak Gupta', 4, 6000, 'Brooooo'),
('13-11-2020 20:47:33 pm', 8, 'Leeza Galhotra', 1, 1000, 'Bhalu'),
('14-11-2020 04:59:14 am', 7, 'Prachi', 6, 200, 'Money received'),
('14-11-2020 19:12:09 pm', 1, 'Ashish Madaan', 8, 500, ''),
('14-11-2020 19:26:29 pm', 2, 'Riya Chawla', 5, 12000, ''),
('14-11-2020 19:29:13 pm', 5, 'Rupali', 2, 13000, ''),
('14-11-2020 19:30:35 pm', 6, 'Jatin Chhachhia', 7, 2000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
