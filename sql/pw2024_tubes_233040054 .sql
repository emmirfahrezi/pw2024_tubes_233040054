-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 04:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040054`
--

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` int NOT NULL,
  `model` varchar(255) NOT NULL,
  `deskripsi` varchar(555) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `harga` decimal(65,0) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `model`, `deskripsi`, `merek`, `harga`, `foto`) VALUES
(4, 'STREET GLIDE', 'Harga Harley Davidson Street Glide 2024 di Indonesia dimulai dari Rp 1,159 Milyar. Tersedia dalam 6 pilihan warna dan 1 varian di Indonesia. Street Glide digerakkan oleh mesin 1745 cc dengan transmisi 6-Kecepatan. Harley Davidson Street Glide memiliki tinggi jok 695 mm dengan bobot 376 kg. Rem depan menggunakan Disc, sedangkan di belakang Disc. Pesaing terdekat Harley Davidson Street Glide adalah K 1600 B, Road Glide, Ultra Limited dan Goldwing.', 'HARLEY DAVIDSON', '1570000000', '665196283d091.jpg'),
(15, 'ROAD KING SPECIAL', 'Harley-Davidson Road King Special adalah motor touring yang menggabungkan tampilan klasik dan agresif dengan dominasi warna hitam, dilengkapi lampu depan LED Daymaker, tangki bahan bakar besar 22,7 liter, dan mesin Milwaukee-Eight 114 V-Twin berkapasitas 1.868 cc dengan torsi 164 Nm pada 3.000 RPM, menawarkan kenyamanan berkendara dengan suspensi yang dapat disesuaikan, jok lebar, saddlebag besar, serta fitur teknologi dan keamanan seperti ABS dan kontrol traksi.', 'HARLEY DAVIDSON', '799000000', '664c0d4830392.jpg'),
(16, 'BREAKOUT 117', 'Harga Harley Davidson Breakout 117 2024 di Indonesia dimulai dari Rp 750,8 Juta. Tersedia dalam 4 pilihan warna dan 1 varian di Indonesia. Breakout 117 digerakkan oleh mesin 1923 cc dengan transmisi 6-Kecepatan. Harley Davidson Breakout 117 memiliki tinggi jok 665 mm dengan bobot 309.80 kg. Rem depan menggunakan Disc, sedangkan di belakang Disc. Pesaing terdekat Harley Davidson Breakout 117 adalah Rocket 3 dan R 12.', 'HARLEY DAVIDSON', '750800000', '664c0df5ee5b2.jpg'),
(19, 'XL1200', 'Harley XL 1200 memiliki desain yang menggabungkan elemen klasik dan modern. Dikenal dengan bodinya yang ramping dan tangki bahan bakar berbentuk kacang yang khas, motor ini menampilkan karakteristik estetika Harley-Davidson yang otentik. Sentuhan krom pada beberapa bagian motor memberikan kesan elegan dan kuat. Jok rendah serta stang yang lebar memberikan kenyamanan berkendara yang optimal.', 'HARLEY DAVIDSON', '100000000', '664b23953540d.jpg'),
(23, 'Kawasaki W250', 'Kawasaki W250 memiliki desain yang terinspirasi dari motor-motor klasik era 1960-an. Dengan bodi ramping, tangki bahan bakar yang melengkung anggun, dan jok berlapis kulit yang nyaman, motor ini menawarkan tampilan yang elegan dan nostalgia. Garis-garis halus dan penggunaan krom pada beberapa bagian motor semakin menonjolkan kesan klasik yang kuat. Warna-warna yang tersedia juga dipilih dengan cermat untuk menambah daya tarik visual.', 'KAWASAKI', '79000000', '6652f9aa8e6e5.jpg'),
(24, 'Cleveland Heist', 'Cleveland Heist memiliki desain yang unik dan mencolok, mengusung gaya chopper yang klasik dan minimalis. Dengan bodi ramping dan rangka terbuka, motor ini menonjolkan kesan elegan dan pemberontak. Tangki bahan bakar berbentuk tear-drop dan jok tunggal yang rendah memberikan tampilan retro yang ikonik. Sentuhan krom pada beberapa bagian motor menambah kesan mewah dan klasik. Sederhana namun menarik, Cleveland Heist adalah perwujudan sempurna dari motor chopper yang autentik dan bergaya. Cleveland Heist pertama kali dirilis pada tahun 2010.', 'CLEVELAND', '55500000', '6652fac9e4aa4.jpeg'),
(25, 'Royal Enfield Classic 350', 'Royal Enfield Classic 350 menampilkan desain retro yang elegan dengan garis-garis klasik dan bodi yang kokoh. Tangki bahan bakar berbentuk teardrop, jok terpisah yang nyaman, dan spatbor melengkung memberikan kesan vintage yang kuat. Rangka motor yang solid dan detail krom mempertegas kesan klasik. Lampu bulat dan panel instrumen analog menambah daya tarik estetika, sementara velg berjeruji memperkuat kesan retro.Royal Enfield Classic 350 pertama kali dirilis pada tahun 2009, dan sejak itu menjadi ikon motor klasik yang dicintai di seluruh dunia.', 'ROYAL ENFIELD', '81000000', '6652fb9557555.jpg'),
(26, 'Triumph Boneville T120', 'Triumph Bonneville T120 mengusung desain klasik dengan sentuhan modern yang memikat. Motor ini memiliki garis bodi yang elegan dan ramping, tangki bahan bakar berbentuk ikonik, serta jok ganda yang nyaman. Detail krom pada knalpot dan mesin menambah kesan mewah. Lampu depan bundar dan panel instrumen analog-digital memberikan tampilan retro yang otentik, sementara velg dengan jari-jari klasik memperkuat estetika vintage.Triumph Bonneville T120 pertama kali dirilis pada tahun 2016, membawa kembali warisan klasik dengan teknologi dan performa modern.', 'TRIUMPH', '330000000', '6653038f237bb.jpg'),
(27, 'Moto Guzzi V7', 'Moto Guzzi V7 memadukan desain klasik dengan fitur-fitur modern. Motor ini menampilkan tangki bahan bakar berbentuk teardrop yang khas, jok rendah yang nyaman, dan rangka yang ramping.Velg berjeruji dan garis-garis bodi yang sederhana namun berkelas memperkuat kesan vintage yang menawan.Moto Guzzi V7 pertama kali dirilis pada tahun 1967, dan telah melalui berbagai pembaruan untuk mempertahankan pesona klasiknya sambil menghadirkan teknologi modern.', 'MOTO GUZZI', '357000000', '66530435b3ea1.jpg'),
(28, 'Honda Rebel 250 ', 'Honda Rebel 250 memiliki desain yang menggabungkan elemen klasik dan modern dengan sempurna. Motor ini menampilkan bodi yang ramping dan rendah, dengan tangki bahan bakar berbentuk teardrop yang khas dan jok tunggal yang nyaman.Honda Rebel 250 pertama kali dirilis pada tahun 1985, dan sejak itu telah menjadi pilihan populer bagi pengendara yang mencari kombinasi gaya klasik dan kenyamanan berkendara yang andal.', 'HONDA', '80000000', '6653049fd044f.jpg'),
(29, 'Yamaha SR400', 'Yamaha SR400 mengusung desain klasik yang sederhana namun elegan. Motor ini memiliki tangki bahan bakar berbentuk teardrop, jok tunggal yang ramping, dan spatbor melengkung yang memberikan kesan retro yang kuat. Lampu depan bulat dan panel instrumen analog semakin mempertegas tampilan vintage, sementara velg berjeruji memperkuat estetika klasik.Yamaha SR400 pertama kali dirilis pada tahun 1978, dan telah mempertahankan popularitasnya sebagai motor retro yang ikonik dan mudah diakses oleh berbagai kalangan pengendara.', 'YAMAHA', '90000000', '665307a0d1b03.jpg'),
(30, 'Vespa Primavera', 'Vespa Primavera adalah skuter yang menggabungkan desain klasik dengan elemen modern yang menawan. Skuter ini menampilkan bodi monokok yang terbuat dari baja, memberikan tampilan yang ramping dan elegan. Desainnya yang aerodinamis dan garis-garis halus memberikan kesan yang anggun dan abadi. Bagian depan skuter ini dilengkapi dengan lampu utama bundar yang klasik, dipadukan dengan teknologi pencahayaan LED yang modern, sehingga memberikan visibilitas yang baik sekaligus mempertahankan estetika klasik.', 'VESPA', '36000000', '6653087baf235.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int NOT NULL,
  `tanggal_order` date NOT NULL,
  `id_motor` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `tanggal_order`, `id_motor`, `id_user`) VALUES
