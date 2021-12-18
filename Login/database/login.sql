-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 01:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `first name` varchar(30) NOT NULL,
  `last name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `first name`, `last name`, `email`, `password`, `phone no`) VALUES
(1, 'khushi', 'jain', 'khushi@gmail.com', '$2y$10$vaKcnk/lVn.imoYc2ycK6.0NszWtu/KhDAu1yrKoRCgulasz7txK6', '7894561230'),
(2, 'hari', 'kishan', 'ram@gmail.com', '$2y$10$zShZja8XILSjIp6QOYsaCuF3MIGRvunWy8lWLXvJOZoVSeJMMygxS', '4867344754'),
(3, 'harish', 'kishan', 'harish@gmail.com', '$2y$10$TQHp.hA0fB4aw8cMMvCbn.8Sa5na82X9jIC2GNgaOKDaJBFqIagNy', '1234567890'),
(4, 'harish', 'kishan', 'harish@gmail.com', '$2y$10$.YI40FUB6fD.ZyV9bo./3eGlkHr9Si5u3P1XIPYoB87grQjykIipa', '4867344754'),
(5, 'harish', 'kishan', 'harish@gmail.com', '$2y$10$I.zJDqUTLPzWlQUdtNCqge7aHtkjV4a6PYtdKJCES26MvAhYk3yMy', '4867344754'),
(6, 'harish', 'kishan', 'harish@gmail.com', '$2y$10$2QDDOyAoocsoTWlo4oXlwej7YzMsfCv/jLdZ/PNR6o1bvcyRyK0d2', '1234567890'),
(7, 'shyam', 'laal', 'shyam@gmail.com', '$2y$10$pqFXJg8MPSIqGWVQLzwZleG/OY8RXnGCuhdvewM9PFa3kXgPYt5ga', '7894561230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
