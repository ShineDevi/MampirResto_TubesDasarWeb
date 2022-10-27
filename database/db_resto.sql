-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 09.23
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_resto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `namamenu` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`menuid`, `namamenu`, `harga`, `foto`, `keterangan`) VALUES
(1, 'Nasi Goreng', 15000, '26122021111121Untitled Diagram.drawio (1).png', 'Ready'),
(2, 'Mie Goreng', 15000, '', 'Ready'),
(3, 'Ayam Panggang', 18000, '', 'Ready'),
(4, 'Bebek Goreng', 20000, '', 'Ready'),
(5, 'Ayam Kremes', 15000, '', 'Ready'),
(6, 'Nasi', 5000, '', 'Ready'),
(7, 'Ayam Geprek', 12000, '', 'Ready'),
(8, 'Lemon Tea', 8000, '', 'Ready'),
(9, 'Es Teh', 5000, '', 'Ready'),
(10, 'Kopi', 5000, '', 'Ready'),
(11, 'Matcha', 10000, '', 'Ready'),
(12, 'Thai Tea', 9000, '', 'Ready'),
(13, 'Batagor', 10000, '', 'Ready'),
(14, 'Cireng', 7000, '', 'Kosong'),
(15, 'Kentang Goreng', 7000, '', 'Ready'),
(16, 'Udang Rambutan', 10000, '', 'Ready');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `orderid` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`orderid`, `menuid`, `userid`, `tanggal`, `jumlah`, `total`) VALUES
(4, 1, 1, '2021-12-29', 3, 45000),
(8, 8, 1, '2021-12-29', 4, 32000),
(9, 3, 3, '2021-12-29', 4, 72000),
(10, 4, 1, '2021-12-29', 2, 40000),
(11, 13, 1, '2021-12-29', 4, 40000),
(13, 7, 3, '2021-12-29', 2, 24000),
(14, 16, 1, '2021-12-29', 2, 20000),
(15, 15, 1, '2021-12-29', 3, 21000),
(16, 2, 1, '2021-12-30', 3, 45000),
(17, 12, 1, '2021-12-28', 1, 9000),
(18, 13, 1, '2021-12-27', 2, 20000),
(19, 10, 1, '2021-12-26', 2, 10000),
(20, 8, 1, '2021-12-21', 4, 32000),
(21, 9, 1, '2021-12-29', 10, 50000),
(22, 15, 1, '2021-12-28', 3, 21000),
(23, 15, 1, '2021-12-24', 6, 42000),
(24, 13, 1, '2021-12-23', 8, 80000),
(25, 11, 1, '2021-12-29', 12, 120000),
(26, 7, 21, '2021-12-30', 3, 36000),
(28, 1, 23, '2021-12-29', 1, 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userid`, `nama`, `username`, `psw`, `level`, `telepon`) VALUES
(1, 'Putri Anantha', 'putri', '202cb962ac59075b964b07152d234b70', 2, '082443827162'),
(2, 'Alina Shine', 'shine', 'caf1a3dfb505ffed0d024130f58c5cfa', 2, '083772837283'),
(3, 'Devina Putri', 'devi', '250cf8b51c773f3f8dc8b4be867a9a02', 2, '082362738273'),
(4, 'Alviano Defa', 'vian', '68053af2923e00204c3ca7c6a3150cf7', 2, '083728392836'),
(5, 'Anantra Ayu', 'ana', '38b3eff8baf56627478ec76a704e9b52', 2, '082372837382'),
(6, 'Roni Agustaf', 'roni', '7f6ffaa6bb0b408017b62254211691b5', 2, '08237364536'),
(7, 'Aisyah Putri', 'aisyah', '73278a4a86960eeb576a8fd4c9ec6997', 2, '082372837286'),
(8, 'Mila Yunita', 'mila', '5fd0b37cd7dbbb00f97ba6ce92bf5add', 2, '082337462745'),
(9, 'Yuniga Agthea', 'yuni', '2b44928ae11fb9384c4cf38708677c48', 2, '082363728273'),
(10, 'Anita Putri', 'nita', 'c45147dee729311ef5b5c3003946c48f', 2, '082372636263'),
(11, 'Yuni Yura', 'yuni', '6b9d6ba55e4f27b1eb5ab5ca05d160a4', 2, '082373829383'),
(12, 'UserTesting', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1, '082382739287'),
(13, 'Ratih Kurnia Sari', 'ratih', '73278a4a86960eeb576a8fd4c9ec6997', 0, '082331552665'),
(14, 'Ririn Qofifah', 'ririn', '698d51a19d8a121ce581499d7b701668', 0, '082332442331'),
(15, 'Tria Patricia ', 'tria', '7f6ffaa6bb0b408017b62254211691b5', 0, '082334665444'),
(16, 'Tria Olivia', 'Via', '5fd0b37cd7dbbb00f97ba6ce92bf5add', 0, '082334665443'),
(18, 'Rina Cantika', 'rina', '2b44928ae11fb9384c4cf38708677c48', 0, '082334665448'),
(20, 'Carissa', 'rissa', 'eb160de1de89d9058fcb0b968dbbbd68', 2, '082332442333'),
(21, 'Shafiranti', 'fira', 'd57d8d5422365e4295153b987f907c5e', 2, '082332442339'),
(22, 'shinee', 'ratih', 'a5bd72a3d2c4d1686415f93a46fc7a0a', 2, '082332442331'),
(23, 'shine', 'shineee', '92daa86ad43a42f28f4bf58e94667c95', 2, '0823-3155-2132'),
(24, 'shine', 'shineeee', 'df6d2338b2b8fce1ec2f6dda0a630eb0', 2, '0823-3155-2132');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`orderid`,`menuid`),
  ADD KEY `menuid` (`menuid`),
  ADD KEY `userid` (`userid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`menuid`) REFERENCES `menu` (`menuid`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
