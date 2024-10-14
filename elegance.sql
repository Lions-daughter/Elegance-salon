-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 01:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elegance`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `service` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `date`, `time`, `service`) VALUES
(19, 'warda', 'warda@gamil.com', '2024-09-18', '17:29:00.000000', 'day makeup'),
(37, 'atiya', 'atiya@gmail.com', '2024-09-26', '16:08:00.000000', 'day makeup'),
(38, 'abc', 'abc@gmail.com', '2024-09-13', '00:00:00.000000', ' makeup'),
(39, 'eshal khan', 'eshalkhan@gmail.com', '2024-09-30', '23:54:00.000000', 'Make Up'),
(40, 'Hafsa Alam', 'hafsaalam445@gmail.c', '2024-10-11', '20:37:00.000000', 'Hair Care');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_name` varchar(50) DEFAULT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_name`, `cat_id`) VALUES
('Hair Care', 2),
('Make Up', 1),
('Skin Care', 3),
('Wax & hair removal', 4);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_email` varchar(20) NOT NULL,
  `f_sugg` varchar(100) NOT NULL,
  `service` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `f_name`, `f_email`, `f_sugg`, `service`) VALUES
(1, 'atiya', 'atiya@gmail.com', 'I like your service', 'makeup'),
(4, 'sohail', 'sohail@gmail.com', 'i like your service', '1'),
(5, 'sohail', 'sohail@gmail.com', 'i like your service', '1'),
(6, 'sara', 'sarakhan534@gmail.co', 'i like your service', 'Hair Care'),
(7, 'jamil', 'jamil@gmail.com', 'i like your service', 'Make Up'),
(8, 'jamil', 'jamil@gmail.com', 'i like your service', 'Make Up'),
(10, 'yusra', 'hafsaalam445@gmail.c', 'i like your service', ''),
(18, 'ALISHA khan', 'alisha@gmail.com', 'i like your service', 'Skin '),
(21, 'eshal khan', 'eshalkhan@gmail.com', 'i like your makeup service', 'Make Up');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `prod_name`, `order_price`, `order_date`, `order_user_id`) VALUES
(1, 'compact powder', 800, '2024-08-11', 13),
(2, 'Hair removal oil', 1500, '2024-08-16', 32),
(22, 'facial kit', 2024, '0000-00-00', 1),
(23, 'Hair mask', 5000, '2024-09-10', 44),
(24, 'Bleaching powder', 1000, '2024-09-10', 44),
(25, 'Hair mask', 5000, '2024-09-10', 45),
(26, 'body mask', 4000, '2024-09-10', 45),
(27, 'Hair mask', 5000, '2024-09-10', 46),
(28, 'Bleaching powder', 1000, '2024-07-18', 46),
(29, 'Hair mask', 5000, '2024-09-10', 47),
(30, 'Facial kit', 30000, '2024-10-19', 47),
(31, 'Facial kit', 2024, '0000-00-00', 47),
(32, 'special Facial kit', 3000, '2024-09-20', 47),
(33, 'Facial kit', 2023, '0000-00-00', 47),
(34, ' kit', 25454, '2024-11-12', 47),
(35, 'hair keratin', 8000, '2024-09-25', 44),
(36, 'Hair mask', 5000, '2024-09-27', 50),
(37, 'Facial kit', 10000, '2024-09-27', 50),
(38, 'make up fixer', 1200, '2024-10-13', 42);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(255) DEFAULT NULL,
  `product_desc` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_cat_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_desc`, `product_image`, `product_price`, `product_cat_id`, `product_id`) VALUES
('Foundation', 'Makeup foundation is a cosmetic product used to create an even skin tone and cover imperfections', 'assets/images/foundation.jfif', 4000, 1, 1),
('Hair mask', 'A hair mask is a deep conditioning treatment designed to nourish, repair, and hydrate your hair', 'assets/images/hair mask.jpg', 5000, 2, 2),
('hair oil', 'Hair oil is a nourishing treatment applied to the hair to enhance moisture, shine, and manageability.', 'assets/images/hair oil.jpg', 2000, 2, 3),
('hair developer', 'Hair developer is a chemical solution used in conjunction with hair dye to activate and process the color.', 'assets/images/developer.jpg', 3000, 2, 5),
('hair keratin', '\nA hair keratin treatment is a smoothing procedure that infuses the hair with keratin, a natural protein, to reduce frizz, enhance shine, and improve manageability', 'assets/images/keratin.jpg', 8000, 2, 6),
('hair color', 'Hair color is a cosmetic product used to alter the natural color of your hair. It can add vibrant shades, cover grays, or create highlights, offering various options', 'assets/images/hair color.jpg', 8000, 2, 7),
('Hair Rebounding', 'Hair rebounding is a chemical treatment that straightens and smooths hair by breaking and restructuring its bonds', 'assets/images/Rebounding.jpg', 15000, 2, 8),
('Bleaching powder', 'Bleaching powder is a strong chemical used to lighten hair by removing its natural pigment.', 'assets/images/bleach.jpg', 1000, 3, 9),
('Facial kit', 'A facial is a skincare treatment designed to cleanse, exfoliate, and nourish the face. ', 'assets/images/facial kit.jpg', 10000, 3, 10),
('body mask', 'A body mask is a skincare treatment applied to the body to detoxify, hydrate, or exfoliate the skin.', 'assets/images/body mask.jpg', 4000, 3, 11),
('body lotion', 'Body lotion is a moisturizing product applied to the skin to hydrate and soften it.', 'assets/images/body lotion.jpg', 3000, 3, 12),
('skin serum', 'A skin serum is a concentrated skincare product designed to deliver active ingredients deep into the skin.', 'assets/images/serum.jpg', 3500, 3, 13),
('face wash ', 'A face wash is a cleansing product used to remove dirt, oil, and impurities from the skin.', 'assets/images/wash.jpg', 1500, 3, 14),
('face scrub', 'A face scrub is an exfoliating product that uses small, abrasive particles to remove dead skin cells and unclog pores.', 'assets/images/face scrub.jpg', 1000, 3, 15),
('Body shiner', 'A body shiner is a beauty product designed to enhance the appearance of the skin by adding a subtle shimmer or glow.', 'assets/images/skin shine.jpg', 4000, 3, 16),
('skin polish', 'Skin polish is an exfoliating treatment that removes dead skin cells and smooths the skin’s surface.', 'assets/images/face polish.jpg', 2500, 3, 17),
('hydroxy clay facial', 'A hydroxy clay facial is a skincare treatment that combines the purifying properties of clay with hydroxy acids.', 'assets/images/hydroxy facial.jpg', 6000, 3, 18),
('Aleovera body wax', 'Body wax is a hair removal method that involves applying a layer of warm or cold wax to the skin, then quickly removing it along with unwanted hair', 'assets/images/alovera wax.jpg', 3000, 4, 19),
('warm wax', 'Warm wax is a hair removal product heated to a comfortable temperature before application', 'assets/images/zinc wax.jpg', 4000, 4, 20),
('soothing lotion', 'After wax lotion is a soothing product applied post-waxing to calm the skin and reduce irritation', 'assets/images/soothing lotion.jpg', 1000, 4, 21),
('Hair removal oil', 'Hair removal oil  is a product designed to dissolve and remove unwanted hair while moisturizing the skin.', 'assets/images/removal.jpg', 1500, 4, 22),
('blush', 'Blush is a warm color that combines red and pink tones, often associated with a gentle, romantic, and soothing feeling.', 'assets/images/blush.jfif', 1500, 1, 23),
('compact powder', '\nCompact powder is a pressed powder makeup product used to set foundation, reduce shine, and provide a matte finish to the skin', 'assets/images/compact.jpg', 800, 1, 24),
('face contour', 'Face contouring is a makeup technique used to define and enhance the natural structure of the face.', 'assets/images/contour.jpg', 1500, 1, 25),
('make up fixer', 'A makeup fixer, also known as a setting spray or setting powder, is a cosmetic product used to prolong the wear of makeup and keep it in place.', 'assets/images/makeup fixer.jfif', 1200, 1, 27),
('lipstick', 'royal lipstck', 'assets/images/1727624200_1727624078_1727624044_1727459373_lipstick.jpeg', 2000, 1, 52),
('eye shade', 'best eye shade', 'assets/images/1727624293_eyeshade.jfif', 4000, 1, 53);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `NAME`) VALUES
(1, 'admin'),
(2, 'receptionist'),
(3, 'stylist'),
(4, 'users');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(225) NOT NULL,
  `staff_role_id` int(11) DEFAULT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `shift` varchar(20) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `staff_role_id`, `contact_info`, `shift`, `staff_id`) VALUES
('Receptionist', 2, '33543546', 'full time', 1),
('Stylist', 3, '342343457', 'evening', 2),
('Makeup artist', 3, '343554676', 'night', 3),
('Hair expert', 3, '345346457', 'morning', 4),
('usersabc', 657657, '7657', 'jjhkgg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_role_id` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role_id`) VALUES
(1, 'Admin', 'Admin445@gmail.com', 'admin445', 1),
(6, 'sara khan', 'sarakhan534@gmail.com', 'sara', 2),
(11, 'usman khan ', 'usmankhan@gmail.com', 'usman', 3),
(13, 'Manahil', 'manahil@gmail.com', 'manahil123', 4),
(15, 'faryal', 'faryal@gmail.com', 'faryal123', NULL),
(20, 'ramsha', 'ramsha@gmail.com', 'ramsha123', NULL),
(23, 'Asma', 'asma@gmail.com', 'asma1213', NULL),
(25, 'zara', 'zara@gmail.com', 'zara123', NULL),
(27, 'sumaira', 'sumaira@gmail.com', '3', NULL),
(28, '', '', '', NULL),
(32, 'uswa yasir', 'uswayasir@gmail.com', 'uswa123', NULL),
(33, 'Zoha', 'Zoha@gmail.com', 'zoha123', NULL),
(35, 'sidra', 'sidra@gmail.com', 'sidra123', NULL),
(36, 'kashif', 'kashif@gmail.com', 'kasfif', NULL),
(40, 'sohail', 'sohail@gmail.com', 'sohail', NULL),
(41, 'jaffar', 'jaffar@gmail.com', 'jaffar', NULL),
(42, 'saima', 'saima@gmail.com', 'saima', NULL),
(43, 'sawera', 'sawera@gmail.com', 'sawera', NULL),
(44, 'ilma', 'ilma@gmail.com', 'ilma', NULL),
(45, 'umaima', 'umaima@gmail.com', 'umaima', NULL),
(46, 'ALISHA', 'alisha@gmail.com', 'alisha', NULL),
(47, 'rameen khan', 'rameen@gmail.com', 'rameen', NULL),
(50, 'eshal khan', 'eshalkhan@gmail.com', 'eshal', NULL),
(51, 'tuba ', 'tubakashif@gmail.com', 'tuba', NULL),
(53, 'stylist', 'stylist@gmail.com', 'stylist', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cate_name_unique` (`cate_name`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `order_user_id_fk` (`order_user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product-name` (`product_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `contact-info` (`contact_info`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_user_id`) REFERENCES `visitors` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
