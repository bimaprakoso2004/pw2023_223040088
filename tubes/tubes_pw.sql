-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 01:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `nama_product` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'NIKE CORN', 'Sepatu ini terinspirasi dari jagung.', 'Rp 1.500.000', 'shoes1.png'),
(2, 'NIKE MONO', 'Sepatu ini terinspirasi dari warna monochrome.', 'Rp 2.999.000', 'shoes2.png'),
(3, 'NIKE OCEAN', 'Sepatu ini terinspirasi dari lautan.', 'Rp 2.656.500', 'shoes3.png'),
(4, 'NIKE SKY', 'Sepatu ini terinspirasi dari langit.', 'Rp 1.791.000', 'shoes4.png'),
(5, 'NIKE SHARK', 'Sepatu ini terinspirasi dari hiu.', 'Rp 2.238.000', 'shoes5.png'),
(6, 'NIKE ORANGE', 'Sepatu ini terinspirasi dari buah jeruk.', 'Rp 3.285.500', 'shoes6.png'),
(7, 'NIKE SPRUCE', 'Sepatu ini terinspirasi dari pohon cemara.', 'Rp 1.641.000', 'shoes.png'),
(8, 'NIKE ROBOT', 'Sepatu ini terinspirasi dari robot.', 'Rp 2.350.000', 'shoes7.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'bimaprakoso50@gmail.com', '123456789'),
(4, 'bimahp', '$2y$10$3nspIlAwJtJudAHQ93CYae7GFY4.XZxkTSS/JDkLn4Wb/W0x9h1zW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
