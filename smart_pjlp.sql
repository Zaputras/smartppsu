-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2024 pada 21.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u207286027_smart_pjlp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `tanggal` varchar(256) NOT NULL,
  `isi_berita` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `isi_berita`) VALUES
(1, '22/06/2024', 'Silahkan Login dengan akun yang sudah didaftarkan sebelumnya oleh administrator. Isikan kolom user ID dan password dengan benar.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nopeg` varchar(8) NOT NULL,
  `tgl` date NOT NULL,
  `sumber` varchar(15) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `progress` varchar(9) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nopeg`, `tgl`, `sumber`, `uraian`, `kondisi`, `lokasi`, `progress`, `image`) VALUES
(10, '80002994', '2024-08-20', 'Kegiatan Rutin', 'Penyapuan Jalan', 'Kotor', 'Jl. Stasiun Senen', 'Selesai', 'WhatsApp_Image_2024-08-19_at_10_25_29.jpeg'),
(11, '80002994', '2024-08-21', 'Kegiatan Rutin', 'Membersihkan saluran', 'Tergenang', 'Flyover', 'Selesai', 'WhatsApp_Image_2024-08-11_at_07_54_21.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_aktif`
--

CREATE TABLE `status_aktif` (
  `is_active` int(1) NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `status_aktif`
--

INSERT INTO `status_aktif` (`is_active`, `status`) VALUES
(0, 'Non-Aktif'),
(1, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nopeg` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `image` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `date_created` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nopeg`, `nama`, `tempat_lahir`, `tgl_lahir`, `nik`, `jk`, `alamat`, `telp`, `image`, `email`, `password`, `role_id`, `date_created`) VALUES
('119585', 'Santoso', '-', '-', '-', 'Laki-laki', '-', '-', 'default.jpg', 'santoso@gmail.com', '123456', 2, 253545),
('179751', 'Galuh Handiningtyas', '-', '-', '-', 'Perempuan', '-', '-', 'default.jpg', 'galuh@gmail.com', '123456', 2, 253545),
('185853', 'Fikri Arifin', '-', '-', '-', 'Laki-laki', '-', '-', 'default.jpg', 'fikriarifin@gmail.com', '123456', 1, 253545),
('80002994', 'Abdul Ajiz', 'Brebes', '21/04/1983', '3329122808830001', 'Laki-Laki', 'Kamp Bintaro Rt. 006/002 Kel. Pesanggrahan Kec. Pesanggrahan Jakarta Selatan', '081574642911', 'default.jpg', 'abdulajiz2183@gmail.com', '123456', 4, 253545),
('80003017', 'Saripudin', 'Jakarta', '09/09/1992', '3171040909920002', 'Laki-Laki', 'Jl. Ps. Senen Dalam VI Rt 015/04 Kel. Senen Kec. Senen Jakarta Pusat', '085891090142', 'default.jpg', 'Alfatihazam12345@gmail.com', '123456', 4, 253545),
('80003521', 'Achmad Amarullah', 'Jakarta', '29/03/1982', '3171042903820001', 'Laki-Laki', 'Jl. Kramat Pulo GG. 18 Rt 001 Rw 08 Kel. Kramat Kec. Senen, Jakarta Pusat', '083805087584', 'default.jpg', 'achmadamarullah587@gmail.com', '123456', 4, 253545),
('80003541', 'Adrian Setiawan H', 'Jakarta', '26/08/1968', '3171042608680002', 'Laki-Laki', 'Jl. Kwini No. 8  RT. 004/01 Kel. Senen Kec. Senen Jakarta Pusat', '085695912319', 'default.jpg', 'setiawanadrian32@gmail.com', '123456', 4, 253545),
('80003560', 'Agatha Kristy', 'Jakarta', '03/10/1996', '3171040310960001', 'Laki-Laki', 'Jln. Kenari I Rt. 014/03 Kel. Kenari Kec. Senen Jakarta Pusat', '0895320073624', 'default.jpg', 'agathakristy96@gmail.com', '123456', 4, 253545),
('80003578', 'Agus Purnomo', 'Jakarta', '17/08/1978', '3171041708780004', 'Laki-Laki', 'Jl. Prapatan II Rt. 004/05 Kel. Senen Kec. Senen Jakarta Pusat', '087784917872', 'default.jpg', '1987aguspurnomo@gmail.com', '123456', 4, 253545),
('80003678', 'Alfian', 'Jakarta', '25/04/1994', ' 317108250494000', 'Laki-Laki', 'Jl. Tanah Tinggi I No. 16 Rt. 002/02 Kel. Tanah Tinggi Kec. Johar Baru Jakarta Pusat', '081573807106', 'default.jpg', 'alfian.alfon4@gmail.com', '123456', 4, 253545),
('80003732', 'Arif Irfansyah', 'Majalengka', '30/11/1991', '3171033011910005', 'Laki-Laki', 'Jl. Garuda Ujung RT 011/08 Kel. Kemayoran Kec. Kemayoran Jakarta Pusat', '081297027172', 'default.jpg', 'wardha.arif6@gmail.com', '123456', 4, 253545),
('80003932', 'Murfita Sari', 'Jakarta', '09/12/1981', '3171034912810007', 'Perempuan', 'Jl. Bungur Besar 17 Rt 002/04 Kel. Gunung Sahari Selatan Kec. Kemayoran Jakarta Pusat', '085218795230', 'default.jpg', 'murfitasarisari409@gmail.com', '123456', 4, 253545),
('80005850', 'Ryan Ramadhan', 'Jakarta', '22/01/1997', '3172042201970003', 'Laki-Laki', 'Asrama DKI RT. 013/03 Kel. Semper Barat Kec. Cilincing Jakarta Utara', '089520027218', 'default.jpg', 'ramadhanryan254@gmail.com', '123456', 4, 253545),
('80005879', 'Bayu Prahara', 'Jakarta', '25/12/1980', '3171042512800004', 'Laki-Laki', 'Jl. Ps Senen Dalam VI/15D Rt 013 Rw 04 Kel. Senen Kec. Senen', '083872876644', 'default.jpg', 'uyabrara04@gmail.com', '123456', 4, 253545),
('80005926', 'Budiman Purnama', 'Jakarta', '02/06/1989', ' 317104020689000', 'Laki-Laki', 'Jl. Pasar Senen Dalam VI RT. 015/04 Kel. Senen Kec. Senen Jakarta Pusat', ' 083149202435', 'default.jpg', 'imenabil5@gmail.com', '123456', 4, 253545),
('80005948', 'Darmono', 'Jakarta', '05/12/1970', ' 317104051270000', 'Laki-Laki', 'Jl. Prapatan II/ No. 7D Rt. 010/05 Kel. Senen Kec. Senen Jakarta Pusat', '081283093167', 'default.jpg', 'darmonosenen01@gmail.com', '123456', 4, 253545),
('80005968', 'Dian Rahmawati', 'Klaten', '28/05/1995', '3318016805950005', 'Perempuan', 'Jl. Ps. Senen Dalam VI/9 RT. 014/04 Kel. Senen Kec. Senen Jakarta Pusat', '085714607184', 'default.jpg', 'diansoemarto2@gmail.com', '123456', 4, 253545),
('80006020', 'Handiwinata', 'Jakarta', '20/12/1974', '3171082012740002', 'Laki-Laki', 'KR. Pulo Gundul K-28D Rt. 003/09 Kel. Tanah Tinggi Kec. Johar Baru  Jakarta Pusat', '081317016343', 'default.jpg', 'handiwinata478@gmail.com', '123456', 4, 253545),
('80006043', 'Hardiyono', 'Jakarta', '12/04/1971', '3171041204710003', 'Laki-Laki', 'Jl. Kramat Kwitang II  RT. 003/08 Kel. Kwitang, Kec. Senen Jakarta Pusat', '088213601093', 'default.jpg', 'hardiyono.pedro19@gmail.com', '123456', 4, 253545),
('80006108', 'Sulaiman', 'Jakarta', '14/12/1981', '3171041412810003', 'Laki-Laki', 'Jl. Ps. Senen Dlm VI/249C Rt. 015/04 Kel. Senen Kec. Senen Jakarta Pusat', '081586833885', 'default.jpg', 'leman.sl430015@gmail.com', '123456', 4, 253545),
('80006131', 'Sutresno', 'Jakarta', '22/03/1983', '3172042203830010', 'Laki-Laki', 'Asrama DKI Rt. 013/03 Kel. Semper Barat Kec. Cilincing Jakarta Utara', '081289314674', 'default.jpg', 'trisnoeriksen@gmail.com', '123456', 4, 253545),
('80006153', 'Tb. Selamat R.', 'Pandeglang', '02/03/1978', '3171040203780002', 'Laki-Laki', 'Ps. Senen Dalam VIII Rt. 006/04 Kel. Senen Kec. Senen Jakarta Pusat', '087739657818', 'default.jpg', 'bb0335526@gmail.com', '123456', 4, 253545),
('80006177', 'Teguh Purwanto', 'Jakarta', '19/08/1987', '3171081908870001', 'Laki-Laki', 'Jl. Tn. Tinggi I/A No. 15 Rt. 002/02 Kel. Tanah Tinggi Kec. Johar Baru Jakarta Pusat', '087770989485', 'default.jpg', 'teguhpurwanto190@gmail.com', '123456', 4, 253545),
('80006786', 'James', 'Bekasi', '15/10/1997', '3216051510970006', 'Laki-Laki', 'Jl. Ps Senen Dlm VI/9 Rt. 014/04 Kel. Senen Kec. Senen Jakarta Pusat', '083874140677', 'default.jpg', 'jamessinaga473@gmail.com', '123456', 4, 253545),
('80007189', 'Arwansyah', 'Jakarta', '22/10/1969', '3174012210690006', 'Laki-Laki', 'Bukit Duri Tanjakan No. 44 Rt. 015/012 Kel. Bukit Duri Kec. Tebet Jakarta Selatan', '087785140306', 'default.jpg', 'arwansyahwilson22@gmail.com', '123456', 4, 253545),
('80027661', 'Rika Agustina', 'Teluk Betung', '31/08/1990', '3275017108900016', 'Perempuan', 'Jl. Prapatan Baru No. 38 Rt. 001/05 Kel. Senen Kec. Senen Jakarta Pusat', '085714499025', 'default.jpg', 'rikagustina318@gmail.com', '123456', 4, 253545),
('80045082', 'Eka Restiana', 'Gumuk Mas', '06/09/1981', '3215224609810001', 'Perempuan', 'Jl. Prapatan II No.43 A RT 003/05 Kel. Senen Kec. Senen, Jakarta Pusat', '085647716067', 'default.jpg', 'Echaresty554@gmail.com', '123456', 4, 253545),
('80047674', 'Herman', 'Jakarta', '06/08/1987', '3171040608870002', 'Laki-Laki', 'Jl. Kalibaru Timur GG. VII No. 6 RT. 014/07 Kel. Bungur Kec. Senen Jakarta Pusat', '087888854934', 'default.jpg', 'hf177462@gmail.com', '123456', 4, 253545),
('80086315', 'Andi', 'Banyumas', '26/08/1981', '3171082608810002', 'Laki-Laki', 'Jl. Galur Selatan Rt. 003/01 Kel. Galur Kec. Johar Baru Jakarta Pusat', '087865551575', 'default.jpg', 'anigaluragalura@gmail.com', '123456', 4, 253545),
('80086459', 'Chusnul Vauzie', 'Pacitan', '01/10/1994', '3171040110941001', 'Laki-Laki', 'Jl. Prapatan III No. 53A RT. 006/05 Kel Senen Kec. Senen Jakarta Pusat', '085715327786', 'default.jpg', 'chusnulvzi96@gmail.com', '123456', 4, 253545),
('80086530', 'Damin', 'Jakarta', '12/10/1975', '3171081210750001', 'Laki-Laki', 'Rusun Tanah tinggi Blok II Lt. dasar Rt. 004/014 Kel. Tanah Tinggi Kec. Johar Baru Jakarta Pusat', '085945039343', 'default.jpg', 'damin.senencity17@gmail.com', '123456', 4, 253545),
('80087097', 'Firman', 'Jakarta', '16/04/1986', '3171041604860006', 'Laki-Laki', 'Jl. Prapatan II / No. 38 Rt. 006/05 Kel. Senen Kec. Senen Jakarta Pusat', '081293927009', 'default.jpg', 'firmansafira86@gmail.com', '123456', 4, 253545),
('80087128', 'Ignatius Yonas Manu', 'Jakarta', '01/01/1987', '3671080101870002', 'Laki-Laki', 'Jl. Prapatan II/7 Rt. 004/05 Kel. Senen Kec. Senen Jakarta Pusat', '08561843943', 'default.jpg', 'viovely122@gmail.com', '123456', 4, 253545),
('80087146', 'Ipan Saputra', 'Jakarta', '22/06/1996', '3172042206960002', 'Laki-Laki', 'Asrama DKI Rt. 012/03 Kel. Semper Kec. Cilincing Jakarta Utara', '089686864191', 'default.jpg', 'ipansaputra006@gmail.com', '123456', 4, 253545),
('80087557', 'Nur Syamsiah', 'Bekasi', '27/05/1985', '3171046705850003', 'Perempuan', 'Ps Senen Dalm V/1A  RT. 008/04 Kel. Senen Kec. Senen Jakarta Pusat', '081380764580', 'default.jpg', 'nur270585@gmail.com', '123456', 4, 253545),
('80087669', 'Romli', 'Bogor', '15/07/1979', '3201041507790012', 'Laki-Laki', 'Jl. Bungur Besar Gg VIII /123 Rt. 009/03 Kel. Bungur Kec. Senen Jakarta Pusat', '085888586790', 'default.jpg', 'romlijombi28@gmail.com', '123456', 4, 253545),
('80089767', 'Muhamad', 'Jakarta', '02/07/1988', '3173070207880004', 'Laki-Laki', 'Gg. Kiapang RT 008/03 Kel. Kota Bambu Selatan  Kec. Pal Merah  Jakarta Barat ', '081319617675', 'default.jpg', 'muhamadsaymil0902@gmail.com', '123456', 4, 253545),
('80089820', 'Rexy Pungki', 'Jakarta', '09/12/1996', '3171040912960002', 'Laki-Laki', 'Jl. Pasar Senen Dalam VI No. 255 D Rt. 015/04 Kel. Senen Kec. Senen Jakarta Pusat', '081291530758', 'default.jpg', 'dewipungki12@gmail.com', '123456', 4, 253545),
('80092968', 'Arifin', 'Jakarta', '22/01/1984', '3171082201840001', 'Laki-Laki', 'Rusun Tanah Tinggi Blok 2 Lt. 2 No. 224 Rt. 003/014 Kel. Tanah Tinggi Kec. Johar Baru Jakarta Pusat', '085780477601', 'default.jpg', 'ernanugi872@gmail.com', '123456', 4, 253545),
('80093098', 'Rudi Hartono', 'Jakarta', '20/08/1985', '3175042008850007', 'Laki-Laki', 'GG. H Kaimah Rt. 001/01 Kel. Rambutan Kec. Ciracas Jakarta Timur', '083876815444', 'default.jpg', 'faizramadhan0106@gmail.com', '123456', 4, 253545),
('80103321', 'Rahul Saputra', 'Jakarta', '25-08-1999', '3171042508990006', 'Laki-Laki', 'Jl. Ps Senen Dalam VI RT. 015/04 Kel. Senen Kec. Senen Jakarta Pusat', '085716305415', 'default.jpg', 'rahulsaputra25@gmail.com', '123456', 4, 253545),
('80103351', 'Yana Rudiansyah', 'Jakarta', '16/06/1989', '3201221606890002', 'Laki-Laki', 'Jl. Pasar Senen Dalam 6 No. 9 RT 014/04 Kel. Senen Kec. Senen Jakarta Pusat', '089634420040', 'default.jpg', 'yanarudiyansahabk@gmail.com', '123456', 4, 253545),
('80154896', 'Muhamad Jaelani', 'Jakarta', '08/10/1984', '3171040810840005', 'Laki-Laki', 'Jl. Ps. Senen Dalam VI/258 D RT 015/04 Kel. Senen Kec. Senen Jakarta Pusat', '08158975250', 'default.jpg', 'salmaajjah01@gmail.com', '123456', 4, 253545),
('80172773', 'Aldi Rusman', 'Jakarta', '25/09/1998', '3171042509980002', 'Laki-Laki', 'Jl. Pasar Senen Dalam VI/7G Rt 013 Rw 04 Kel. Senen Kec. Senen Jakarta Pusat', '087721797690', 'default.jpg', 'alldirusman25@gmail.com', '123456', 4, 253545),
('80178013', 'Feri Tjahyadi', 'Jakarta', '16/11/1991', '3171041611910002', 'Laki-Laki', 'Jl. Pasar Senen Dalam V Rt 008 Rw 04 Kel. Senen Kec. Senen Jakarta Pusat', '085780525262', 'default.jpg', 'rwbyme77@gmail.com', '123456', 4, 253545),
('80178826', 'Muhammad Abdul Gani', 'Jakarta', '26/02/1994', '3171082602940002', 'Laki-Laki', 'Jl. Ps. Senen Dalam IV/37 Rt 007 Rw 04 Kel. Senen Kec. Senen Jakarta Pusat', '085947755507', 'default.jpg', 'muhammadabdulgani0@gmail.com', '123456', 4, 253545),
('80179056', 'Riyandi Putra Pratama', 'Sumedang', '06/01/1998', '3216060601980021', 'Laki-Laki', 'Jl. Pasar Senen Dalam VIII/9A Rt 006/04 Kel. Senen Kec Senen Jakarta Pusat', '08987846019', 'default.jpg', 'riyandiputra2402@gmail.com', '123456', 4, 253545),
('80179183', 'Saripudin', 'Brebes', '22/12/1992', '3329122212920003', 'Laki-Laki', 'Ps.Senen Dalam VI RT. 015/04 Kel. Senen Kec. Senen Jakarta Pusat', '083870209203', 'default.jpg', 'saripudinalip81@gmail.com', '123456', 4, 253545),
('80241778', 'Dedi Permana', 'Jakarta', '16/07/1979', '3171041607790003', 'Laki-Laki', 'Ps. Senen Dlm IV Rt.007/04 Kel. Senen Kec. Senen Jakarta Pusat', '082112368848', 'default.jpg', 'dedipermana587@gmail.com', '123456', 4, 253545),
('80253889', 'Ari Gunawan', 'Jakarta', '12/05/2000', '3171041205000003', 'Laki-Laki', 'Jl. Gunung Sahari I Rt. 018/04 Kel. Senen Kec. Senen Jakarta Pusat', '087887808747', 'default.jpg', 'arig6274@gmail.com', '123456', 4, 253545),
('80260245', 'Imam Safei', 'Jakarta', '10/05/1975', '1811031005750001', 'Laki-Laki', 'Jl. Prapatan II/33 Rt 004/05 Kel. Senen Kec. Senen Jakarta Pusat', '085720181463', 'default.jpg', 'safeii750@gmail.com', '123456', 4, 253545),
('80261456', 'Wahyu Setiawan', 'Jakarta', '05/12/1993', '3171040512930006', 'Laki-Laki', 'Jl. Ps. Senen Dalam VI No. 16 Rt 012/04 Kel. Senen Kec. Senen Jakarta Pusat', '083894130737', 'default.jpg', 'wahyusetiawangrab@gmail.com', '123456', 4, 253545),
('80346917', 'Rizky Banu Nugraha', 'Jakarta', '29/08/1992', '3171042908920004', 'Laki-Laki', 'Jl. Ps. Senen Dalam VI No. 7 A Rt 013/04 Kel. Senen Kec. Senen Jakarta Pusat', '0895321029757', 'default.jpg', 'gojek.jkte5364b@gmail.com', '123456', 4, 253545),
('80346918', 'Ardhi Guntar\r\n', 'Jakarta\r\n', '03-12-1989', '3171040312890002', 'Laki-Laki', 'Jl. Ps. Senen Dlm VI/10 RT 012/04 Kel. Senen Kec. Senen Jakarta Pusat\r\n', '085782751054', 'default.jpg\r\n', 'anggie2272@gmail.com\r\n', '123456', 5, 253545),
('80346919', 'Eli Sutarsih\r\n', 'Jakarta\r\n', '23-05-1975', '3171046305750002', 'Perempuan', 'Jl. Ps Senen Dlm V/23 D RT 008/04 Kel. Senen Kec. Senen Jakarta\r\n', '0818853122', 'default.jpg\r\n', 'anggie2272@gmail.com\r\n', '123456', 5, 253545),
('80346921', 'Priscilla Novita\r\n', 'Jakarta\r\n', '01-11-1989', '3171044911890003', 'Perempuan', 'Jl. Prapatan III No. 62 RT 006/05 Kel. Senen Kec. Senen Jakarta Pusat\r\n', '087870626869', 'default.jpg\r\n', 'vano.naomi89@gmail.com\r\n', '123456', 5, 253545),
('80346922', 'Santy Purwaningrum,Se', 'Jakarta', '20-08-1982', '3171046008820002', 'Perempuan', 'Prapatan Baru No. 6 RT 001/05 Kel. Senen Kec. Senen Jakarta Pusat', ' 087878469494', 'default.jpg', 'syahyadanty82@gmail.com', '123456', 5, 253545),
('80346923', 'Surya', 'Jakarta', '17-11-1987', '3171041711870001', 'Laki-Laki', 'Jl. Ps. Senen Dalam VI/9.I RT 014/04 Kel. Senen Kec. Senen Jakarta Pusat', ' 089535552597', 'default.jpg', 'osisanse@gmail.com', '123456', 5, 253545),
('80349844', 'Indra Wahyudin', 'Jakarta', '04/08/1982', '3171040408820005', 'Laki-Laki', 'Jl. Prapatan II /7D Rt 010/05 Kel. Senen Kec. Senen Jakarta Pusat', '085892648875', 'default.jpg', 'indrawahyudin0882@gmail.com', '123456', 4, 253545),
('80353042', 'Janwar Nurrais', 'Jakarta', '02/01/2001', '3172040201010005', 'Laki-Laki', 'Asrama DKI Rt 006/03 Kel. Semper Barat Kec. Cilincing Jakarta Utara', '087774841793', 'default.jpg', 'janwarnurrais3@gmail.com', '123456', 4, 253545),
('80353324', 'Jonas Jovianus Albers', 'Jakarta', '30/07/1970', '3171043007700003', 'Laki-Laki', 'Jl. Kwini No. 8  RT. 004/01 Kel. Senen Kec. Senen Jakarta Pusat', '081388389570', 'default.jpg', 'albersjonasjovianus@gmail.com', '123456', 4, 253545),
('80356596', 'Melyana Astini Irnawati', 'Jakarta', '07/05/1991', '3171044705910002', 'Perempuan', 'Jl. Kwini No. 8  RT. 004/01 Kel. Senen Kec. Senen Jakarta Pusat', '085716482628', 'default.jpg', 'aliajp5819@gmail.com', '123456', 4, 253545),
('80358417', 'Taufik Maulana', 'Bandung', '13/07/2001', '3172041307010001', 'Laki-Laki', 'Asr Kebersihan Rt 013/03 Kel. Semper Barat Kec. Cilincing Jakarta Utara', '088225819006', 'default.jpg', 'taufi.maulana18@gmail.com', '123456', 4, 253545),
('80414434', 'Fajar', 'Jakarta', '16/10/1990', '3171011610900004', 'Laki-Laki', 'Jl. Batu Tulis XII No. 14 A RT 009/02 Kel. Kebon Kelapa Kec. Gambir, Jakarta Pusat', '081318262199', 'default.jpg', 'fajarargagurnita@gmail.com', '123456', 4, 253545),
('80449903', 'Aditia Warman', 'Jakarta', '09/11/2000', '3171040911000001', 'Laki-Laki', 'Kalibaru Timur Gg 4 RT 009 RW 06 Kel. Bungur Kec. Senen Jakarta Pusat', '085814583224', 'default.jpg', 'cupenkac09@gmail.com', '123456', 4, 253545),
('80547325', 'Muhammad Tabrani', 'Jakarta', '14/01/1991', '3171041401910005', 'Laki-Laki', 'Jl. Pasar Senen Dalam VI/258 D RT 015/04 Kel. Senen Kec. Senen Jakarta Pusat', '085781805756', 'default.jpg', 'tabrani@gmail.com', '123456', 4, 253545),
('80547326', 'Moch Nur Subehan', 'Jakarta', '08/08/2000', '3174040808001001', 'Laki-Laki', 'Jl. H. Noor RT. 009/01 Kel. Pejaten Barat Kec. Pasar Minggu Jakarta Selatan', '087884551263', 'default.jpg', 'azisfadly8@gmail.com', '123456', 4, 253545),
('80547327', 'Siraj Nasyif', 'Jakarta', '20/07/2000', '3304112007000004', 'Laki-Laki', 'Jl. Kwini No. 5 RT 009/01 Kel. Senen Kec. Senen Jakarta Pusat', '085694345215', 'default.jpg', 'sirajnasyif200700@gmail.com', '123456', 4, 253545),
('80556226', 'Bukhori Istari', 'Jakarta', '12/10/2003', ' 317104121003000', 'Laki-Laki', 'Jl. Pasar Senen Dalam VIII Rt. 006/04 Kel. Senen Kec. Senen Jakarta Pusat', ' 085779666162', 'default.jpg', 'istaribukhori9@gmail.com', '123456', 4, 253545),
('80560737', 'Pahmy Baskara Novian', 'Cikande', '09/07/1997', '3171040907970008', 'Laki-Laki', 'Jl. Melati No. 19 Rt. 012/01 Kel. Kramat Kec. Senen Jakarta Pusat', '089501589804', 'default.jpg', '089501589804', '123456', 4, 253545),
('80560915', 'Ricky Tumuyu', 'Jakarta', '27/02/1979', '3171042702790004', 'Laki-Laki', 'Jl. Prapatan III/53A Rt. 006/05 Kel. Senen Kec. Senen Jakarta Pusat', '082112511598', 'default.jpg', 'rickytumuyu3@gmail.com', '123456', 4, 253545),
('80637870', 'Anggie\r\n', 'Jakarta\r\n', '22-07-2002', '3171046207020003', 'Perempuan', 'Jl. Ps. Senen Dalam IV RT007/04 Kel. Senen Kec. Senen Jakarta Pusat\r\n', '085779013779', 'default.jpg\r\n', 'anggie2272@gmail.com\r\n', '123456', 5, 253545),
('80704014', 'Bambang Sudarsono', 'Jakarta', '20/11/1973', '3171032011730003', 'Laki-Laki', 'Cempaka Putih Utara RT 010/02 Kel. Cempaka Baru Kec. Kemayoran Jakarta Pusat', '089646688104', 'default.jpg', 'bambangsudarsono816@gmail.com', '123456', 4, 253545),
('80704771', 'Cendy Leonard Yehezkiel', 'Jakarta', '04/06/1981', ' 317104040681000', 'Laki-Laki', 'Jl. Kwini No 8 RT 004/01 Kel. Senen Kec. Senen Jakarta Pusat', '089653081001', 'default.jpg', 'valentlesyu1001@gmail.com', '123456', 4, 253545),
('80707763', 'Taufik Ismail', 'Bekasi', '07/08/1981', '3275040708810029', 'Laki-Laki', 'Jl. Pasar Senen Dalam VIII Rt. 006/04 Kel. Senen Kec. Senen Jakarta Pusat', '087775286853', 'default.jpg', 'opicksenen@gmail.com', '123456', 4, 253545),
('80710534', 'Solex', 'Indramayu', '14/12/2000', '3171041412001001', 'Laki-Laki', 'Jl. Tongkang RT 012/01 Kel. Kramat Kec. Senen Jakarta Pusat', '08989144878', 'default.jpg', 'ameloleh123@gmail.com', '123456', 4, 253545),
('80713087', 'Rizky Maulana Ibrahim', 'Jakarta', '18/05/2002', '3171041805020002', 'Laki-Laki', 'Jl. Melati No. 19 RT 012/01 Kel. Kramat Kec. Senen Jakarta Pusat', '088291884937', 'default.jpg', 'rizkyymaulana18@gmail.com', '123456', 4, 253545),
('80713513', 'Rahmat', 'Jakarta', '10/05/1983', '3171041005830006', 'Laki-Laki', 'Jl. Prapatan II/38 RT 006/05 Kel. Senen Kec. Senen Jakarta Pusat', '081380725800', 'default.jpg', 'arkanarayyanza26@gmail.com', '123456', 4, 253545),
('80715820', 'Mega Permatasari', 'Jakarta', '08/03/1998', '3273044803980005', 'Perempuan', 'Jl. Tn. Tinggi Sawah RT 006/012 Kel. Tanah Tinggi Kec. Johar Baru Jakarta Pusat', '089637333245', 'default.jpg', 'megapermatasari@gmail.com', '123456', 4, 253545),
('80731581', 'Waridah', 'Tegal', '07/05/1970', '3328174705700004', 'Perempuan', 'Jl. Bukit Duri Utara RT 001/02 Kel. Manggarai Kec. Tebet Jakarta Selatan', '0895600785118', 'default.jpg', 'waridah.idah0570@gmail.com', '123456', 4, 253545),
('80733374', 'Rully Suherman', 'Jakarta', '17/11/1985', '3171041711850001', 'Laki-Laki', 'Jl. Prapatan II/33 Rt 004/05 Kel. Senen Kec. Senen Jakarta Pusat', '085776374775', 'default.jpg', 'rully@gmail.com', '123456', 4, 253545),
('80733398', 'Yakobus Aprillianus Kasoe', 'Jakarta', '18/04/1986', '3171041804860001', 'Laki-Laki', 'Jl. Kwini No. 8  RT. 004/01 Kel. Senen Kec. Senen Jakarta Pusat', '085774450143', 'default.jpg', 'yacobusakasoe@gmail.com', '123456', 4, 253545);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(1) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`role_id`, `jabatan`) VALUES
(1, 'Administrator'),
(2, 'Kasie Ekonomi Pembangunan'),
(3, 'Kasie Kesejahteraan Rakyat'),
(4, 'PPSU'),
(5, 'Pengelola RPTRA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `status_aktif`
--
ALTER TABLE `status_aktif`
  ADD PRIMARY KEY (`is_active`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nopeg`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
