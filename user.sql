-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 07:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_activation`
--

CREATE TABLE `card_activation` (
  `id` int(10) NOT NULL,
  `u_card` varchar(12) NOT NULL,
  `u_f_name` text NOT NULL,
  `u_l_name` text NOT NULL,
  `u_father` text NOT NULL,
  `u_cnic` varchar(13) NOT NULL,
  `u_birthday` text NOT NULL,
  `u_gender` varchar(6) NOT NULL,
  `u_email` text NOT NULL,
  `u_phone` varchar(10) NOT NULL,
  `u_dist` text NOT NULL,
  `u_village` text NOT NULL,
  `u_police` text NOT NULL,
  `u_pincode` text NOT NULL,
  `file` longblob NOT NULL,
  `u_mother` varchar(30) NOT NULL,
  `u_family` text NOT NULL,
  `staff_id` varchar(12) NOT NULL,
  `image` varchar(150) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_activation`
--

INSERT INTO `card_activation` (`id`, `u_card`, `u_f_name`, `u_l_name`, `u_father`, `u_cnic`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_dist`, `u_village`, `u_police`, `u_pincode`, `file`, `u_mother`, `u_family`, `staff_id`, `image`, `uploaded`) VALUES
(106, '02', 'Nabeel', 'Hassan', '', '', '2023-09-14', 'Choose', '', '0311223344', '', '', '', '', '', '', '', '12345', '', '2023-09-14 20:15:37'),
(107, '11', 'Shahzeb', 'Ali', '', '', '2023-09-14', 'Male', '', '0312930213', 'Karachi', 'Hyderabad', '', '', '', '', '', '1212', '', '2023-09-14 20:50:08'),
(108, '223', 'Muneer', 'Raja', '', '452450934522', '2023-09-14', 'Choose', 'Abc123@gmail.com', '0121239123', '', '', '', '', '', '', '', '4567', '', '2023-09-14 20:51:24'),
(109, '09', 'Hussain', 'Ali', '', '452450934522', '2023-09-14', 'Male', 'admin621@gmail.com', '0301234567', 'Hyderabad', 'qasimabad', '', '', '', '', '', '1120', '', '2023-09-14 20:53:58'),
(110, '44', 'Junaid', 'Saleem', '', '452450934511', '2023-09-14', 'Male', 'admin622@gmail.com', '0311223344', 'Isb Pakistan', 'Islamabad', '', '66020', '', '', '', '565', '', '2023-09-14 20:55:53'),
(111, '12', 'Rauf', 'Hassan', '', '', '2023-09-14', 'Male', '', '0212138238', 'Karachi', 'Nazimabad', '', '', '', '', '', '321', '', '2023-09-14 20:57:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_activation`
--
ALTER TABLE `card_activation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_activation`
--
ALTER TABLE `card_activation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
