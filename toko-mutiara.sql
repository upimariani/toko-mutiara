-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 05:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-mutiara`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dummy`
--

CREATE TABLE `data_dummy` (
  `id_dummy` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `qty` varchar(15) NOT NULL,
  `netsale` varchar(15) NOT NULL,
  `profit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dummy`
--

INSERT INTO `data_dummy` (`id_dummy`, `nama_produk`, `qty`, `netsale`, `profit`) VALUES
(1, 'Gula Psr Lokal I/2kg', '2257', '14617000', '1817490'),
(2, 'Mb.Minyak Telon Pls 85', '273', '6736400', '1176600'),
(3, 'Indomilk Kids Ckl 115m', '1486', '3858700', '419456'),
(4, 'Indomie Aym Bwg 69g', '2250', '5611200', '451857'),
(5, 'Masker S Polos', '22', '165000', '110000'),
(6, 'Real Good S.Choco 60ml', '1547', '1469650', '143929'),
(7, 'Fresco Kopi Cream 10\'s', '381', '2658500', '187624'),
(8, 'Paramex 4\'s', '431', '1034400', '193280'),
(9, 'Garuda Rosta Rs Bwng 25g', '348', '626400', '68611'),
(10, 'Eskulin Shp Donald 45ml', '45', '157500', '32852'),
(11, 'Dancow 3+Pbio3 Madu 200g', '73', '1715500', '98766'),
(12, 'Oishi Panchos Jg Pds 160', '365', '1574800', '149073'),
(13, 'Lifebuoy Bw Cool 450ml Rf', '36', '962000', '144650'),
(14, 'Kuas Pagoda 7.8', '12', '48000', '30500'),
(15, 'Popok Alan B Era', '9', '49500', '28125'),
(16, 'Walls Populer Cho Van', '1236', '6180000', '1200400'),
(17, 'Moko Moko M19', '19', '674400', '51180'),
(18, 'Oskadon Sp/4 Tab', '373', '671400', '116141'),
(19, 'Sabun L.Buaya 900p', '115', '621000', '126449'),
(20, 'Kopi K.Api Spc Mix25g*10\'s', '2998', '31490400', '677656'),
(21, 'Pudding Susu Strw 145g', '391', '3870600', '154109'),
(22, 'Okky J.Drink Bblgum', '290', '261000', '14548'),
(23, 'Teh Rio Gula Bt 200m', '67', '56950', '6030'),
(24, 'Cutter Jk A 300a', '24', '152000', '57333'),
(25, 'Ekonomi E2k Kantong', '123', '2530700', '285445'),
(26, 'Kertas Kado Kiki Kcl', '331', '496500', '271420'),
(27, 'Torabika Creamy Latte', '459', '642600', '174449'),
(28, 'Promina Puff Str+Apl 15', '265', '1431000', '235877'),
(29, 'Wcc Pudding Guava 120gr', '176', '739200', '153582'),
(30, 'Oreo Coklat 38g', '17', '32300', '4418'),
(31, 'Djarum Coklat 12', '4546', '61371000', '3039400'),
(32, 'Richees Rol Kj 43gr', '503', '952000', '164746'),
(33, 'Kecap Abc Mns 275m', '34', '500400', '43704'),
(34, 'Madu Tj Super 250g', '22', '611600', '53356'),
(35, 'Sania Mg 2lt Pch', '862', '26409300', '1577808'),
(36, 'Filma Mgrn Salt 200g', '362', '1789400', '134202'),
(37, 'Uleg Sbl Rawit 20g/Pak', '30', '360000', '33604'),
(38, 'Indomie Grg Rendang', '2423', '6618100', '720685'),
(39, 'Indomie Grg Iga Penyet', '1416', '3826900', '357794'),
(40, 'Shinzui Soap Myori 90gr', '272', '1038600', '77645'),
(41, 'Hufagripp Tmp 60ml', '16', '272600', '31250'),
(42, 'Frestea Jasmine Cup 300ml', '1567', '3251000', '709458'),
(43, 'Aircup Btl 600ml', '57', '74100', '15022'),
(44, 'Pulpen Hitech Pilot', '13', '299000', '60667'),
(45, 'Bigbabol Crm Strw Stck 20', '546', '928200', '135050'),
(46, 'Rinso Molto 250g', '168', '789600', '75600'),
(47, 'Real Good F.Blackrn 60ml', '544', '516800', '61458'),
(48, 'So Nice Sosis Sapi 1 \'S', '3065', '2911750', '545247'),
(49, 'Frestea Markisa 350', '387', '1548000', '500450'),
(50, 'Susan C.Bud Spd 620', '225', '921600', '142245'),
(51, 'Cb Powder Mld&Gntl 50g', '52', '197600', '16613'),
(52, 'Biore Bf Chocobery 250rf', '2', '26800', '4030'),
(53, 'Pagoda Pstls Mint 10g', '58', '220400', '22620'),
(54, 'Gery Chocolatos Kj 33g Fam', '268', '482400', '60016'),
(55, 'Richoco Roll Ckl 8g/Box', '107', '909500', '47871'),
(56, 'Tali Masker', '441', '3305000', '1315500'),
(57, 'Daster Bcl', '2', '141000', '25000'),
(58, 'Hit Mat Green Tea 18+6', '226', '1288200', '184251'),
(59, 'Viva F.Tonic Lemon 100ml', '77', '408100', '44915'),
(60, 'Sunlight Lime Rf 220ml', '1954', '9433100', '950676'),
(61, 'Sasa 250gr', '378', '3803000', '303754'),
(62, 'Kispray Violet 8ml*6\'s', '210', '567000', '64436'),
(63, 'Lord Blue Plus Ii', '94', '573400', '59400'),
(64, 'Bendera Cair Swis C 180ml', '85', '331500', '52403'),
(65, 'Ades Botol 1.5ml', '130', '572000', '159613'),
(66, 'Beng-Beng Kelapa 24g', '747', '1373300', '245992'),
(67, 'Pop Ice Avocado 25g*5\'s', '262', '1310000', '137267'),
(68, 'Molto All In1 Blue 800ml', '32', '870600', '91624'),
(69, 'Soffell Apel 6g*6', '59', '159300', '29552'),
(70, 'Downy Daring 20ml*6', '124', '657200', '49682'),
(71, 'Zinc Shp Cln&Act 70ml', '35', '306200', '28575'),
(72, 'Citra Hbl Night Wht 230ml', '16', '348800', '6733'),
(73, 'Richoco Roll Cklt 43g', '341', '640850', '103848'),
(74, 'Mitu Milk Bath Btl 200ml', '8', '144100', '14344'),
(75, 'Mi-Won 100gr', '118', '506200', '54325'),
(76, 'Sg Formula Protec Soft', '4', '8799926', '982'),
(77, 'Pop Ice Mocacino 25g*5\'s', '34', '173400', '20818'),
(78, 'Kertas Kado Kiki Batik', '147', '220500', '120350'),
(79, 'Papan Ujian 2 Dimensi', '39', '390000', '113750'),
(80, 'Drs Kuyirva 56289', '5', '360000', '85000'),
(81, 'Mama Lime Charcl 400 Bt', '16', '187200', '17600'),
(82, 'Shinzui Soap Kensho 90gr', '225', '856200', '62275'),
(83, 'Nextar Nastar 42gr', '320', '623100', '107228'),
(84, 'Vaneli Bdt 10\'s', '823', '1234500', '546225'),
(85, 'Hot In Cream Strong 60ml', '48', '704300', '62510'),
(86, 'Soklin Liq Red 24ml*6', '1286', '3536500', '626380'),
(87, 'Mie Sedap Korea Spicy', '1084', '2911800', '378242'),
(88, 'Jam Tangan 42500', '12', '510000', '231000'),
(89, 'Cho Cho Wf Snack Crsp 33g', '187', '991100', '60937'),
(90, 'Downy Swethrt 20ml*6', '100', '530000', '35103'),
(91, 'Sabut Stainles 40 Hkf', '203', '1218000', '506733'),
(92, 'Zw Soap Milk&Hny 80g', '136', '585600', '93152'),
(93, 'Alkaline Aa Lr-06 2\'s', '79', '987500', '133908'),
(94, 'Saori S.Teriyaki 30gr', '176', '436050', '48850'),
(95, 'Proclin P.Noda 6*25ml', '52', '265200', '36312'),
(96, 'Aqua Galon Isi Ulang', '1079', '21040500', '3452800'),
(97, 'Sendok Bebek 24\'s', '187', '355300', '174550'),
(98, 'Roma Sand Pnt 216g', '259', '1459500', '159898'),
(99, 'Sg Formula Trendy S', '136', '380800', '43310'),
(100, 'Promina Tm Ay&Tmtwtl 100', '8', '121600', '21769'),
(101, 'Gulaku Kng 500gr', '199', '1492500', '199000'),
(102, 'Aci Spm 1kg', '1284', '9386500', '1327309'),
(103, 'Yupi Exotic Mango 10g', '309', '154500', '28969'),
(104, 'Laurier Spr Maxi 10\'pds', '117', '576300', '60895'),
(105, 'Bendera 3+ Madu 360g', '34', '966000', '41517'),
(106, 'Esse Berry Pop', '136', '3198200', '206200'),
(107, 'Teh Pucuk Jasmin 250ml', '852', '2130000', '228821'),
(108, 'Hula Cup Durian 80ml', '82', '574000', '114802'),
(109, 'Gil Goal Klik Hc', '27', '194400', '5599'),
(110, 'Mens Biore Fw Energy 40g', '28', '390900', '37635'),
(111, 'Soklin Liq Wht&Brt 24ml*6', '1135', '3121250', '567199'),
(112, 'Nestle Kokokrnch Cmbo 32g', '352', '2591500', '266507'),
(113, 'Tim Tam Bisc Choco 16g', '142', '134900', '17778'),
(114, 'Roma Slai O\'lai Blb 24g', '163', '154850', '23597'),
(115, 'Fullo Blasto Cklt 16g', '49', '44400', '5571'),
(116, 'Zee Rtd Cklt 200ml', '74', '377400', '38460'),
(117, 'Milna Puff Keju 15g', '231', '1778700', '170369'),
(118, 'Abc Smbl Terasi 23g', '102', '1305600', '128308'),
(119, 'Sg Dr White Clean', '41', '98400', '12300'),
(120, 'Lux Ts Pink S.Rose 85g', '125', '400000', '50000'),
(121, 'Rinso Molto Prfm Essen 770g', '43', '934400', '79236'),
(122, 'Mie Sedap Cup Korea Spc', '80', '345800', '77273'),
(123, 'Bihun Jg Padamu Kng 200g', '708', '2053350', '234863'),
(124, 'Harmony Green Apple 70g', '201', '402000', '102093'),
(125, 'Sweety Fit Pants M18', '99', '3871600', '512354'),
(126, 'Isi Etona No.10', '270', '486000', '141480'),
(127, 'Marina Hbl Nou&Healt 100m', '38', '186200', '35559'),
(128, 'Komix Jahe 7m', '123', '189200', '27854'),
(129, 'Patrick Stik 65ml', '450', '2250000', '450007'),
(130, 'Merris Pants S11', '176', '3201550', '306550'),
(131, 'Taro Net Potato 9g', '1997', '1947075', '289555'),
(132, 'Kutex Nail Polish', '20', '60000', '18000'),
(133, 'Charm Bf Sc Ngt Wg 29-10p', '144', '1262200', '115714'),
(134, 'Tea Jus Lemon 8g*10\'s', '153', '474300', '53550'),
(135, 'Mamypoko Pants Stand S1', '183', '420900', '102790'),
(136, 'Sg Formula Jun Walrus', '51', '335300', '33890'),
(137, 'Pepsodent Tb D.C Cln Mp2', '66', '1127100', '105452'),
(138, 'Vaselin Hbl Hw Ins Fair95', '88', '476600', '80708'),
(139, 'Sdl Spon Wakat', '2', '20000', '8000'),
(140, 'Madu Tj Jrk 20gr', '262', '196500', '25070'),
(141, 'Cb Gift Box B', '8', '752000', '105200'),
(142, 'Dancow 1+Pbio1 Madu 400g', '63', '3231900', '176994'),
(143, 'Vaneli Spr Kupu', '180', '270000', '145092'),
(144, 'Fullo Blasto Cklt 16g/ Box', '8', '109600', '8350'),
(145, 'Lactogen 2 Gold 350g', '59', '3444300', '142772'),
(146, 'Mesis Kupu Warna', '83', '182600', '23517'),
(147, 'Giv Soap Tin&Zaitun', '259', '531500', '66610'),
(148, 'Teh Tong Tji J.Tea 5\'s', '364', '642800', '60800'),
(149, 'Stmj Cklt 30g', '37', '72150', '10064'),
(150, 'Gembok 40 Pj', '19', '329000', '145333');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_produk`, `qty`) VALUES
(1, 1, 3, 3),
(2, 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_diskon` varchar(125) NOT NULL,
  `diskon` int(11) NOT NULL,
  `tgl_diskon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_produk`, `nama_diskon`, `diskon`, `tgl_diskon`) VALUES
