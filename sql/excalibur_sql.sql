-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2021 at 11:47 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excalibur_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `excalibur_sql`
--

CREATE TABLE `excalibur_sql` (
  `id` int(11) NOT NULL,
  `idDatabase` text,
  `kunci` text,
  `perintah` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `excalibur_sql`
--

INSERT INTO `excalibur_sql` (`id`, `idDatabase`, `kunci`, `perintah`) VALUES
(22, 'ca04a5e26b59240a3a022aa16ad3c0d0', 'semua-data', 'select * from database_ca04a5e26b59240a3a022aa16ad3c0d0 order by id desc limit 1'),
(23, 'ca04a5e26b59240a3a022aa16ad3c0d0', 'tambah', 'insert into database_ca04a5e26b59240a3a022aa16ad3c0d0 (mau, makan) values (\'[pertama]\', \'[kedua]\')'),
(24, 'ca04a5e26b59240a3a022aa16ad3c0d0', 'hapus-semua', 'delete from database_ca04a5e26b59240a3a022aa16ad3c0d0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `excalibur_sql`
--
ALTER TABLE `excalibur_sql`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `excalibur_sql`
--
ALTER TABLE `excalibur_sql`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
