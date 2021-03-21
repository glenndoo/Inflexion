-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 05:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inflexion`
--

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_users`
--

CREATE TABLE `inflexion_users` (
  `inflexion_user_id` int(11) NOT NULL,
  `inflexion_username` varchar(115) NOT NULL,
  `inflexion_user_pass` varchar(115) NOT NULL,
  `inflexion_user_type` int(11) NOT NULL,
  `inflexion_user_status` varchar(45) NOT NULL,
  `inflexion_user_token` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_users`
--

INSERT INTO `inflexion_users` (`inflexion_user_id`, `inflexion_username`, `inflexion_user_pass`, `inflexion_user_type`, `inflexion_user_status`, `inflexion_user_token`) VALUES
(27, 'a@a.com', '$2y$10$IH.jPOLxNFG89o0NoIQv2.wRqA4qBfS9gqc9bJd2mUEqYHGgM.meW', 0, '2', 'Validated');

-- --------------------------------------------------------

--
-- Table structure for table `inflexion_user_details`
--

CREATE TABLE `inflexion_user_details` (
  `inflexion_detail_id` int(11) NOT NULL,
  `inflexion_detail_first` varchar(115) NOT NULL,
  `inflexion_detail_middle` varchar(115) NOT NULL,
  `inflexion_detail_last` varchar(115) NOT NULL,
  `inflexion_detail_address` varchar(250) NOT NULL,
  `inflexion_detail_contact` varchar(115) NOT NULL,
  `inflexion_detail_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inflexion_user_details`
--

INSERT INTO `inflexion_user_details` (`inflexion_detail_id`, `inflexion_detail_first`, `inflexion_detail_middle`, `inflexion_detail_last`, `inflexion_detail_address`, `inflexion_detail_contact`, `inflexion_detail_birth`) VALUES
(27, 'Glenn Marlo', 'Javier', 'Dumaguing', '106 Rd 1 Quezon Hill', '09274160451', '2021-03-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inflexion_users`
--
ALTER TABLE `inflexion_users`
  ADD PRIMARY KEY (`inflexion_user_id`);

--
-- Indexes for table `inflexion_user_details`
--
ALTER TABLE `inflexion_user_details`
  ADD PRIMARY KEY (`inflexion_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inflexion_users`
--
ALTER TABLE `inflexion_users`
  MODIFY `inflexion_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