(1, 2, 'sale! of day', 5, '2023-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kecamatan` varchar(125) NOT NULL,
  `ongkir` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kecamatan`, `ongkir`) VALUES
(1, 'Kuningan', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'pelanggan A', 'Kuningan, Jawa Barat', '089987656543', 'pelangganA', 'pelangganA');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `stat_produk` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `nama_produk`, `keterangan`, `harga`, `stok`, `stat_produk`, `gambar`) VALUES
(2, 1, 'Produk A', 'pcs', '12000', 120, 0, 'blank-profile-picture-973460_1280.png'),
(3, 1, 'Produk B', 'pcs', '15000', 200, 0, 'blank-profile-picture-973460_12801.png'),
(4, 1, 'Produk C', 'pcs', '21000', 129, 0, 'blank-profile-picture-973460_12802.png'),
(5, 1, 'Produk D', 'pcs', '23000', 234, 0, 'blank-profile-picture-973460_12803.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tgl_transaksi` varchar(15) NOT NULL,
  `tot_bayar` varchar(15) NOT NULL,
  `stat_order` int(11) NOT NULL,
  `bukti_bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_ongkir`, `tgl_transaksi`, `tot_bayar`, `stat_order`, `bukti_bayar`) VALUES
(1, 1, 1, '2023-08-30', '75000', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dummy`
--
ALTER TABLE `data_dummy`
  ADD PRIMARY KEY (`id_dummy`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_dummy`
--
ALTER TABLE `data_dummy`
  MODIFY `id_dummy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
