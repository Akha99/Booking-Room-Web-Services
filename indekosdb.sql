-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 11:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indekosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` bigint(250) NOT NULL,
  `room_id` varchar(250) NOT NULL,
  `tenant_id` varchar(250) NOT NULL,
  `book_start_date` date NOT NULL,
  `book_end_date` date NOT NULL,
  `book_tr_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `room_id`, `tenant_id`, `book_start_date`, `book_end_date`, `book_tr_date`) VALUES
(29, 'M-02', 'Adam Bima', '2022-05-13', '2022-06-11', '2022-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceid` varchar(250) NOT NULL,
  `tenant_name` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `tenant_address` varchar(250) NOT NULL,
  `Zip_code` varchar(250) NOT NULL,
  `tenant_phone` bigint(12) UNSIGNED ZEROFILL NOT NULL,
  `date` int(250) NOT NULL,
  `itemname` varchar(250) NOT NULL,
  `month` int(250) NOT NULL,
  `price` int(250) NOT NULL,
  `other` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceid`, `tenant_name`, `company`, `tenant_address`, `Zip_code`, `tenant_phone`, `date`, `itemname`, `month`, `price`, `other`) VALUES
('KRR001', 'Adam Rusla', 'Klasik Room Rental', 'Jl.Pulomas Jaya', 'Jakarta Timur , 13210', 084361459908, 2022, 'Klasik Room Rental (M-01)', 1, 1000000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` bigint(250) NOT NULL,
  `room_gender` varchar(10) NOT NULL,
  `room_label` varchar(250) NOT NULL,
  `room_location` varchar(250) NOT NULL,
  `room_window` varchar(250) NOT NULL,
  `room_monthly_cost` varchar(250) NOT NULL,
  `room_availabality` varchar(250) NOT NULL,
  `room_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_gender`, `room_label`, `room_location`, `room_window`, `room_monthly_cost`, `room_availabality`, `room_description`) VALUES
