-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 07:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `city`) VALUES
(10, 'Cruz Gutierrez', 'byzubow@mailinator.com', '+1 (777) 178-3635', 'Aliquip rem officia'),
(11, 'Xantha Fuller', 'bozepejo@mailinator.com', '+1 (867) 532-9026', 'Non dolore esse deb'),
(12, 'Cruz Nguyen', 'ketaju@mailinator.com', '+1 (984) 117-6701', 'Hic totam nostrud ex'),
(13, 'Quemby Reese', 'rizocygu@mailinator.com', '+1 (843) 594-1528', 'Inventore cupidatat'),
(14, 'Sloane Kent', 'nodih@mailinator.com', '+1 (191) 267-8395', 'Quam ad est non iust'),
(15, 'Reuben Gates', 'jicadi@mailinator.com', '+1 (554) 743-6319', 'Id autem tempor hic'),
(16, 'Hall Brennan', 'vaqe@mailinator.com', '+1 (522) 614-6577', 'Nulla nulla quia in'),
(17, 'Hollee Benton', 'comywuxefo@mailinator.com', '+1 (576) 713-4987', 'Quo quis voluptas ma'),
(18, 'Hedwig Trujillo', 'qedinyxyt@mailinator.com', '+1 (781) 229-9161', 'Aut consectetur ali'),
(19, 'Kenyon Fitzpatrick', 'nujep@mailinator.com', '+1 (874) 855-2742', 'Tempora doloremque c'),
(20, 'Edward Patrick', 'towogym@mailinator.com', '+1 (273) 804-1843', 'Praesentium nisi par'),
(21, 'Grady West', 'befolibop@mailinator.com', '+1 (664) 119-3059', 'Et aut enim unde ea'),
(22, 'Irene Ford', 'ruvyboxak@mailinator.com', '+1 (562) 236-8885', 'A nulla tempore vol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
