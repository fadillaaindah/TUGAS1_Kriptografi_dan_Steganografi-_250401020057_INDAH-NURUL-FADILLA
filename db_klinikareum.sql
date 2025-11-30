-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2025 pada 14.26
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinikareum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `medrec` varchar(4) NOT NULL,
  `nm_pasien` varchar(20) NOT NULL,
  `tmp_lhr` varchar(20) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jnskel` varchar(1) NOT NULL,
  `nik` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `ctext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`medrec`, `nm_pasien`, `tmp_lhr`, `tgl_lhr`, `jnskel`, `nik`, `nohp`, `alamat`, `ctext`) VALUES
('1170', 'RIA AMELIA', 'PEKANBARU', '1988-10-24', 'P', 'bnFDcXFwbktYOXdLZk1ocHFNZU51aHVnZlBaN3VqbmlCUzN0blQ2ZGFIaz06OuYp0vxIjeX+cf613g5GaUU=', '087653498123', 'SIABU', 'nqCqqpnKX9wKfMhpqMeNuhugfPZ7ujniBS3tnT6daHk='),
('4172', 'MUHAMMAD WAHYU', 'JAKARTA', '1985-09-28', 'L', 'a3Y1UGtGZnltaFFjY3dHbUFKc1h0M1ZVb3p4RGtiUEtPQkxOeFJTbi9qRT06OhyEiK4u9m+/7BNqQPpVH2s=', '089912437765', 'NGASO', 'kv5PkFfymhQccwGmAJsXt3VUozxDkbPKOBLNxRSn/jE='),
('4755', 'MIA FEBRIA', 'KOTA LAMA', '1992-05-13', 'P', 'TUEvelA3Y2lSRGUra2JVVWVQbTRrVm1hOXJiZ2RISGRJdExhekZ1UHNCRT06OvKxcsTA5TLLvyP5P5WXNWk=', '081299874561', 'PAGARAN TAPAH', 'MA/zP7ciRDe+kbUUePm4kVma9rbgdHHdItLazFuPsBE='),
('5569', 'SURIADI', 'UJUNG BATU', '1987-10-11', 'L', 'RUhpREU5RTdpQjBCdWZzTnd3cnRZM3p2aUhLUEk1VjB4em5HWDBvR2ZpWT06OsXGn7SWhaznto/eXatorQ8=', '089912437765', 'UJUNG BATU', 'EHiDE9E7iB0BufsNwwrtY3zviHKPI5V0xznGX0oGfiY='),
('5766', 'SUSI SUSANTI', 'UJUNG BATU', '1992-12-01', 'P', 'cmdiV2prd0dUZGlsZnJ0WmF5ZWM3c0J3U0NuaGRrT2gzNGNxWmxZOElVOD06Oh3A/nQo1dIIoiFDVqSzEW8=', '083145778219', 'KUTILANG', 'rgbWjkwGTdilfrtZayec7sBwSCnhdkOh34cqZlY8IU8='),
('8167', 'AINUN NISA', 'DALU-DALU', '1983-07-07', 'P', 'c3BIZkVzNG4rTUl2WWJkODJWOUd4TGxkcjBtVVRydzVnZXRSdlUwR1NYND06OkiP7N3tdGOqKY/dNrBekaM=', '081299874561', 'DALU-DALU', 'spHfEs4n+MIvYbd82V9GxLldr0mUTrw5getRvU0GSX4='),
('8217', 'ARKANA SHAKEEL', 'MEDAN', '1997-03-17', 'L', 'd0xUUjhzQ1ZTN1V0RFF4NVpmaHVOOUF5OGpoUHJwV2JJUUZteURpdHk4WT06OqmqvuUnrc+XKEHgqYnfUbQ=', '087653498123', 'UJUNG BATU', 'wLTR8sCVS7UtDQx5ZfhuN9Ay8jhPrpWbIQFmyDity8Y='),
('8456', 'JALAN BARUS', 'KOTO KAMPAR', '1994-08-25', 'L', 'RWxXWHlzclU0Y3FVbDNRNllYMnVLTWJKbHIxcWdwM01adWFJVjJXNzFqUT06OpFVslFoEQk5uhc5zh79yQg=', '081299874561', 'KAMPAR', 'ElWXysrU4cqUl3Q6YX2uKMbJlr1qgp3MZuaIV2W71jQ='),
('9720', 'GORDON SAPUTRA', 'TAMBUSAI UTARA', '1995-05-05', 'L', 'eFNOOFUxdlhMRWFrdHZnQVJwKzdSWlZ6Y3FxR2ZGQUNJblpsVllFbEhhUT06OtddKrYQKYgznbr1TqEtvNQ=', '089912437765', 'TAPUNG HILIR', 'xSN8U1vXLEaktvgARp+7RZVzcqqGfFACInZlVYElHaQ='),
('9848', 'MEMAYU AYUNDA', 'UJUNG BATU', '1999-06-14', 'P', 'TWNVc0xEK3VJaTcyMzhnRnJ2em5TRldwN1Z6REF2MmRrbWlmM2pLWSsrOD06Op93mCZ/f43bgobTzsq8Y6c=', '083145778219', 'PASAR BARU', 'McUsLD+uIi7238gFrvznSFWp7VzDAv2dkmif3jKY++8=');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`medrec`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
