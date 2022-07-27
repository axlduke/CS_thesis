-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 04:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `shipping_fee` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `seller_id`, `product_name`, `quantity`, `price`, `product_description`, `product_category`, `shipping_fee`, `image`) VALUES
(1, 19, 'Black Shark', 100, 30000, 'NETWORK	Technology	 GSM / CDMA / HSPA / EVDO / LTE LAUNCH	Announced	2018, April Status	Available. Released 2018, April BODY	Dimensions	161.6 x 75.4 x 9.3 mm (6.36 x 2.97 x 0.37 in) Weight	190 g (6.70 oz) Build	Glass front, aluminum back, aluminum frame SIM	Dual SIM (Nano-SIM, dual stand-by) DISPLAY	Type	IPS LCD Size	5.99 inches, 92.6 cm2 (~76.0% screen-to-body ratio) Resolution	1080 x 2160 pixels, 18:9 ratio (~403 ppi density)  	Always-on display PLATFORM	OS	Android 8.0 (Oreo) Chipset	Qualcomm SDM845 Snapdragon 845 (10 nm) CPU	Octa-core (4x2.8 GHz Kryo 385 Gold & 4x1.8 GHz Kryo 385 Silver) GPU	Adreno 630 MEMORY	Card slot	No Internal	64GB 6GB RAM, 128GB 8GB RAM  	UFS 2.1 MAIN CAMERA	Dual	12 MP, f/1.8, 1/2.9\", 1.25µm, dual pixel PDAF 20 MP, f/1.8, 1.0µm, AF, 2x optical zoom Features	Dual-LED dual-tone flash, HDR, panorama Video	4K@30fps, 1080p@30fps, 720p@120fps SELFIE CAMERA	Single	20 MP, f/2.2, (wide), 1/2.8\", 1.0µm Video	1080p@30fps SOUND	Loudspeaker	Yes, with stereo speakers 3.5mm jack	No COMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot Bluetooth	5.0, A2DP, aptX HD, LE GPS	Yes, with A-GPS, GLONASS, BDS NFC	No Radio	No USB	USB Type-C 2.0 FEATURES	Sensors	Fingerprint (front-mounted), accelerometer, gyro, proximity, compass BATTERY	Type	Li-Ion 4000 mAh, non-removable Charging	Fast charging 18W Quick Charge 3.0 MISC	Colors	Black, Gray, Royal Blue Models	SKR-H0, SKR-A0, SHARK KSR-H0 Price	About 400 EUR', 'Mobile', 100, ''),
(2, 0, 'Black Shark 3', 100, 30000, 'NETWORK	Technology	 GSM / CDMA / HSPA / EVDO / LTE LAUNCH	Announced	2018, April Status	Available. Released 2018, April BODY	Dimensions	161.6 x 75.4 x 9.3 mm (6.36 x 2.97 x 0.37 in) Weight	190 g (6.70 oz) Build	Glass front, aluminum back, aluminum frame SIM	Dual SIM (Nano-SIM, dual stand-by) DISPLAY	Type	IPS LCD Size	5.99 inches, 92.6 cm2 (~76.0% screen-to-body ratio) Resolution	1080 x 2160 pixels, 18:9 ratio (~403 ppi density)  	Always-on display PLATFORM	OS	Android 8.0 (Oreo) Chipset	Qualcomm SDM845 Snapdragon 845 (10 nm) CPU	Octa-core (4x2.8 GHz Kryo 385 Gold & 4x1.8 GHz Kryo 385 Silver) GPU	Adreno 630 MEMORY	Card slot	No Internal	64GB 6GB RAM, 128GB 8GB RAM  	UFS 2.1 MAIN CAMERA	Dual	12 MP, f/1.8, 1/2.9\", 1.25µm, dual pixel PDAF 20 MP, f/1.8, 1.0µm, AF, 2x optical zoom Features	Dual-LED dual-tone flash, HDR, panorama Video	4K@30fps, 1080p@30fps, 720p@120fps SELFIE CAMERA	Single	20 MP, f/2.2, (wide), 1/2.8\", 1.0µm Video	1080p@30fps SOUND	Loudspeaker	Yes, with stereo speakers 3.5mm jack	No COMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot Bluetooth	5.0, A2DP, aptX HD, LE GPS	Yes, with A-GPS, GLONASS, BDS NFC	No Radio	No USB	USB Type-C 2.0 FEATURES	Sensors	Fingerprint (front-mounted), accelerometer, gyro, proximity, compass BATTERY	Type	Li-Ion 4000 mAh, non-removable Charging	Fast charging 18W Quick Charge 3.0 MISC	Colors	Black, Gray, Royal Blue Models	SKR-H0, SKR-A0, SHARK KSR-H0 Price	About 400 EUR', 'Mobile', 100, ''),
(3, 0, 'Black Shark 4', 100, 30000, 'NETWORK	Technology	 GSM / CDMA / HSPA / EVDO / LTE / 5G LAUNCH	Announced	2020, March 03 Status	Available. Released 2020, March 06 BODY	Dimensions	168.7 x 77.3 x 10.4 mm (6.64 x 3.04 x 0.41 in) Weight	222 g (7.83 oz) Build	Glass front, aluminum back, aluminum frame SIM	Dual SIM (Nano-SIM, dual stand-by) DISPLAY	Type	AMOLED, 90Hz, HDR10+, 500 nits (typ) Size	6.67 inches, 107.4 cm2 (~82.4% screen-to-body ratio) Resolution	1080 x 2400 pixels, 20:9 ratio (~395 ppi density)  	Always-on display PLATFORM	OS	Android 10 Chipset	Qualcomm SM8250 Snapdragon 865 5G (7 nm+) CPU	Octa-core (1x2.84 GHz Cortex-A77 & 3x2.42 GHz Cortex-A77 & 4x1.80 GHz Cortex-A55) GPU	Adreno 650 MEMORY	Card slot	No Internal	128GB 8GB RAM, 128GB 12GB RAM, 256GB 12GB RAM  	UFS 3.0 MAIN CAMERA	Triple	64 MP, f/1.8, 26mm (wide), 1/1.72\", 0.8µm, PDAF 13 MP, f/2.3, (ultrawide) 5 MP, f/2.2, (depth) Features	LED flash, HDR, panorama Video	4K@30/60fps, 1080p@30/60/240fps, 720p@1920fps SELFIE CAMERA	Single	20 MP, f/2.2, (wide), 1/3\", 0.9µm Features	HDR Video	1080p@30fps SOUND	Loudspeaker	Yes, with stereo speakers 3.5mm jack	Yes COMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, hotspot Bluetooth	5.0, A2DP, LE, aptX HD, aptX Adaptive GPS	Yes, with A-GPS, GLONASS, GALILEO, QZSS, BDS NFC	No Radio	No USB	USB Type-C 2.0 FEATURES	Sensors	Fingerprint (under display, optical), accelerometer, gyro, proximity, compass BATTERY	Type	Li-Po 4720 mAh, non-removable Charging	Fast charging 65W, 100% in 38 min (advertised) Fast charging 30W (128/8 model) Magnetic charging 18W MISC	Colors	Lightning Black, Armor Gray, Star Silver Models	KLE-H0, KLE-A0 Price	About 390 EUR', 'Mobile', 100, 'Array'),
(4, 0, 'test', 0, 0, '', '', 0, ''),
(5, 0, 'test', 0, 0, '', '', 0, ''),
(6, 0, 'test', 0, 0, '', '', 0, '../img/3936115062e14920294e3.jpg'),
(7, 19, 'Black Shark 3', 100, 30000, 'Xiaomi Black Shark 3 ; Display, Type ; Size, 6.67 inches, 107.4 cm2 (~82.4% screen-to-body ratio) ; Resolution, 1080 x 2400 pixels, 20:9 ratio (~395 ppi density).', 'Mobile', 100, '../img/6326091362e1495de385a.jpg'),
(8, 19, 'Tryagain', 10, 0, '', 'qwe', 0, '../img/118564610762e14d53155b6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
