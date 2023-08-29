-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 04:54 AM
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
-- Database: `db_recruitment`
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
(1, 'Registerasi hfgh', 'Sebelum Melakukan Pendaftaran silahkan Lakukan Registerasi Akun Terlebih Dahulu Supaya Memiliki Akun', 'alur-26012022da48f06eb9.png'),
(2, 'Lengkapi Berkas', 'Setelah Melengkapi Berkas Silahkan Untuk Melengkapi Berkas Yang Ada Supaya Dapat Melanjutkan Ke Proses Selanjutnya', 'alur-2601202268e28289f3.png'),
(3, 'Lengkapi berkas', 'Setelah Melengkapi Biodata Silahkan Untuk Melakukan Proses Melengkapi Berkas Yang Ada Untuk Dapat Melanjutkan Proses Pnedaftaran Yang Ada', 'alur-260120220846cd95ad.png'),
(4, 'Daftar Sekolah', 'Setelah Berkas Lengkap Silahkan Melakuka Pendaftaran dan Pilih Jurusan Yang Anda Minati, Terdapat Berbagai Jurusan Yang Dapat Anda Pilih', 'alur-26012022ae6d25274d.png'),
(5, 'Menunggu Hasil', 'Setelah Mendaftar, Tunggu Hasil dan Cek Secara Berkala Pada Menu Daftar Berkas Yang Ada Pada Sub Menu Profil', 'alur-260120227dc482823b.png'),
(6, 'Selesai', 'Semua Proses Wajib Di Ikuti Secara Urut Untuk Dapat Mendaftar Pada Sekolahan Kami, Terimakasih dan Semoga Diterima', 'alur-260120228d907c820f.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applay_lowongan`
--

CREATE TABLE `tbl_applay_lowongan` (
  `id_applay_lowongan` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `tanggal_pendaftar` date NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `status_lamaran` enum('applay','seleksi administrasi','wawancara','test tulis','test fisik','diterima','tidak lolos') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_applay_lowongan`
--

INSERT INTO `tbl_applay_lowongan` (`id_applay_lowongan`, `id_lowongan`, `tanggal_pendaftar`, `id_pelamar`, `status_lamaran`) VALUES
(20, 1, '2023-08-14', 1, 'tidak lolos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `nama_berita` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `nama_berita`, `gambar`, `deskripsi`, `id_users`, `id_kategori`) VALUES
(1, 'dfdsfsdfsd fsdsdff', 'berita-29012023be7df3c79c.jpg', 'dsfdsdsfds sdfdsf', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id_berkas` int(11) NOT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `motivasi_melamar` varchar(255) DEFAULT NULL,
  `ijasah` varchar(255) DEFAULT NULL,
  `id_pelamar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_applay_lamaran`
--

CREATE TABLE `tbl_detail_applay_lamaran` (
  `id_detail_applay_lamaran` int(11) NOT NULL,
  `detail_status_lamaran` enum('lolos','tidak lolos') DEFAULT NULL,
  `proses` varchar(255) DEFAULT NULL,
  `tanggal_approve` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_applay_lowongan` int(11) DEFAULT NULL,
  `keterangan_tambahan` varchar(255) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_applay_lamaran`
--

INSERT INTO `tbl_detail_applay_lamaran` (`id_detail_applay_lamaran`, `detail_status_lamaran`, `proses`, `tanggal_approve`, `id_applay_lowongan`, `keterangan_tambahan`, `nilai`) VALUES
(58, 'lolos', 'seleksi administrasi', '2023-08-14 16:20:06', 20, 'trt', 80),
(59, 'lolos', 'test tulis', '2023-08-14 16:21:15', 20, 'jhgj', 5),
(60, 'lolos', 'test fisik', '2023-08-14 16:21:29', 20, 'resr', 80),
(61, 'lolos', 'wawancara', '2023-08-14 16:21:41', 20, 'resr', 80),
(62, 'lolos', 'semua tahap', '2023-08-14 16:22:24', 20, 'esres', 90);

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
(13, 'galeri-280820232e76b79591.jpg'),
(14, 'galeri-2808202360db6d8073.jpg'),
(15, 'galeri-28082023ea7b08b88d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_test`
--

CREATE TABLE `tbl_hasil_test` (
  `id_hasil_test` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_applay_lowongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hasil_test`
--

INSERT INTO `tbl_hasil_test` (`id_hasil_test`, `id_pertanyaan`, `id_jawaban`, `id_pelamar`, `id_applay_lowongan`) VALUES
(9, 1, 10, 1, 16),
(10, 3, 14, 1, 16),
(11, 4, 7, 1, 16),
(12, 1, 10, 2, 18),
(13, 3, 13, 2, 18),
(14, 4, 7, 2, 18),
(15, 1, 10, 3, 19),
(16, 3, 14, 3, 19),
(17, 4, 8, 3, 19),
(18, 1, 10, 1, 20),
(19, 3, 14, 1, 20),
(20, 4, 8, 1, 20);

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
(2, 'Kunjungan Industri Anak Siswa SMA 1 Pekan Baru', 'Sebanyak 15 orang guru dari SMA NEGERI 1 mengunjungi SMA Negeri 41Pekanbaru, Rombongan ini dipimpin langsung oleh Kepala Sekolah Bapak RAFLES, S.Pd. Kunjungan ini sebagai wadah silaturrahmi dan juga berbagi informasi tentang berbagai program sekolah khususnya program LITERASI sekaligus penanda tangani perjanjian kerjasama antar sekolah tentang pengembangan Perpustakaan \"Lentera Hati\" SMA Negeri 1 Pekanbaru dengan Perpustakaan SMA Negeri 1 Dumai agar bisa saling bekerjasama dalam peningkatan mutu dan kualitas pendidikan dimasing-masing sekolah khususnya dibidang perpustakaan dan literasi sekolah.\r\n\r\nDalam kesempatan tersebut, kedatangan rombongan dari SMA Negeri 1 Dumai tersebut langsung disambut oleh kepala SMA Negeri 4 Pekanbaru bersama dengan guru, tenaga kependidikan dan beberapa orang peserta didik SMA Negeri 4 Pekanbaru dan tetap menerapkan SOP Penanganan Covid-19 dan selalu mematuhi protokol kesehatan\r\n\r\nKepala SMA Negeri 4 Pekanbaru Ibu Hj. YAN KHORIANA, M.Pd menyampaikan apresiasinya terhadap kunjungan SMA NEGERI 1 DUMAI. Beliau berharap kunjungan ini bisa membuat masing-masing sekolah termotivasi untuk meningkatkan prestasinya. “Budaya literasi harus ditanamkan sejak dini kepada peserta didik, karena dengan literasi mereka akan menguasai informasi dan ilmu pengetahuan” terangnya.\r\n\r\nPada kesempatan ini, Kepala SMA NEGERI 4 PEKANBARU juga memberikan pemaparannya terkait profil sekolah secara singkat, dan juga menampilkan berbagai prestasi peserta didik baik dibidang akademik maupun non akademik.(RP)', 'Ratih', 'informasi-270120224ac8de8527.jpg', '2022-01-27'),
(3, 'dfgfdg', '<p>dfgdfg</p>', 'dfgdfg', 'informasi-19082023c58c9ce64c.jpg', '2023-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `status_jawaban` enum('true','false') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`id_jawaban`, `id_pertanyaan`, `jawaban`, `status_jawaban`) VALUES
(7, 4, 'Iya', 'true'),
(8, 4, 'Engga', 'false'),
(9, 4, 'Sangat Tidak', 'false'),
(10, 1, 'Iya', 'true'),
(11, 1, 'tidak', 'false'),
(12, 1, 'sangat tidak', 'false'),
(13, 3, 'Iya', 'true'),
(14, 3, 'Tidak', 'false'),
(15, 3, 'Sangat tidak', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'kategori'),
(3, 'dasfsaf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_pekerjaan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `penempatan` varchar(200) DEFAULT NULL,
  `gaji` varchar(200) DEFAULT NULL,
  `requirment` text DEFAULT NULL,
  `batas_pendaftaran` date DEFAULT NULL,
  `jumlah_kebutuhan` varchar(255) DEFAULT NULL,
  `jenis_pekerjaan` varchar(255) DEFAULT NULL,
  `gambar_lowongan` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`id_lowongan`, `id_kategori`, `nama_pekerjaan`, `deskripsi`, `penempatan`, `gaji`, `requirment`, `batas_pendaftaran`, `jumlah_kebutuhan`, `jenis_pekerjaan`, `gambar_lowongan`, `tanggal_dibuat`) VALUES
(1, 2, 'programmer ', 'dsafadsfaf', 'test test', '1000 -2000', '<p>dfadsfadf adsfadsfafa dsfad sf</p>', '2023-08-23', 'Staff', 'Part Time', 'lowongan-300120231bf1a555e8.jpg', '2023-08-23 16:50:06'),
(2, 3, 'fdsfs', 'dsafasf', 'adfa', '1000 -2000', '<p>adsfasfadsfadsf</p>', '2023-08-23', 'Staff', 'Part Time', 'lowongan-3001202327cdc0400d.jpg', '2023-08-23 16:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelamar`
--

CREATE TABLE `tbl_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `nama_pelamar` varchar(200) DEFAULT NULL,
  `username_pelamar` varchar(200) DEFAULT NULL,
  `password_pelamar` varchar(255) DEFAULT NULL,
  `no_telp_pelamar` varchar(15) DEFAULT NULL,
  `alamat_pelamar` varchar(255) DEFAULT NULL,
  `status_pelamar` enum('aktiv','non-aktiv') NOT NULL,
  `email_pelamar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`id_pelamar`, `nama_pelamar`, `username_pelamar`, `password_pelamar`, `no_telp_pelamar`, `alamat_pelamar`, `status_pelamar`, `email_pelamar`) VALUES
(1, 'saya', 'saya', '20c1a26a55039b30866c9d0aa51953ca', '3244234324', 'saya update alamar', 'aktiv', '201653001@std.umk.ac.id'),
(2, 'pelamar', 'pelamar', 'd106cd9e18dab5c9bce2b1b7c9a17d2b', '8778678', 'pelamar', 'aktiv', 'pelamar@gmail.com'),
(3, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', '84935734', 'dfsaf', 'aktiv', 'test@gmail.com');

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
(13, 'ade', 'ade', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 'ade@gmail.com'),
(14, 'saya', 'saya', 'saya', '20c1a26a55039b30866c9d0aa51953ca', ''),
(15, 'saya', 'saya', 'saya', '20c1a26a55039b30866c9d0aa51953ca', '');

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
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `nama_pertanyaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id_pertanyaan`, `nama_pertanyaan`) VALUES
(1, 'apakah anda sehat ?'),
(3, 'Apakah anda waras ?'),
(4, 'Anda Pusing ?');

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
(8, 'sad', 'dfsdsf', 'sad@gmail.com', 'asad'),
(9, '', '', '', '');

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
  `id_users` int(11) NOT NULL,
  `gambar_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`kd_profile_sekolah`, `nama_sekolah`, `deskripsi`, `visi`, `misi`, `no_hp`, `facebook`, `email`, `instagram`, `id_users`, `gambar_sekolah`, `alamat`) VALUES
(1, 'SMK AL MUHTADIN', 'SMK Al-Muhtadin Bekasi adalah sebuah sekolah menengah kejuruan yang \r\nterletak di kota Bekasi. Sekolah ini dikenal dengan berbagai jurusan \r\nunggulannya, termasuk multimedia, farmasi, otomatisasi dan tata \r\nkelola perkantoran (OTKP), serta teknik elektronika industri. Motto \r\nsekolah ini adalah \"Luhur dalam Akhlak, Trampil dalam Teknologi\", \r\nmencerminkan komitmen sekolah untuk mengutamakan pembentukan karakter \r\nyang baik sejalan dengan penguasaan teknologi.\r\nDengan beragam jurusan yang ditawarkan, SMK Al-Muhtadin Bekasi \r\nmemberikan peluang bagi siswa untuk mengembangkan potensi di bidang \r\nyang sesuai dengan minat dan bakat mereka. Jurusan multimedia \r\nmembekali siswa dengan keterampilan dalam desain grafis, animasi, dan \r\nproduksi media digital. Jurusan farmasi mengajarkan pengetahuan dan \r\nketerampilan dalam bidang ilmu farmasi, sedangkan jurusan OTKP \r\nmelatih siswa dalam tata kelola perkantoran modern. Jurusan teknik \r\nelektronika industri fokus pada pengembangan dan pemeliharaan \r\nperangkat elektronik di industri\r\nMotto sekolah \"Luhur dalam Akhlak, Trampil dalam Teknologi\" \r\nmenekankan pentingnya pengembangan moral dan etika yang kuat sejalan \r\ndengan penguasaan keterampilan teknologi. Hal ini mencerminkan visi \r\nSMK Al-Muhtadin Bekasi dalam menciptakan lulusan yang tidak hanya \r\nkompeten secara teknis, tetapi juga memiliki nilai-nilai kebaikan, \r\netika, dan tanggung jawab.\r\nDengan program pendidikan yang berfokus pada penguasaan teknologi dan \r\npembentukan karakter yang baik, SMK Al-Muhtadin Bekasi menjadi tempat \r\nyang inspiratif bagi siswa untuk mengembangkan diri dan mempersiapkan \r\nmasa depan mereka di berbagai bidang kejuruan.', 'Terwujudnya SMK yang Kompetitif dan Bermutu didukung Tenaga Pendidikan yang Profesional serta Menyiapkan Lulusan Berakhlak Mulia, Berdaya Saing Tinggi, Menguasi Ilmu Pengetahuan dan Teknologi.', 'Mengingkatkan sarana dan prasarana pendidikan dengan kemajuan teknologi untuk mendukung proses pembelajaran yang optimal.', '0852131231232', 'hihi', 'smapekanbaru@gmail.com', 'hihi', 0, 'profile_sekolah-2808202377c8ba92e6.jpg', 'Jl. Sultan Syarif Qasim No.159, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28156');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `nama_users` varchar(255) DEFAULT NULL,
  `alamat_users` varchar(255) DEFAULT NULL,
  `email_users` varchar(200) DEFAULT NULL,
  `no_telp_users` varchar(15) DEFAULT NULL,
  `hak_akses` enum('kepala sekolah','admin') DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('aktiv','non-aktiv') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nama_users`, `alamat_users`, `email_users`, `no_telp_users`, `hak_akses`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '56464', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aktiv'),
(2, 'admin2 sad sadad', 'admin2', 'admin2@gmail.com', '38924829', 'admin', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'non-aktiv'),
(3, 'kepalasekolah', 'Kepala Sekolah', 'kepalasekolah@gmail.com', '93284243534', 'kepala sekolah', 'kepalasekolah', 'ad9e9366bd65e665fa808da635512230', 'aktiv'),
(5, 'test', 'test', 'test@gmail.com', '453534345', 'admin', 'test', '098f6bcd4621d373cade4e832627b4f6', 'non-aktiv');

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
-- Indexes for table `tbl_applay_lowongan`
--
ALTER TABLE `tbl_applay_lowongan`
  ADD PRIMARY KEY (`id_applay_lowongan`),
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `tbl_detail_applay_lamaran`
--
ALTER TABLE `tbl_detail_applay_lamaran`
  ADD PRIMARY KEY (`id_detail_applay_lamaran`),
  ADD KEY `id_applay_lowongan` (`id_applay_lowongan`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`kd_galeri`);

--
-- Indexes for table `tbl_hasil_test`
--
ALTER TABLE `tbl_hasil_test`
  ADD PRIMARY KEY (`id_hasil_test`),
  ADD KEY `id_jawaban` (`id_jawaban`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`kd_informasi`);

--
-- Indexes for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `tbl_lowongan_ibfk_1` (`id_kategori`);

--
-- Indexes for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

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
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

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
  ADD KEY `kd_admin` (`id_users`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

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
-- AUTO_INCREMENT for table `tbl_applay_lowongan`
--
ALTER TABLE `tbl_applay_lowongan`
  MODIFY `id_applay_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_detail_applay_lamaran`
--
ALTER TABLE `tbl_detail_applay_lamaran`
  MODIFY `id_detail_applay_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `kd_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_hasil_test`
--
ALTER TABLE `tbl_hasil_test`
  MODIFY `id_hasil_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `kd_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `kd_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `kd_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `kd_profile_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_applay_lowongan`
--
ALTER TABLE `tbl_applay_lowongan`
  ADD CONSTRAINT `tbl_applay_lowongan_ibfk_1` FOREIGN KEY (`id_lowongan`) REFERENCES `tbl_lowongan` (`id_lowongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_applay_lowongan_ibfk_2` FOREIGN KEY (`id_pelamar`) REFERENCES `tbl_pelamar` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD CONSTRAINT `tbl_berita_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_berita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD CONSTRAINT `tbl_berkas_ibfk_1` FOREIGN KEY (`id_pelamar`) REFERENCES `tbl_pelamar` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail_applay_lamaran`
--
ALTER TABLE `tbl_detail_applay_lamaran`
  ADD CONSTRAINT `tbl_detail_applay_lamaran_ibfk_1` FOREIGN KEY (`id_applay_lowongan`) REFERENCES `tbl_applay_lowongan` (`id_applay_lowongan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hasil_test`
--
ALTER TABLE `tbl_hasil_test`
  ADD CONSTRAINT `tbl_hasil_test_ibfk_1` FOREIGN KEY (`id_jawaban`) REFERENCES `tbl_jawaban` (`id_jawaban`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_hasil_test_ibfk_2` FOREIGN KEY (`id_pertanyaan`) REFERENCES `tbl_pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_hasil_test_ibfk_3` FOREIGN KEY (`id_pelamar`) REFERENCES `tbl_pelamar` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD CONSTRAINT `tbl_lowongan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD CONSTRAINT `tbl_pengumuman_ibfk_1` FOREIGN KEY (`kd_admin`) REFERENCES `tbl_admin` (`kd_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
