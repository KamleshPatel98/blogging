-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2024 at 08:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `long_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `purpose`, `short_description`, `long_description`, `created_at`, `updated_at`) VALUES
(1, '$titl', '$purpos', '$short_descriptio', '$long_descriptionsd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'q', 'q', 'q', 'q', NULL, NULL),
(3, 'q', 'q', 'q', 'q', '0000-00-00 00:00:00', NULL),
(6, 'qas', 'qss', 'qss', 'qss', '0000-00-00 00:00:00', NULL),
(7, 'qas', 'qss', 'qss', 'qss', '0000-00-00 00:00:00', NULL),
(8, 'qdd', 'q', 'q', 'q', '0000-00-00 00:00:00', NULL),
(9, 'qdd', 'qass', 'qss', 'qss', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'ganga', 'Tourist attractions', 'Maintains Healthy Function of the Joints and Muscles*', 'asd', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'customer',
  `status` varchar(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`, `role`, `status`, `created_at`) VALUES
(1, 'Kamlesh Patel', 'developer@gmail.com', '12345678', 'customer', '0', '2008-07-24 14:10:12'),
(2, 'admin', 'admin@gmail.com', '12345678', 'admin', '0', '2008-07-24 14:16:29'),
(3, 'admin', 'developer2@gmail.com', '12345678', 'customer', '0', '2008-07-24 14:19:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
