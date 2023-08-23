-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 04:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmb_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `kd_admin` int(11) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `hak_akses` enum('admin') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`kd_admin`, `nama_admin`, `username`, `password`, `alamat`, `email`, `no_hp`, `hak_akses`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', '08232132112', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alur`
--

CREATE TABLE `tbl_alur` (
  `kd_alur` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_alur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alur`
--

INSERT INTO `tbl_alur` (`kd_alur`, `judul`, `deskripsi`, `gambar_alur`) VALUES
(1, 'Registerasi AKun', 'Sebelum Melakukan Pendaftaran silahkan Lakukan Registerasi Akun Terlebih Dahulu Supaya Memiliki Akun', 'alur-26012022da48f06eb9.png'),
(2, 'Lengkapi Berkas', 'Setelah Melengkapi Berkas Silahkan Untuk Melengkapi Berkas Yang Ada Supaya Dapat Melanjutkan Ke Proses Selanjutnya', 'alur-2601202268e28289f3.png'),
(3, 'Lengkapi berkas', 'Setelah Melengkapi Biodata Silahkan Untuk Melakukan Proses Melengkapi Berkas Yang Ada Untuk Dapat Melanjutkan Proses Pnedaftaran Yang Ada', 'alur-260120220846cd95ad.png'),
(4, 'Daftar Sekolah', 'Setelah Berkas Lengkap Silahkan Melakuka Pendaftaran dan Pilih Jurusan Yang Anda Minati, Terdapat Berbagai Jurusan Yang Dapat Anda Pilih', 'alur-26012022ae6d25274d.png'),
(5, 'Menunggu Hasil', 'Setelah Mendaftar, Tunggu Hasil dan Cek Secara Berkala Pada Menu Daftar Berkas Yang Ada Pada Sub Menu Profil', 'alur-260120227dc482823b.png'),
(6, 'Selesai', 'Semua Proses Wajib Di Ikuti Secara Urut Untuk Dapat Mendaftar Pada Sekolahan Kami, Terimakasih dan Semoga Diterima', 'alur-260120228d907c820f.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `kd_berkas` int(11) NOT NULL,
  `ijasah` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL,
  `berkas_pendukung` varchar(255) DEFAULT NULL,
  `rekap_nilai` varchar(200) NOT NULL,
  `kd_siswa_baru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`kd_berkas`, `ijasah`, `pas_foto`, `berkas_pendukung`, `rekap_nilai`, `kd_siswa_baru`) VALUES
