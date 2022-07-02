-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 12:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_siperamal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tgl_disposisi` date NOT NULL,
  `isi_disposisi` varchar(250) NOT NULL,
  `sifat` varchar(20) NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `id_suratmasuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`id_disposisi`, `tujuan`, `tgl_disposisi`, `isi_disposisi`, `sifat`, `catatan`, `id_suratmasuk`) VALUES
(6, 'Kepala', '2022-01-06', 'Diterima', 'Segera', 'Terimakasih', 1),
(7, 'Kasubbag Kepeg', '2021-12-31', 'Ditunda', 'Rahasia', 'Infokan, suwun', 2),
(8, 'Kepala AKRB', '2022-01-19', 'Diterima', 'Segera', 'Fasilitasi', 4),
(9, ' Kasubbag AKRB', '2022-02-09', 'Ditunda', 'Segera', ' Segera diproses.', 5),
(10, 'Kepala Bagian', '2022-03-21', 'Ditunda', 'Segera', 'Mohon diperiksa kembali', 6),
(11, 'tujuan2', '1998-01-19', 'isi disposisi', 'sifat', 'catatan', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `id_instansi` int(11) NOT NULL,
  `institusi` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kepala` varchar(250) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_instansi`
--

INSERT INTO `tb_instansi` (`id_instansi`, `institusi`, `nama`, `status`, `alamat`, `kepala`, `nip`, `email`, `notelp`, `logo`) VALUES
(1, 'Sekretariat Daerah Provinsi Jawa Tengah', 'Bagian AKRB - Biro Organisasi ', 'Instansi Pemerintahan', 'Jl. Pahlawan No. 9, Mugassari, Semarang Selatan, Jawa Tengah, Kode Pos 50243', 'AGUSTINUS AGUS SUDARMANTO, S.STP, MM', '19760812 199703 1 003', ' setda@jatengprov.go.id', '0897-4650-548', 'logo_pemprov_jawa_tengah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klasifikasi`
--

CREATE TABLE `tb_klasifikasi` (
  `id_klasifikasi` int(11) NOT NULL,
  `kode_klasifikasi` varchar(20) NOT NULL,
  `judul_klasifikasi` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_klasifikasi`
--

INSERT INTO `tb_klasifikasi` (`id_klasifikasi`, `kode_klasifikasi`, `judul_klasifikasi`, `keterangan`) VALUES
(2, '112', 'Badan Kepegawaian Daerah (BKD)', ''),
(3, '150', 'Sekda Provinsi', ''),
(5, '182', 'Gubernur', ''),
(6, '194', 'Biro Setda Jateng', ''),
(7, '882', 'Permohonan Magang Mahasiswa', ''),
(8, '884', 'Permohonan Magang Siswa SMK', ''),
(11, 'kode', 'judul', 'keterangan'),
(12, '101', 'judul 111', 'keterangan 111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `no_mahasiswa` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(250) NOT NULL,
  `nim_mahasiswa` varchar(50) NOT NULL,
  `hp_mahasiswa` varchar(17) NOT NULL,
  `sekolah_mahasiswa` varchar(250) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `file_mahasiswa` varchar(250) NOT NULL,
  `tglmulai_mahasiswa` date NOT NULL,
  `tglakhir_mahasiswa` date NOT NULL,
  `ket_mahasiswa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `no_mahasiswa`, `nama_mahasiswa`, `nim_mahasiswa`, `hp_mahasiswa`, `sekolah_mahasiswa`, `penempatan`, `file_mahasiswa`, `tglmulai_mahasiswa`, `tglakhir_mahasiswa`, `ket_mahasiswa`) VALUES
(1, '000775/A.30/UDN-02/IX/2021', 'Indah Kurnia Putri', 'A22.2019.02764', '089680881221', 'Universitas Dian Nuswantoro / D3 Informatika', 'Biro Organisasi', 'magang.jpg', '2021-10-01', '2021-11-30', 'Selesai'),
(4, 'A22.19/72.87/UND/XI/2021', 'Andira Alinsyah', '', '089768367220', 'Universitas Diponegoro / S1-Perkonomian Adm', 'Biro Perekonomian', '1089803856_9171_1.jpg', '2021-11-15', '2022-01-28', 'Proses'),
(5, '001015/A.30/UDN-02/XI/2021', 'Luzyana Eka Saputri', '', '087655445543', 'Universitas Dian Nuswantoro / Teknik Informatika- D3 Fakultas Ilmu Komputer', 'Biro Organisasi', '30749_magang_indah.jpeg', '2022-01-10', '2022-03-11', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `no_siswa` varchar(50) NOT NULL,
  `nama_siswa` varchar(250) NOT NULL,
  `nis_siswa` varchar(50) NOT NULL,
  `hp_siswa` varchar(17) NOT NULL,
  `sekolah_siswa` varchar(250) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `file_siswa` varchar(250) NOT NULL,
  `tglmulai_siswa` date NOT NULL,
  `tglakhir_siswa` date NOT NULL,
  `ket_siswa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `no_siswa`, `nama_siswa`, `nis_siswa`, `hp_siswa`, `sekolah_siswa`, `penempatan`, `file_siswa`, `tglmulai_siswa`, `tglakhir_siswa`, `ket_siswa`) VALUES
(1, '321/8390/42/SMK09/XI/2021', 'Liette Aruan Firandya', '17313627300414', '085252458429', 'SMKN 09 Semarang', 'Biro Umum', 'magang.jpg', '2021-11-22', '2022-02-16', 'Proses'),
(2, '213/321/A.SMK17/Smg/XI/2021', 'Arietta Gala Aliyah', '', '08323213932', 'SMK N 17 Semarang', 'Biro Umum', 'magang.jpg', '2021-11-22', '2022-01-28', 'Proses'),
(3, '231/323/SMK8/AK/2021', 'Danira Lidya', '', '08572536325', 'SMK N 8 Semarang', 'Biro Hukum', '1334266548_17889_2.jpg', '2021-12-15', '2022-02-24', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id_suratkeluar` int(11) NOT NULL,
  `no_suratkeluar` varchar(50) NOT NULL,
  `no_agenda` varchar(50) NOT NULL,
  `tujuan_surat` varchar(250) NOT NULL,
  `kode_klasifikasi` varchar(50) NOT NULL,
  `isi_surat` varchar(250) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `file_suratkeluar` varchar(250) NOT NULL,
  `ket_suratkeluar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id_suratkeluar`, `no_suratkeluar`, `no_agenda`, `tujuan_surat`, `kode_klasifikasi`, `isi_surat`, `tgl_surat`, `tgl_keluar`, `file_suratkeluar`, `ket_suratkeluar`) VALUES
(11, '132/Anjab/XI/2021', '0001', 'Biro Organisasi', '132', 'Permohonan Mutasi Pegawai', '2021-10-05', '2021-10-07', '15120_1.jpg', 'Permohonan Mutasi Pegawai'),
(13, '182/Pem/Gub/3123/XI/2021', '0003', 'Gubernur Jawa Tengah', '182', 'Permohonan Pengajuan Demo', '2021-12-14', '2021-12-16', '15120_1.jpg', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id_suratmasuk` int(11) NOT NULL,
  `no_suratmasuk` varchar(50) DEFAULT NULL,
  `no_agenda` varchar(50) DEFAULT NULL,
  `asal_surat` varchar(250) DEFAULT NULL,
  `kota_surat` varchar(50) DEFAULT NULL,
  `jenis_surat` varchar(20) DEFAULT NULL,
  `kode_klasifikasi` varchar(50) DEFAULT NULL,
  `isi_surat` varchar(250) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgl_diterima` date DEFAULT NULL,
  `file_suratmasuk` varchar(250) DEFAULT NULL,
  `ket_suratmasuk` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id_suratmasuk`, `no_suratmasuk`, `no_agenda`, `asal_surat`, `kota_surat`, `jenis_surat`, `kode_klasifikasi`, `isi_surat`, `tgl_surat`, `tgl_diterima`, `file_suratmasuk`, `ket_suratmasuk`) VALUES
(2, '1312/31/PMI/Ind/XII/2021', '0002', 'Palang Merah Indonesiaf', 'Semarang', 'Biasa', '100', 'Donor Darah di PMI', '2021-12-06', '2021-12-07', '1650449772.jpg', 'Infokan, suwun2222'),
(4, '002/SMKYPSW/V/2017', '0003', 'Yayasan Pendidikan Warga Krakatau Steel Sekolah Menengan Kejuruan', 'Yogyakarta', 'Biasa', '100', 'Permohonan Kesempatan Program Praktek Kerja Industri Bagi Guru SMK', '2021-12-01', '2022-01-04', '12531_Contoh-Surat-Permohonan-Magang-dari-Sekolah.jpg', 'Selesai'),
(6, 'Rp2932/318/830', '0005', 'Dinas Kominfo', 'Kab. Surakarta', 'Rahasia', '150', 'Pengelolaan Apikasi Berbasis Website pada Sekretariat Daerah Provinsi Jawa Tengah', '2022-03-17', '2022-03-21', '1650449724.jpeg', NULL),
(7, 'jajajja', 'jajajaj', 'hajajaj', 'jajaja', 'ajaja', '464', '646', '2022-11-01', '2022-11-02', '1650454536.jpeg', NULL),
(8, '93293047892347', '87239472394792374', '928394279472394', '2oeiroweruou', '0982304823048', '02384023840', '0238402834', '2100-12-20', '2100-04-23', '1652604907.jpg', 'sdfsfdsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'UMUM', 'Admin'),
(4, 'userbiro', 'userbiro', 'User', 'User'),
(5, 'xxwg', 'hallo hallo bandung', 'iklkl', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `tb_klasifikasi`
--
ALTER TABLE `tb_klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`);

--
-- Indexes for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_klasifikasi`
--
ALTER TABLE `tb_klasifikasi`
  MODIFY `id_klasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id_suratkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
