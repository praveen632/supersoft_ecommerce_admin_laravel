-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 02:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `prd_cat_id` varchar(50) NOT NULL,
  `sub_cat_id` varchar(50) NOT NULL,
  `brand_name` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `prd_cat_id`, `sub_cat_id`, `brand_name`, `status`) VALUES
(1, '1', '1', 'samsung', 1),
(2, '1', '1', 'lg', 1),
(3, '1', '2', 'sony', 1),
(4, '1', '2', 'nikon', 1),
(5, '1', '3', 'sony', 1),
(6, '1', '4', 'LG', 1),
(7, '1', '5', 'micromax', 1),
(8, '2', '6', 'sports shoes', 1),
(9, '2', '7', 'meshaa', 1),
(10, '2', '8', 'shirt', 1),
(11, '2', '9', 'jeans', 1),
(12, '2', '10', 'boxer', 1),
(13, '2', '11', 'Shirts, Tops & Tunics', 1),
(14, '2', '12', 'bra', 1),
(15, '2', '13', 'Blinkin Solid Women Black Tights', 1),
(16, '2', '14', 'sarees', 1),
(17, '2', '15', 'Fort Collins Full Sleeve Solid Women\'s Jacket', 1),
(18, '3', '16', 'engg books', 1),
(19, '3', '16', 'defence book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `item_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` enum('-1','0','1','') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `name`, `discount`, `mrp`, `image`, `status`) VALUES
(32, '1', '3', 'ddfffwsdx', '900', '1000', 'escort9183.png', '0'),
(35, '1', '3', 'ddfffwsdx', '900', '1000', 'escort9183.png', '0'),
(41, '1', '1', 'kkk', '2222', '55546', 'brand512318.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `final_payment`
--

CREATE TABLE `final_payment` (
  `finPay_id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `item_id` varchar(50) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL,
  `hash` varchar(250) DEFAULT NULL,
  `txnid` varchar(200) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `surl` varchar(100) DEFAULT NULL,
  `furl` varchar(100) DEFAULT NULL,
  `service_provider` varchar(100) DEFAULT NULL,
  `status` enum('0','1','','') NOT NULL DEFAULT '0',
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_payment`
--

INSERT INTO `final_payment` (`finPay_id`, `user_id`, `item_id`, `key`, `hash`, `txnid`, `amount`, `firstname`, `phone`, `surl`, `furl`, `service_provider`, `status`, `date`) VALUES
(1, '1', '3,3', 'IWO20zLa', 'c6e79a864a75f1c9fa58738f58e656624d140e11a2143588515fa2e3ec7653314b0b9fb8395b18d8a9817240a14395ab908a3c1cefe944d6c582baa28c9828cc', '83c7d8b729329a6e7da5', '1800', 'praveen', '8562903087', 'http://localhost/ecommerce/public/payment_success', 'http://localhost/ecommerce/public/payment_failure', 'payu_paisa', '0', '2018-06-12 10:51:29'),
(2, '1', '3,3,1', 'IWO20zLa', '9fef8dd5e78e56bda0808daf1d2d27c3b2180268f04865cb96355c69fb14a817eef085fd49dba4794c971f503c813742bd9cb65edbbef8241024d404abb11cb4', 'ad6b43e9fb6050cd119a', '4022', 'praveen', '8562903087', 'http://localhost/ecommerce/public/payment_success', 'http://localhost/ecommerce/public/payment_failure', 'payu_paisa', '0', '2018-06-12 11:47:34'),
(3, '1', '3,3', 'IWO20zLa', '260b073ad1961a4be41cbfc93e24e120348d794163ea27f1109bc934183f02105124ae4d0513b2ee8a89dca898b98a27a7effef0806e0e554d2e1c47edfa43a4', 'fe93d2231b072c2ee35f', '1800', 'praveen', '8562903087', 'http://localhost/ecommerce/public/payment_success', 'http://localhost/ecommerce/public/payment_failure', 'payu_paisa', '0', '2018-06-12 11:55:22'),
(4, '1', '3,3', 'IWO20zLa', '77c9252507ee8ce65a934cf30feb972037ece31d184ad8196e64f8aed3858e56b9a081c1c7bf54ab1967f0f68ee6a75a0e7e120277bbce1581c044a1d48d3f2b', '7f31d95f0873fffbc7d2', '1800', 'praveen', '8562903087', 'http://localhost/ecommerce/public/payment_success', 'http://localhost/ecommerce/public/payment_failure', 'payu_paisa', '0', '2018-06-12 11:56:04'),
(5, '1', '3,3', 'IWO20zLa', '67ffd9d60f3427b5fdb6fed893a90a4f957b59d60498b7929864368cc530be21f026455e63525e716aeab7af9262e655513299c0443b52c9037f70facfb058d8', '748270d748e023ae6639', '1800', 'praveen', '8562903087', 'http://localhost/ecommerce/public/payment_success', 'http://localhost/ecommerce/public/payment_failure', 'payu_paisa', '0', '2018-06-12 12:27:39'),
(6, '1', '3,3,1', 'IWO20zLa', '269f35f5eff47f228729d8009b6a888cefdda35382cebb249d07621f19e916f0641333bc82e09a3bcbfa6b43dfb1ad085ef6733b443c2a20a72a237346809453', 'dd9b49dc06245d876e1f', '4022', 'praveen', '8562903087', 'http://localhost/ecommerce/public/payment_success', 'http://localhost/ecommerce/public/payment_failure', 'payu_paisa', '0', '2018-06-12 12:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `prd_cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `package` varchar(50) DEFAULT NULL,
  `BV` varchar(50) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `mrp_aft_dis` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `highlight` varchar(500) DEFAULT NULL,
  `services` varchar(500) DEFAULT NULL,
  `specification` varchar(500) DEFAULT NULL,
  `mob_ram` varchar(100) DEFAULT NULL,
  `mob_colore` varchar(100) DEFAULT NULL,
  `mob_option` varchar(250) DEFAULT NULL,
  `mob_prd_description` varchar(500) DEFAULT NULL,
  `laptop_operating_system` varchar(100) DEFAULT NULL,
  `laptop_old_price` varchar(100) DEFAULT NULL,
  `desktop_hurry` varchar(100) DEFAULT NULL,
  `shoes_color` varchar(100) DEFAULT NULL,
  `shoes_size` varchar(100) DEFAULT NULL,
  `top_wear_size` varchar(100) DEFAULT NULL,
  `book_auther` varchar(100) DEFAULT NULL,
  `book_more_details` varchar(250) DEFAULT NULL,
  `book_discription` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `prd_cat_id`, `sub_cat_id`, `brand_id`, `name`, `image`, `package`, `BV`, `mrp`, `discount`, `mrp_aft_dis`, `code`, `highlight`, `services`, `specification`, `mob_ram`, `mob_colore`, `mob_option`, `mob_prd_description`, `laptop_operating_system`, `laptop_old_price`, `desktop_hurry`, `shoes_color`, `shoes_size`, `top_wear_size`, `book_auther`, `book_more_details`, `book_discription`, `status`) VALUES
(1, 1, 1, 1, 'kkk', 'brand512318.png', 'P1', '33', '55546', '2%', '2222', NULL, ';mjkkl', 'mlml', 'klmk', '12', 'klm', 'kmkm', 'kjhk', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 1),
(2, 3, 16, 18, 'fsdfcdsf', '19985799_2025673904323005_1811670209644199936_n778.jpg', 'N2', '12', '2222', '12', '222', 'sfsfsd', 'sdcsd', 'dcs', 'sdcsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fgcf', 'vfvbdfbsdbddf', 'vffvfffdsddddd', 1),
(3, 2, 8, 10, 'ddfffwsdx', 'escort9183.png', 'P1', '1', '1000', '10%', '900', 'dsda', 'csdcsdc', 'csdcs', 'csdcsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_image`
--

CREATE TABLE `item_image` (
  `image_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_image`
--

INSERT INTO `item_image` (`image_id`, `image`, `item_id`) VALUES
(1, 'brand232163.gif', 1),
(2, 'brand322688.gif', 1),
(3, 'brand411353.gif', 1),
(4, 'brand512318.png', 1),
(5, '^86E714B9C9C136AF6301993762DBF7E13E90F4C9FEE39E6959^pimgpsh_fullsize_distr21624.jpg', 3),
(6, 'blog114161.jpg', 3),
(7, 'banner27574.jpg', 3),
(8, 'escort9183.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `item_location`
--

CREATE TABLE `item_location` (
  `loc_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_location`
--

INSERT INTO `item_location` (`loc_id`, `item_id`, `location`) VALUES
(1, 1, '2001'),
(2, 1, '2002');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `item_id` varchar(100) DEFAULT NULL,
  `add_id` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` enum('0','1','','') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `user_id`, `item_id`, `add_id`, `amount`, `transaction_id`, `payment_type`, `date`, `status`) VALUES
(1, '1', '3,3', NULL, '1800', '296242', 'payu', '2018-06-12 10:51:18am', '0'),
(2, '1', '3,3,1', NULL, '4022', '215635', 'payu', '2018-06-12 11:05:42am', '0'),
(3, '1', '3,3', NULL, '1800', '882297', 'payu', '2018-06-12 11:55:15am', '0'),
(4, '1', '3,3', NULL, '1800', '731836', 'payu', '2018-06-12 12:27:32pm', '0'),
(5, '1', '3,3,1', NULL, '4022', '425422', 'payu', '2018-06-12 12:40:35pm', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `pdt_cat_name` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `pdt_cat_name`, `status`) VALUES
(1, 'electronic', 1),
(2, 'footweer&cloth', 1),
(3, 'book', 1),
(4, 'wede', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(225) NOT NULL,
  `product_cat_id` varchar(11) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `sub_cat_name`, `product_cat_id`, `status`) VALUES
(1, 'Mobile', '1', '1'),
(2, 'Camera', '1', '1'),
(3, 'Laptop', '1', '1'),
(4, 'Desktop', '1', '1'),
(5, 'Tv', '1', '1'),
(6, 'Footwear', '1', '1'),
(8, 'Top Wear', '2', '1'),
(9, 'Bottom Wear', '2', '1'),
(10, 'Inner Wear & Sleep Wear', '2', '1'),
(11, 'Western Wear', '2', '1'),
(12, 'Lingerie, Sleep & Swimwear', '2', '1'),
(13, 'Sports Wear', '2', '1'),
(14, 'Ethnic Wear', '2', '1'),
(15, 'Winter & Seasonal Wear', '2', '1'),
(16, 'Entrance exams', '3', '1'),
(17, 'Academic', '3', '1'),
(18, 'Indian writing', '3', '1'),
(19, 'Biographies', '3', '1'),
(20, 'Business', '3', '1'),
(21, 'Comics', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `otp` varchar(50) DEFAULT NULL,
  `status` enum('0','-1','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`, `phone`, `otp`, `status`) VALUES
(1, 'admin', 'praveensingh632@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8562903087', '10532', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `add_id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `pin_code` varchar(100) DEFAULT NULL,
  `locality` varchar(100) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `atternate_phone` varchar(100) DEFAULT NULL,
  `address_type` varchar(100) DEFAULT NULL,
  `status` enum('0','1','','') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`add_id`, `user_id`, `pin_code`, `locality`, `address`, `city`, `state`, `landmark`, `atternate_phone`, `address_type`, `status`) VALUES
(4, '1', '2222', 'wwwq', 'qqqqqqqqqq', 'dd', 'Haryana', 'ggg', '2222222', 'Work', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `final_payment`
--
ALTER TABLE `final_payment`
  ADD PRIMARY KEY (`finPay_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_image`
--
ALTER TABLE `item_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `item_location`
--
ALTER TABLE `item_location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`add_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `final_payment`
--
ALTER TABLE `final_payment`
  MODIFY `finPay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_image`
--
ALTER TABLE `item_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item_location`
--
ALTER TABLE `item_location`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
