-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 08:49 AM
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
-- Database: `tes-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_pesanans`
--

CREATE TABLE `t_pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `nm_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_pesanans`
--

INSERT INTO `t_pesanans` (`id`, `no_pesanan`, `tanggal`, `nm_supplier`, `nm_produk`, `total`, `created_at`, `updated_at`) VALUES
(1, '20', '2023-02-23 00:00:00', 'nala', 'macbook', 1500.00, '2023-07-14 22:04:31', '2023-07-14 22:04:31'),
(2, '4', '2023-04-01 00:00:00', 'ucok', 'smartphone', 100.00, '2023-07-14 22:32:20', '2023-07-14 22:32:20'),
(3, '7', '2022-03-10 00:00:00', 'ahmad', 'laptop', 2000.00, '2023-07-14 23:17:39', '2023-07-14 23:17:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_pesanans`
--
ALTER TABLE `t_pesanans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_pesanans`
--
ALTER TABLE `t_pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
