-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2022 at 03:13 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nicorinapena_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `description`, `thumbnail`, `images`) VALUES
(1, 'Logo Crossbody by Steve Madden', 24.99, 'Bags', '2022-04-24 14:08:24', 'Product Detail:\r\n\r\n-Black & White\r\n-Synthetic Leather\r\n-Adjustable Strap', 'img_7.jpeg', 'img_7.jpeg'),
(2, 'Houndstooth Print Crossbody by Michael Kors', 59.94, 'Bags', '2022-04-24 14:08:24', 'Product Details:\r\n\r\n-Houndstooth print\r\n-Faux Leather\r\n-Black & White\r\n-Adjustable strap', 'img_1.JPG', 'img_1.JPG'),
(3, 'Limited Edition Candy Love Perfume by Escada', 24.99, 'Perfume', '2022-04-24 14:46:48', 'Product Details:\r\n\r\n- Comes with a cute hear shape container\r\n- Valentine Collection\r\n- 30 ml (1 fl. oz)', 'img_2.jpg', 'img_2.jpg'),
(4, 'Glow Perfume by J.Lo', 19.99, 'Perfume', '2022-04-24 14:46:48', 'Product Details:\r\n\r\n- 100 ml (3.4 fl.oz.)', 'img_3.jpg', 'img_3.jpg'),
(5, 'Maroon Sports Sling Bag by Addidas', 24.99, 'Bags', '2022-04-24 14:52:13', 'Product Details:\r\n\r\n- Maroon\r\n- Sports Bag\r\n- Adjustable Strap', 'img_4.jpg', 'img_4.jpg'),
(6, 'Red Sling Bag by Tommy Hilfiger', 12.99, 'Bags', '2022-04-24 14:52:13', 'Product Details:\r\n\r\n- Red\r\n- Synthetic Leather\r\n- Adjustable Strap', 'img_5.jpg', 'img_5.jpg'),
(7, 'Cognac Tote by Tommy Hilfiger', 24.99, 'Bags', '2022-04-24 14:55:52', 'Product Details:\r\n\r\n- Spacious Bag\r\n- Cognac/ Brown Color\r\n- Synthetic Leather\r\n- Mini Pouch included', 'img_6.jpg', 'img_6.jpg'),
(8, 'Blue Logo Slingbag by Converse', 12.99, 'Bags', '2022-04-24 14:55:52', 'Product Details:\r\n\r\n- Textured Converse Logo\r\n- Sports/ Casual bag\r\n- Could fit a small wallet and phone', 'img_8.jpeg', 'img_8.jpeg'),
(9, 'Multicolored Flip-flops by Tommy Hilfiger', 12.99, 'Footwear', '2022-04-24 14:59:51', 'Product Details:\r\n\r\n- Size 8', 'img_9.jpeg', 'img_9.jpeg'),
(10, 'Stripes Flipflops by Tommy Hilfiger', 12.99, 'Footwear', '2022-04-24 14:59:51', 'Product Details:\r\n\r\n- Size 8', 'img_10.jpeg', 'img_10.jpeg'),
(11, 'Flag Flip-flops by Tommy Hilfiger', 12.99, 'Footwear', '2022-04-24 15:03:26', 'Product Details:\r\n\r\n- Size 8', 'img_11.jpeg', 'img_11.jpeg'),
(12, 'Graffiti Slingbag by DKNY', 24.99, 'Bags', '2022-04-24 15:03:26', 'Product Details:\r\n\r\n- Sytheric Leather\r\n- Adjustable Strap', 'img_12.jpg', 'img_12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
