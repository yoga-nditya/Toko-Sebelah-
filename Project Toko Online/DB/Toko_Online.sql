-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2022 pada 16.47
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speclap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `nama_brand` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id`, `nama_brand`) VALUES
(1, 'Lenovo'),
(2, 'DELL'),
(3, 'ASUS'),
(4, 'Acer'),
(5, 'HP'),
(6, 'Apple'),
(7, 'RAZER'),
(8, 'Alienware'),
(9, 'Huawei'),
(10, 'Microsoft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `kode_laptop` varchar(33) NOT NULL,
  `nama_laptop` varchar(99) NOT NULL,
  `gambar` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `kode_laptop`, `nama_laptop`, `gambar`) VALUES
(1, 'dllE7450', 'DELL LATITUDE E7450', 'e7450dell.jpeg'),
(2, 'asX441UV', 'ASUS X441UV', 'x441u.jpg'),
(11, 'acrN5AN515-57', 'Acer Nitro 5 (AN515-57)', 'rescale_nitro5_an515-57.png'),
(12, 'lnvYg7iG7', 'Lenovo Yoga 7i Gen 7', 'lenovo-yoga-7i-gen-7-16-intel-mini.jpeg'),
(13, 'HwMBD162022', 'Huawei MateBook D 16 2022', 'huawei-matebook-d-16-2022-mini.jpeg'),
(14, 'ApMBPro162021', 'Apple MacBook Pro 16 (2021)', 'apple-macbook-pro-16-2021-mini.jpeg'),
(15, 'DllXPS1797202022', 'Dell XPS 17 9720 (2022)', 'dell-xps-17-9720-2022-mini.jpeg'),
(16, 'HPEB845G9', 'HP EliteBook 845 G9', 'hp-elitebook-845-g9-mini.jpeg'),
(17, 'asVBS16X', 'Asus Vivobook S 16X OLED', 'asus-vivobook-s-16x-oled-12th-gen-intel-mini.jpeg'),
(18, 'AsVbS14XS5402', 'Asus Vivobook S 14X (S5402)', 'asus-vivobook-s-14x-oled-s5402-mini.jpeg'),
(19, 'ApMbAM12020', 'Apple Macbook Air (M1, 2020)', 'apple-macbook-air-m1-2020-mini.jpeg'),
(20, 'LnvY9i', 'Lenovo Yoga 9i 14\" (Gen 7)', 'lenovo-yoga-9i-14-gen-7-mini.jpeg'),
(21, 'HPPvl5', 'HP Pavilion 15 (2022)', 'hppvln15.jpg'),
(22, 'McsftSFPro8', 'Microsoft Surface Pro 8', 'microsoft-surface-pro-8-mini.jpeg'),
(23, 'dllAWx17R2', 'Dell Alienware x17 R2', 'dell-alienware-x17-r2-mini.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `email` varchar(32) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id_report`, `tanggal`, `email`, `subject`, `deskripsi`) VALUES
(9, '2022-07-28 08:26:11', 'vripee@gmail.com', 'w3rdsawdawd', 'awsadsaDawdada'),
(10, '2022-07-28 14:25:45', 'dawdawd@gada', 'asdwad', 'adawawdas'),
(11, '2022-07-28 14:25:49', 'aripriambudi25@gmail.com', 'adawd', 'Adwadas'),
(12, '2022-07-28 14:25:56', 'pimonkx@gmail.com', 'dawdasdw', 'r314231231'),
(13, '2022-07-28 14:26:04', 'dadw@2', '1241w', 'awsdadwd'),
(14, '2022-07-28 14:26:10', 'ad2@g', 'awda', 'dawda'),
(15, '2022-07-28 14:26:19', 'pimonkx@gmail.com', 'adw', 'awd'),
(16, '2022-07-28 14:26:24', 'pimonkx@gmail.com', 'dxcawca', 'casc'),
(17, '2022-07-28 14:26:30', 'ncwufbo@412dal.com', 'awdasd', 'zczsqwdq'),
(18, '2022-07-28 14:26:35', 'aripriambudi25@gmail.com', 'wdaawdawd', 'asdwdaw'),
(19, '2022-07-28 14:26:48', 'sdawda@g', 'sdawdawd', 'asdawd'),
(20, '2022-07-28 15:16:20', 'sdawda@g', 'sdawdawd', 'asdawd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `kode_laptop` varchar(33) NOT NULL,
  `brand` varchar(33) NOT NULL,
  `type` varchar(33) NOT NULL,
  `released` date NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `resolution` varchar(50) NOT NULL,
  `os` varchar(200) NOT NULL,
  `processor` varchar(199) NOT NULL,
  `graphic_card` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `network` varchar(199) NOT NULL,
  `features` text NOT NULL,
  `battery` text NOT NULL,
  `port` text NOT NULL,
  `color` text NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spesifikasi`
--

INSERT INTO `spesifikasi` (`kode_laptop`, `brand`, `type`, `released`, `dimension`, `weight`, `resolution`, `os`, `processor`, `graphic_card`, `ram`, `storage`, `network`, `features`, `battery`, `port`, `color`, `price`) VALUES
('acrN5AN515-57', 'Acer', 'Nitro 5 (AN515-57)', '2021-05-01', '363.4 x 255 x 23.9 mm (14.31 x 10.04 x 0.94 inches', '2.3 kg (5.07 lbs)', '15.6 Inch 1920 x 1080 FHD LED IPS 144Hz ', 'Windows 11', 'Intel® Core™ i7-11800H processor (24MB cache, up to 4.60Ghz)', 'NVIDIA® GeForce RTX™ 3060 with 6GB of GDDR6', '16GB DDR4', '512GB SSD NVMe', 'Wi-Fi standard v6 <br>\r\nBluetooth v5.2', 'webcam', '57 Wh', 'USB-A 3x USB 3.2<br>\r\nUSB Type-C 1x USB 3.2<br>\r\nThunderbolt Thunderbolt 4<br>\r\nHDMI 1x HDMI 2.1<br>\r\nAudio jack (3.5 mm)<br>\r\nEthernet (RJ45)', 'Black', 21499000),
('ApMbAM12020', 'Apple', 'Macbook Air (M1, 2020)', '2020-11-01', '304.1 x 212.4 x 16.1 mm (11.97 x 8.36 x 0.63 inche', '1.29 kg (2.84 lbs)', '2560 x 1600 13.3 inches IPS LCD 60 Hz', 'MacOs', 'Apple M1', 'Apple M1 GPU (8-core)', '8GB LPDDR4X', '256GB', 'Wi-Fi standard	v6 <br>\r\nBluetooth	v5', 'Fingerprint<br>\r\nWebcam 1280 x 720\r\nBacklight keyboard', '49.9 Wh Li-Po', 'USB Type-C	2x USB 3.1<br>\r\nThunderbolt	Thunderbolt 3<br>\r\nAudio jack (3.5 mm)', 'Silver, Gold, Gray', 14399000),
('ApMBPro162021', 'Apple', 'MacBook Pro 16 (2021)', '2021-10-01', '355.7 x 248.1 x 16.8 mm (14 x 9.77 x 0.66 inches)', '2.1 kg (4.63 lbs)', '3456 x 2234 16.2 inches Mini LED 120 Hz', 'macOS', 'Apple M1 Pro', 'Apple M1 Pro GPU (16-core)', '16GB', '512GB', 'Wi-Fi standard	v6<br>\r\nBluetooth	v5', 'Fingerprint\r\nwebcam\r\nBacklight keyboard', '100 Wh Li-Po', 'USB Type-C	3x USB 4.0<br>\r\nThunderbolt	Thunderbolt 4<br>\r\nHDMI	1x HDMI 2.0<br>\r\nAudio jack (3.5 mm)<br>\r\nSD card reader<br>\r\nProprietary charging port	', 'silver,gray', 30235000),
('AsVbS14XS5402', 'Asus', 'Vivobook S 14X (S5402)', '2022-05-01', ' 322.3 x 230.9 x 17.9 mm (12.69 x 9.09 x 0.7 inche', '1.63 kg (3.59 lbs)', '2880 x 1800 14.5 inches OLED 120 Hz', 'Windows 10 Pro', 'Intel Core i5 12500H 2.5 GHz', 'Intel Iris Xe Graphics G7 (80EU)', '4GB DDR4', ' 256GB SSD (M2)', 'Wi-Fi standard	v6E<br>\r\nBluetooth	v5.2', 'webcam 1280 x 720<br>\r\nFingerprint<br>\r\nbacklight keyboard', '70 Wh Li-Ion', 'USB-A	2x USB 3.2\r\nUSB Type-C	2x USB 3.2\r\nThunderbolt	Thunderbolt 3.2\r\nHDMI	1x HDMI 2.0', 'Black, Silver, Gray', 17974568),
('asVBS16X', 'Asus', 'Vivobook S 16X OLED', '2022-05-01', '357.6 x 252.4 x 17.9 mm (14.08 x 9.94 x 0.7 inches', '1.8 kg (3.97 lbs)', '2560 x 1600 16 inches 	IPS LCD 60 Hz', 'Windows 10 Pro', 'Intel Core i5 12500H', 'Intel Iris Xe Graphics G7 (80EU)', '8GB 3200 MHz DDR4', '512GB SSD (M2)', 'Wi-Fi standard	v6E<br>\r\nBluetooth	v5.2', 'webcam 1280 x 720', '70 Wh Li-Po ', 'USB-A	2x USB 3.2<br>\r\nUSB Type-C	2x USB 4.0<br>\r\nThunderbolt	Thunderbolt 4<br>\r\nHDMI	1x HDMI 2.0<br>\r\nAudio jack (3.5 mm)', 'black,silver,gray', 19529000),
('asX441UV', 'ASUS', 'X441UV', '2016-01-01', '348 x 242 x 27.6 mm', '1.75kg', '1366 x 768pixels, 14Inch', 'Windows 10 Home', 'Intel Core i3 6006U (Dual Core, 2 GHz)', 'NVIDIA GeForce 920MX 2GB', '4GB (1x4GB) 1600MHz DDR4', '500GB HDD Sata', '802.11a/b/g/n/ac', 'webcam', '', 'Thunderbolt\r\nVGA\r\nUSB Type-C\r\nUSB 3.0\r\nHDMI\r\nUSB\r\nCard Reader\r\nDVI\r\nDisplayPort\r\nHeadphone Jack', '-Silver Black<br>\n-Black Gold<br>\n-White<br>\n-green turquoise<br>\n-red black', 5700000),
('dllAWx17R2', 'Alienware', 'Alienware x17 R2', '2022-01-01', '399.2 x 299.5 x 12.9-17.1 mm (15.72 x 11.79 x 0.51', '3.02 kg (6.66 lbs)', '1920 x 1080 (360Hz) 17.3 inches IPS LCD', 'Windows 11 Home', 'Intel Core i7 12700H 2.3 GHz', 'GeForce RTX 3080 Ti Mobile 16GB', '32GB 4800 MHz DDR5', '1024GB SSD (M2)', 'Wi-Fi standard	v6E<br>\r\nBluetooth	v5.2', 'Webcam 1280 x 720\r\nbacklight keyboard', '87 Wh Li-Ion ', 'USB-A	2x USB 3.2<br>\r\nUSB Type-C	2x USB 3.2<br>\r\nThunderbolt	Thunderbolt 4<br>\r\nHDMI	1x HDMI 2.1<br>\r\nAudio jack (3.5 mm)<br>\r\nEthernet (RJ45)', 'White', 38187640),
('dllE7450', 'DELL', 'E7450', '2015-01-01', ' 337.0 x 20.4 x 231.5 mm', '3.43lbs / 1.56kg', '1920x1080 pixels, 14 inch', 'Windows 7 Professional English/French 64bit (Includes Windows 8.1 Pro License)', 'Intel® Core i5-5300U (Dual Core, 2.2GHz, 3M cache, 14nm)', 'Intel(R) HD Graphics 5500', '4GB (1x4GB) 1600MHz DDR3L Memory', '500GB Hybrid Hard Drive', 'Intel® Dual Band Wireless-AC 7265 802.11AC Wi-Fi + BT 4.0 LE Wireless Card (Indonesia)', 'webcam', '54kwh 7.4v ', '3 USB 3.0\r\nHDMI\r\nmDP\r\nNetwork Connector (RJ-45)\r\nJack Audio 3,5mm', 'Black', 17000000),
('DllXPS1797202022', 'Dell', 'XPS 17 9720 (2022)', '2022-03-01', '374.4 x 248 x 19.5 mm 14.74 x 9.76 x 0.77 inches', '2.17 kg (4.78 lbs)', '1920 x 1200 17 inches IPS LCD', 'Windows 11', 'Intel Core i5 12500H', 'GeForce RTX 3050 Mobile 4GB', '8GB', '256GB SSD (M2)', 'Wi-Fi standard	v6E<br>\r\nBluetooth	v5.2', 'webcam<br>\r\nFingerprint<br>\r\n\r\n', '97wh Li-Po', 'USB Type-C	4x USB 4.0\r\nThunderbolt	Thunderbolt 4', 'Black,Silver', 27700000),
('HPEB845G9', 'HP', 'EliteBook 845 G9', '2022-01-01', '315.6 x 224 x 19.2 mm (12.43 x 8.82 x 0.76 inches)', '1.4 kg (3.09 lbs)', '1920 x 1200 14 inches IPS LCD 60 Hz', 'Windows 10 Home', 'AMD Ryzen 7 6800U​ 2.7 GHz', ' Radeon 680M', '8GB 4800 MHz DDR5', '256GB', 'Wi-Fi standard	v6E<br>\r\nBluetooth v5.2', 'webcam 	2560 x 1440\r\nbacklight keyboard', '51 Wh', 'USB-A	2x USB 3.2<br>\r\nUSB Type-C 2x USB 4.0<br>\r\nHDMI	1x HDMI 2.0<br>\r\nAudio jack (3.5 mm)', 'silver', 31710900),
('HPPvl5', 'HP', 'Pavilion 15 (2022)', '2022-04-01', '360.2 x 234 x 17.9 mm (14.18 x 9.21 x 0.7 inches)', '1.74 kg (3.84 lbs)', '1920 x 1080 15.6 inches IPS LCD', 'Windows 11 home', 'Intel Core i5 1235U 1.3 GHz', 'Intel Iris Xe Graphics G7 (80EU)', '8GB 3200 MHz DDR4', '256GB SSD (M2)', 'Wi-Fi standard	v6<br>\r\nBluetooth	v5.2', 'Webcam 1280 x 720\r\nbacklight keyboard', '41 Wh 	Li-Ion', 'USB-A	2x USB 3.2<br>\r\nUSB Type-C	1x USB 3.2<br>\r\nHDMI	1x HDMI 2.1<br>\r\nAudio jack (3.5 mm)\r\n', 'Silver', 17450000),
('HwMBD162022', 'Huawei', 'MateBook D 16 2022', '2022-05-01', '356.7 x 248.7 x 18.4 mm 14.04 x 9.79 x 0.72 inches', '1.7 kg (3.75 lbs)', '1920 x 1200 16 inches IPS LCD 60 Hz', 'Windows 11 Home', '12ᵗʰ Gen Intel® Core™ i7-12700H Processor', 'Intel Iris® Xᵉ Graphics', '16 GB', '512 GB NVMe PCIe SSD', 'Wi-Fi standard	v6\r\nBluetooth	v5.1', 'Fingerprint\r\nwebcam\r\nBacklight Keyboard', '60 Wh LiPo', 'USB-A	2x USB 3.2\r\nUSB Type-C	2x USB 3.2\r\nHDMI	1x HDMI 2.0\r\nAudio jack (3.5 mm)', 'Gray', 16999999),
('LnvY9i', 'Lenovo', 'Yoga 9i 14\" (Gen 7)', '2022-01-01', '318 x 230 x 15.2-16.5 mm (12.52 x 9.06 x 0.6-0.65 ', '1.48 kg (3.26 lbs)', '1920 x 1200 	14 inches IPS LCD 60 Hz', 'Windows 10 Home', 'Intel Core i5 1240P 1.7 GHz', 'Intel Iris Xe Graphics G7 (80EU)', ' 8GB 5200 MHz LPDDR5', '256GB SSD (M2)', 'Wi-Fi standard	v6E<br>\r\nBluetooth	v5.2', 'Fingerprint<br>\r\nWebcam 1920 x 1080<br>\r\nbacklight keyboard', '75wh', 'USB-A	1x USB 3.2<br>\r\nUSB Type-C	4x USB 3.2<br>\r\nThunderbolt	Thunderbolt 4<br>\r\nAudio jack (3.5 mm)', 'gray', 26000000),
('lnvYg7iG7', 'Lenovo', 'Yoga 7i Gen 7', '2022-01-01', '361.51 x 249.65 x 19.2 mm (14.23 x 9.83 x 0.76 inc', '1.9 kg (4.19 lbs)', '16 inches 2560 x 1600 IPS LCD 60 Hz', 'Windows 11', 'Intel Core i7 12700H', 'Intel Arc 3 A370M 4GB', '16 GB LPDDR5', '256GB SSD (M2)', 'Wi-Fi standard v6E<br>\r\nBluetooth v5.2', 'Fingerprint <br>\r\nWebcam 1920 x 1080<br>\r\nBacklight Keyboard', '71 Wh Li-Po', 'USB-A	2x USB 3.2<br>\r\nUSB Type-C	2x USB 3.2<br>\r\nThunderbolt	Thunderbolt 4<br>\r\nHDMI	1x HDMI 2.0<br>\r\nAudio jack (3.5 mm)<br>\r\nSD card reader', 'Gray<br>\r\nBlue', 13189554),
('McsftSFPro8', 'Microsoft', 'Surface Pro 8', '2021-09-01', '287 x 208 x 9.3 mm (11.3 x 8.19 x 0.37 inches)', '0.88 kg (1.94 lbs)', '2880 x 1920', 'Windows 11 Home', ' Intel Core i5 1135G7', 'Intel Iris Xe Graphics G7 (80EU)', '8GB 4266 MHz LPDDR4X', '128GB SSD (M2)', 'Wi-Fi standard	v6<br>\r\nBluetooth	v5.1', 'Webcam 1920 x 1080\r\nBacklight keyboard', '51.5 Wh', 'USB Type-C	2x USB 4.0<br>\r\nThunderbolt	Thunderbolt 4', 'Black, Silver', 20367740);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'Arif Priambudi', 'p', 'p');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indeks untuk tabel `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`kode_laptop`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
