-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Apr 2015 pada 02.56
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
  `kd_barang` varchar(12) NOT NULL,
  `kd_kamar` varchar(12) NOT NULL,
  `kd_gedung` varchar(12) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kondisi` tinyint(1) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_booking_gedung`
--

CREATE TABLE IF NOT EXISTS `tb_booking_gedung` (
  `kd_booking_gedung` varchar(12) NOT NULL,
  `kd_data_penyewa` varchar(12) NOT NULL,
  `kd_gedung` varchar(12) NOT NULL,
  `kd_tipe_sewa` varchar(12) NOT NULL,
  `tanggal_booking` datetime NOT NULL,
  `tanggal_sewa` datetime NOT NULL,
  `durasi` int(3) NOT NULL,
  `jumlah_tamu` int(4) NOT NULL,
  `keterangan` text NOT NULL,
  `lunas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_booking_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_booking_kamar` (
  `kd_booking_kamar` varchar(12) NOT NULL,
  `kd_kamar` varchar(12) NOT NULL,
  `kd_data_penginap` varchar(12) NOT NULL,
  `tanggal_booking` datetime NOT NULL,
  `tanggal_check_in` datetime NOT NULL,
  `durasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_check_in`
--

CREATE TABLE IF NOT EXISTS `tb_check_in` (
  `kd_check_in` varchar(12) NOT NULL,
  `kd_kamar` varchar(12) NOT NULL,
  `kd_data_penginap` varchar(12) NOT NULL,
  `tanggal_check_in` date NOT NULL,
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_check_out`
--

CREATE TABLE IF NOT EXISTS `tb_check_out` (
  `kd_check_out` varchar(12) NOT NULL,
  `kd_check_in` varchar(12) NOT NULL,
  `tanggal_check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_penginap`
--

CREATE TABLE IF NOT EXISTS `tb_data_penginap` (
  `kd_data_penginap` varchar(12) NOT NULL,
  `nama_penginap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_penyewa`
--

CREATE TABLE IF NOT EXISTS `tb_data_penyewa` (
  `kd_data_penyewa` varchar(12) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_gaji_pegawai` (
  `kd_gaji_pegawai` varchar(12) NOT NULL,
  `kd_pegawai` varchar(12) NOT NULL,
  `kd_pengeluaran` varchar(12) NOT NULL,
  `total_gaji` decimal(11,0) NOT NULL,
  `tunjangan` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gedung`
--

CREATE TABLE IF NOT EXISTS `tb_gedung` (
  `kd_gedung` varchar(12) NOT NULL,
  `nama_gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `kd_jabatan` varchar(12) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_kamar` (
  `kd_kamar` varchar(12) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `kd_tipe_kamar` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `kd_pegawai` varchar(12) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `kd_jabatan` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `kawin` tinyint(1) NOT NULL,
  `jumlah_anak` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemasukan`
--

CREATE TABLE IF NOT EXISTS `tb_pemasukan` (
  `kd_pemasukan` varchar(12) NOT NULL,
  `asal_pemasukan` varchar(100) NOT NULL,
  `pemasukan` decimal(11,0) NOT NULL,
  `tanggal_pemasukan` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `tb_pengeluaran` (
  `kd_pengeluaran` varchar(12) NOT NULL,
  `asal_pengeluaran` varchar(100) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_tipe_kamar` (
  `kd_tipe_kamar` varchar(12) NOT NULL,
  `nama_tipe_kamar` varchar(50) NOT NULL,
  `harga` decimal(20,0) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_sewa`
--

CREATE TABLE IF NOT EXISTS `tb_tipe_sewa` (
  `kd_tipe_sewa` varchar(12) NOT NULL,
  `nama_tipe_sawa` varchar(12) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
 ADD PRIMARY KEY (`kd_barang`), ADD KEY `kd_kamar` (`kd_kamar`), ADD KEY `kd_gedung` (`kd_gedung`);

--
-- Indexes for table `tb_booking_gedung`
--
ALTER TABLE `tb_booking_gedung`
 ADD PRIMARY KEY (`kd_booking_gedung`,`kd_data_penyewa`,`kd_gedung`,`kd_tipe_sewa`), ADD KEY `kd_data_penyewa` (`kd_data_penyewa`), ADD KEY `kd_gedung` (`kd_gedung`), ADD KEY `kd_tipe_sewa` (`kd_tipe_sewa`);

--
-- Indexes for table `tb_booking_kamar`
--
ALTER TABLE `tb_booking_kamar`
 ADD PRIMARY KEY (`kd_booking_kamar`,`kd_kamar`,`kd_data_penginap`), ADD KEY `kd_kamar` (`kd_kamar`), ADD KEY `kd_data_penginap` (`kd_data_penginap`);

--
-- Indexes for table `tb_check_in`
--
ALTER TABLE `tb_check_in`
 ADD PRIMARY KEY (`kd_check_in`,`kd_kamar`,`kd_data_penginap`), ADD KEY `kd_kamar` (`kd_kamar`), ADD KEY `kd_data_penginap` (`kd_data_penginap`);

--
-- Indexes for table `tb_check_out`
--
ALTER TABLE `tb_check_out`
 ADD PRIMARY KEY (`kd_check_out`,`kd_check_in`), ADD KEY `kd_check_in` (`kd_check_in`);

--
-- Indexes for table `tb_data_penginap`
--
ALTER TABLE `tb_data_penginap`
 ADD PRIMARY KEY (`kd_data_penginap`);

--
-- Indexes for table `tb_data_penyewa`
--
ALTER TABLE `tb_data_penyewa`
 ADD PRIMARY KEY (`kd_data_penyewa`);

--
-- Indexes for table `tb_gaji_pegawai`
--
ALTER TABLE `tb_gaji_pegawai`
 ADD PRIMARY KEY (`kd_gaji_pegawai`,`kd_pegawai`,`kd_pengeluaran`), ADD KEY `kd_pegawai` (`kd_pegawai`), ADD KEY `kd_pengeluaran` (`kd_pengeluaran`);

--
-- Indexes for table `tb_gedung`
--
ALTER TABLE `tb_gedung`
 ADD PRIMARY KEY (`kd_gedung`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
 ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
 ADD PRIMARY KEY (`kd_kamar`,`kd_tipe_kamar`), ADD KEY `kd_tipe_kamar` (`kd_tipe_kamar`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
 ADD PRIMARY KEY (`kd_pegawai`,`kd_jabatan`), ADD KEY `kd_jabatan` (`kd_jabatan`);

--
-- Indexes for table `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
 ADD PRIMARY KEY (`kd_pemasukan`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
 ADD PRIMARY KEY (`kd_pengeluaran`);

--
-- Indexes for table `tb_tipe_kamar`
--
ALTER TABLE `tb_tipe_kamar`
 ADD PRIMARY KEY (`kd_tipe_kamar`);

--
-- Indexes for table `tb_tipe_sewa`
--
ALTER TABLE `tb_tipe_sewa`
 ADD PRIMARY KEY (`kd_tipe_sewa`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`kd_kamar`) REFERENCES `tb_kamar` (`kd_kamar`),
ADD CONSTRAINT `tb_barang_ibfk_2` FOREIGN KEY (`kd_gedung`) REFERENCES `tb_gedung` (`kd_gedung`);

--
-- Ketidakleluasaan untuk tabel `tb_booking_gedung`
--
ALTER TABLE `tb_booking_gedung`
ADD CONSTRAINT `tb_booking_gedung_ibfk_1` FOREIGN KEY (`kd_data_penyewa`) REFERENCES `tb_data_penyewa` (`kd_data_penyewa`),
ADD CONSTRAINT `tb_booking_gedung_ibfk_2` FOREIGN KEY (`kd_gedung`) REFERENCES `tb_gedung` (`kd_gedung`),
ADD CONSTRAINT `tb_booking_gedung_ibfk_3` FOREIGN KEY (`kd_tipe_sewa`) REFERENCES `tb_tipe_sewa` (`kd_tipe_sewa`);

--
-- Ketidakleluasaan untuk tabel `tb_booking_kamar`
--
ALTER TABLE `tb_booking_kamar`
ADD CONSTRAINT `tb_booking_kamar_ibfk_1` FOREIGN KEY (`kd_kamar`) REFERENCES `tb_kamar` (`kd_kamar`),
ADD CONSTRAINT `tb_booking_kamar_ibfk_2` FOREIGN KEY (`kd_data_penginap`) REFERENCES `tb_data_penginap` (`kd_data_penginap`);

--
-- Ketidakleluasaan untuk tabel `tb_check_in`
--
ALTER TABLE `tb_check_in`
ADD CONSTRAINT `tb_check_in_ibfk_1` FOREIGN KEY (`kd_kamar`) REFERENCES `tb_kamar` (`kd_kamar`),
ADD CONSTRAINT `tb_check_in_ibfk_2` FOREIGN KEY (`kd_data_penginap`) REFERENCES `tb_data_penginap` (`kd_data_penginap`);

--
-- Ketidakleluasaan untuk tabel `tb_check_out`
--
ALTER TABLE `tb_check_out`
ADD CONSTRAINT `tb_check_out_ibfk_1` FOREIGN KEY (`kd_check_in`) REFERENCES `tb_check_in` (`kd_check_in`);

--
-- Ketidakleluasaan untuk tabel `tb_gaji_pegawai`
--
ALTER TABLE `tb_gaji_pegawai`
ADD CONSTRAINT `tb_gaji_pegawai_ibfk_1` FOREIGN KEY (`kd_pegawai`) REFERENCES `tb_pegawai` (`kd_pegawai`),
ADD CONSTRAINT `tb_gaji_pegawai_ibfk_2` FOREIGN KEY (`kd_pengeluaran`) REFERENCES `tb_pengeluaran` (`kd_pengeluaran`);

--
-- Ketidakleluasaan untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
ADD CONSTRAINT `tb_kamar_ibfk_1` FOREIGN KEY (`kd_tipe_kamar`) REFERENCES `tb_tipe_kamar` (`kd_tipe_kamar`);

--
-- Ketidakleluasaan untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`kd_jabatan`) REFERENCES `tb_jabatan` (`kd_jabatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
