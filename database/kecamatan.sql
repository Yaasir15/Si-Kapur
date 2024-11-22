-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 11:34 AM
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
-- Database: `sirajasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kode`, `nama`) VALUES
(2495, '11.07.03', ' Batee'),
(2524, '11.07.04', ' Delima'),
(2569, '11.07.05', ' Geumpang'),
(2575, '11.07.06', ' Geulumpang  Tiga'),
(2610, '11.07.07', ' Indra Jaya'),
(2660, '11.07.08', ' Kembang Tanjong'),
(2706, '11.07.09', ' Kota Sigli'),
(2722, '11.07.11', ' Mila'),
(2743, '11.07.12', ' Muara Tiga'),
(2762, '11.07.13', ' Mutiara'),
(2792, '11.07.14', ' Padang Tiji'),
(2857, '11.07.15', ' Peukan Baro'),
(2906, '11.07.16', ' Pidie'),
(2971, '11.07.17', ' Sakti'),
(3021, '11.07.18', ' Simpang Tiga'),
(3074, '11.07.19', ' Tangse'),
(3103, '11.07.21', ' Tiro/Truseb'),
(3123, '11.07.22', ' Keumala'),
(3142, '11.07.24', ' Mutiara Timur'),
(3191, '11.07.25', ' Grong-grong'),
(3207, '11.07.27', ' Mane'),
(3212, '11.07.29', ' Glumpang  Baro'),
(3234, '11.07.31', ' Titeue');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
