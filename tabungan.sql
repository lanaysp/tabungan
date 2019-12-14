-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Des 2019 pada 20.14
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `planing`
--

CREATE TABLE `planing` (
  `id` int(11) NOT NULL,
  `tgl_tujuan` varchar(100) NOT NULL,
  `transpot` int(11) NOT NULL,
  `konsumsi` int(11) NOT NULL,
  `penginapan` int(11) NOT NULL,
  `dll` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabung`
--

CREATE TABLE `tabung` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tgl_masuk` varchar(120) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  `input_by` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabung`
--

INSERT INTO `tabung` (`id`, `type`, `nominal`, `tgl_masuk`, `keterangan`, `input_by`) VALUES
(31, 'pengeluaran', 3000, '08-12-2019 17:07', 'beli makan', '0'),
(62, 'tabungan', 60000, '09-12-2019 17:43', '-', '0'),
(63, 'tabungan', 60000, '09-12-2019 17:46', '-', '0'),
(64, 'tabungan', 60000, '09-12-2019 18:12', '-', '0'),
(65, 'tabungan', 9000, '10-12-2019 12:04', 'op', ''),
(66, 'tabungan', 90000, '10-12-2019 12:08', 'oppp', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$2pjbbCAHIOwV.iz/3vQmruCeq4RpkTH.8am84fdxzo8y6b7Hoj5NS', 1, 1, 1575278809),
(3, 'Maulana yusup', 'lanaysps@gmail.com', 'default.jpg', '$2y$10$NNIdnGY.kD3JR6qnv1zpXO4hRRJO6Eczye8ixLe.l7dAJXHj1fF7q', 2, 1, 1575824232);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `token` varchar(120) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(3, 'lanaysps@gmail.com', 'f53aff37a0b3b58c5f7524e11d9a84197d7822646817620e2c60cbac4559523c', 1575824232);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `planing`
--
ALTER TABLE `planing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabung`
--
ALTER TABLE `tabung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `planing`
--
ALTER TABLE `planing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabung`
--
ALTER TABLE `tabung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
