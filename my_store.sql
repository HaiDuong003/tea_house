-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2023 at 04:06 AM
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
-- Database: `my_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `category_name`) VALUES
(1, 'Cà phê'),
(2, 'Bánh ngọt'),
(3, 'Smoothies'),
(4, 'Trà hoa quả');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int NOT NULL,
  `content` varchar(1000) NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `time_send` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id_position` int NOT NULL,
  `position_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `position_name`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` double DEFAULT '0',
  `image` varchar(199) NOT NULL,
  `description` varchar(255) NOT NULL,
  `input_time` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `id_categories` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `product_name`, `price`, `image`, `description`, `input_time`, `discount`, `id_categories`) VALUES
(5, 'Trà Phúc Bồn Tử', 40000, 'phucbontu.webp', 'Từ lâu, trà phúc bồn tử đã là một loại trà nổi tiếng ở phương Tây. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n\r\n', 'October 13, 2022 08:13:02', 0, 4),
(6, 'Trà Vải', 40000, 'travai.webp', 'Từ lâu, trà phúc bồn tử đã là một loại trà nổi tiếng ở phương Tây. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n', 'October 13, 2022 08:42:44', 0, 4),
(7, 'Trà Cam Đào', 40000, 'tracamdao.webp', 'Từ lâu, trà cam đào đã là một loại trà nổi tiếng ở Việt Nam. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n', 'October 13, 2022 08:43:40', 0, 4),
(8, 'Trà Táo', 40000, 'tratao.webp', 'Từ lâu, trà Táo đã là một loại trà nổi tiếng ở phương Tây. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n', 'October 13, 2022 08:44:02', 0, 4),
(9, 'Trà Việt Quất', 40000, 'travietquat.webp', 'Từ lâu, trà Việt Quất đã là một loại trà nổi tiếng ở phương Tây. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n', 'October 13, 2022 08:44:34', 0, 4),
(10, 'Trà Dâu Tây', 40000, 'tradautay.webp', 'Từ lâu, trà dâu tây đã là một loại trà nổi tiếng ở phương Tây. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n', 'October 13, 2022 08:44:57', 0, 4),
(11, 'Trà Xoài', 40000, 'traxoai.webp', 'Từ lâu, trà Xoài đã là một loại trà nổi tiếng ở phương Tây. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n', 'October 13, 2022 08:45:16', 0, 4),
(12, 'Trà Chanh', 40000, 'trachanh.webp', 'Từ lâu, trà chanh đã là một loại trà nổi tiếng ở Việt Nam. Chúng không những là thức trà ngon ngọt, mà còn mang đến nhiều công dụng cho sức khỏe.\r\n', 'October 13, 2022 08:46:01', 0, 4),
(13, 'Cà phê trứng', 40000, 'coff4-removebg-preview.png', 'chưa có mô tả', 'October 14, 2022 04:55:32', 0, 1),
(14, 'Bánh dâu', 50000, 'cake2-removebg-preview.png', 'chưa có mô tả', 'October 14, 2022 05:04:16', 0, 2),
(15, 'Sinh tố việt quất', 40000, 'Blueberry-Smoothie-SpendWithPennies-3-removebg-preview.png', 'chưa có mô tả', 'October 14, 2022 05:08:31', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(199) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `id_position` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `avatar`, `id_position`) VALUES
(16, 'HaiDuong12', '123', 'duongph24202@gmail.com', '2e177925fe64da5eceb9b02b1a8f30c1.jpg', 2),
(18, 'admin', 'admin', 'asdasd@ssdf.adsa', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id_vote` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `stars` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `cart_product` (`id_product`),
  ADD KEY `user_cart` (`id_user`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `user_comment` (`id_user`),
  ADD KEY `product_comment` (`id_product`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `product_categories` (`id_categories`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_position` (`id_position`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `user_vote` (`id_user`),
  ADD KEY `vote_porduct` (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id_vote` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_cart` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `product_comment` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_comment` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_categories` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_position` FOREIGN KEY (`id_position`) REFERENCES `position` (`id_position`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `user_vote` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_porduct` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