(2203270001, 'Men', 'M-01', '1st Floor', 'Garden', '1.000.000', 'Unoccupied', '-'),
(2203270002, 'Men', 'M-02', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270003, 'Men', 'M-03', '1st Floor', 'Garden', '1.000.000', 'Unoccupied', '-'),
(2203270004, 'Men', 'M-04', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270005, 'Men', 'M-05', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270006, 'Men', 'M-06', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270007, 'Men', 'M-07', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270008, 'Men', 'M-08', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270009, 'Men', 'M-09', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270010, 'Men', 'M-10', '1st Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270011, 'Women', 'W-01', '2nd Floor', 'Garden', '1.000.000', 'Unoccupied', '-'),
(2203270012, 'Women', 'W-02', '2nd Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270013, 'Women', 'W-03', '2nd Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270014, 'Women', 'W-04', '2nd Floor', 'Kitchen', '1.000.000', 'Unoccupied', '-'),
(2203270015, 'Women', 'W-05', '2nd Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270016, 'Women', 'W-06', '2nd Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270017, 'Women', 'W-07', '2nd Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270018, 'Women', 'W-08', '2nd Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270019, 'Women', 'W-09', '2nd Floor', 'Hallway', '1.000.000', 'Unoccupied', '-'),
(2203270020, 'Women', 'W-10', '2nd Floor', 'Garden', '1.000.000', 'Unoccupied', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` bigint(250) NOT NULL,
  `tenant_name` varchar(250) NOT NULL,
  `tenant_address` varchar(250) NOT NULL,
  `tenant_ktp_no` bigint(16) NOT NULL,
  `tenant_phone` bigint(12) UNSIGNED ZEROFILL NOT NULL,
  `tenant_email` varchar(250) NOT NULL,
  `tenant_emergcp` varchar(250) NOT NULL,
  `tenant_emergcp_phone` bigint(12) UNSIGNED ZEROFILL NOT NULL,
  `tenant_emergcp_email` varchar(250) NOT NULL,
  `tenant_bankaccount` varchar(250) NOT NULL,
  `tenant_bankaccount_no` bigint(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `tenant_name`, `tenant_address`, `tenant_ktp_no`, `tenant_phone`, `tenant_email`, `tenant_emergcp`, `tenant_emergcp_phone`, `tenant_emergcp_email`, `tenant_bankaccount`, `tenant_bankaccount_no`) VALUES
(13432455, 'Muhammad Budi', 'Jl. Cipinang Utara', 56835877858, 084361459908, 'hanif112@gmail.com', 'Tuti Sutejo', 083327548621, 'tuti002@gmail.com', 'BCA', 12354162),
(13453489, 'Aulia Medinah', 'Jl. Balap Sepeda', 63255484636, 086774485549, 'aulmedina@gmail.com', 'Rahman Medina', 087677334999, 'rahmanmed@gmail,com', 'BCA', 25425351),
(23487284, 'Farhan Andika', 'Jl.Pemuda', 31435664562, 081355789821, 'farhanandika31@gmail.com', 'Hadi Andika', 081244357764, 'hadiandika@gmail.com', 'BRI', 36837493),
(24425434, 'Imelda Dahlia', 'Jl. Cikini', 25245245624, 088279900030, 'imeldadahlia@gmail.com', 'Deddy Kusumo', 089923337883, 'deddykus@gmail.com', 'BNI', 12312434),
(24534363, 'Raihan Wibisana', 'Jl. Mutiara', 64364646425, 083299083233, 'wibisanaraihan2@gmail.com', 'Suherman Wibisana', 082387886453, 'suhermanwib@gmail.com', 'BCA', 45245425),
(29755229, 'Juan Marko ', 'Jl.Anggrek Muda', 35872457856, 081387329655, 'juanmarko07@gmail.com', 'Sari Amalia', 085287723422, 'sariamalia@gamil.com', 'BNI', 95623390),
(34232474, 'Estella Berkamp', 'Jl. Tegalan', 46335665653, 082134548679, 'estellaberkg@gmail.com', 'Berkamp', 081342347223, 'berkamp10@gmail.com', 'BRI', 25254252),
(34553523, 'Dewi Wanda', 'Jl. Mekarsari', 47435675426, 086576567543, 'dewanda@gmail.com', 'Budi Suhardi', 082199998888, 'budisuhardi@gmail.com', 'BNI', 34665432),
(35677783, 'Bima Rizky', 'Jl. Gondangdia', 37846587465, 083321345666, 'bimarizky@gmail.com', 'Wiwit', 082322117890, 'wiwithindawati', 'BCA', 34252525),
(42423872, 'Noviarti Putri', 'Jl. Rawamangun', 37567346767, 081334548790, 'noviati2311@gmail.com', 'Hendra Rahman', 089234559800, 'hendrarahman@gmail.com', 'BRI', 27346541),
(42525452, 'Rocky Amaral', 'Jl. Kramat Jaya', 37657367365, 082234515677, 'rockyamaral21@gmail.com', 'Ferdandus Amaral', 082355663423, 'fernanmaral@gmail.com', 'BNI', 34757712),
(43567452, 'Tifanny Putri', 'Jl. Kuningan Indah', 52454552324, 089923442344, 'tifannyput3444@gmail.com', 'Wawan Utomo', 087634663212, 'wawann44@gmail.com', 'BCA', 23234234),
(45634554, 'Naura Firdha', 'Jl. Perak ', 47365746531, 082188438909, 'naurafirdha@gmail.com', 'Melinda Suhardi', 083487889893, 'melinda007@gmail.com', 'BRI', 24552334),
(45654992, 'Nicholas Ali', 'Jl. Kerawang', 23542254542, 081378347572, 'nicholasali@gmail.com', 'Ricardo Ali', 083458744334, 'ricdali@gmail.com', 'BCA', 24525242),
(53454335, 'Adam Rusla', 'Jl .Pulomas Jaya', 34535345352, 082195895098, 'adamrusla@gmail.com', 'Budi Rusla', 082344889874, 'budirusla@gmail.com', 'BNI', 42675671),
(53454335, 'Dimas Rizky A', 'Jl.Pulomas Jaya', 3584375648768643, 082195895098, 'adaad@gmail.com', 'Lisa Effendy', 083327548621, 'lisa003@gmail.com', 'BRIa', 34545321),
(58768998, 'Maryam Hamir', 'Jl. Soekarno Hatta', 14234234231, 082387874451, 'maryamhamir@gmail.com', 'Muhammad Adi', 083243223421, 'muhhaddi@gmail.com', 'BRI', 12313123),
(67856390, 'Asyrullah Ikbar', 'Jl. Haji Muhidin', 13123213142, 083487421232, 'asyrullahikbar@gmail.com', 'Mursid Ikbar', 088347734632, 'mursidikbr@gmail.com', 'BNI', 56333356),
(78906851, 'Ayu Dina', 'Jl. Haruwangi', 74657346534, 082148747434, 'ayudinaa@gmail.com', 'Wanto Eko', 082343947272, 'wantoeka@gmail.com', 'BCA', 23423423),
(89895678, 'Hilmy Firdaus', 'Jl. Pramuka Sari', 65766345643, 082347548377, 'hilmyfirdaus@gmail.com', 'Mamat Firdaus', 081387324871, 'mamatfirdaus@gmail.com', 'BNI', 32423421),
(98984553, 'Nur Izzah', 'Jl. Budi Utomo', 23742374411, 082172348367, 'nurizzah@gmail.com', 'Indah Ayuni', 081248735862, 'undahayuni@gmail.com', 'BRI', 23743654),
(123123423, 'Rafi Atha', 'Jl.Pausa', 56835877858, 082195895098, 'rafi712@gmail.com', 'Rahman Medina', 081277082836, 'tuti002@gmail.com', 'BRI', 1231221),
(23746732478, 'Adam Bima', 'Jl.Pulomas Jaya 11', 3584375648768648, 082195895093, 'adambima@gmail.com', 'Santoso', 081277082836, 'santoso@gmail.com', 'BRI', 34545321);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin1', '$2y$10$dtMOSon1a6fM4BixVG3EgOqxZxDQsC6kBXM97tOdRIEBDutkNrvGO'),
(5, 'admin2', '$2y$10$E9OO1QwEI.YELDqD30nCRe8HM/2OchTTL8DVsO4fulArxk3rXyRna'),
(13, 'deyo', '$2y$10$kyNu4dIyU3lnXRCgBzH2Hub7DIxkqTplAmJW6tgiASSNLwCbPIPB.'),
(14, 'deyo1', '$2y$10$vFhYFQmWpRDUzdzXNBhGN.pi2ZbxAgaiqwlkg/dI5.jOE7Ky5Dari');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'adamr', '$2y$10$FzSqADZyIEL.zKQGVLLfVekMx2GpfZGnCAoA9n6ObDBJrqeIy0pkm'),
(4, 'rafi', '$2y$10$kZnf.aPnDN/1.5nc4NISs.Tf6D5S9./3W/Sg9tTM9RVCIECp8EIza'),
(5, 'rafiatha', '$2y$10$OYQY21.PJnnqgghUm7At/..RF2IrAgJkzd.g/jTsWxjLJbPoaXXR2'),
(6, 'rafiathafahero', '$2y$10$NVifXM9IYhvdVRCm2Jr.l.S21yKDV03tKrfV4F4i.Spu9DqkSlhxe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`,`room_id`) USING BTREE;

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`) USING BTREE;

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`,`tenant_name`,`tenant_phone`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2203273457;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23746732479;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
