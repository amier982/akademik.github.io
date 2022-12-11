-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 07:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `input_table`
--

CREATE TABLE `input_table` (
  `nim` int(255) NOT NULL,
  `nama` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `jns_kel` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `tmpt_lhr` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `tgl_lhr` date NOT NULL,
  `almt` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `hobi` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tlpn` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `input_table`
--

INSERT INTO `input_table` (`nim`, `nama`, `jns_kel`, `tmpt_lhr`, `tgl_lhr`, `almt`, `hobi`, `email`, `tlpn`, `gambar`) VALUES
(236136, 'vbkjbb', 'Laki - Laki', 'jjbjkbk', '1111-11-11', 'yuffutfftuff', 'fufff', 'dandy@gmail.com', '1116161', '14122019190144IMG_3682.JPG'),
(311910024, 'Mukhamad Aldi Isza', 'Laki - Laki', 'Kebumen', '1998-12-11', 'dk.kaliwarak,001/004,ds.kalirejo,kec.kebumen,kab.kebumen,jawa tengah', 'Touring', 'aldyisza87@gmail.com', '08986110191', '15122019083522IMG_3048.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input_table`
--
ALTER TABLE `input_table`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input_table`
--
ALTER TABLE `input_table`
  MODIFY `nim` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311910774;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
