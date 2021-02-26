-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 08:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grupinis`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_seller` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_participants` int(11) NOT NULL,
  `product_duration` int(11) NOT NULL,
  `product_valid_time` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_seller`, `product_image`, `product_location`, `product_price`, `product_participants`, `product_duration`, `product_valid_time`, `created_at`) VALUES
(1, 'Nakvynė viešbutyje VILNIA su pusryčiais dviems', 'hotel Vilnia', 'https://cf.bstatic.com/images/hotel/max1024x768/174/174438942.jpg', 'Vilnius', 30, 2, 1, '2021-05-31', '2021-02-25 21:28:59'),
(2, '2 nakvynės Grand SPA LIETUVA su neribotomis vandens pramogomis', 'Grand Spa Lietuva', 'https://cf.bstatic.com/images/hotel/max1280x900/172/17218930.jpg', 'Kaunas', 69, 2, 2, '2021-04-15', '2021-02-25 21:29:07'),
(3, 'Nakvynė dviems asmenims su basenų kompleksu', 'Viešbutis ROMANTIC', 'https://renginiai.kasvyksta.lt/uploads/places/490/1028.jpg', 'Panevėžys', 25, 2, 1, '2021-09-30', '2021-02-25 19:19:16'),
(4, 'Trys nakvynės dviems asmenims su pusryčiais liux klasės apartamentuose', 'Nakvynės namai', 'https://cf.bstatic.com/images/hotel/max1024x768/743/74374521.jpg', 'Vilnius', 200, 2, 3, '2021-03-31', '2021-02-26 00:17:44');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
