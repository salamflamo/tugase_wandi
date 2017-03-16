-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2017 at 11:20 AM
-- Server version: 10.1.14-MariaDB-1~xenial
-- PHP Version: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `namak` varchar(255) NOT NULL,
  `emailk` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `namak`, `emailk`, `komentar`, `waktu`) VALUES
(1, 'eko', 'eko@mail.com', 'asjfhkjsdhfkj', '2017-01-27 01:15:26'),
(2, 'hihi', 'hewan@mail.com', 'askhfklsdhfklhdsf', '2017-01-27 01:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `tgllahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `jk`, `tgllahir`, `email`, `pass`) VALUES
(1, 'Najajl', 'L', '1999-01-12', 'njajal@yahoo', '$2y$10$f28fGXweLUy273eNYcWZE.I17f3pMksXRMp8sFvhZlXCVK15CS/3e'),
(2, 'Khu', 'P', '1995-04-10', 'atiek@yahoo.com', '$2y$10$t06gKQXSTEvP.wBoJyv1X./prbpYB6AInqWvpeLGA49eDFSaBd49C'),
(3, 'Salamuddin Pranayan', 'L', '1995-03-12', 'spranayan@gmail.com', '$2y$10$MSFAb8STA7NLnr3jhehuE.7NQqVtYK./wimC3gUWBtb.bZEj658Za'),
(4, 'Admin Ngulineran', 'L', '2000-01-26', 'admin@yahoo.com', '$2y$10$i5Oio/WynhVohCs41yl5IuzzgFb4uwUREujth0JCuztV0.Db8M/ny');

-- --------------------------------------------------------

--
-- Table structure for table `Memesan`
--

CREATE TABLE `Memesan` (
  `id` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Memesan`
--

INSERT INTO `Memesan` (`id`, `id_makanan`, `id_pemesan`, `waktu`) VALUES
(1, 3, 3, '2017-01-26 02:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `makanan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `rmakan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pemesan` int(11) DEFAULT NULL,
  `tgl_pesan` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `makanan`, `gambar`, `rmakan`, `alamat`, `deskripsi`, `tanggal`, `id_pemesan`, `tgl_pesan`) VALUES
(3, 'ala', 'upload/delicious-and-varied-food_23-2147547571.jpg', 'ala', 'kasdkasd', 'kajsklaklsdas', '0000-00-00', NULL, NULL),
(4, 'kajsdknasd', 'upload/delicious-and-varied-food_23-2147547571.jpg', 'kajsdknasd', 'kjhasjfhas', 'klasfkjhdsf', '0000-00-00', 3, '2017-01-27 00:39:58'),
(5, 'blablaaaa', 'upload/gandul.jpg', 'blablaaaa', 'dimana', 'ini gandul', '2017-01-26', NULL, NULL),
(6, 'eko goreng', 'upload/segokuceng.jpg', 'eko goreng', 'villa poncowolo', 'ini makanan paling buruk sedunia', '2017-01-27', 3, '2017-01-27 00:24:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Memesan`
--
ALTER TABLE `Memesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Memesan`
--
ALTER TABLE `Memesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