(4, 'berkas_ijasah-26012022e9619e3010.pdf', 'berkas_pas_foto-260120225a03e1b99b.jpg', 'berkas_pendukung-260120227458197b62.pdf', 'rekap_nilai-2601202249dcb73b4a.pdf', 7),
(5, 'berkas_ijasah-2701202283e36bf4d7.pdf', 'berkas_pas_foto-27012022c59c9d17fa.jpeg', 'berkas_pendukung-27012022c05a9dacd0.pdf', 'rekap_nilai-270120220ea7e6285d.pdf', 8),
(6, 'berkas_ijasah-27012022787657b3e2.pdf', 'berkas_pas_foto-2701202298e0fe8ddc.jpg', 'berkas_pendukung-270120223820eb6adb.pdf', 'rekap_nilai-27012022dcfdea88d9.pdf', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas_siswa`
--

CREATE TABLE `tbl_berkas_siswa` (
  `id_berkas_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `jumlah_anak` int(11) DEFAULT NULL,
  `saudara_ke` int(11) DEFAULT NULL,
  `cita_cita` varchar(100) DEFAULT NULL,
  `status_tempat_tinggal` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `nama_jalan` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `transportasi_sekolah` varchar(100) DEFAULT NULL,
  `jarak_tempat_tinggal` varchar(100) DEFAULT NULL,
  `waktu_tempuh` varchar(100) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `yang_biayai_sekolah` varchar(100) DEFAULT NULL,
  `kebutuhan_khusus` varchar(100) DEFAULT NULL,
  `kebutuhan_disabilitas` varchar(100) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tingkat_kelas` varchar(100) DEFAULT NULL,
  `nomer_kartu_keluarga` varchar(100) DEFAULT NULL,
  `nama_kepala_keluarga` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `status_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(100) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(100) DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `pendidikan_terakhir_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_utama_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_rata_rata_ayah` varchar(199) DEFAULT NULL,
  `no_handphone_ayah` varchar(15) DEFAULT NULL,
  `status_tempat_tinggal_ayah` varchar(100) DEFAULT NULL,
  `provinsi_ayah` varchar(100) DEFAULT NULL,
  `kabupaten_ayah` varchar(100) DEFAULT NULL,
  `kecamatan_ayah` varchar(100) DEFAULT NULL,
  `kelurahan_ayah` varchar(100) DEFAULT NULL,
  `nama_jalan_ayah` varchar(100) DEFAULT NULL,
  `kode_pos_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu_kandung` varchar(100) DEFAULT NULL,
  `status_ibu_kandung` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(100) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(100) DEFAULT NULL,
  `tgl_lahir_ibu` varchar(100) DEFAULT NULL,
  `pendidikan_terakhir_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_utama_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_rata_rata_ibu` varchar(100) DEFAULT NULL,
  `no_handphone_ibu` varchar(100) DEFAULT NULL,
  `status_tempat_tinggal_ibu` varchar(100) DEFAULT NULL,
  `provinsi_ibu` varchar(100) DEFAULT NULL,
  `kabupaten_ibu` varchar(100) DEFAULT NULL,
  `kecamatan_ibu` varchar(100) DEFAULT NULL,
  `kelurahan_ibu` varchar(100) DEFAULT NULL,
  `nama_jalan_ibu` varchar(100) DEFAULT NULL,
  `kode_pos_ibu` varchar(100) DEFAULT NULL,
  `surat_keterangan` varchar(100) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `status_siswa` enum('pengajuan pendaftaran','diterima','ditolak') DEFAULT NULL,
  `kelas_siswa` varchar(200) DEFAULT NULL,
  `tgl_submit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(255) DEFAULT NULL,
  `akte` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berkas_siswa`
--

INSERT INTO `tbl_berkas_siswa` (`id_berkas_siswa`, `nama_lengkap`, `nik`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `agama`, `jumlah_anak`, `saudara_ke`, `cita_cita`, `status_tempat_tinggal`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `nama_jalan`, `kode_pos`, `transportasi_sekolah`, `jarak_tempat_tinggal`, `waktu_tempuh`, `no_handphone`, `yang_biayai_sekolah`, `kebutuhan_khusus`, `kebutuhan_disabilitas`, `tgl_masuk`, `tingkat_kelas`, `nomer_kartu_keluarga`, `nama_kepala_keluarga`, `nama_ayah`, `status_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_utama_ayah`, `penghasilan_rata_rata_ayah`, `no_handphone_ayah`, `status_tempat_tinggal_ayah`, `provinsi_ayah`, `kabupaten_ayah`, `kecamatan_ayah`, `kelurahan_ayah`, `nama_jalan_ayah`, `kode_pos_ayah`, `nama_ibu_kandung`, `status_ibu_kandung`, `nik_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_utama_ibu`, `penghasilan_rata_rata_ibu`, `no_handphone_ibu`, `status_tempat_tinggal_ibu`, `provinsi_ibu`, `kabupaten_ibu`, `kecamatan_ibu`, `kelurahan_ibu`, `nama_jalan_ibu`, `kode_pos_ibu`, `surat_keterangan`, `id_pengguna`, `status_siswa`, `kelas_siswa`, `tgl_submit`, `foto`, `akte`, `kk`) VALUES
(2, 'test', '324324234', '2020-12-14', '324234', 'Perempuan', 'Islam', 234234, 2, 'sdfdsf', 'Panti Asuhan', '3ewfsd', 'dsfsdf', 'dsfsd', 'sdfsd', 'ssdfs', '55288', 'dfdsfsd', 'sdfsdf', 'sdfsdf', '081229677253', 'sadsad', 'sadsad', 'sadas', '2022-12-14', 'asdwq', '324234', 'ewfdsdfsd', 'sdfsdf', 'Masih Hidup', '534543', 'ewrew', '2022-12-14', 'cddsfsd', 'dsfds', '0', '081229677253', 'Rumah Saudara', 'sdasdasd', 'Kabupaten Demak,', 'sadsadas', 'asdasdas', 'asdasdas', '59554', 'sdfdsdf', 'Masih Hidup', '32432432', 'ewrwerwe', '2022-12-14', 'eewrewr', 'sdfsdf', 'Rp. 500.000 - 1.000.000', '081229677253', 'Rumah Saudara', 'dsfsdfs', 'Kabupaten Demak,', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', '59554', 'berkas-1412202296f843ff41.png', 11, 'diterima', 'Kelas A', '2022-12-25 16:07:26', '', NULL, NULL),
(3, 'test', '098765', '2020-12-25', 'jakarta', 'Laki-laki', 'Kristen', 1, 2, 'tes', 'Tinggal dengan Saudara', 'tes', 'tes', 'tes', 'tes', 'tes', '32532', 'tes', 'tes', 'tse', '85912628', 'sadsad', 'sadsad', 'sadas', '2022-12-18', 'tes', '23423423423', 'tes', 'tes', 'Sudah Meninggal', '534543', 'ewrew', '2022-12-26', 'tes', 'dsfds', 'Rp. 1.000.000 - 3.000.000', '3245325', 'Rumah Dinas', 'sdasdasd', 'tew', 'ewtw', 'ewtwe', 'ewtwe', '32423', 'test', 'Masih Hidup', '4354353', 'tset', '2022-12-25', 'testse', 'testse', 'Rp. 1.000.000 - 2.000.000', '234234', 'Rumah Orangtua', 'rewr', 'rwer', 'ewrewr', 'sfsd', 'etw', '21432', 'berkas-25122022c83d0ec0ae.docx', 11, 'diterima', 'Kelas A', '2022-12-25 16:07:31', '', NULL, NULL),
(4, 'ade', '23423423', '2018-02-26', 'jakarta', 'Laki-laki', 'Hindu', 3, 3, 'test', 'Tinggal dengan orangtua/wali', 'dsfsf', 'Yogyakarta', 'dukuhseti', 'dsfdsf', 'sdfsd', '55284', 'dfdsfsd', 'sdfsdf', 'sdfsdf', '85912628', 'sadsad', 'sadsad', 'sadas', '2022-12-19', 'asdwq', '345345345', 'ertygrgdf', 'sana', 'Masih Hidup', '534543', 'ewrew', '2022-12-26', 'cddsfsd', 'dsfds', 'Rp. 500.000 - 1.000.000', '85912628', 'Milik Sendiri', 'sdasdasd', 'Yogyakarta', 'sadsadas', 'asdasdas', 'asdasdas', '55284', 'rewewr', 'Masih Hidup', '3424234', 'ewrwerwe', '2022-12-12', 'eewrewr', 'testse', 'Rp. 1.000.000 - 2.000.000', '85912628', 'Milik Sendiri', 'dsfsdfs', 'Yogyakarta', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', '55284', 'berkas-26122022cd4059f028.docx', 11, 'pengajuan pendaftaran', 'Kelas A', '2022-12-26 13:22:44', 'foto-26122022ec7b8afa30.jpg', NULL, NULL),
(5, 'ade2', '324234', '2022-12-26', 'jakarta', 'Laki-laki', 'Islam', 3, 3, 'sdfdsf', 'Tinggal dengan orangtua/wali', 'dsfsf', 'asfa', 'asf', 'asfasf', 'asfsa', '55284', 'asfasf', 'asfas', 'asfas', '85912628', 'sadsad', 'sadsad', 'sadas', '2022-12-26', 'TK A', '3234324', 'ewgtewg', 'sana', 'Masih Hidup', '534543', 'ewrew', '2022-12-26', 'cddsfsd', 'dsfds', 'Rp. 500.000 - 1.000.000', '85912628', 'Milik Sendiri', 'sdasdasd', 'Yogyakarta', 'sadsadas', 'asdasdas', 'asdasdas', '55284', 'erwrewr', 'Masih Hidup', '3424234', 'ewrwerwe', '2022-12-26', 'eewrewr', 'sdfsdf', '&lt; Rp.500.000', '85912628', 'Milik Sendiri', 'dsfsdfs', 'Yogyakarta', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', '55284', 'berkas-261220225a58d6ee6b.docx', 11, 'pengajuan pendaftaran', NULL, '2022-12-26 13:36:45', 'berkas-2612202220b35dd35c.jpg', 'berkas-2612202220b35dd35c.jpg', 'berkas-2612202220b35dd35c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `kd_biodata` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_hp_orangtua` varchar(15) NOT NULL,
  `kd_siswa_baru` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`kd_biodata`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `asal_sekolah`, `nama_ayah`, `nama_ibu`, `no_hp_orangtua`, `kd_siswa_baru`, `jenis_kelamin`) VALUES
(5, 'kamu', 'kamu', '2022-01-26', 'kamu', '081229672133', 'kamu', 'saya', 'saya', '0812296772213', 7, 'Laki-laki'),
(6, 'sini', 'sini', '2022-01-01', 'sini', '85912628', 'sini', 'saya', 'saya', 'hihi', 8, 'Laki-laki'),
(7, 'kamu', 'kamu', '2022-01-27', 'kamu', '85912628', 'kamu', 'kamu', 'kamu', '0342424243', 9, 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `kd_galeri` int(11) NOT NULL,
  `galeri_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`kd_galeri`, `galeri_gambar`) VALUES
(9, 'galeri-1112202297210d7414.JPG'),
(10, 'galeri-11122022bd2a4d97a1.JPG'),
(11, 'galeri-1112202202a3816613.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `kd_informasi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `gambar_informasi` varchar(200) NOT NULL,
  `tgl_informasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`kd_informasi`, `judul`, `deskripsi`, `penulis`, `gambar_informasi`, `tgl_informasi`) VALUES
(2, 'Kunjungan Industri Anak Siswa SMA 1 Pekan Baru', 'Sebanyak 15 orang guru dari SMA NEGERI 1 mengunjungi SMA Negeri 41Pekanbaru, Rombongan ini dipimpin langsung oleh Kepala Sekolah Bapak RAFLES, S.Pd. Kunjungan ini sebagai wadah silaturrahmi dan juga berbagi informasi tentang berbagai program sekolah khususnya program LITERASI sekaligus penanda tangani perjanjian kerjasama antar sekolah tentang pengembangan Perpustakaan \"Lentera Hati\" SMA Negeri 1 Pekanbaru dengan Perpustakaan SMA Negeri 1 Dumai agar bisa saling bekerjasama dalam peningkatan mutu dan kualitas pendidikan dimasing-masing sekolah khususnya dibidang perpustakaan dan literasi sekolah.\r\n\r\nDalam kesempatan tersebut, kedatangan rombongan dari SMA Negeri 1 Dumai tersebut langsung disambut oleh kepala SMA Negeri 4 Pekanbaru bersama dengan guru, tenaga kependidikan dan beberapa orang peserta didik SMA Negeri 4 Pekanbaru dan tetap menerapkan SOP Penanganan Covid-19 dan selalu mematuhi protokol kesehatan\r\n\r\nKepala SMA Negeri 4 Pekanbaru Ibu Hj. YAN KHORIANA, M.Pd menyampaikan apresiasinya terhadap kunjungan SMA NEGERI 1 DUMAI. Beliau berharap kunjungan ini bisa membuat masing-masing sekolah termotivasi untuk meningkatkan prestasinya. “Budaya literasi harus ditanamkan sejak dini kepada peserta didik, karena dengan literasi mereka akan menguasai informasi dan ilmu pengetahuan” terangnya.\r\n\r\nPada kesempatan ini, Kepala SMA NEGERI 4 PEKANBARU juga memberikan pemaparannya terkait profil sekolah secara singkat, dan juga menampilkan berbagai prestasi peserta didik baik dibidang akademik maupun non akademik.(RP)', 'Ratih', 'informasi-270120224ac8de8527.jpg', '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_depan`, `nama_belakang`, `username`, `password`, `email`) VALUES
(7, 'kamu', 'kamu', 'kamu', '48ec8af8df4bf4347d9b1de4ee7bb092', 'kamu@gmail.com'),
(8, 'sini', 'sini', 'sini', '6d85bd5e8694b4c27b8dc8762b5937ee', 'sini@gmail.com'),
(9, 'kamu', 'sini', 'kita', '48ec8af8df4bf4347d9b1de4ee7bb092', 'kamu@gmail.com'),
(10, 'kamu', 'kamu', 'kamu', '48ec8af8df4bf4347d9b1de4ee7bb092', 'kamu@gmail.com'),
(11, 'saya', 'saya', 'saya', '20c1a26a55039b30866c9d0aa51953ca', 'saya@gmail.com'),
(13, 'ade', 'ade', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 'ade@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `kd_pengumuman` int(11) NOT NULL,
  `subyek_pengumuman` text NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `kd_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `kd_pesan` int(11) NOT NULL,
  `subyek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`kd_pesan`, `subyek`, `pesan`, `email`, `nama`) VALUES
(1, 'ban bocor', 'safsd', 'imam12@gmail.com', 'haha'),
(2, 'sd', 'sadsa', 'sdsa@gmail.com', 'sad'),
(3, 'ban bocorfd', 'hfhgjh', 'saya@gmail.com', 'ahha'),
(4, 'dsf', 'dsf', 'saya@gmail.com', 'imam zunaidi'),
(5, 'sad', 'sadsa', 'sad@gmail.com', 'imam zunaidi'),
(6, 'sad', 'sad', 'sad@gmail.com', 'imam zunaidi'),
(7, 'ban bocor', 'saf', 'restikadian00@gmail.com', 'imam zunaidi'),
(8, 'sad', 'dfsdsf', 'sad@gmail.com', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `kd_profile_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `kd_admin` int(11) NOT NULL,
  `gambar_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`kd_profile_sekolah`, `nama_sekolah`, `deskripsi`, `visi`, `misi`, `no_hp`, `facebook`, `email`, `instagram`, `kd_admin`, `gambar_sekolah`, `alamat`) VALUES
(1, 'RA Plus Rabbani', 'SMAN 1 Pekanbaru dapat dikatakan sebagai sekolah tertua yang didirikan di kota bertuah ini. Bahkan dua tahun lebih tua dari provinsi Riau. Pada awalnya, Departemen Pendidikan Pengajaran dan Kebudayaan RI untuk daerah Riau khususnya Pekanbaru pada tanggal 1 Agustus 1955 mendirikan SMA Negeri dengan nama SMA Negeri B-C Pekanbaru SK.Mendikbud RI. Nomor: 4083/B/III tgl.18-08-1955. Sebagai Kepala sekolah ditunjuk JPh Hutauruk yang memimpin sekolah ini sampai 31 Oktober 1957. Karena memasuki usia pensiun, jabatan yang kosong diisi oleh pejabat sementara yang dipegang oleh Sariamin. Sebagai sekolah tertua di Riau, sekolah ini mendapat bantuan gedung permanen dari PT CPI Rumbai yang diserah terimakan kepada Bupati KDH Kampar pada tanggal 8 Oktober 1957. ', 'Membangun Sekolahan yang unggul kaya akan ilmu dan pengetahuan', 'Memberikan Pengetahuan seluas seluasnya kepada seluruh siwa siswa', '0852131231232', 'hihi', 'smapekanbaru@gmail.com', 'hihi', 1, 'profile_sekolah-11122022afb1ac4833.JPG', 'Jl. Sultan Syarif Qasim No.159, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28156');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tbl_alur`
--
ALTER TABLE `tbl_alur`
  ADD PRIMARY KEY (`kd_alur`);

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`kd_berkas`),
  ADD KEY `kd_siswa_baru` (`kd_siswa_baru`);

--
-- Indexes for table `tbl_berkas_siswa`
--
ALTER TABLE `tbl_berkas_siswa`
  ADD PRIMARY KEY (`id_berkas_siswa`);

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`kd_biodata`),
  ADD KEY `kd_siswa_baru` (`kd_siswa_baru`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`kd_galeri`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`kd_informasi`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`kd_pengumuman`),
  ADD KEY `tbl_pengumuman_ibfk_1` (`kd_admin`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`kd_pesan`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`kd_profile_sekolah`),
  ADD KEY `kd_admin` (`kd_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_alur`
--
ALTER TABLE `tbl_alur`
  MODIFY `kd_alur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `kd_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_berkas_siswa`
--
ALTER TABLE `tbl_berkas_siswa`
  MODIFY `id_berkas_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  MODIFY `kd_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `kd_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `kd_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `kd_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `kd_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `kd_profile_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD CONSTRAINT `tbl_berkas_ibfk_1` FOREIGN KEY (`kd_siswa_baru`) REFERENCES `tbl_pengguna` (`id_pengguna`);

--
-- Constraints for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD CONSTRAINT `tbl_biodata_ibfk_1` FOREIGN KEY (`kd_siswa_baru`) REFERENCES `tbl_pengguna` (`id_pengguna`);

--
-- Constraints for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD CONSTRAINT `tbl_pengumuman_ibfk_1` FOREIGN KEY (`kd_admin`) REFERENCES `tbl_admin` (`kd_admin`);

--
-- Constraints for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD CONSTRAINT `tbl_profile_ibfk_1` FOREIGN KEY (`kd_admin`) REFERENCES `tbl_admin` (`kd_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