(1, '2024-05-23', 4, 4),
(2, '2024-06-19', 24, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `foto`) VALUES
(4, 'emmir fahrezi', '$2y$10$5FuxjoIDD3iks1vXjEkxZOTDEkmOyPW1bOLraAQTL543HIHhJ8.iy', 'admin', '666402b1c1cff.jpg'),
(7, 'barong', '$2y$10$sh2NN3TIc5Ne1tHqUy9k4uDb12/Uv/uGqTf.bOInln1X0hwUxFdDG', 'user', '665e9ecbef409.jpg'),
(8, 'huji', '$2y$10$44MX6bGz27vEta7t/Gc4N.jIUmTI.CCm5QpGhyLBry.KwDZgIOJxO', 'user', 'profil.jpg'),
(9, 'natasya', '$2y$10$vdv.ate05.o4rvo30d44vOvM5HmSncPM4WHBqsMUmXPGnPg7RFHS.', 'admin', '665ea1004c9b2.jpg'),
(10, 'rusdi', '$2y$10$Q96DCgjI.camlrUD7hncLO.oV8y7L8A9jeGpXAVn3f3QyUI3uf0zS', 'user', 'profil.jpg'),
(11, 'manusia', '$2y$10$x0R7yzxsyzt1urBmEQnspeNiqW0Q8mwgDabKoFCtp7peN/0MSCN/a', 'user', 'profil.jpg'),
(12, 'musni', '$2y$10$FoPSzrmAuCZMteAXvqiZIuXYKOhxV6kZmF40TAQx9vy6TuyXQ3oUK', 'user', 'profil.jpg'),
(13, 'userbaru', '$2y$10$hg5O./wpS2l9ApZDtaz5oeo03isPCR4pOefRSrOWX0orsSrvj7.pW', 'user', '6664030774a94.jpg'),
(14, 'mama', '$2y$10$vSQSpvx5VDuggKpzWUyUTuaN.4tfwJ9kL.VXF8.bMwKH4a0XZvUeC', 'user', 'profil.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_motor` (`id_motor`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_motor`) REFERENCES `motor` (`id_motor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
